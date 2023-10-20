@extends('front/layout')
@section('page_title','Category')
@section('container')

      <!-- === Breadcrum Section Starts=== -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item small"><a class="mclr" href="#">Home</a></li>
              <li class="breadcrumb-item active small" aria-current="page">Category Name</li>
            </ol>
          </nav>
        </div>
      </section>
      <!-- === Breadcrum Section Ends=== -->

      <!-- === About Us Section Starts=== -->
      <Section>
          <div class="container-fluid px-lg-5 px-md-5 px-4">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <img class="w-100 rounded" src="https://res.cloudinary.com/interflora/f_auto,q_auto,t_pnopt32prodlp/banners/bespoke_hampers_d_interflora_banner_20230427.jpg" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <img class="w-100 rounded" src="https://res.cloudinary.com/interflora/f_auto,q_auto,t_pnopt32prodlp/banners/bespoke_hampers_d_interflora_banner_20230427.jpg" alt="">
                    </div>
                </div>
            </div>
          </div>
      </Section>
      <!-- === About Us Section Ends=== -->

      <!-- === Heading Section Starts=== -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <div class="row">
            <div class="col-md-6">
              <h4 class="fs-1 fw-bold">Personalized Gifts <sup class="fs-6 text-secondary">234 items</sup></h4>
            </div>
            <div class="col-md-2 ms-auto my-auto">
               <select class="form-select form-select-sm" name="" onchange="sort_by()" id="sort_by_value">
                  <option value="" selected="Default">{{$sort_txt != null ? $sort_txt : 'Default'}}</option>
                  <option value="name">Name</option>
                  <option value="price_desc">Price - Desc</option>
                  <option value="price_asc">Price - Asc</option>
                  <option value="date">Date</option>
               </select>
            </div>
          </div>
        </div>
      </section>
      <!-- === Heading Section Ends=== -->

         <!-- === All Products Section Ends=== -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
         <div class="row">
            <div class="col-md-2 pt-1 position-sticky top-0  border-end d-lg-block d-none h-100">
               <div class="col-12 mb-2">
                  <h6 class="fw-bold"><i class="fal fa-filter"></i> Filters</h6>
                  <hr class="mb-2">
                  <ul class="list-group">
                     @foreach($categories_left as $cat_left)
                     @if($slug==$cat_left->category_slug)
                     <li class="list-group-item border border-1 border-dark p-1 rounded small"><a class="text-danger text-decoration-none fw-normal" href="{{url('category/'.$cat_left->category_slug)}}" class="left_cat_active">{{$cat_left->category_name}}</a></li>
                     @else
                     <li class="list-group-item border-0 p-1 small"><a class="mclr fw-normal" href="{{url('category/'.$cat_left->category_slug)}}">{{$cat_left->category_name}}</a></li>
                     @endif
                     @endforeach
                  </ul>
               </div>
               <div class="col-12">
                  <h6 class="fw-bold"><i class="far fa-money-bill-alt"></i> Shop by Price</h6>
                  <hr class="mb-2">
                  <div class="row">
                     <div class="col-md-6 mb-3 col-6">
                        <a class="btn btn-outline-dark  btn-sm" href="?sort=&filter_price_start=10&filter_price_end=200&color_filter="><small class="small">100 - 100</small></a>
                     </div>
                     <div class="col-md-6 mb-3 col-6">
                        <a class="btn btn-outline-dark  btn-sm" href="?sort=&filter_price_start=10&filter_price_end=200&color_filter="><small class="small">100 - 500</small></a>
                     </div>
                     <div class="col-md-6 mb-3 col-6">
                        <a class="btn btn-outline-dark  btn-sm" href="?sort=&filter_price_start=10&filter_price_end=200&color_filter="><small class="small">100 - 100</small></a>
                     </div>
                     <div class="col-md-6 mb-3 col-6">
                        <a class="btn btn-outline-dark  btn-sm" href="?sort=&filter_price_start=10&filter_price_end=200&color_filter="><small class="small">100 - 500</small></a>
                     </div>
                     <div class="col-md-6 mb-3 col-6">
                        <a class="btn btn-outline-dark  btn-sm" href="?sort=&filter_price_start=10&filter_price_end=200&color_filter="><small class="small">100 - 100</small></a>
                     </div>
                     <div class="col-md-6 mb-3 col-6">
                        <a class="btn btn-outline-dark  btn-sm" href="?sort=&filter_price_start=10&filter_price_end=200&color_filter="><small class="small">100 - 500</small></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-10">
               <div class="row">
                  @if(isset($product[0]))
                  @foreach($product as $productArr)
                 <div class="col-lg-3 col-md-4 col-6 mb-3">
                   <div class="card border border-secondary p-2 bg-prdct-card">
                     <img class="w-100 rounded" src="{{asset('public/storage/media/'.$productArr->image)}}" alt="">
                     <div class="card-body px-1 py-2">
                       <p class="mb-0 small text-wraping"><a href="{{url('product/'.$productArr->slug)}}">{{$productArr->name}}</a></p>
                       <p class="mb-0 small text-danger">Rs {{$product_attr[$productArr->id][0]->price}}
                        <span class="text-end"><i onclick="home_add_to_cart('{{$productArr->id}}','{{$product_attr[$productArr->id][0]->size}}','{{$product_attr[$productArr->id][0]->color}}')" class="far fa-plus-circle fs-5 float-end"></i></span></p>
                       <p class="mb-0 smaller">3.5 <i class="fas fa-star"></i> <span>(8)</span> <span class="badge bg-success">Best Seller</span></p>
                     </div>
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
      <!-- === All Products Section Ends=== -->


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