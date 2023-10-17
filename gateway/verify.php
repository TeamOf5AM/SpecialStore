<?php
error_reporting(0);
session_start();
$conn =mysqli_connect("localhost","u356194640_special_store","#SpecialStore@123","u356194640_special_store");
$keyId = 'rzp_test_WqNbgfqWewc0Kd';
$keySecret = 'BwyHE9Zqt0zuvtxq7yFav6G4';
$displayCurrency = 'INR';

//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors


require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
             $update =mysqli_query($conn,"Update online_transaction set status='1' where razorpayid='".$_SESSION['razorpay_order_id']."'");

            // header('location:https://thedevy.com/payment_success/'.$_SESSION['razorpay_order_id']);
            header('location:https://ssuat.specialstore.in/order_placed');
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
