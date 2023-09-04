@extends('front/layout')
@section('page_title','Contact Us')
@section('container')

<section>
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-6 border border-dark p-3">
                <div class="card p-3">
                    <p class="fs-2 fw-bold">Get In Touch DKS Solar Solutions</p>
                    <p class="fw-bold mb-1">E-mail : <span class="fw-normal ps-2">dkssolarsolutions@gmail.com</span></p>
                    <p class="fw-bold ">Phone : <span class="fw-normal ps-2">+91-7065712271</span></p>
                    <p class="fw-bold mb-1">Address : </p>
                    <p class="fw-normal mb-0">Address SF-06, Alpha Plaza , Alpha 1, Greater Noida 201310</p>
                    <p class="fw-normal mb-0">Noida</p>
                    <p class="fw-normal mb-3">Pincode : 201310</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.183796584848!2d77.512458!3d28.474010999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMjjCsDI4JzI2LjQiTiA3N8KwMzAnNDQuOSJF!5e0!3m2!1sen!2sin!4v1662225381358!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
            </div>
            <div class="col-md-6 border border-dark p-3">
                <div class="card p-3">
                <form action="{{url('/contact_form')}}" method="post">
                    @csrf
                    <p class="fs-2 fw-bold mb-5">Fill The Form It's Easy</p>
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
                    <div class="form-group mb-3">
                        <label for="" class="form-label fw-bold">Enter Your Query</label>
                        <input type="text" class="form-control" name="comment" placeholder="This is my query" style="height: 100px">
                    </div>
                    <button class="btn btn-primary rounded-0 w-50 py-2">Submit</button>
                </form>
                <input type="hidden" id="contact-form-msg" value="{!! \Session::get('success') !!}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection