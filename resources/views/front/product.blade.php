@extends('front/layout')
@section('page_title',$product[0]->name)
@section('container')

      <!-- === Breadcrum Section Starts=== -->
      <section class="mb-0">
        <div class="container-fluid px-lg-5 px-md-5 px-4">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item small"><a class="mclr" href="#">Home</a></li>
                <li class="breadcrumb-item active small" aria-current="page">{{$product[0]->name}}</li>
            </ol>
            </nav>
        </div>
      </section>
      <!-- === Breadcrum Section Ends=== -->

      <!-- === Product Dettailed Section Starts === -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4 mb-5">
            <div class="row">
                <div class="col-md-5 mb-3">
                    <div class="position-sticky top-0">
                      <div class="product-main h-27rem">
                        @if(isset($product_images[$product[0]->id][0]))
                        @foreach($product_images[$product[0]->id] as $list)
                          <div class="p-lg-4 py-4">
                              <div class="card px-lg-3">
                                <img class="w-100 rounded" src="{{asset('storage/media/'.$list->images)}}" alt="">
                              </div>
                          </div>
                          @endforeach
                          @endif
                      </div>
                      <div class="product-sub">
                        @if(isset($product_images[$product[0]->id][0]))
                        @foreach($product_images[$product[0]->id] as $list)
                          <div>
                              <div class="card px-lg-3">
                              <img class="pb-2 w-75" src="{{asset('storage/media/'.$list->images)}}" alt="">
                              </div>
                          </div>
                        @endforeach
                        @endif
                      </div>
                    </div>
                </div>
                <div class="col-md-7 ps-lg-5 mx-lg-auto">
                    <div class="card ps-lg-4">
                        <p class="text-uppercase mb-lg-1 mb-0 small text-success fw-bold">BESTSELLER</p>
                        <h3 class="fw-bold">{{$product[0]->name}}</h3>
                        <span class="small">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <i class="fas fa-circle text-secondary px-2 fs-sm"></i>
                            3.5
                            <i class="fas fa-circle text-secondary px-2 fs-sm"></i>
                            1 Review
                        </span>
                        <hr class="my-2">
                        <!-- <span class="fs-5 mb-3">
                            <i class="fas fa-rectangle-landscape text-warning"></i>
                            <i class="fas fa-rectangle-landscape text-primary"></i>
                            <i class="fas fa-rectangle-landscape text-info"></i>
                            <i class="fas fa-rectangle-landscape text-black"></i>
                            <i class="fas fa-rectangle-landscape text-danger"></i>
                            <i class="fas fa-rectangle-landscape text-secondary"></i>
                        </span> -->
                        <div class="row">
                          <div class="col-lg-2 col-4 my-auto"><p class="fw-bold fs-6">Quantity :</p></div>
                          <div class="col-lg-4 col-8">             
                            <form class="mb-4" action="">
                              <input class="form-control form-control-sm h-50" type="number" id="qty" name="qty" min="1" max="5" value="1">
                            </form>
                          </div>
                        </div>
                        <h6 class="fw-bold"><del
                        class="fs-6 text-secondary">Rs {{$product_attr[$product[0]->id][0]->mrp}}</del> Special Price : <span class="text-danger">Rs {{$product_attr[$product[0]->id][0]->price}}</span></h6>
                        <p class="mb-0 small">Avilability: <span class="text-success smaller">In stock</span>@if($product[0]->lead_time!='')<span
                        class="float-end pe-lg-4">Estimated Delivery : <span
                        class="text-secondary smaller">{{$product[0]->lead_time}}</span></span> @endif</p>
                        <p class="mb-2">Model: <a class="mclr fw-bold" href="#">{{$product[0]->model}}</a></p>
                        <!-- === Description Starts=== -->
                        <h5 class="fw-bold">Description</h5>
                        <hr class="border-secondary">
                        <p class="mb-1">{!!$product[0]->short_desc!!}</p>
                        <h5 class="fw-bold">Product Info</h5>
                        <hr class="border-secondary">
                        <p class="mb-lg-4 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut accusantium sed amet neque voluptatem excepturi, ipsa ipsum ducimus deserunt illum velit impedit illo placeat veniam nihil! Facere quis labore illum?</p>
                        <!-- === Description Ends=== -->
                        <div class="row">
                            <div class="col-6">
                                <button class="btn py-2 btn-outline-dark rounded-0 w-100" href="{{url('/checkout')}}" onclick="add_to_cart('{{$product[0]->id}}','1','1')">Customize</button>
                            </div>
                            <div class="col-6">
                                <button class="btn py-2 btn-danger rounded-0 w-100" onclick="add_to_cart('{{$product[0]->id}}','1','1')">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- === Product Dettailed Section Ends === -->

      <!-- === Product Description/Review Section Starts=== -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <ul class="nav nav-pills mx-auto" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link bg-outline-primary text-dark w-100 rounded-0 active " id="pills-home-tab"
                  data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab"
                  aria-controls="pills-home" aria-selected="true">Description</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link bg-outline-primary w-100 text-dark rounded-0" id="pills-specifications-tab"
                  data-bs-toggle="pill" data-bs-target="#pills-specifications" type="button" role="tab"
                  aria-controls="pills-specifications" aria-selected="false">Specifications</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link bg-outline-primary w-100 text-dark rounded-0" id="pills-uses-tab"
                  data-bs-toggle="pill" data-bs-target="#pills-uses" type="button" role="tab" aria-controls="pills-uses"
                  aria-selected="false">Uses</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link bg-outline-primary w-100 text-dark rounded-0" id="pills-wrranty-tab"
                  data-bs-toggle="pill" data-bs-target="#pills-wrranty" type="button" role="tab" aria-controls="pills-wrranty"
                  aria-selected="false">Warranty</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link bg-outline-primary w-100 text-dark rounded-0" id="pills-reviews-tab"
                  data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews"
                  aria-selected="false">Reviews</button>
              </li>
          </ul>
          <hr>
          <div class="tab-content mb-5" id="pills-tabContent">
            <div class="tab-pane fade show active " id="pills-description" role="tabpanel"
              aria-labelledby="pills-description-tab">
              <div id="popup_login" class="">
                <h4 class="fw-bold  text-uppercase mb-5">Description</h4>
                <p>{!!$product[0]->desc!!}</p>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-specifications" role="tabpanel" aria-labelledby="pills-specifications-tab">
              <h4 class="fw-bold text-uppercase mb-5">Specifications</h4>
              <p>{!!$product[0]->technical_specification!!}</p>
            </div>
            <div class="tab-pane fade" id="pills-uses" role="tabpanel" aria-labelledby="pills-uses-tab">
              <h4 class="fw-bold text-uppercase mb-2">Uses</h4>
              <p>{!!$product[0]->uses!!}</p>
            </div>
            <div class="tab-pane fade" id="pills-wrranty" role="tabpanel" aria-labelledby="pills-wrranty-tab">
              <h4 class="fw-bold text-uppercase mb-2">Warranty</h4>
              <p>{!!$product[0]->warranty!!}</p>
            </div>
            <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
              <h4 class="fw-bold text-uppercase mb-2">Reviews</h4>
              @if(isset($product_review[0]))
              <h4>
                @php
                echo count($product_review);
                @endphp
                Review(s) for {{$product[0]->name}}</h4>
              <ul class="list-group">
                @foreach($product_review as $list)
                <li>
                  <div class="media">
                    <div class="media-body">
                      <h4 class="media-heading"><strong>{{$list->name}}</strong> -
                        <span>{{getCustomDate($list->added_on)}}</span></h4>
                      <div class="aa-product-rating">
                        <span class="rating_txt">{{$list->rating}}</span>
                      </div>
                      <p>{{$list->review}}</p>
                    </div>
                  </div>
                </li>
                @endforeach
              </ul>
              @else
              <p>No review found</p>
              @endif
              <form id="frmProductReview">
                <h5 class="fw-bold">Add a review</h5>
                <div class="aa-your-rating">
                  <p>Enter Your Rating</p>
                  <select class="form-control mb-3" name="rating" required>
                    <option value="">Select Rating</option>
                    <option>Worst</option>
                    <option>Bad</option>
                    <option>Good</option>
                    <option>Very Good</option>
                    <option>Fantastic</option>
                  </select>
                </div>
                <!-- review form -->

                <div class="form-group mb-4">
                  <label class="form-label" for="message">Your Review</label>
                  <textarea class="form-control" rows="3" name="review" required></textarea>
                </div>

                <button type="submit" class="btn btn-darkgreen">Submit your review</button>
                <input type="hidden" name="product_id" value="{{$product[0]->id}}" />
                @csrf
              </form>
              <div class="review_msg"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- === Description/Review Section Ends=== -->

      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <h4 class="section-heading fw-bold mb-0">Related Products</h4>
          <div class="card-slider">
            @if(isset($related_product[0]))
            @foreach($related_product as $productArr)
            <div style="width: 17rem;" class="pe-4">
              <div class="card border border-secondary">
                <img class="w-100 rounded" src="{{asset('storage/media/'.$productArr->image)}}" alt="" style="height:40vh;">
                <div class="card-body px-1 py-2">
                  <a class="mclr" href="{{url('product/'.$productArr->slug)}}">
                    <p class="mb-0 small text-wraping">{{$productArr->name}}</p>
                  </a>
                  <p class="mb-0 small text-danger">Rs {{$related_product_attr[$productArr->id][0]->price}}
                  <span class="text-end"><i onclick="home_add_to_cart('{{$productArr->id}}','{{$related_product_attr[$productArr->id][0]->size}}','{{$related_product_attr[$productArr->id][0]->color}}')" class="far fa-plus-circle fs-5 w-50"></i></span></p>
                  <p class="mb-0 smaller">3.5 <i class="fas fa-star"></i> <span>(8)</span> <span class="badge bg-success">Best Seller</span></p>
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
      </section>

<form id="frmAddToCart">
  <input type="hidden" id="size_id" name="size_id" value="1" />
  <input type="hidden" id="color_id" name="color_id" value="1" />
  <input type="hidden" id="pqty" name="pqty" />
  <input type="hidden" id="product_id" name="product_id" />
  @csrf
</form>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11" id="add_to_cart_msg"></div>

@endsection