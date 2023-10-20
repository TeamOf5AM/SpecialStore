<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>@yield('page_title')</title>
    <link href="{{asset('front_assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('front_assets/css/bootstrap.css')}}" rel="stylesheet">    -->
    <!-- <link href="{{asset('front_assets/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/jquery.simpleLens.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front_assets/css/nouislider.css')}}">
    <link id="switcher" href="{{asset('front_assets/css/theme-color/default-theme.css')}}" rel="stylesheet">
    <link href="{{asset('front_assets/css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">
    <!-- <link href="{{asset('front_assets/css/style.css')}}" rel="stylesheet">     -->
    <link href="{{asset('front_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">    
    <link href="{{asset('front_assets/css/styling.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <script>
    var PRODUCT_IMAGE="{{asset('public/storage/media/')}}";
    </script>

  </head>
  <body class="productPage" style="overflow-x:hidden;"> 
   <!-- wpf loader Two -->
    <!-- <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>  -->
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

<!-- SolarThemeStarts -->
    <!-- header -->
    <div class="col-12 d-lg-block d-none bg-primary">
        <div class="row">
            <div class="col-10 mx-auto">
                <ul class="list-group list-group-horizontal row">
                    <li class="list-group-item bg-transparent text-light text-end border-0 fs-5 col-lg-3 col-5">Customer Care : 7065712271 </li>
                    <li class="list-group-item bg-transparent text-light text-end border-0 fs-5 col-lg-4 col-5">WhatsApp Number : <a class="text-light text-decoration-none" href="https://wa.me/+917065712271">+91 7065712271</a></li>
                    <li class="list-group-item bg-transparent text-light text-start border-0 fs-5 col-md-5">Mail us :@dkssolarsolutions@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg position-sticky top-0 navbar-dark bg-darkgreen" style="z-index:99;">
        <div class="container-fluid">
        <a class="navbar-brand text-uppercase fs-5 fw-bolder" href="{{url('/')}}">DKS Solar Solutions</a>
        <!-- <a class="navbar-brand" href="#"><img src="imgs/Logo.jpeg" alt="" style="width:100px;height:70px;"></a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item px-2">
                <a class="nav-link text-light text-uppercase fw-bold" aria-current="page" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-light text-uppercase fw-bold" aria-current="page" href="{{url('/category/solar-pv-panel')}}">Solar pv panel</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-light text-uppercase fw-bold" aria-current="page" href="{{url('category/solar-ups-&-inverter')}}">Solar Ups</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-light text-uppercase fw-bold" aria-current="page" href="{{url('category/solar-package')}}">Solar Packages</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-light text-uppercase fw-bold" aria-current="page" href="{{url('/solar-calculator')}}">Solar Calculator</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-light text-uppercase fw-bold" aria-current="page" href="{{url('/contact-us')}}">Contact us</a>
            </li>
        </ul>
        @if(session()->has('FRONT_USER_LOGIN')!=null)
            <div class="dropdown">
              <button class="btn btn-outline-light btn-sm text-uppercase dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              {{session()->get('FRONT_USER_NAME')}}
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{url('/order')}}">My Order</a></li>
                <li><a class="dropdown-item" href="{{url('/logout')}}">Logout</a></li>
              </ul>
            </div>
            @else
            <a class="btn btn-primary btn-sm text-light" aria-current="page" href="{{url('/login')}}">Login / Signup</a>
            @endif
            <a class="nav-link text-light" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#search"><i class="fas fa-search"></i></a>
            @php
              $getAddToCartTotalItem=getAddToCartTotalItem();
              $totalCartItem=count($getAddToCartTotalItem);
              $totalPrice=0;
              @endphp 
            <a class="nav-link text-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-current="page"><i class="fas fa-shopping-bag"></i><span class="ps-2 aa-cart-notify">{{$totalCartItem}}</span></a>
        <!-- <form class="d-flex">
            <input class="form-control me-2 border-0 border-bottom bg-transparent rounded-0" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
        </div>
    </nav>
    <!-- End header -->

    <div class="position-absolute end-0 p-5" id="drops" style="display:none;">
       <div class="card bg-dark text-light">
       @if($totalCartItem>0)
                  @foreach($getAddToCartTotalItem as $cartItem)

                  @php
                  $totalPrice=$totalPrice+($cartItem->qty*$cartItem->price)
                  @endphp
                  <h4><a href="#">{{$cartItem->name}}</a></h4>
                        <p>{{$cartItem->qty}} * Rs {{$cartItem->price}}</p>
                  Rs {{$totalPrice}}
                  @endforeach   
        @endif 
       </div>
    </div>
  
  @section('container')
  @show      

      <!-- End section6 -->
    <hr>
    <footer>
        <section>
            <div class="container-fluid px-5">
                <div class="row py-5">
                    <div class="col-md-3">
                        <ul class="list-group mb-4">
                            <li class="list-group-item border-0 p-0 pb-2">Address SF-06, Alpha Plaza , Alpha 1, Greater Noida 201310</li>
                            <li class="list-group-item border-0 p-0 fw-bold pb-2">Phone: <span class="fw-normal"><a class="mclr" href="https://wa.me/+917065712271">+91 7065712271</a></li>
                            <li class="list-group-item border-0 p-0 fw-bold">Email: <span class="fw-normal"><a class="mclr" href="mailto:dkssolarsolutions@gmail.com">dkssolarsolutions@gmail.com</a></span></li>
                        </ul>
                        <li class="list-group-item border-0 p-0 fw-bold">Connect With Us @Dks Solar</li>
                            <ul class="list-group border-0 list-group-horizontal">
                                <a href="http://www.facebook.com/solardks">
                                  <li class="list-group-item fs-6 ps-0 border-0"><i class="fab fa-facebook-f text-primary"></i></li>
                                </a>
                                <a href="http://www.instagram.com/solardks">
                                  <li class="list-group-item fs-6 ps-0 border-0"><i class="fab fa-instagram text-danger"></i></li>
                                </a>
                             </ul>
                        
                    </div>
                    <div class="col-md-2 col-6">
                        <ul class="list-group mb-4">
                            <li class="list-group-item border-0 p-0 pb-2 fw-bold">COMPANY</li>
                            <li class="list-group-item border-0 p-0"><a class="mclr w--current" href="/">Home</a></li>
                            <li class="list-group-item border-0 p-0"><a class="mclr" href="/about">About us</a></li>
                            <li class="list-group-item border-0 p-0"><a class="mclr" href="/services">Services</a></li>
                            <li class="list-group-item border-0 p-0"><a class="mclr" href="/contact-us">Get in touch</a></li>
                            <li class="list-group-item border-0 p-0"><a class="mclr" href="/projects">Projects</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-6">
                        <ul class="list-group mb-4">
                            <li class="list-group-item border-0 p-0 pb-2 fw-bold">QUICK SHOP</li>
                            {!! getTopNavCat() !!}  
                                                </ul>
                    </div>
                    <div class="col-md-2 col-6">
                        <ul class="list-group mb-4">
                            <li class="list-group-item border-0 p-0 pb-2 fw-bold">HAVE A QUESTION ?</li>
                            <li class="list-group-item border-0 p-0"><a class="mclr" href="/faq">Faq</a></li>
                            <li class="list-group-item border-0 p-0"><a class="mclr" href="/privacy">Privacy Policy</a></li>
                            <li class="list-group-item border-0 p-0"><a class="mclr" href="/privacy">Terms and conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6">
                        <ul class="list-group mb-4">
                            <li class="list-group-item border-0 p-0 fw-bold">NewsLetter</li>
                            <p class="mb-1">Join our emailing list to get latest updates on offers, new launches and more.</p>
                            <input type="text" class="border-dark mb-2 form-control bg-transparent">
                            <a class="btn btn-dark btn-sm w-50">SUBSCRIBE</a>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <hr class="text-dark">
        <section>
            <div class="col-11 text-center mx-auto">
                <p class="mb-1">© 2022 All Rights Reserved || DKS Solar Solutions || Design & Develop by Mayank Sabharwal</p>
            </div>
        </section>
    </footer>
    <!-- End main content -->
<!-- SolarThemeEnds --> 


<!-- search modal -->
<div class="modal fade" id="search" tabindex="-1" aria-labelledby="searchLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="searchLabel">Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="search" class="form-label">Search Products</label>
          <input type="text" id="prod_search" class="form-control mb-1 border-dark" name="prod_search" placeholder="Try searching solar" onkeyup=prod_search(this.value);>
          <table class="table table-bordered">
            <thead>
              <tr>
                <td><small>Your best Search</small></td>
              </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /search modal -->

<!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button> -->
@php
$getAddToCartTotalItem=getAddToCartTotalItem();
$totalCartItem=count($getAddToCartTotalItem);
$totalPrice=0;
@endphp 
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel" class="fw-bold fs-2 mt-3"> My Cart</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  
  <div class="offcanvas-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th><small>Product</small></th>
          <th><small>Product Name</small></th>
          <th><small>Qty</small></th>
          <th><small>Price</small></th>
        </tr>
      </thead>
      <tbody class="aa-cartbox-summary">
      @if($totalCartItem>0)
                  @foreach($getAddToCartTotalItem as $cartItem)

                  @php
                  $totalPrice=$totalPrice+($cartItem->qty*$cartItem->price)
                  @endphp
        <tr>
          <td class="text-center"><img src="{{asset('public/storage/media/'.$cartItem->image)}}" alt="" style="width:40px;"></td>
          <td class="text-center"><small class="x-small">{{$cartItem->name}}</small></td>
          <td class="text-center"><small class="x-small">1<small></td>
          <td class="text-center"><small class="x-small">Rs {{$totalPrice}}<small></td>
        </tr>
        @endforeach   
        <!-- {{$cartItem->qty}} * Rs {{$cartItem->price}} -->
        @endif
      </tbody>
    </table>
  </div>
</div>
<div class="card m-auto rounded-circle shadow-lg position-fixed" onmouseover="show()" onmouseout="show1()" style="width:60px;height:60px;background-color:#6465FB !important;right:30px;bottom:110px;">
  <p class="m-auto"><i class="fas fa-phone-alt text-light fs-3"></i></p>
</div>
<div id="me" class="card position-fixed rounded-pill" style="width:150px;height:35px;background-color:#6465FB !important;right:80px;bottom:120px;display:none;">
  <p class="mclr p-1 fs-5 ps-4" href="" style="color:white !important;">7065712271</p>
</div>
<div id="me1" class="card position-fixed rounded-pill" style="width:150px;height:35px;background-color:green !important;right:80px;bottom:40px;display:none;">
  <p class="mclr p-1 fs-5 ps-4" href="" style="color:white !important;">7065712271</p>
</div>
<div class="card rounded-circle shadow-lg position-fixed " onmouseover="show2()" onmouseout="show3()" style="width:60px;height:60px;background-color:green !important;right:30px;bottom:30px;">
  <p class="m-auto"><i class="fab fa-whatsapp text-light fs-3"></i></p>
</div>



  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{asset('front_assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.0/js.cookie.js"></script>
  <script>
  $(document).ready(function(){
              setTimeout(function(){
              if(!Cookies.get('modalShown')) {
                $("#newsletter").modal('show');
                Cookies.set('modalShown', true);
              } else {
                
              }
                
      },1000);
  });
  </script>

  <!-- <script type="text/javascript" src="{{asset('front_assets/js/jquery.smartmenus.js')}}"></script> -->
  <!-- <script type="text/javascript" src="{{asset('front_assets/js/jquery.smartmenus.bootstrap.js')}}"></script>   -->

  <script type="text/javascript" src="{{asset('front_assets/js/slick.js')}}"></script>
  <script src="{{asset('front_assets/js/custom.js')}}"></script> 
  <!-- <script src="{{asset('front_assets/jquery/dist/jquery.min.js')}}"></script> -->
  <script src="{{asset('front_assets/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
  <script>
    function drops(){
      $("#drops").css("display", "block");
    }
        
  </script>
  <script>
$('.slick').slick({
  infinite: false,
  speed: 300,
  arrows: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>
  <script>
$('.slick2').slick({
  infinite: true,
  speed: 300,
  arrows:false,
  autoplay: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script>

<script>
 function show(){
  // alert("1");
  $("#me").css("display","block");
 }
 function show1(){
  // alert("1");
  $("#me").css("display","none");
 }
 function show2(){
  // alert("1");
  $("#me1").css("display","block");
 }
 function show3(){
  // alert("1");
  $("#me1").css("display","none");
 }
</script>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="{{asset('front_assets/js/jquery.simpleGallery.js')}}"></script>
  <script type="text/javascript" src="{{asset('front_assets/js/jquery.simpleLens.js')}}"></script>


  </body>
</html>