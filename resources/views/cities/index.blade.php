@extends('layouts.adminlayout.adminApp')
@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{ url('/dashboard') }}">Home</a></li>
<li><a class="active" href="{{ url('/adduser')}}">Categories</a></li>
</ul>
</div>
</div>
</div>
<!-- Small Breadcrumb -->
@include('layouts.adminlayout.leftsidebar')
<div class="col-md-8 col-sm-12 col-xs-12">
<!-- Row -->
<div class="profile-section margin-bottom-20">
<div class="profile-tabs">
<ul class="nav nav-justified nav-tabs">
<li class="active"><a href="#edit" data-toggle="tab">Cities</a></li>
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
<div class="profile-edit tab-pane fade in active" id="edit">

<div class="clearfix"></div>

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 text-right">
<table class="table table-bordered table-hover">
<tr>
<a class="btn btn-theme btn-sm pull-right" href="{{ route('cities.create') }}">Add New</a>
<th>City Name</th>
<th>City Value</th>
<th width="280px">Action</th>
</tr>
@foreach ($cities as $city)
<tr>

<td>{{ $city->cityname }}</td>
<td>{{ $city->cityvalue }}</td>
<td>
<form action="{{ route('cities.destroy', $city->id) }}" method="POST">
@csrf
<a class="btn btn-primary btn-sm" href="{{ route('cities.edit', $city->id) }}">Edit</a>

@method('DELETE')
<button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>


</div> 
</form>


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