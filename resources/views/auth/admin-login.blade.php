@extends('layouts.frontwebsitelayout.frontApp')
@section('content')

<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="header-page">
<h1> Admin Sign In</h1>
</div>
</div>
</div>
</div>
</div>
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="#">Home</a></li>
<li><a class="active" href="#">Sign In</a></li>
</ul>
</div>
</div>
</div>
<!-- Small Breadcrumb -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
<!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
<section class="section-padding error-page pattern-bg ">
<!-- Main Container -->
<div class="container">
<!-- Row -->
<div class="row">
<!-- Middle Content Area -->
<div class="col-md-5 col-md-push-7 col-sm-6 col-xs-12">
<!--  Form -->
<div class="form-grid"> 


 <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf

<div class="form-group">
<label>Email Id</label>
 <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

@if ($errors->has('email'))
<span class="label label-danger" role="alert">
<strong>{{ $errors->first('email') }}</strong>
</span>
@endif
</div>

<div class="form-group">
<label>Password</label>
<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

@if ($errors->has('password'))
<span class="label label-danger" role="alert">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif

</div>
 <div class="form-group">
                              <div class="row">
                                 <div class="col-xs-12">
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input id="minimal-checkbox-1" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                             
                                             <label for="minimal-checkbox-1">Remember Me</label>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
<input class="btn btn-theme btn-lg btn-block" type="submit" name="login" value="Login">
<!-- <button class="btn btn-theme btn-lg btn-block">Login With Us</button> -->
<a href="{{ route('admin.password.request') }}">Forgot Password</a>
</form>









</div>
<!-- Form -->
</div>
<div class="col-md-7  col-md-pull-5  col-xs-12 col-sm-6">
<div class="heading-panel">
<h3 class="main-title text-left">
Sign In to your account   
</h3>
</div>
<div class="content-info">
<div class="features">
<div class="features-icons">
<img src="{{ asset('images/icons/chat.png')}}" alt="img">
</div>
<div class="features-text">
<h3>Chat & Messaging</h3>
<p>
Access your chats and account info from any device.
</p>
</div>
</div>
<div class="features">
<div class="features-icons">
<img src="{{ asset('images/icons/panel.png')}}" alt="img">
</div>
<div class="features-text">
<h3>User Dashboard</h3>
<p>
Maintain a wishlist by saving your favourite items.
</p>
</div>
</div>
<span class="arrowsign hidden-sm hidden-xs"><img src="{{ asset('images/arrow.png') }}" alt="" ></span>
</div>
</div>
<!-- Middle Content Area  End -->
</div>
<!-- Row End -->
</div>
<!-- Main Container End -->
</section>
<!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->

@endsection
