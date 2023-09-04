@extends('front/layout')
@section('page_title','Home Page')
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

<div class="container-fluid bg-lightgreen">
  <div class="col-lg-5 col-12 mx-auto py-5">
    <div class="card shadow-lg p-lg-5 py-4">
      <div class="tab-content mb-5" id="pills-tabContent">
        <div class="tab-pane fade show active " id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
          <div id="popup_login" class="px-5">
            <h4 class="fw-bold text-center text-uppercase mb-5">Login to Dks Solar</h4>
            <form class="aa-login-form" id="frmLogin">
              <label class="form-label fw-bold" for="">Email address<span>*</span></label>
              <input class="form-control rounded-0 mb-4" type="email" placeholder="Email" name="str_login_email" required value="{{$login_email}}">
              <label class="form-label fw-bold" for="">Password<span>*</span></label>
              <input class="form-control rounded-0 mb-4" type="password" placeholder="Password" name="str_login_password" required value="{{$login_pwd}}">
              <button class="btn btn-primary rounded-0 w-100 mb-4" type="submit" id="btnLogin">Login</button>
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
              <div class="card p-5">
                <h4 class="fw-bold text-center text-uppercase mb-5">Register To DKS Solar</h4>
                <form action="" class="aa-login-form" id="frmRegistration">
                  <div class="row mb-5">
                    <div class="col-md-6">
                      <label class="form-label" for="">Name<span class="text-danger">*</span></label>
                      <input class="form-control mb-4" type="text" name="name" placeholder="Name" required>
                      <div id="name_error" class="field_error"></div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="">Email<span class="text-danger">*</span></label>
                      <input class="form-control mb-4" type="email" name="email" placeholder="Email" required>
                      <div id="email_error" class="field_error"></div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="">Password<span class="text-danger">*</span></label>
                      <input class="form-control mb-4" type="password" placeholder="Password" name="password">
                      <div id="password_error" class="field_error"></div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label" for="">Mobile<span class="text-danger">*</span></label>
                      <input class="form-control mb-4" type="text" name="mobile" placeholder="Mobile" required>
                      <div id="mobile_error" class="field_error"></div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary w-100" id="btnRegistration">Register</button>
                  @csrf
                </form>
              </div>
            </div>
            <div id="thank_you_msg" class="field_error"></div>
          </section>
        </div>
      </div>
      <ul class="nav nav-pills mb-3 mx-auto w-50" id="pills-tab" role="tablist">
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





@endsection