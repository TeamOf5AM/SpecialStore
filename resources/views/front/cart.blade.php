@extends('front/layout')
@section('page_title','Cart Page')
@section('container')

      <!-- === Breadcrum Section Starts=== -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item small"><a class="mclr" href="#">Home</a></li>
                <li class="breadcrumb-item active small" aria-current="page">Shopping Cart</li>
            </ol>
            </nav>
        </div>
      </section>
      <!-- === Breadcrum Section Ends=== -->

      <!-- === Shopping Cart Section Starts=== -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4" style="height:70vh;">
            <h1 class="fw-bold text-center mb-4">Shopping Cart</h1>
            @if(isset($list[0]))
              <div class="card shadow-lg mb-5 p-3 text-center">
                <div class="row">
                  @foreach($list as $data)
                  <div class="{{ $loop->count = 1 ? 'col-md-12':'col-md-6'}} mb-3" id="cart_box{{$data->attr_id}}">
                    <div class="card bg-prdct-card p-2 text-start">
                      <div class="row">
                        <div class="{{ $loop->count = 1 ? 'col-md-2':'col-md-3'}} col-5">
                          <img class="w-100" src="{{asset('public/storage/media/'.$data->image)}}" alt="">
                        </div>
                        <div class="col-lg-6 mx-auto col-7">
                          <h6 class="fw-bold small mb-0">{{$data->name}}</h6>
                          @if($data->size!='')
                              <span class="mb-0 small">
                                SIZE: {{$data->size}}
                                @endif
                                @if($data->color!='')
                              </span>
                              <span class="mb-0 smaller">
                                COLOR: {{$data->color}}
                              </span>
                              <span class="float-end">
                              <a class="text-danger" href="javascript:void(0)" onclick="deleteCartProduct('{{$data->pid}}','{{$data->size}}','{{$data->color}}','{{$data->attr_id}}')"><fa class="fa fa-trash"></fa></a>
                              </span>
                              @endif
                              <div class="qty-container my-2">
                                <button class="qty-btn-minus btn-danger btn-cornered mr-1" type="button"><i class="fa fa-arrow-left"></i></button>
                                <input type="text" id="qty{{$data->attr_id}}" value="{{$data->qty}}" name="qty" value="0" class="input-qty input-cornered" onchange="updateQty('{{$data->pid}}','{{$data->size}}','{{$data->color}}','{{$data->attr_id}}','{{$data->price}}')" />
                                  <button class="qty-btn-plus btn-danger btn-cornered ml-1" type="button"><i class="fa fa-arrow-right"></i></button>
                              </div>
                              <p class="small fw-bold mb-0" id="total_price_{{$data->attr_id}}">Rs {{$data->price*$data->qty}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                    @endforeach
                </div>
              </div>
            @else
            <div class="card shadow-lg p-3 text-center cart_empty_msg" id="cart_empty_msg">
              <!-- <h3>Cart empty <br><i class="fa fa-shopping-cart"></i></h3> -->
            </div>
            @endif
        </div>
        @if(isset($list[0]))
            <div class="card shadow-lg position-sticky bottom-0 p-3 text-lg-center">
                <div class="row">
                    <div class="col-md-4 col-6 mb-4 mt-3">
                        <h6 class="mb-0 fw-bold">Total Items : <span class="text-danger">10</span></h6>
                    </div>
                    <div class="col-md-4 col-6 mb-4 mt-3">
                        <h6 class="mb-0 fw-bold">Total Amount : <span class="text-danger">2039</span></h6>
                    </div>
                    <div class="col-md-4">
                        <a href="{{url('checkout')}}" class="btn btn-danger rounded-0 w-100 py-2">Checkout</a>
                    </div>
                </div>
            </div>
        @endif
      </section>
      <!-- <div class="card shadow-lg position-sticky w-100 bottom-0 p-4 text-lg-center">
        <div class="row">
            <div class="col-md-4 col-6 mb-4 my-auto">
                <h6 class="mb-0 fw-bold">Total Items : <span class="text-danger">10</span></h6>
            </div>
            <div class="col-md-4 col-6 mb-4 my-auto">
                <h6 class="mb-0 fw-bold">Total Amount : <span class="text-danger">2039</span></h6>
            </div>
            <div class="col-md-4">
                <a href="{{url('checkout')}}" class="btn btn-danger rounded-0 w-100 py-2">Checkout</a>
            </div>
        </div>
    </div> -->
      <!-- === Shopping Cart Section Ends=== -->      
 
 <input type="hidden" id="qty" value="1"/>
  <form id="frmAddToCart">
    <input type="hidden" id="size_id" name="size_id"/>
    <input type="hidden" id="color_id" name="color_id"/>
    <input type="hidden" id="pqty" name="pqty"/>
    <input type="hidden" id="product_id" name="product_id"/>           
    @csrf
  </form>  
@endsection