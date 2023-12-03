@extends('front/layout')
@section('page_title','Special Store | Login And SignUp')
@section('container')

@php
if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_pwd'])){
$login_email=$_COOKIE['login_email'];
$login_pwd=$_COOKIE['login_pwd'];
$is_remember="checked='checked'";
} else{
$login_email='';
$login_pwd='';
$is_remember="";
}

@endphp

  <!-- === Breadcrum Section Starts=== -->
  <section>
    <div class="container-fluid px-lg-5 px-md-5 px-4">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item small"><a class="mclr" href="#">Home</a></li>
            <li class="breadcrumb-item active small" aria-current="page">Login And SignUp</li>
        </ol>
        </nav>
    </div>
  </section>
  <!-- === Breadcrum Section Ends=== -->

  <!-- === About Description Starts=== -->
  <section>
    <div class="container-fluid px-lg-5 px-md-5 px-4">
      <div class="card login-bg">
        <div class="row">
          <div class="col-md-6 ms-auto">
            <div class="card bg-light border border-dark border-2 p-3">
              <div class="tab-content mb-5" id="pills-tabContent">
              <div class="tab-pane fade show active " id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                <div id="popup_login" class="px-5 text-center">
                  <h4 class="fw-bold text-center text-uppercase mb-1">Login to Special Store</h4>
                  <p class="text-center smaller text-secondary mb-5">Login With Your Email Id And Password And Shop</p>
                  <form class="aa-login-form text-start" id="frmLogin">
                    <label class="form-label fw-bold" for="">Email Id<span>*</span></label>
                    <input class="form-control mb-4" type="email" placeholder="Email" name="str_login_email" required value="{{$login_email}}">
                    <label class="form-label fw-bold" for="">Password<span>*</span></label>
                    <input class="form-control mb-4" type="password" placeholder="Password" name="str_login_password" required value="{{$login_pwd}}">
                    <button class="btn btn-danger w-100 mb-4" type="submit" id="btnLogin">Login</button>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="rememberme" name="rememberme" {{$is_remember}}>
                      <label for="rememberme" class="form-check-label" style="padding-top:2px;"> Remember me </label><span><a class="float-end text-primary" href="javascript:void(0)" onclick="forgot_password()">Lost your password?</a></span>
                    </div>
        
                    <div class="text-danger" id="login_msg"></div>
                    @csrf
                  </form>
                </div>
                <div id="popup_forgot" style="display:none;">
                  <h4>Forgot Password</h4>
                  <form class="aa-login-form" id="frmForgot">
                    <label for="">Email address<span>*</span></label>
                    <input type="email" placeholder="Email" name="str_forgot_email" required>
                    <button class="aa-browse-btn" type="submit" id="btnForgot">Submit</button>
                    <br><br>
                    <div id="forgot_msg"></div>
        
                    <div class="aa-register-now">
                      <a href="javascript:void(0)" onclick="show_login_popup()">Login now!</a>
                    </div>
                    @csrf
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
                <section id="aa-myaccount">
                  <div class="col-12 mx-auto">
                    <div class="card px-5 p-1">
                      <h4 class="fw-bold text-center text-uppercase mb-1">Register To Special Store</h4>
                      <p class="text-center smaller text-secondary mb-5">Login With Your Email Id And Password And Shop</p>
                      <form action="" class="aa-login-form" id="frmRegistration">
                        <div class="row mb-3">
                          <div class="col-md-6">
                            <label class="form-label small fw-bold" for="">Name<span class="text-danger">*</span></label>
                            <input class="form-control mb-4" type="text" name="name" placeholder="Name" required>
                            <div id="name_error" class="field_error"></div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label small fw-bold" for="">Email<span class="text-danger">*</span></label>
                            <input class="form-control mb-4" type="email" name="email" placeholder="Email" required>
                            <div id="email_error" class="field_error"></div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label small fw-bold" for="">Password<span class="text-danger">*</span></label>
                            <input class="form-control mb-4" type="password" placeholder="Password" name="password">
                            <div id="password_error" class="field_error"></div>
                          </div>
                          <div class="col-md-6">
                            <label class="form-label small fw-bold" for="">Mobile<span class="text-danger">*</span></label>
                            <input class="form-control mb-4" type="text" name="mobile" placeholder="Mobile" required>
                            <div id="mobile_error" class="field_error"></div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-danger w-100 my-1" id="btnRegistration">Register</button>
                        @csrf
                      </form>
                    </div>
                  </div>
                  <div id="thank_you_msg" class="field_error"></div>
                </section>
              </div>
              </div>
              <ul class="nav nav-pills mx-auto w-50" id="pills-tab" role="tablist">
                <li class="nav-item w-50" role="presentation">
                  <button class="nav-link bg-outline-primary text-dark w-100 rounded-0 active " id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">Login</button>
                </li>
                <li class="nav-item w-50" role="presentation">
                  <button class="nav-link bg-outline-primary w-100 text-dark rounded-0" id="pills-register-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-register" type="button" role="tab" aria-controls="pills-register"
                    aria-selected="false">Register</button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- === About Description Ends=== -->

@endsection