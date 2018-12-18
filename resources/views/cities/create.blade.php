@extends('layouts.adminlayout.adminApp')
@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{ url('admin/dashboard') }}">Home</a></li>
<li><a href="{{ url('admin/categories') }}">Cities</a></li>
<li><a class="active" href="{{ url('admin/categories')}}">Add New</a></li>
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
<li class="active"><a href="#edit" data-toggle="tab">Add New City</a></li>
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
<form id="selectForm2" class="parsley-style-1" method="post" action="{{ route('cities.store') }}" autocomplete="off" >
@csrf
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<a class="btn btn-primary btn-sm pull-right" href="{{ route('cities.index') }}">back</a>


<div class="form-group">
<label>City Name: <span class="tx-danger">*</span></label>
<input type="text" name="cityname" class="form-control " placeholder="eg: Jalandhar" data-parsley-class-handler="#fnWrapper" required>
</div><!-- form-group -->


<div class="form-group">
<button type="submit" class="btn btn-primary">Save</button>
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