@extends('front/layout')
@section('page_title','Contact Us')
@section('container')

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

<!-- === About Description Starts=== -->
<section>
    <div class="container-fluid px-lg-5 px-md-5 px-4">
        <div class="card">
            <div class="col-12">
                <h1 class="fw-bold mb-3">Contact Our Store</h1>
                <div class="card p-3 shadow-lg bg-secondary">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-6 contact">
                            <div class="card p-4">
                                <p class="fs-3 fw-bold">Get In Touch DKS Solar Solutions</p>
                                <p class="fw-bold mb-1">E-mail : <span class="fw-normal ps-2 small">dkssolarsolutions@gmail.com</span></p>
                                <p class="fw-bold mb-1">Phone : <span class="fw-normal ps-2 small">+91-7065712271</span></p>
                                <p class="fw-bold mb-1">Address : <span class="fw-normal mb-0 small">Address SF-06, Alpha Plaza , Alpha 1, Greater Noida</span></p>
                                <p class="fw-bold mb-2">Pincode : <span class="fw-normal small">201310</span></p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.183796584848!2d77.512458!3d28.474010999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMjjCsDI4JzI2LjQiTiA3N8KwMzAnNDQuOSJF!5e0!3m2!1sen!2sin!4v1662225381358!5m2!1sen!2sin" width="500" height="338" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>              
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4">
                            <form action="{{url('/contact_form')}}" method="post">
                                @csrf
                                <p class="fs-3 fw-bold">Fill The Form It's Easy</p>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label fw-bold">Enter Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="ABC">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label fw-bold">Enter Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="test@gmail.com">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label fw-bold">Enter Phone Number</label>
                                    <input type="text" name="phone" class="form-control" placeholder="9876543210">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="" class="form-label fw-bold">Enter Your Query</label>
                                    <input type="text" class="form-control" name="comment" placeholder="This is my query" style="height: 100px">
                                </div>
                                <button class="btn btn-danger rounded w-100 py-2">Submit</button>
                            </form>
                            <input type="hidden" id="contact-form-msg" value="{!! \Session::get('success') !!}">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- === About Description Ends=== -->
@endsection