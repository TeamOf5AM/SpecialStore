@extends('front/layout')
@section('page_title','Home Page')
@section('container')


<!-- main content -->
<!-- slider -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($home_banner as $list)
    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
      <img src="{{asset('storage/media/banner/'.$list->image)}}" class="d-block w-100" alt="...">
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--/ slider -->
<!-- section1 -->
<div class="container-fluid my-lg-3">
  <h4 class="text-center fw-bold d-lg-none my-3">Our Solar Collections</h4>
  <div class="row">
    @foreach($home_categories as $list)
    <div class="col-md-2 col-4 mb-3">
      <div class="card shadow-sm">
        <img class="mx-auto" src="{{asset('storage/media/category/'.$list->category_image)}}" alt="" width="80%;">
        <div class="card-footer px-0 text-center bg-transparent border-0">
          <small class="text-uppercase mb-0 fs-6"><a class="mclr fw-bold fs-small"
              href="{{url('category/'.$list->category_slug)}}">{{$list->category_name}}</a></small>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<!-- End section1 -->
<!-- section5 -->
<div class="container-fluid mb-lg-5 my-4">
  <p class="display-5 text-center fw-bold mb-lg-5"><span class="fs-small-heading">Our Featured Solar Products</span></p>
  <div class="slick">
    @if(isset($home_tranding_product[$list->id][0]))
    @foreach($home_tranding_product[$list->id] as $productArr)
    <div>
      <div class="card px-5 p-4 px-lg-3" style="height: 48vh;">
        <img class="mb-3 border border-dark" src="{{asset('storage/media/'.$productArr->image)}}" alt="" width="100%">
        <a class="mclr mb-3" href="{{url('product/'.$productArr->slug)}}">
          <p class="mb-1 fs-6 fw-bolder">{{$productArr->name}}</p>
        </a>
      </div>
      <div class="card px-3">
        <p class="mb-3">Price : Rs {{$home_tranding_product_attr[$productArr->id][0]->price}}<del
            class="float-end text-danger">Rs {{$home_product_attr[$productArr->id][0]->mrp}}</del></p>
        <a class="btn btn-primary py-2 rounded-0"
          onclick="home_add_to_cart('{{$productArr->id}}','{{$home_product_attr[$productArr->id][0]->size}}','{{$home_product_attr[$productArr->id][0]->color}}')">
          Add To Cart</a>
      </div>
    </div>
    @endforeach
    @endif
  </div>
</div>
<!-- End section5 -->
<!-- section2 -->
<div class="container my-lg-5">
  <p class="display-5 text-center fw-bold mb-lg-3"><span class="fs-small-heading">Why to buy from us ?</span></p>
  <div class="card shadow-lg border-3 border-success">
    <div class="row">
      <div class="col-md-4 mb-3 ">
        <div class="card p-4 border-lg-0 border-0 rounded-0 border-end">
          <div class="card-body bg-transparent">
            <h4 class="mb-3 fw-bold">Modern Customized Solutions</h4>
            <p>We provide our customers modern solutions shadow analytics 3D layout software based design we also
              provide custom systems to you so that you pay only for what you want.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3 ">
        <div class="card p-4 border-lg-0 border-0 rounded-0 border-end">
          <div class="card-body bg-transparent">
            <h4 class="mb-3 fw-bold">Modern Customized Solutions</h4>
            <p>We provide our customers modern solutions shadow analytics 3D layout software based design we also
              provide custom systems to you so that you pay only for what you want.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3 ">
        <div class="card p-4 border-0 rounded-0 border-end">
          <div class="card-body bg-transparent">
            <h4 class="mb-3 fw-bold">Modern Customized Solutions</h4>
            <p>We provide our customers modern solutions shadow analytics 3D layout software based design we also
              provide custom systems to you so that you pay only for what you want.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End section2 -->


<!-- section5 -->
<div class="container-fluid mb-lg-4">
  <p class="display-5 text-center fw-bold mb-lg-5"><span class="fs-small-heading">Our Best Seller Solar Products</span>
  </p>
  <div class="slick">
    @if(isset($home_featured_product[$list->id][0]))
    @foreach($home_featured_product[$list->id] as $productArr)
    <div>
      <div class="card px-5 p-4 px-lg-3" style="height: 48vh;">
        <img class="mb-3" src="{{asset('storage/media/'.$productArr->image)}}" alt="" width="100%">
        <a class="mclr mb-3" href="{{url('product/'.$productArr->slug)}}">
          <p class="mb-1 fs-6 fw-bolder">{{$productArr->name}}</p>
        </a>
      </div>
      <div class="card px-3">
        <p class="mb-3">Price : Rs {{$home_featured_product_attr[$productArr->id][0]->price}} <del
            class="float-end text-danger">Rs {{$home_product_attr[$productArr->id][0]->mrp}}</del></p>
        <a class="btn btn-primary py-2 rounded-0"
          onclick="home_add_to_cart('{{$productArr->id}}','{{$home_product_attr[$productArr->id][0]->size}}','{{$home_product_attr[$productArr->id][0]->color}}')">
          Add To Cart</a>
      </div>
    </div>
    @endforeach
    @endif
  </div>
</div>
<!-- End section5 -->

<!-- section3 -->
<div class="container-fluid p-0 bg-lightgreen py-lg-5 py-2">
  <div class="container my-5">
    <div class="col-11 mx-auto">
      <div class="row mb-4">
        <div class="col-md-6">
          <div class="card bg-transparent align-items-center p-2 border-0">
            <img src="{{asset('front_assets/img/pwm20.png')}}" alt="" width="90%">
          </div>
        </div>
        <div class="col-md-6 mt-lg-2">
          <div class="card bg-transparent border-0">
            <h1 class="fw-bolder text-lg-start text-center display-5 mb-1">Solar Systems</h1>
            <h5 class="fw-bold text-lg-start text-center mb-4">with Battery (PWM Based)</h5>
            <p class="mb-lg-5 text-lg-start text-center text-wrap">If your area is troubled with frequent power cuts,
              it's time you invest in off-grid PWM Based solar system. It is a cost effective solution that lets you
              save extra solar energy in batteries to use during power cuts.</p>
            <div class="text-lg-start text-center">
              <a  href="{{url('/category/solar-package')}}" class="btn btn-primary py-2 col-4 rounded-0">View Products</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-8 mx-auto">
        <div class="row">
          <div class="col-md-3 col-6">
            <div class="card shadow-lg">
              <img src="https://dummyimage.com/600x450/033/ffffff.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="card shadow-lg">
              <img src="https://dummyimage.com/600x450/033/ffffff.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="card shadow-lg">
              <img src="https://dummyimage.com/600x450/033/ffffff.png" alt="">
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="card shadow-lg">
              <img src="https://dummyimage.com/600x450/033/ffffff.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End section3 -->
<!-- section4 -->
<div class="container my-5">
  <h2 class="display-5 text-center fw-bold mb-5"><span class="fs-small-heading">Why to move to solar ?</span></h2>
  <div class="row">
    <div class="col-md-3">
      <div class="row">
        <div class="card text-center mb-2 col-lg-12 col-6">
          <img class="rounded-circle mb-4 mx-auto" src="https://dummyimage.com/300x300/002/ffffff.png" alt=""
            style="width: 100px ;height:100px;">
          <h3 class="fw-bold text-primary mb-0 mb-lg-1"><span class="fs-small-md">24*7 Support</span></h3>
          <h5><span class="fs-small-sm">INSTANT MAINTENANCE</span></h5>
        </div>
        <div class="card text-center mb-2 col-lg-12 col-6">
          <img class="rounded-circle mb-4 mx-auto" src="https://dummyimage.com/300x300/002/ffffff.png" alt=""
            style="width: 100px ;height:100px;">
          <h3 class="fw-bold text-primary mb-0 mb-lg-1"><span class="fs-small-md">24*7 Support</span></h3>
          <h5><span class="fs-small-sm">INSTANT MAINTENANCE</span></h5>
        </div>
        <div class="card text-center mb-2 col-lg-12 col-6">
          <img class="rounded-circle mb-4 mx-auto" src="https://dummyimage.com/300x300/002/ffffff.png" alt=""
            style="width: 100px ;height:100px;">
          <h3 class="fw-bold text-primary mb-0 mb-lg-1"><span class="fs-small-md">24*7 Support</span></h3>
          <h5><span class="fs-small-sm">INSTANT MAINTENANCE</span></h5>
        </div>
        <div class="card text-center mb-2 col-lg-12  d-lg-none col-6">
          <img class="rounded-circle mb-4 mx-auto" src="https://dummyimage.com/300x300/002/ffffff.png" alt=""
            style="width: 100px ;height:100px;">
          <h3 class="fw-bold text-primary mb-0 mb-lg-1"><span class="fs-small-md">24*7 Support</span></h3>
          <h5><span class="fs-small-sm">INSTANT MAINTENANCE</span></h5>
        </div>
        <div class="card text-center mb-2 col-lg-12 d-lg-none  col-6">
          <img class="rounded-circle mb-4 mx-auto" src="https://dummyimage.com/300x300/002/ffffff.png" alt=""
            style="width: 100px ;height:100px;">
          <h3 class="fw-bold text-primary mb-0 mb-lg-1"><span class="fs-small-md">24*7 Support</span></h3>
          <h5><span class="fs-small-sm">INSTANT MAINTENANCE</span></h5>
        </div>
        <div class="card text-center mb-2 col-lg-12 d-lg-none  col-6">
          <img class="rounded-circle mb-4 mx-auto" src="https://dummyimage.com/300x300/002/ffffff.png" alt=""
            style="width: 100px ;height:100px;">
          <h3 class="fw-bold text-primary mb-0 mb-lg-1"><span class="fs-small-md">24*7 Support</span></h3>
          <h5><span class="fs-small-sm">INSTANT MAINTENANCE</span></h5>
        </div>
      </div>
    </div>
    <div class="col-md-6 my-auto">
      <img src="https://www.omsolar.in/wp-content/uploads/2021/09/216228-Converted.png" alt="">
    </div>
    <div class="col-md-3 d-lg-block d-none">
      <div class="card text-center mb-2">
        <img class="rounded-circle mb-4 mx-auto" src="https://dummyimage.com/300x300/002/ffffff.png" alt=""
          style="width: 100px ;height:100px;">
        <h3 class="fw-bold text-primary">24*7 Support</h3>
        <h5><span class="fs-small-sm">INSTANT MAINTENANCE</span></h5>
      </div>
      <div class="card text-center mb-2">
        <img class="rounded-circle mb-4 mx-auto" src="https://dummyimage.com/300x300/002/ffffff.png" alt=""
          style="width: 100px ;height:100px;">
        <h3 class="fw-bold text-primary">24*7 Support</h3>
        <h5>INSTANT MAINTENANCE</h5>
      </div>
      <div class="card text-center mb-2">
        <img class="rounded-circle mb-4 mx-auto" src="https://dummyimage.com/300x300/002/ffffff.png" alt=""
          style="width: 100px ;height:100px;">
        <h3 class="fw-bold text-primary">24*7 Support</h3>
        <h5>INSTANT MAINTENANCE</h5>
      </div>
    </div>
  </div>
</div>
<!-- End section4 -->

<!-- section6 -->
<div class="container-fluid mb-4">
  <h2 class="display-5 text-center fw-bold mb-lg-5"> <span class="fs-small-heading">Our Featured Solar Products</span>
  </h2>
  <div class="slick">
    @if(isset($home_discounted_product[$list->id][0]))
    @foreach($home_discounted_product[$list->id] as $productArr)
    <div>
      <div class="card px-5 p-4 px-lg-3" style="height:48vh;">
        <img class="mb-3" src="{{asset('storage/media/'.$productArr->image)}}" alt="" width="100%">
        <a class="mclr mb-3" href="{{url('product/'.$productArr->slug)}}">
          <p class="mb-1 fs-6 fw-bolder">{{$productArr->name}}</p>
        </a>
      </div>
      <div class="card px-3">
        <p class="mb-3">Price : Rs {{$home_discounted_product_attr[$productArr->id][0]->price}}<del
            class="float-end text-danger">Rs {{$home_product_attr[$productArr->id][0]->mrp}}</del></p>
        <a class="btn btn-primary py-2 rounded-0"
          onclick="home_add_to_cart('{{$productArr->id}}','{{$home_product_attr[$productArr->id][0]->size}}','{{$home_product_attr[$productArr->id][0]->color}}')">
          Add To Cart</a>
      </div>
    </div>
    @endforeach
    @endif
  </div>
</div>
<!-- End section6 -->

<!-- Modal -->

<!-- Modal -->
<div class="modal fade " id="newsletter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content p-4 py-5" style="background-color:#e6ffe6;">
      <div class="modal-header border-0 p-0 px-3">
        <h5 class="modal-title fw-bold fs-4 text-uppercase" id="exampleModalLabel" style="letter-spacing:5px;">Know Your Best Solar Fitting</h5>
        <button type="button" class="btn-close" id="close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body border-0 p-0 px-3">
        <p class="mb-1">Connect with our team today by calling us at : <a class="text-primary text-decoration-none" href="https://wa.me/+917065712271">+91 7065712271</a></p>
        <p class="fw-bold fs-5">or our team will connect just fill the form.</p>
        <hr>
              <form action="{{url('/contact_form')}}" method="post">
                  @csrf
                  <div class="row my-2">
                    <div class="form-group mb-1 col-md-6">
                        <label for="" class="form-label fw-bold">Enter Full Name</label>
                        <input type="text" name="name" class="p-0 form-control rounded-0 mb-4 bg-transparent border-0 border-bottom border-dark" placeholder="ABC" required>
                    </div>
                    <div class="form-group mb-1 col-md-6">
                        <label for="" class="form-label fw-bold">Enter Email</label>
                        <input type="email" name="email" class="p-0 form-control rounded-0 mb-4 bg-transparent border-0 border-bottom border-dark" placeholder="abc@gmail.com" required>
                    </div>
                    <div class="form-group mb-1 col-md-12">
                        <label for="" class="form-label fw-bold">Enter Phone Number</label>
                        <input type="text" name="phone" class="p-0 form-control rounded-0 mb-4 bg-transparent border-0 border-bottom border-dark" placeholder="9876543210" required>
                    </div>
                    <div class="form-group mb-1 col-md-12">
                        <label for="" class="form-label fw-bold">Enter Your City</label>
                        <input type="text" class="p-0 form-control rounded-0 mb-4 bg-transparent border-0 border-bottom border-dark" name="comment" placeholder="This is my query" required>
                    </div>
                  </div>
                  <button class="btn btn-primary rounded-0 w-100 py-2">Submit</button>
              </form>
              <input type="hidden" id="contact-form-msg" value="{!! \Session::get('success') !!}">
      </div>
    </div>
  </div>
</div>



<input type="hidden" id="qty" value="1" />
<form id="frmAddToCart">
  <input type="hidden" id="size_id" name="size_id" />
  <input type="hidden" id="color_id" name="color_id" />
  <input type="hidden" id="pqty" name="pqty" />
  <input type="hidden" id="product_id" name="product_id" />
  @csrf
</form>
@endsection