@extends('front/layout')
@section('page_title','Cart Page')
@section('container')


<section id="cart-view">
  <div class="container my-5">
    <p class="fs-1 mb-5 fw-bold text-center">My Cart</p>
    <div class="row">
    <form action="">
    @if(isset($list[0]))
      <table class="table mb-5">
        <thead>
          <tr>
            <th class="text-center">S.no</th>
            <th class="text-center">Product</th>
            <th class="text-center">Description</th>
            <th class="text-center">Price</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">Total</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($list as $data)
          <tr id="cart_box{{$data->attr_id}}">
            <td class="text-center text-primary">1</td>
            <td class="text-center" style="width:100px;"><a href="{{url('product/'.$data->slug)}}"><img class="w-100" src="{{asset('storage/media/'.$data->image)}}" alt="img"></a></td>
            <td class="text-center">
              <a class="mclr" href="{{url('product/'.$data->slug)}}">{{$data->name}}</a>
              @if($data->size!='')
              <p>
                SIZE: {{$data->size}}
                @endif
                @if($data->color!='')
              <span class="ps-3">
                COLOR: {{$data->color}}
              </span>
                </p>
                        @endif
            </td>
            <td class="text-center">Rs {{$data->price}}</td>
            <td class="text-center"><input id="qty{{$data->attr_id}}" class="aa-cart-quantity" type="number" value="{{$data->qty}}" onchange="updateQty('{{$data->pid}}','{{$data->size}}','{{$data->color}}','{{$data->attr_id}}','{{$data->price}}')"></td>
            <td class="text-center"><h6 id="total_price_{{$data->attr_id}}">Rs {{$data->price*$data->qty}}</h6></td>
            <td class="text-center"><a class="text-danger" href="javascript:void(0)" onclick="deleteCartProduct('{{$data->pid}}','{{$data->size}}','{{$data->color}}','{{$data->attr_id}}')"><fa class="fa fa-close"></fa></a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <a href="{{url('/checkout')}}"><input class="btn btn-primary rounded-0 w-25 py-2 float-end" type="button" value="Checkout"></a>
      @else
      <h3>Cart empty</h3>
      @endif  
    </form>
    </div>
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
 
 <input type="hidden" id="qty" value="1"/>
  <form id="frmAddToCart">
    <input type="hidden" id="size_id" name="size_id"/>
    <input type="hidden" id="color_id" name="color_id"/>
    <input type="hidden" id="pqty" name="pqty"/>
    <input type="hidden" id="product_id" name="product_id"/>           
    @csrf
  </form>  
@endsection