@extends('layouts.userlayout.userApp')
@section('content')

<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{ url('/home') }}">Home</a></li>
<li><a class="active" href="{{ url('/profile') }}">Profile</a></li>
</ul>
</div>
</div>
</div>
<!-- Small Breadcrumb -->
@include('layouts.userlayout.leftsidebar')


<div class="col-md-8 col-sm-12 col-xs-12">

<!-- Row -->
<div class="profile-section margin-bottom-20">
<div class="profile-tabs">
<ul class="nav nav-justified nav-tabs">
<li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
<li><a href="{{ url('/editprofile')}}" >Edit Profile</a></li>
<!-- <li><a href="#payment" data-toggle="tab">Plan Setting</a></li> -->
<!-- <li><a href="#settings" data-toggle="tab">Notification Settings</a></li> -->
</ul>
<div class="tab-content">

@if (count($errors) > 0)
<div class="alert alert-danger divhide5">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success divhide5">
<p>{{ $message }}</p>
</div>
@endif
<div class="profile-edit tab-pane fade in active" id="profile">
<!--  <h2 class="heading-md">Manage your Name, ID and Email Addresses.</h2>
<p>Below are the name and email addresses on file for your account.</p> -->
<dl class="dl-horizontal">
<dt><strong>Your Busuiness Name </strong></dt>
<dd>
{{ Auth::user()->name }}
</dd>
<dt><strong>Category </strong></dt>
<dd>
{{ Auth::user()->category }}
</dd>
<dt><strong>About</strong></dt>
<dd>
{!! Auth::user()->description !!}
</dd>
<dt><strong>Email Address </strong></dt>
<dd>
{{ Auth::user()->email }}
</dd>
<dt><strong>Phone Number </strong></dt>
<dd>
{{ Auth::user()->mobile }}
</dd>

<dt><strong>Landline</strong></dt>
<dd>
{{ Auth::user()->landline }}
</dd>

<dt><strong>Website </strong></dt>
<dd>
{{ Auth::user()->website }}
</dd>

<dt><strong>Address </strong></dt>
<dd>
{{ Auth::user()->address }} 
</dd>

<dt><strong>City </strong></dt>
<dd>
{{ Auth::user()->city }}
</dd>
<dt><strong>State </strong></dt>
<dd>
{{ Auth::user()->state }}
</dd>

<dt><strong>Country </strong></dt>
<dd>
{{ Auth::user()->country }}
</dd>
<dt><strong>Social Links </strong></dt>
<dd>
<a target="_blank" class="label label-info btn-sm" href="{{ Auth::user()->twitter }}"><span class="flaticon-twitter"></span> Twitter</a>
<a target="_blank" class="label label-info btn-sm" href="{{ Auth::user()->facebook }}"><span class="flaticon-facebook"></span> Facebook</a>
</dd>

<dt><strong>Google Map</strong></dt>
<dd>
{!! Auth::user()->map !!}
</dd>
</dl>
</div>


</div>
</div>
</div>
<!-- Row End -->
</div>
<!-- Middle Content Area  End -->
</div>
<!-- Row End -->
</div>
<!-- Main Container End -->
</section>
<!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->

@endsection