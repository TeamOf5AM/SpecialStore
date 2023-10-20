@extends('front/layout')
@section('page_title','Order Detail')
@section('container')

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->         

  <section id="cart-view" class="my-5">
   <div class="container card shadow-lg">
     <div class="row p-5">
      <div class="col-md-6 mb-4">
        <div class="order_detail">
            <h3 class="fw-bold">Details Address</h3>
            <p class="mb-1 text-uppercase"><span class="fw-bold">Customer Name : </span> {{$orders_details[0]->name}}</p>
            <p class="mb-1 text-uppercase"><span class="fw-bold">Address : </span>{{$orders_details[0]->address}}</p>
            <p class="mb-1 text-uppercase"><span class="fw-bold">City : </span>{{$orders_details[0]->city}}</p>
            <p class="mb-1 text-uppercase"><span class="fw-bold">State : </span>{{$orders_details[0]->state}}</p>
            <p class="mb-1 text-uppercase"><span class="fw-bold">Pincode : </span>{{$orders_details[0]->pincode}}</p>
          </div> 
      </div>
      <div class="col-md-6">
          <div class="order_detail">
            <h3 class="fw-bold">Order Details</h3>
            <p class="mb-1 text-uppercase"><span class="fw-bold">Order Status : </span> {{$orders_details[0]->orders_status}}</p>
            <p class="mb-1 text-uppercase"><span class="fw-bold">Payment Status : </span>{{$orders_details[0]->payment_status}}</p>
            <p class="mb-1 text-uppercase"><span class="fw-bold"> Payment Type : </span>{{$orders_details[0]->payment_type}}</p>
            <?php
              if($orders_details[0]->payment_id!=''){
                ?>
                <p class="mb-1 text-uppercase"><span class="fw-bold">Payment ID : <?php echo $orders_details[0]->payment_id ?> </span>
              <?php
              }
             ?></p>
          </div>
          <b>Track Details</b><br/>
          {{$orders_details[0]->track_details}} 
      </div>
     

        <div class="col-md-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="w-25">Product</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Qty</th>
                  <th>Total</th>
                  <th>Order Date</th>
                </tr>
              </thead>
              <tbody>
                @php 
                $totalAmt=0;
                @endphp
                @foreach($orders_details as $list)
                @php 
                $totalAmt=$totalAmt+($list->price*$list->qty);
                @endphp
                <tr>
                  <td class="fw-normal">{{$list->pname}}</td>
                  <td><img class="mx-auto" src='{{asset('public/storage/media/'.$list->attr_image)}}'/ width="70px;"></td>
                  <td>Rs {{$list->price}}</td>
                  <td>{{$list->qty}}</td>
                  <td>Rs {{$list->price*$list->qty}}</td>
                  <td>{{$list->added_on}}</td>
                </tr>
                @endforeach
                <tr>
                  <td colspan="3">&nbsp;</td>
                  <td><b>Total</b></td>
                  <td><b>Rs {{$totalAmt}}</b></td>
                </tr>
                <?php
                if($orders_details[0]->coupon_value>0){
                  echo '<tr>
                    <td colspan="5">&nbsp;</td>
                    <td><b>Coupon <span class="coupon_apply_txt">('.$orders_details[0]->coupon_code.')</span></b></td>
                    <td>'.$orders_details[0]->coupon_value.'</td>
                  </tr>';
                  $totalAmt=$totalAmt-$orders_details[0]->coupon_value;
                  echo '<tr>
                    <td colspan="5">&nbsp;</td>
                    <td><b>Final Total</b></td>
                    <td>'.$totalAmt.'</td>
                  </tr>';
                }
                
                
                ?>
              </tbody>
            </table>
         </div>
       </div>
     </div>
   </div>
 </section> 
@endsection