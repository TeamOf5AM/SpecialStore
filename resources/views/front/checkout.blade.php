@extends('front/layout')
@section('page_title','Checkout')
@section('container')

  <!-- === Breadcrum Section Starts=== -->
  <section class="mb-0">
    <div class="container-fluid px-lg-5 px-md-5 px-4">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item small"><a class="mclr" href="#">Home</a></li>
            <li class="breadcrumb-item active small" aria-current="page">Checkout</li>
        </ol>
        </nav>
    </div>
  </section>
  <!-- === Breadcrum Section Ends=== -->


<section>
  <div class="container-fluid px-lg-5 px-md-5 px-4">
    @if(session()->has('FRONT_USER_LOGIN')==null)
    <div class="row">
      <div class="col-md-12">
        <h5 class="fw-bold mb-0">Already Have And Account ?</h5>
        <p class="small mb-2"><a href="javascript:void(0)" class="text-primary text-transform-underline" data-toggle="modal" data-target="#login-modal">Login To Your Account</a> And Enjoy Easy Checkout</p>
        <span>Or</span>
        <span class="fs-5 fw-bold">Continue As a Guest</span>
      </div>
    </div>
    @endif
  </div>
</section>

<section id="checkout">
  <div class="container-fluid px-lg-4 px-md-2 px-4">
    <div class="card shadow-lg px-4 py-3 border border-danger border-2">
      <form id="frmPlaceOrder">
        @csrf
        <div class="card">
          <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <h5 class="mb-3">Enter Shipping Details</h5>
                  <div class="row p-1">
                    <div class="col-md-4 mb-3">
                      <div class="form-group mb-1">
                        <label for="" class="form-label small mb-1 fw-bold"> Enter Full Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder=" Name*" value="{{$customers['name']}}" name="name" required>
                      </div>                             
                    </div>
                    <div class="col-md-4">
                      <div class="form-group mb-1">
                        <label for="" class="form-label small mb-1 fw-bold"> Enter Email Address <span class="text-danger">*</span></label>
                        <input class="form-control" type="email" placeholder="Email Address*" value="{{$customers['email']}}" name="email" required>
                      </div>                             
                    </div>
                    <div class="col-md-4">
                      <div class="form-group mb-1">
                      <label for="" class="form-label small mb-1 fw-bold"> Enter Mobile Number <span class="text-danger">*</span></label>
                        <input class="form-control" type="tel" placeholder="Phone*" value="{{$customers['mobile']}}" name="mobile" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-3">
                      <label for="" class="form-label small mb-1 fw-bold"> Enter Address <span class="text-danger">*</span></label>
                        <textarea class="form-control" cols="8" rows="3" name="address" required placeholder="Enter Address*">{{$customers['address']}}</textarea>
                      </div>                             
                    </div>                            
                    <div class="col-md-4">
                      <div class="form-group mb-1">
                      <label for="" class="form-label small mb-1 fw-bold"> Enter City <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" placeholder="City / Town*" value="{{$customers['city']}}" name="city" required>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            <div class="col-md-4 ms-auto mt--10rem">
              <div class="card border p-2 border-danger red-shadow">
                <div class="card-header mb-3 bg-secondary border-0 rounded">
                  <h5 class="mb-0 text-light fw-bold">Order Summary</h5>
                </div>
                <table class="table table-responsive mb-0">
                    <thead>
                      <tr>
                        <th class="w-75">Product</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                </table>
                <div class="card-body p-0 cart-table-scroll mb-3">
                  <table class="table table-responsive mb-0 table-info">
                    <tbody>
                      @php
                      $totalPrice=0;
                      @endphp
                      @foreach($cart_data as $list)
      
                      @php 
                      $totalPrice=$totalPrice+($list->price*$list->qty)
                      @endphp
                      <tr>
                        <td class="w-75 small">{{$list->name}}  <strong class="text-secondary smaller"> x  {{$list->qty}}</strong>
                        <br/>
                        <span class="cart_color">{{$list->color}}</span>
                        </td>
                        <td class="small">INR {{$list->price*$list->qty}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <table class="table table-responsive">
                    <tfoot>
                      <tr class="hide show_coupon_box">
                        <th>Coupon Code <a class="text-danger text-decoration-none" href="javascript:void(0)" onclick="remove_coupon_code()" class="remove_coupon_code_link">Remove</a></th>
                        <td id="coupon_code_str"></td>
                      </tr>
                        <tr>
                        <th class="w-75">Total</th>
                        <td class="fw-bold text-danger" id="total_price">INR {{$totalPrice}}</td>
                      </tr>
                    </tfoot>
                </table>
                <div class="card px-2">
                  <h6 class="mb-2 fw-bold">Coupon Code</h6>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-sm" name="coupon_code" id="coupon_code" placeholder="Coupon Code" >
                    <button class="btn btn-outline-primary btn-sm" type="button"  onclick="applyCouponCode()"> Apply Coupon</button>
                  </div>
                  <div id="coupon_code_msg"></div>
                  <h6 class="mb-2 fw-bold">Payment Method</h6>
                  <div class="form-group">                    
                    <label class="form-check ps-0" for="instamojo">
                    <input type="radio" id="instamojo" name="payment_type" value="Gateway" checked><img width="40" class="ps-2" src="{{asset('front_assets\assests\images\p3.png')}}" alt=""> <img width="60" class="ps-2" src="{{asset('front_assets\assests\images\p2.png')}}" alt=""><img width="70" class="ps-2" src="{{asset('front_assets\assests\images\p6.png')}}" alt=""> <img width="90" class="ps-2" src="{{asset('front_assets\assests\images\p1.png')}}" alt=""> <img width="80" class="ps-2" src="{{asset('front_assets\assests\images\p4.png')}}" alt="">  <img width="70" class="ps-2" src="{{asset('front_assets\assests\images\p5.png')}}" alt=""> </label>
                    <label class="form-check ps-0 mb-3" for="cod"><input type="radio" id="cod" name="payment_type" value="COD" disabled> Cash on Delivery </label>
                    
                    <input type="submit" value="Place Order" class="btn btn-dark btn-sm w-100" id="btnPlaceOrder">                
                  </div>
                </div>

                <div id="order_place_msg"></div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

 
@endsection