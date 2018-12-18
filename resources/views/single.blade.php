@extends('layouts.frontwebsitelayout.frontApp')
@section('title', "$single->name -")
@section('content')

<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<!--    <div class="page-header-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="header-page">
<h1>Single Ad Detial</h1>
</div>
</div>
</div>
</div>
</div> -->
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{url('')}}">Home</a></li>
<li><a href="#">Pages</a></li>
<li><a class="active" href="#">{{ $single->name }}</a></li>
</ul>
</div>
</div>
</div>
<!-- Small Breadcrumb -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
<!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
<section class="section-padding error-page pattern-bgs gray ">
<!-- Main Container -->
<div class="container">
<!-- Row -->
<div class="row">
    @if (count($errors) > 0)
<div class="alert alert-danger divhide5">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-success divhide5">
<p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('success'))
<div class="alert alert-success divhide5">
<p>{{ $message }}</p>
</div>
@endif
<!-- Middle Content Area -->
<div class="col-md-8 col-xs-12 col-sm-12">
<!-- Single Ad -->
<div class="single-ad">
<!-- Title -->
<div class="ad-box">
<h1>{{ $single->name }}</h1>
<!--  <div class="short-history">
<ul>
<li>Published on: <b>12-12-2018</b></li>
<li>Category: <b><a href="#">Immigration Consultant</a></b></li>
<li>Location: <b>Jalandhar</b></li>
</ul>
</div> -->
</div>
<!-- Listing Slider  --> 
<div class="flexslider single-page-slider">
<div class="flex-viewport">
<!-- <ul class="slides slide-main"> -->
<img style="min-height: 315px; width: 100%" alt="{{$single->name}}" src="{{ url($single->upic) }}" title="{{$single->name}}">
<!-- <li><img alt="" src="#" title=""></li> 
use slider li if display multi image--> 
</div>
</div>

<div class="clearfix"></div>
<!-- Short Description  --> 
<div class="ad-box">
<div class="short-features">

<!-- Heading  --> 
<div class=" hidden-xs">
<div class="heading-panel">
<h3 class="main-title text-left">
Description 
</h3>
</div>
<div class="desc-points">
{!! $single->description !!}
</div>
</div>
</div>
<!-- Ad Specifications --> 

<div class="clearfix"></div>

</div>
</div>
<!-- Single Ad End --> 




</div>
<!-- Right Sidebar -->
<div class="col-md-4 col-xs-12 col-sm-12">
<!-- Sidebar Widgets -->
<div class="sidebar">
<!-- Contact info -->
<div class="contact white-bg">
<!-- Email Button trigger modal -->
<button class="btn-block btn-contact contactEmail">{{ $single->email }}</button>
<!-- Email Modal -->
<button class="btn-block btn-contact contactPhone number" data-last="111111X">+91-{{ $single->mobile }} </button>
</div>
<!-- Price info block -->   
<div class="ad-listing-price" data-toggle="modal" data-target=".price-quote">
<p> Send Message</p>
</div>
<!-- User Info -->
<div class="white-bg user-contact-info">
<div class="ad-listing-meta">
<ul>
<li><center><h4><a class="hover-color">{{ $single->name }}</a></h4></center></li>
<li>Categories: <span class="color">{{ $single->category }}</span></li>
<li>Website: <span class="color"><a target="_blank" href="{{ $single->website }}" title="Website: {{ $single->website }}" >{{ $single->website }}</a></span> </li>
<li>Location: <span class="color">{{ $single->city }} , {{ $single->state }},{{ $single->country }}</span></li>
<li>Page Id: <span class="color">{{ $single->id }}</span></li>
<li>Listing Date:<span class="ad-pub"> {{ $single->created_at}}</span></li>
<li>
<a class="btn btn-success btn-xs">Follow On</a>
<a target="_blank" href="https://www.facebook.com/{{ $single->facebook }}" class="btn btn-fb btn-sm"><span class="fa fa-facebook"></span></a>
<a target="_blank" href="https://www.twitter.com/{{ $single->twitter }}" class="btn btn-twitter btn-sm"><span class="fa fa-twitter"></span></a>
<a target="_blank" href="https://www.instagram.com/{{ $single->instagram }}" class="btn btn-danger btn-sm"><span class="fa fa-instagram"></span> </a>
</li>
</ul>
</div>

<div id="itemMap" style="width: 100%; height: 370px; margin-bottom:5px;">
{!! $single->map !!}
</div>

<div class=" visible-xs padding15">
<div class="heading-panel padding15">
<h3 class="main-title text-left">
Description 
</h3>
</div></div>
<div class="visible-xs padding15" >
{!! $single->description !!}
</div>
</div>
<!-- Ad Specifications --> 

<div class="clearfix"></div>
</div>

<!-- Share Ad  --> 
<div class="ad-share text-center">
<div data-toggle="modal" data-target=".share-ad" class="ad-box col-md-6 col-sm-12 col-xs-12">
<i class="fa fa-share-alt"></i> <span class="hidetext">Share</span>
</div>

<div data-target=".report-quote" data-toggle="modal" class="ad-box col-md-6 col-sm-12 col-xs-12">
<i class="fa fa-warning"></i> <span class="hidetext">Report</span>
</div>
</div>
<div class="clearfix"></div>


</div>
</div>

</div>
</div>

</div>
</div>
</div>
</div>
</div>

</div>
<!-- Middle Content Area  End -->
</div>
<!-- Row End -->
</div>
<!-- Main Container End -->
</section>
<!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->

</div>

<!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
<div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
<h3 class="modal-title" id="lineModalLabel">Email to {{$single->email}}</h3>
</div>
<div class="modal-body">
<div class="recent-ads">
<div class="recent-ads-list">
<div class="recent-ads-container">
<div class="recent-ads-list-image">
<a href="#" class="recent-ads-list-image-inner">
<img src="{{url($single->upic)}}" alt="{{$single->name}}">
</a><!-- /.recent-ads-list-image-inner -->
</div>

<!-- /.recent-ads-list-image -->
<div class="recent-ads-list-content">
<h3 class="recent-ads-list-title">
<a href="#">{{$single->name}}</a>
</h3>
<ul class="recent-ads-list-location">
<li><a href="#">{{$single->city}}</a>,</li>
</ul>
<div class="recent-ads-list-price">
{{$single->email}}
</div>
<!-- /.recent-ads-list-price -->
</div>
<!-- /.recent-ads-list-content -->
</div>
<!-- /.recent-ads-container -->
</div>
</div>
<!-- content goes here -->
<form method="post" action="{{ url('/sendfeedback') }}" enctype="multipart/form-data">
@csrf 
<input type="hidden" name="to" value="{{$single->email}}">
<input type="hidden" name="tomobile" value="{{$single->mobile}}">
<div class="form-group  col-md-6  col-sm-6">
<label>Your Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter Your Name" required> 
</div>
<div class="form-group  col-md-6  col-sm-6">
<label>Email Address</label>
<input type="email" name="email" class="form-control" placeholder="Enter email" required> 
</div>
<div class="form-group  col-md-12  col-sm-12">
<label>Contact No</label>
<input type="text" name="mobile" class="form-control" placeholder="Contact No" required> 
</div>
<div class="form-group  col-md-12  col-sm-12">
<label>Your Message</label>
<textarea placeholder="Type Your Message..." rows="3" class="form-control" name="message" required></textarea>
</div>
<!-- <div class="col-md-12  col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div> -->
<div class="clearfix"></div>
<div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
<button type="submit" class="btn btn-theme btn-block">Send</button>
</div>
</form>
</div>
</div>
</div>
</div>



<!-- =-=-=-=-=-=-= Ad Detail Modal =-=-=-=-=-=-= -->
<div class="sticky-ad-detail">
<div class="container">
<div class="col-md-7 col-sm-12 col-xs-12 no-padding">
<div class="">
<h3>Honda Civic Oriel 1.8 i-VTEC CVT 2017</h3>
<div class="short-history">
<ul>
<li>Published on: <b>07 Oct 2017</b></li>
<li>Location: <b>London</b></li>
<li>Category: <b><a href="#">Used Cars</a></b></li>
</ul>
</div>
</div>
</div>
<div class="col-md-5  col-sm-12 col-xs-12 no-padding">
<div class="pull-left row">
<div class="col-md-6 col-sm-6 col-xs-12 ">
<a href="javascript:void(0)" class="btn btn-block pull-left btn-phone number " data-last="111111X"><i class="fa fa-phone"></i> 0320<span>XXXXXXX</span></a>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<a data-toggle="modal" data-target=".price-quote"  href="javascript:void(0)" class="btn btn-block pull-left btn-message"><i class="icon-envelope"></i> Message Seller</a>
</div>
</div>
</div>
</div>
</div>

@endsection