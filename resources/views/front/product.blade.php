@extends('front/layout')
@section('page_title',$product[0]->name)
@section('container')

<style>
  #ul ul {
    padding-left: 17px;
    font-size: 1rem;
  }
</style>

<!-- product category -->
<section id="aa-product-details">
  <div class="container-fluid my-5">
    <div class="row">
      <div class="col-md-5 px-5">
        <div id="demo-1" class="simpleLens-gallery-container">
          <div class="col-12 px-4 pb-3">
            <div class="card py-3 border border-dark border-2">
              <div class="simpleLens-container">
                <div class="simpleLens-big-image-container"><a
                    data-lens-image="{{asset('storage/media/'.$product[0]->image)}}"
                    class="simpleLens-lens-image w-100"><img src="{{asset('storage/media/'.$product[0]->image)}}"
                      class="simpleLens-big-image"></a></div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="simpleLens-thumbnails-container mx-auto">
              <a data-big-image="{{asset('storage/media/'.$product[0]->image)}}"
                data-lens-image="{{asset('storage/media/'.$product[0]->image)}}" class="simpleLens-thumbnail-wrapper"
                href="#"><img src="{{asset('storage/media/'.$product[0]->image)}}" class="border p-2 border-dark"
                  width="100px">
              </a>

              @if(isset($product_images[$product[0]->id][0]))

              @foreach($product_images[$product[0]->id] as $list)

              <a data-big-image="{{asset('storage/media/'.$list->images)}}"
                data-lens-image="{{asset('storage/media/'.$list->images)}}" class="simpleLens-thumbnail-wrapper"
                href="#">
                <img src="{{asset('storage/media/'.$list->images)}}" class="border border-dark p-2" width="100px">
              </a>

              @endforeach

              @endif

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="card">
          <p class="fs-2 fw-bold letter-spacing-sm text-uppercase mb-0">{{$product[0]->name}}</p>
          <p class="fs-2 text-danger mb-0">Rs {{$product_attr[$product[0]->id][0]->price}} <del
              class="fs-5 text-dark">Rs {{$product_attr[$product[0]->id][0]->mrp}}</del></p>
          <p class="mb-0">Avilability: <span class="text-success">In stock</span>@if($product[0]->lead_time!='')<span
              class="float-end pe-lg-4">Estimated Delivery : <span
                class="text-primary">{{$product[0]->lead_time}}</span></span> @endif</p>
          <p class="mb-2">Model: <a class="mclr fw-bold" href="#">{{$product[0]->model}}</a></p>
          <p class="mb-1 fs-4 fw-bold">Product Description</p>
          <div id="ul">
            {!!$product[0]->short_desc!!}
          </div>
          <div class="row">
            <div class="col-2 my-auto"><p class="fw-bold fs-6">Quantity :</p></div>
            <div class="col-4">             
              <form class="mb-4" action="">
                <input class="form-control form-control-sm border-dark" type="number" id="qty" name="qty" min="1" max="5" value="1">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <a class="btn btn-darkgreen btn-lg w-100" href="javascript:void(0)"
                onclick="add_to_cart('{{$product[0]->id}}','1','1')">Add To Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <ul class="nav nav-pills mb-3 mx-auto" id="pills-tab" role="tablist">
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
  </div>
  <div class="container">
  </div>
</section>
<section>
  <div class="container-fluid mb-4">
    <h2 class="display-5 text-center fw-bold mb-5">Our Featured Solar Products</h2>
    <div class="slick">
      @if(isset($related_product[0]))
      @foreach($related_product as $productArr)
      <div>
        <div class="card p-4">
          <img class="mb-3" src="{{asset('storage/media/'.$productArr->image)}}" alt="" width="100%" height="300px;">
          <a class="mclr mb-3" href="{{url('product/'.$productArr->slug)}}">
            <p class="mb-1 fs-6 fw-bolder">{{$productArr->name}}</p>
          </a>
          <p class="mb-2 fs-5">Price : Rs {{$related_product_attr[$productArr->id][0]->price}}<del
              class="float-end text-danger">Rs {{$related_product_attr[$productArr->id][0]->mrp}}</del></p>
          <a class="btn btn-primary" href="{{url('product/'.$productArr->slug)}}"><span
              class="fa fa-shopping-cart pe-2"></span>Add To Cart</a>
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