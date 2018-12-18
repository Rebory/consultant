@extends('layouts.frontwebsitelayout.frontApp')
@section('title', "$pagetitle->cityname")
@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{ url('/') }}">Home</a></li>
<li><a>Immigration Consultant</a></li>
<li><a>City</a></li>
<li><a class="active" >{{$pagetitle->cityname}} <span>({{ $recordcount}})</span></a></li>
</ul>
</div>
</div>
</div>
<!-- Small Breadcrumb -->
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




@foreach($users as $user)
<!-- Ads Archive -->
<div class="posts-masonry">
<div class="col-md-12 col-xs-12 col-sm-12">
<!-- Ads Listing -->
<div class="ads-list-archive">
<!-- Image Block -->
<div class="col-lg-5 col-md-5 col-sm-5 no-padding">
<!-- Img Block -->
<div class="ad-archive-img">
<a href="{{$sitename}}pages/{{$user->id}}">
<div class="ribbon popular"></div>
<img class="img-responsive postpic" src="{{url($user->upic)}}" alt="{{$user->name}}"> 
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
<h3><a href="{{$sitename}}pages/{{$user->id}}">{{$user->name}}</a> </h3>
<!-- Category -->
<div class="category-title"> <span><a>{{$user->category}}</a></span> </div>
<!-- Short Description -->
<div class="clearfix visible-xs-block"></div>
<p class="hidden-sm">{!!  substr(strip_tags($user->description), 0, 70)  !!}...{{$user->created_at->diffForHumans()}}</p>
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
<br> <strong><span class="label label-success">+91-{{$user->mobile}} , {{$user->landline}}</span> </strong> 
</div>
</div>
</li>
<!-- Address -->
<li>
<div class="custom-tooltip tooltip-effect-4">
<span class="tooltip-item"><i class="fa fa-map-marker"></i></span>
<div class="tooltip-content">
<h4>Address</h4>
{{$user->address}}
</div>
</div>
</li>
<!-- Ad Type -->
<li>
<div class="custom-tooltip tooltip-effect-4">
<span class="tooltip-item"><i class="fa fa-envelope"></i></span>
<div class="tooltip-content"> <strong>Email ID</strong> <span class="label label-danger">{{$user->email}}</span> </div>
</div>
</li>
<!-- Ad Type -->
<li><div > <a class="btn btn-theme btn-sm" href="{{$sitename}}pages/{{$user->id}}"><i class="fa fa-phone" style="color: #fff"></i> View Details.</a> </div></li>
</ul>
</div>
<!-- Ad Desc End -->
</div>
<!-- Content Block End -->
</div>
</div>
@endforeach

</div>
</div><!-- end 8 col -->
<!-- =-=-=-=-=-=-= Latest Ads End =-=-=-=-=-=-= -->



<div class="col-md-4 col-xs-12 col-sm-12">

<!-- Sidebar Widgets -->
<div class="blog-sidebar margin-top-30">
<!-- Categories --> 
<div class="widget">
<div class="widget-heading">
<h4 class="panel-title"><a>Short by City</a></h4>
</div>
<div class="widget-content categories">
<ul>
@foreach($cities as $city)
<li> <a href="{{$sitename}}immigration-consultant/{{$city->cityvalue}}"> {{$city->cityname}} <!-- <span>(121)</span> --> </a> </li>

@endforeach

</ul>
</div>
</div>
</div> </div>  </div> </div>  </div>


</div> <!-- end 4 column -->
</div>
</div>
</section>
@endsection