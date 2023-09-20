      <!-- <div class="card w-100 h-100 position-absolute top-0" id="wpf-loader-two">
        <img class="w-25 m-auto" src="{{asset('front_assets\assests\images\preloader.gif')}}" alt="">
      </div> -->
      <a type="button" class="btn btn-info scrollToTop position-fixed"><i class="fas fa-arrow-up text-light"></i></a>
      <!-- === Header Starts=== -->
      <header>
        <nav class="navbar navbar-expand-lg bg-light px-lg-4 px-md-4 shadow-sm mb-3">
          <div class="container-fluid px-4">
            <a class="navbar-brand" data-bs-toggle="offcanvas" href="#leftMenu" role="button" aria-controls="offcanvasExample"><i class="fa fa-hamburger"></i></a>
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('front_assets/assests/images/logo.png')}}" width="120" alt=""></a>
            <!-- <button class="navbar-toggler d-lg-block d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
            @php
                    $getAddToCartTotalItem=getAddToCartTotalItem();
                    $totalCartItem=count($getAddToCartTotalItem);
                    $totalPrice=0;
                @endphp 
                <div class="dropstart d-lg-none">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute start-100 translate-middle badge rounded-pill bg-danger">
                      <small class="fs-sm aa-cart-notify">{{$totalCartItem}}</small>
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu cart-dropdown p-1 aa-cartbox-summary">
                    @if($totalCartItem>0)
                        <div class="card min-h-30 bg-transparent mb-5 p-2">
                        @foreach($getAddToCartTotalItem as $cartItem)

                        @php
                        $totalPrice=$totalPrice+($cartItem->qty*$cartItem->price)
                        @endphp
                            <div class="card mb-1 bg-prdct-card border border-dark p-2">
                                <div class="row">
                                    <div class="col-6">
                                        <img class="w-75 rounded" src="{{asset('storage/media/'.$cartItem->image)}}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <h6 class="mb-0 text-wraping"><a href="#">{{$cartItem->name}}</a></h6>
                                        <p class="mb-0 smaller"><b>Subtotal : </b> {{$cartItem->qty}} * Rs {{$cartItem->price}}</p>
                                        <p class="mb-0 smaller"><b>Total : </b>Rs {{$totalPrice}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="p-1">
                            <a class="btn btn-danger btn-sm position-absolute bottom-0 mb-2" href="{{url('cart')}}" style="width:94%">View Cart</a>
                        </div>
                        @else
                        <div class="text-center fw-bold mb-0 p-3 cart_empty_msg">
                          <p>Your Cart Is Empty <br><i class="fa fa-shopping-cart"></i></p>
                        </div>
                    @endif 
                  </ul>
                </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="w-50 ms-auto">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control rounded-pill-start" placeholder="search" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                  <span class="input-group-text rounded-pill-end" id="inputGroup-sizing-sm"><i class="fa fa-search"></i></span>
                </div>
              </div>
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link ac" aria-current="page" href="{{url('/about')}}">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{url('/bespoke')}}">Custom</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{url('/contact-us')}}">Contact</a>
                </li>
                <li class="nav-item ps-5">
                  <a class="nav-link position-relative" href="{{url('/')}}">
                    <i class="fa fa-home"></i>
                  </a>
                </li>
                @php
                    $getAddToCartTotalItem=getAddToCartTotalItem();
                    $totalCartItem=count($getAddToCartTotalItem);
                    $totalPrice=0;
                @endphp 
                <li class="nav-item dropstart ps-3">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="position-absolute start-100 translate-middle badge rounded-pill bg-danger">
                      <small class="fs-sm aa-cart-notify">{{$totalCartItem}}</small>
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </a>
                  <ul class="dropdown-menu cart-dropdown p-1 aa-cartbox-summary">
                    @if($totalCartItem>0)
                        <div class="card min-h-30 bg-transparent mb-5 p-2">
                        @foreach($getAddToCartTotalItem as $cartItem)

                        @php
                        $totalPrice=$totalPrice+($cartItem->qty*$cartItem->price)
                        @endphp
                            <div class="card mb-1 bg-prdct-card border border-dark p-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="w-75 rounded" src="{{asset('storage/media/'.$cartItem->image)}}" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="mb-0 text-wraping"><a href="#">{{$cartItem->name}}</a></h6>
                                        <p class="mb-0 smaller"><b>Subtotal : </b> {{$cartItem->qty}} * Rs {{$cartItem->price}}</p>
                                        <p class="mb-0 smaller"><b>Total : </b>Rs {{$totalPrice}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="p-1">
                            <a class="btn btn-danger btn-sm position-absolute bottom-0 mb-2" href="{{url('cart')}}" style="width:94%">View Cart</a>
                        </div>
                    @else
                    <div class="text-center fw-bold mb-0 p-3 cart_empty_msg">
                      <p>Your Cart Is Empty <br><i class="fa fa-shopping-cart"></i></p>
                    </div>
                    @endif 
                  </ul>
                </li>
                @if(session()->has('FRONT_USER_LOGIN')!=null)
                <li class="nav-item dropstart ps-3">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="{{url('/my-account')}}">My Account</a></li>
                    <li><a class="dropdown-item" href="{{url('/order')}}">My Orders</a></li>
                    <li><a class="dropdown-item" href="{{url('/logout')}}">Logout</a></li>
                  </ul>
                </li>
                @else
                <li class="nav-item dropstart ps-4 my-auto" id="login_button">
                  <a class="btn btn-danger btn-sm fs-p" aria-current="page" href="{{url('/login')}}">Login</a>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- === Header Ends=== -->