@extends('front/layout')
@section('page_title','Home Page')
@section('container')

<!-- === Main Content Starts=== -->
      <!-- === Category Section Starts=== -->
      <Section>
          <div class="container-fluid px-lg-5 px-md-5 px-4">
            <div class="p-2 mb-3 d-lg-block d-none border border-2 border-warning rounded">
              <div class="row">
                @foreach($home_categories as $list)
                <div class="col-md-2 col-4 {{ $loop->last ? '':'border-end border-warning'}}">
                  <div class="card text-center align-items-center">
                    <img class="p-1 rounded rounded-lg" src="{{asset('public/storage/media/category/'.$list->category_image)}}" width="75" alt="">
                    <p class="mb-0"><a href="{{url('category/'.$list->category_slug)}}">{{$list->category_name}}</a></p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <!-- === Mobile View Starts === -->
            <div class="py-2 border d-lg-none border-2 border-warning rounded">
              <div class="card-slider">
                @foreach($home_categories as $list)
                <a href="{{url('category/'.$list->category_slug)}}">
                  <div style="width: 130px;" class="px-0 border-end border-warning">
                    <div class="card text-center align-items-center">
                      <img class="pb-1" src="{{asset('public/storage/media/category/'.$list->category_image)}}" width="25" alt="">
                      <p class="mb-0 smaller">{{$list->category_name}}</p>
                    </div>
                  </div>
                </a>
                @endforeach
              </div>
            </div>
            <!-- === Mobile View Ends === -->
          </div>
      </Section>
      <!-- === Category Section Ends=== -->

      <!-- === Banner Section Starts=== -->
      <Section>
          <div class="container-fluid px-lg-5 px-md-5 px-4">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                @foreach($slider_banner as $list)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="10000">
                  <img class="rounded w-100" src="{{asset('public/storage/media/banner/'.$list->image)}}" class="d-block w-100" alt="...">
                  <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div> -->
                </div>
                @endforeach
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
      </Section>
      <!-- === Banner Section Ends=== -->

      <!-- === States Section Starts === -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <h4 class="section-heading fw-bold">Hand-Delivered Across India</h4>
          <div class="card-slider">
            <div style="width: 8rem;" class="pe-4">
              <div class="card">
                <img class="w-100" src="https://res.cloudinary.com/interflora/f_auto,q_auto,t_pnopt4prodlp/banners/delhi_interflora_polaroid_20220823.jpg" alt="">
              </div>
            </div>
            <div style="width: 8rem;" class="pe-4">
              <div class="card">
                <img class="w-100" src="https://res.cloudinary.com/interflora/f_auto,q_auto,t_pnopt4prodlp/banners/delhi_interflora_polaroid_20220823.jpg" alt="">
              </div>
            </div>
            <div style="width: 8rem;" class="pe-4">
              <div class="card">
                <img class="w-100" src="https://res.cloudinary.com/interflora/f_auto,q_auto,t_pnopt4prodlp/banners/delhi_interflora_polaroid_20220823.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- === States Section Ends === -->
      
      @foreach($home_categories as $list)
      @endforeach

      <!-- === Featured Products Section Starts === -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <h4 class="section-heading fw-bold">Featured Products</h4>
          <div class="card-slider">
            @if(isset($home_featured_product[$list->id][0]))
              @foreach($home_featured_product[$list->id] as $productArr)
              @include('front/blades/single_product')
              @endforeach
              @endif
            </div>
        </div>
      </section>
      <!-- === Featured Products Section Ends === -->

      <!-- banner Section Starts -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <div class="row">
            @foreach($home_banner_1 as $home)
            <div class="col-md-6">
              <div class="card border-0 bg-transparent">
                <img src="{{asset('public/storage/media/banner/'.$home->image)}}" alt="" class="image-fluid rounded">
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- banner Section Ends -->

      <!-- === Celebrate Section Starts === -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <h4 class="section-heading fw-bold mb-0">Celebrate Milestone</h4>
          <p class="text-secondary fs-6">With Our Memorable Gift</p>
          <div class="row">
            @foreach($cat_banner as $data)
            <div class="col-md-6 mb-lg-0 mb-4">
              <div class="card">
                <h6 class="fw-bold text-uppercase mb-0">{{$data['title_name']}} <a href="{{$data['title_link']}}"><span class="float-end fw-normal text-capitalize small fw-bold text-secondary">View All</span></a></h6>
                <hr>
                <div class="row">
                  @foreach($cat_banner as $data)
                  <div class="col-6">
                    <div class="row">
                      @if($loop->odd)
                        @foreach($data['cat_arr_left'] as $list)
                        <div class="col-md-12 py-2">
                          <div class="card">
                            <img class="w-100 rounded" src="{{asset('public/storage/media/banner/'.$list['image'])}}" alt="">
                            <div class="carousel-caption bottom-0 p-0">
                              <p class="mb-0 fw-bold">{{$list['cat_name']}}</p>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      @else
                        @foreach($data['cat_arr_right'] as $list)
                        <div class="col-md-12 py-2">
                          <div class="card">
                            <img class="w-100 rounded" src="{{asset('public/storage/media/banner/'.$list['image'])}}" alt="">
                            <div class="carousel-caption bottom-0 p-0">
                              <p class="mb-0 fw-bold">{{$list['cat_name']}}</p>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      @endif
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- === Celebrate Section Ends === -->
      
      <!-- === Trending Section Ends === -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <h4 class="section-heading fw-bold mb-0">Trending Collection</h4>
          <p class="text-secondary fs-6">With Our Memorable Gift</p>
          <div class="row mb-3">
            @foreach($home_categories as $list)
            <div class="{{ $loop->first ? 'col-md-12' : 'col-md-1' }}">
              <div class="card">
                <img class="w-25" src="{{asset('public/storage/media/category/'.$list->category_image)}}" alt="">
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- === Trending Section Ends === -->

      <!-- banner Section Starts -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <div class="row">
            <div class="col-md-6">
              <div class="card border-0 bg-transparent">
                <img src="{{asset('public/storage/media/banner/'.$home_banner_2->image)}}" alt="" class="image-fluid rounded">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- banner Section Ends -->


      <!-- === Trending Products Section Starts === -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <h4 class="section-heading fw-bold">Trending Products</h4>
          <div class="card-slider">
            @if(isset($home_tranding_product[$list->id][0]))
              @foreach($home_tranding_product[$list->id] as $productArr)
                @include('front/blades/single_product')
              @endforeach
            @endif
          </div>
        </div>
      </section>
      <!-- === Trending Products Section Ends === -->

      <!-- === Discounted Products Section Starts === -->
      <section>
        <div class="container-fluid px-lg-5 px-md-5 px-4">
          <h4 class="section-heading fw-bold">Discounted Products</h4>
          <div class="card-slider">
            @if(isset($home_discounted_product[$list->id][0]))
              @foreach($home_discounted_product[$list->id] as $productArr)
                @include('front/blades/single_product')
              @endforeach
            @endif
          </div>
        </div>
      </section>
      <!-- === Discounted Products Section Ends === -->
<!-- === Main Content Ends=== -->

<input type="hidden" id="qty" value="1" />
<form id="frmAddToCart">
  <input type="hidden" id="size_id" name="size_id" />
  <input type="hidden" id="color_id" name="color_id" />
  <input type="hidden" id="pqty" name="pqty" />
  <input type="hidden" id="product_id" name="product_id" />
  @csrf
</form>
@endsection