@extends('front/layout')
@section('page_title','Checkout')
@section('container')



<!-- checkout Page -->
<section id="checkout">
  <div class="container-fluid px-5 my-5">
    <form id="frmPlaceOrder">
      <div class="row">
        <div class="col-md-8">
          @if(session()->has('FRONT_USER_LOGIN')==null)
          <input type="button" value="Login To Your Account" class="btn btn-primary rounded-0 mb-4" data-toggle="modal" data-target="#login-modal">  
          <p>Or <span class="fs-5 fw-bold ps-2"> Continue As a Guest</span></p>
          @endif
          <p class="fs-3 bg-primary px-3 p-1">Enter Shipping Details</p>
          <div class="row p-1">
            <div class="col-md-4 mb-3">
              <div class="form-group mb-3">
                <label for="" class="form-label fw-bold"> Enter Full Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" placeholder=" Name*" value="{{$customers['name']}}" name="name" required>
              </div>                             
            </div>
            <div class="col-md-4">
              <div class="form-group mb-3">
                <label for="" class="form-label fw-bold"> Enter Email Address <span class="text-danger">*</span></label>
                <input class="form-control" type="email" placeholder="Email Address*" value="{{$customers['email']}}" name="email" required>
              </div>                             
            </div>
            <div class="col-md-4">
              <div class="form-group mb-3">
              <label for="" class="form-label fw-bold"> Enter Mobile Number <span class="text-danger">*</span></label>
                <input class="form-control" type="tel" placeholder="Phone*" value="{{$customers['mobile']}}" name="mobile" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mb-3">
              <label for="" class="form-label fw-bold"> Enter Address <span class="text-danger">*</span></label>
                <textarea class="form-control" cols="8" rows="3" name="address" required placeholder="Enter Address*">{{$customers['address']}}</textarea>
              </div>                             
            </div>                            
            <div class="col-md-4">
              <div class="form-group mb-3">
              <label for="" class="form-label fw-bold"> Enter City <span class="text-danger">*</span></label>
                <input class="form-control" type="text" placeholder="City / Town*" value="{{$customers['city']}}" name="city" required>
              </div>
            </div>
          </div> 
        </div>
        <div class="col-md-4">
          <div class="card p-4 shadow-lg">
            <div class="card-header mb-4 bg-primary">
              <h4 class="mb-0">Order Summary</h4>
            </div>
            <table class="table table-responsive mb-3">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                @php
                $totalPrice=0;
                @endphp
                @foreach($cart_data as $list)

                @php 
                $totalPrice=$totalPrice+($list->price*$list->qty)
                @endphp

                <tr>
                  <td>{{$list->name}}  <strong> x  {{$list->qty}}</strong>
                  <br/>
                  <span class="cart_color">{{$list->color}}</span>
                  </td>
                  <td>{{$list->price*$list->qty}}</td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr class="hide show_coupon_box">
                  <th>Coupon Code <a class="text-danger text-decoration-none" href="javascript:void(0)" onclick="remove_coupon_code()" class="remove_coupon_code_link">Remove</a></th>
                  <td id="coupon_code_str"></td>
                </tr>
                  <tr>
                  <th>Total</th>
                  <td id="total_price">INR {{$totalPrice}}</td>
                </tr>
              </tfoot>
            </table>
              <h4 class="mb-2 fw-bold">Coupon Code</h4>
              <div class="input-group mb-3">
                <input type="text" class="form-control form-control-sm" name="coupon_code" id="coupon_code" placeholder="Coupon Code" >
                <button class="btn btn-outline-primary btn-sm" type="button"  onclick="applyCouponCode()"> Apply Coupon</button>
              </div>
              <div id="coupon_code_msg"></div>           
            <h4 class="mb-2 fw-bold">Payment Method</h4>
            <div class="form-group">                    
              <label class="form-check" for="cod"><input type="radio" id="cod" name="payment_type" value="COD" checked> Cash on Delivery </label>
              <label class="form-check" for="instamojo">
              <input type="radio" class="mb-3" id="instamojo" name="payment_type" value="Gateway"> Via Instamojo </label>
              
              <input type="submit" value="Place Order" class="btn btn-darkgreen py-2 w-100" id="btnPlaceOrder">                
            </div>

            <div id="order_place_msg"></div>
          </div>
        </div>
        @csrf  
      </div>
    </form>
  </div>
</section>

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
  <div class="aa-catg-head-banner-area">
    <div class="container">
    
    </div>
  </div>
</section>
<!-- / catg header banner section -->         


 
@endsection