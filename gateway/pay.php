<?php
error_reporting(0);


$conn =mysqli_connect("localhost","u356194640_special_store","#SpecialStore@123","u356194640_special_store");
$str = $_SERVER['REQUEST_URI'];
preg_match_all('!\d+!', $str, $matches);
$orderid = $matches[0][0];
$getOrder = mysqli_query($conn,"Select o.id,name,email,mobile,total_amt,coupon_value from orders as o 
LEFT JOIN orders_details as d on d.orders_id=o.id
where o.id='".$orderid."' group by o.id");
$fetchOrder = mysqli_fetch_assoc($getOrder);

$total_amount= $fetchOrder['total_amt']-$fetchOrder['coupon_value'];

$keyId = 'rzp_test_WqNbgfqWewc0Kd';
$keySecret = 'BwyHE9Zqt0zuvtxq7yFav6G4';
$displayCurrency = 'INR';

//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors


require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => $fetchOrder['id'],
    'amount'          => $total_amount* 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);


$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}
$insert = mysqli_query($conn,"INSERT into online_transaction Values(0,'".$orderid."','".$razorpayOrderId."','".$fetchOrder['total_amt']."','0',now(),'')");
$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "Special Store",
    "description"       => "DKS SOLAR",
    "image"             => "https://ssuat.specialstore.in/front_assets/assests/images/logo.png",
    "prefill"           => [
    "name"              => $fetchOrder['name'],
    "email"             => $fetchOrder['email'],
    "contact"           => $fetchOrder['mobile'],
    ],
    "notes"             => [
    "address"           => "",
    "merchant_order_id" => $orderid,
    ],
    "theme"             => [
    "color"             => "#006634"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");
?>
<style>
.razorpay-payment-button{
	display:none;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$('.razorpay-payment-button').trigger("click");
});
</script>
