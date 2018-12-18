@extends('layouts.frontwebsitelayout.frontApp')
@section('content')
<!-- =-=-=-=-=-=-= Background Rotator =-=-=-=-=-=-= -->
<!-- <div class="background-rotator"> -->
<div class="background-rotator">
<!-- slider start-->
<div class="owl-carousel owl-theme background-rotator-slider hidden-xs">
@foreach($sliders as $slider)
<!-- Slide -->
<div class="item linear-overlay"><img src="{{ asset($slider->banner)}}" alt=""></div>
@endforeach
</div>
<div class="search-section" style="margin-top: 0px !important; padding-top: 0px !important;">
<!-- Find search section -->
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<!-- Heading -->
<!--  <div class="content"> -->
<div class="heading-caption">
<h1>Find what are you looking for</h1>
<p>Over <strong>{{ $usercount }}</strong> Immigration Consultant Listing</p>
</div>
<div class="search-form">
<form method="get" action="{{route('user.search')}}">
<div class="row">
<!-- Input Field -->
<div class="col-md-8 col-xs-12 col-sm-12">
<!-- Category -->
<select class="category form-control" name="k">
<option label="Search by Name here..."></option>
@foreach($datas as $data)
<option  value="{{ $data->name}}">{{ $data->name}}</option>
@endforeach
</select>
</div>
<!-- Search Button -->
<div class="col-md-4 col-xs-12 col-sm-4">
<button type="submit" class="btn btn-theme btn-block">Search <i class="fa fa-search" aria-hidden="true"></i></button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!--  </div> -->
<!-- /.Find search section-->
</div>
<!-- =-=-=-=-=-=-= Background Rotator End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
<!-- =-=-=-=-=-=-= Categories =-=-=-=-=-=-= -->
<section class="custom-padding gray">
<!-- Main Container -->
<div class="container">
<!-- Row -->
<div class="row">
<!-- Heading Area -->
<div class="heading-panel">
<div class="col-xs-12 col-md-12 col-sm-12 text-center">
<!-- Main Title -->
<h1>Browse <span class="heading-color"> Immigration consultants</span> By City</h1>
<!-- Short Description -->
<p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
</div>
</div>
<!-- Middle Content Box -->
<div class="col-md-12 col-xs-12 col-sm-12 ">
<div class="row">
<!-- Category List -->
<ul class="category-list-style">
@foreach($cities as $city)
<!-- Category -->
<li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<a href="{{$sitename}}immigration-consultant/{{$city->cityvalue}}">{{$city->cityname}}
<!-- <span>(1200 Ads)</span> -->
<i class="flaticon-gps"></i>
</a>
</li>
@endforeach
</ul>
<!-- Category List End -->
</div>
</div>
<!-- Middle Content Box End -->
</div>
<!-- Row End -->
</div>
<!-- Main Container End -->
</section>
<!-- =-=-=-=-=-=-= Categories End =-=-=-=-=-=-= -->



<section class=" error-page pattern-bgs gray ">
<!-- Main Container -->
<div class="container">
<!-- Row -->
<div class="row">
<!-- Middle Content Area -->
<div class="col-md-8 col-xs-12 col-sm-12">
<!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
<div class="grid-panel margin-top-30">
		<div class="heading-panel">
		<div class="col-xs-12 col-md-12 col-sm-12">
		<h3 class="main-title text-left">
		Latest
		</h3>
		</div>
		</div>
@foreach($datas as $data)
<!-- Ads Archive -->
<div class="posts-masonry">
<div class="col-md-12 col-xs-12 col-sm-12">
<!-- Ads Listing -->
<div class="ads-list-archive">
<!-- Image Block -->
<div class="col-lg-5 col-md-5 col-sm-5 no-padding">
<!-- Img Block -->
<div class="ad-archive-img">
<a href="{{$sitename}}pages/{{$data->id}}">
<div class="ribbon popular"></div>
<img class="img-responsive postpic" src="{{url($data->upic)}}" alt="{{$data->name}}" title="{{$data->name}}">
</a>
</div>
<!-- Img Block -->
</div>
<!-- Ads Listing -->
<div class="clearfix visible-xs-block"></div>
<!-- Content Block -->
<div class="col-lg-7 col-md-7 col-sm-7 no-padding">
<!-- Ad Desc -->
<div class="ad-archive-desc">
<!-- Price -->
<!-- <div class="ad-price">$38,000</div> -->
<!-- Title -->
<h3><a href="{{$sitename}}pages/{{$data->id}}">{{$data->name}}</a> </h3>
<!-- Category -->
<div class="category-title"> <span><a>{{$data->category}}</a></span> </div>
<!-- Short Description -->
<div class="clearfix visible-xs-block"></div>
<p class="hidden-sm">{!!  substr(strip_tags($data->description), 0, 70)  !!}... {{$data->created_at->diffForHumans()}}</p>
<!-- Ad Features -->
<ul class="add_info">
<!-- Contact Details -->
<li>
<div class="custom-tooltip tooltip-effect-4">
<span class="tooltip-item"><i class="fa fa-phone"></i></span>
<div class="tooltip-content">
<h4>Call Timings</h4>
<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
<!-- <br> <strong>Saturday</strong> 09.00 AM - 5.30 PM -->
<br> <strong><span class="label label-success">+91- {{$data->mobile}} , {{$data->landline}}</span> </strong>
</div>
</div>
</li>
<!-- Address -->
<li>
<div class="custom-tooltip tooltip-effect-4">
<span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
<div class="tooltip-content">
<h4>Address</h4>
{{$data->address}}
</div>
</div>
</li>
<!-- Ad Type -->
<li>
<div class="custom-tooltip tooltip-effect-4">
<span class="tooltip-item"><i class="fa fa-envelope"></i></span>
<div class="tooltip-content"> <strong>Email ID</strong> <span class="label label-danger">{{$data->email}}</span> </div>
</div>
</li>
<!-- Ad Type -->
<li><div > <a class="btn btn-theme btn-sm" href="{{$sitename}}pages/{{$data->id}}"><i class="fa fa-phone" style="color: #fff"></i> View Details.</a> </div></li>
</ul>
</div>
<!-- Ad Desc End -->
</div>
<!-- Content Block End -->
</div>
</div>
@endforeach

 </div>
</div>
</div><!-- end 8 col -->
<!-- =-=-=-=-=-=-= Latest Ads End =-=-=-=-=-=-= -->



<div class="col-md-4 col-xs-12 col-sm-12">
<!-- Sidebar Widgets -->
<div class="blog-sidebar margin-top-30">
<!-- Categories -->
<div class="widget">
<div class="widget-heading">
<h4 class="panel-title"><a>Categories</a></h4>
</div>
<div class="widget-content categories">
<ul>
@foreach($cities as $city)
<li> <a href="{{$sitename}}immigration-consultant/{{$city->cityvalue}}"> {{$city->cityname}} <!-- <span>(121)</span> --> </a> </li>
@endforeach
</ul>
</div>
</div>
</div>
</div> <!-- end 4 column -->
</div>
</div>
</section>
<!-- =-=-=-=-=-=-= Categories End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= How It Work =-=-=-=-=-=-= -->
<section class="section-padding white">
<!-- Main Container -->
<div class="container">
<!-- Row -->
<div class="row">
<!-- Heading Area -->
<div class="heading-panel">
<div class="col-xs-12 col-md-12 col-sm-12 text-center">
<!-- Main Title -->
<h1>How It <span class="heading-color"> Work</span></h1>
<!-- Short Description -->
<p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
</div>
</div>
<!-- Middle Content Box -->
<div class="col-xs-12 col-md-12 col-sm-12 ">
<div class="row">
<div class="how-it-work text-center">
<div class="how-it-work-icon"> <i class="flaticon-people"></i> </div>
<h4>Create Your Account</h4>
<p>Duis posuere nec libero efficitur maecenas ut aliquam augue dapibus elit nullam eleifend odio aliquam gravida mauris.</p>
</div>
<div class="how-it-work text-center ">
<div class="how-it-work-icon"> <i class="flaticon-people-2"></i> </div>
<h4>Post Free Ad</h4>
<p>Duis posuere nec libero efficitur maecenas ut aliquam augue dapibus elit nullam eleifend odio aliquam gravida mauris.</p>
</div>
<div class="how-it-work text-center">
<div class="how-it-work-icon "> <i class="flaticon-heart-1"></i> </div>
<h4>Deal Done</h4>
<p>Duis posuere nec libero efficitur maecenas ut aliquam augue dapibus elit nullam eleifend odio aliquam gravida mauris.</p>
</div>
</div>
</div>
<!-- Middle Content Box End -->
</div>
<!-- Row End -->
</div>
<!-- Main Container End -->
</section>
<!-- =-=-=-=-=-=-= How It Work End =-=-=-=-=-=-= -->
@endsection