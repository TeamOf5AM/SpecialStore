<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Special Store | Gift For Some One Very Special</title>
    <link rel="icon" type="image/x-icon" href="{{asset('front_assets/assests/images/favicon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{asset('front_assets/assests/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('front_assets/assests/css/slick.css')}}"/>
    <script src="{{asset('front_assets/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <!-- === Product Image Url Starts=== -->
    <script>
      var PRODUCT_IMAGE="{{asset('public/storage/media/')}}";
      </script>
    <!-- === Product Image Url End=== -->
  </head>
  <body id="page-top">
    <!-- Section Starts -->
    <div class="wrapper">
      @include('front/includes/header')
      
      @section('container')
      @show    
      
      <!-- === News Letter Section Ends === -->
      <section>
        <div class="container-fluid p-0">
          <div class="card bg-secondary rounded-0 p-lg-5 p-md-5 p-4">
            <div class="row">
              <div class="col-sm-6 mb-3 text-light border-end border-light">
                <h1 class="mb-0">NewsLetter Update</h1>
                <small>Get Unique Gift Collection On Special Store</small>
              </div>
              <div class="col-sm-6 my-auto">
                <div class="form-group d-flex">
                  <input type="text" placeholder="Enter your email id" class="form-control me-lg-5 me-lg-4 me-3 rounded-0">
                  <button class="btn btn-danger rounded-0 px-lg-5 px-md-4 px-2">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- === News Letter Section Ends === -->

      @include('front/includes/footer')

      @include('front/includes/sidebar')

    </div>

    <!-- Section Ends -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{asset('front_assets/js/slick.js')}}"></script>
    <script src="{{asset('front_assets/js/custom.js')}}"></script> 
    <script src="{{asset('front_assets/assests/js/script.js')}}"></script>

    <!-- <script>
      var buttonPlus  = $(".qty-btn-plus");
      var buttonMinus = $(".qty-btn-minus");

      var incrementPlus = buttonPlus.click(function() {
        var $n = $(this)
        .parent(".qty-container")
        .find(".input-qty");
        $('#qty').val(Number($n.val())+1);
        $('.aa-cartbox-items').html(Number($n.val())+1);
        // $('#total_price_'+attr_id).html('Rs '+qty*price);
        $n.val(Number($n.val())+1 );
      });

      var incrementMinus = buttonMinus.click(function() {
        var $n = $(this)
        .parent(".qty-container")
        .find(".input-qty");
        var amount = Number($n.val());
        if (amount > 0) {
          $n.val(amount-1);
        }
      });
    </script> -->

  </body>
</html>