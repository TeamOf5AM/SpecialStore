@extends('front/layout')
@section('page_title','Category')
@section('container')


<section>
   <div class="container-fluid px-4 my-5">
      <div class="row">
         <div class="col-md-3 position-sticky top-0  border-end d-lg-block d-none h-100">
            <div class="col-12 mb-4">
               <h3 class="fw-bold">Category</h3>
               <hr class="mb-3">
               <ul class="list-group">
                  @foreach($categories_left as $cat_left)
                  @if($slug==$cat_left->category_slug)
                  <li class="list-group-item border rounded-0 fs-5 bg-primary"><a class="text-light text-decoration-none fw-normal" href="{{url('category/'.$cat_left->category_slug)}}" class="left_cat_active">{{$cat_left->category_name}}</a></li>
                  @else
                  <li class="list-group-item fs-5"><a class="mclr fw-normal" href="{{url('category/'.$cat_left->category_slug)}}">{{$cat_left->category_name}}</a></li>
                  @endif
                  @endforeach
               </ul>
            </div>
            <div class="col-12">
               <h3 class="fw-bold">Shop by Price</h3>
               <hr class="mb-3">
               <div class="row">
                  <div class="col-md-4 mb-3 col-4">
                     <a class="btn btn-darkgreen btn-sm w-100" href="?sort=&filter_price_start=10&filter_price_end=200&color_filter="><small class="x-small">100 - 1000</small></a>
                  </div>
                  <div class="col-md-4 mb-3 col-4">
                     <a class="btn btn-darkgreen btn-sm w-100" href="?sort=&filter_price_start=1000&filter_price_end=5000&color_filter="><small class="x-small">1000 - 5000</small></a>
                  </div>
                  <div class="col-md-4 mb-3 col-4">
                     <a class="btn btn-darkgreen btn-sm w-100" href="?sort=&filter_price_start=5000&filter_price_end=10000&color_filter="><small class="x-small">5000 - 10,000</small></a>
                  </div>
                  <div class="col-md-4 mb-3 col-4">
                     <a class="btn btn-darkgreen btn-sm w-100" href="?sort=&filter_price_start=10000&filter_price_end=15000&color_filter="><small class="x-small">10,000 - 15,000</small></a>
                  </div>
                  <div class="col-md-4 mb-3 col-4">
                     <a class="btn btn-darkgreen btn-sm w-100" href="?sort=&filter_price_start=15000&filter_price_end=20000&color_filter="><small class="x-small">15,000 - 20,000</small></a>
                  </div>
                  <div class="col-md-4 mb-3 col-4">
                     <a class="btn btn-darkgreen btn-sm w-100" href="?sort=&filter_price_start=20000&filter_price_end=25000&color_filter="><small class="x-small">20,000 - 25,000</small></a>
                  </div>
                  <div class="col-md-4 mb-3 col-4">
                     <a class="btn btn-darkgreen btn-sm w-100" href="?sort=&filter_price_start=25000&filter_price_end=30000&color_filter="><small class="x-small">25,000 - 30,000</small></a>
                  </div>
                  <div class="col-md-4 mb-3 col-4">
                     <a class="btn btn-darkgreen btn-sm w-100" href="?sort=&filter_price_start=30000&filter_price_end=40000&color_filter="><small class="x-small">30,000 - 40,000</small></a>
                  </div>
                  <div class="col-md-4 mb-3 col-4">
                     <a class="btn btn-danger btn-sm w-100" href="?sort=&filter_price_start=&filter_price_end=&color_filter="><small class="x-small">Remove Filter</small></a>
                  </div>
               </div>
            </div>
            <div class="col-12">
            <h3 class="fw-bold">Shop By Watt</h3>
            <hr>
                  <div class="aa-color-tag">
                     @foreach($colors as $color)

                     @if(in_array($color->id,$colorFilterArr))
                        <a class="btn btn-darkgreen btn-sm" href="javascript:void(0)" onclick="setColor('{{$color->id}}','1')">{{strtolower($color->color)}}</a>
                     @else
                        <a class="btn btn-outline-success btn-sm" href="javascript:void(0)" onclick="setColor('{{$color->id}}','0')">{{strtolower($color->color)}}</a>
                     @endif


                     @endforeach
                  </div>
            </div>
         </div>
         <div class="col-md-9">
            <div class="row">
               <div class="col-lg-4 col-6 ms-auto order-lg-1">
                  <form action="" class="aa-sort-form">
                  <div class="input-group mb-3">
                     <span class="input-group-text bg-primary btn-sm" id="basic-addon1">Sort By</span>
                     <select class="form-select form-select-sm" name="" onchange="sort_by()" id="sort_by_value">
                        <option value="" selected="Default">{{$sort_txt != null ? $sort_txt : 'Default'}}</option>
                        <option value="name">Name</option>
                        <option value="price_desc">Price - Desc</option>
                        <option value="price_asc">Price - Asc</option>
                        <option value="date">Date</option>
                     </select>
                  </div>
                  </form>
               </div>
                     <div class="col-lg-8">
                        @foreach($categories_left as $cat_left)
                        @if($slug==$cat_left->category_slug)
                        <h1 class="ps-lg-4 text-uppercase text-lg-start text-center fw-bolder mb-lg-1"><span class="fs-small-heading">{{$cat_left->category_name}}</span></h1>
                        @endif
                        @endforeach
                     </div>
                  </div>
                  <div class="row">                         
                  @if(isset($product[0]))
                  @foreach($product as $productArr)
                     <div class="col-md-4 mb-4 col-6">
                        <div class="card p-lg-3" style="height:55vh;">
                           <a href="{{url('product/'.$productArr->slug)}}"><img class="w-100 border border-dark mb-3" src="{{asset('storage/media/'.$productArr->image)}}" alt=""></a>
                           <p class="fs-5 mb-lg-1 mb-0 fw-bold"><a class="mclr" href="{{url('product/'.$productArr->slug)}}"><span class="fs-small-md">{{$productArr->name}}</span></a></p>
                        </div>
                        <div class="card px-lg-3">
                           <p class="fs-5 mb-lg-3 mb-0"><span class="fs-small-md">Rs {{$product_attr[$productArr->id][0]->price}}</span> <span class="ps-2 fs-small-sm text-danger"><del>Rs {{$product_attr[$productArr->id][0]->mrp}}</del></span></p>
                           <a class="btn btn-primary w-100 rounded-0" href="javascript:void(0)" onclick="home_add_to_cart('{{$productArr->id}}','{{$product_attr[$productArr->id][0]->size}}','{{$product_attr[$productArr->id][0]->color}}')">Add To Cart</a>
                        </div>
                     </div>
                  @endforeach    
                  @else
                     <h1>No Details Found</h1>
                  @endif
            </div>
         </div>
      </div>
   </div>
</section>


<input type="hidden" id="qty" value="1"/>
  <form id="frmAddToCart">
    <input type="hidden" id="size_id" name="size_id"/>
    <input type="hidden" id="color_id" name="color_id"/>
    <input type="hidden" id="pqty" name="pqty"/>
    <input type="hidden" id="product_id" name="product_id"/>           
    @csrf
  </form>  

  <form id="categoryFilter">
    <input type="hidden" id="sort" name="sort" value="{{$sort}}"/>
    <input type="hidden" id="filter_price_start" name="filter_price_start" value="{{$filter_price_start}}"/>
    <input type="hidden" id="filter_price_end" name="filter_price_end" value="{{$filter_price_end}}"/>
    <input type="hidden" id="color_filter" name="color_filter" value="{{$color_filter}}"/>
  </form> 
@endsection