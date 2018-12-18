@extends('layouts.adminlayout.adminApp')
@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{ url('/admin/dashboard') }}">Home</a></li>
<li><a class="active" href="#">Sliders</a></li>
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
<li class="active"><a href="#edit" data-toggle="tab">Sliders</a></li>
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
<a class="btn btn-primary btn-sm pull-right" href="{{ route('sliders.create') }}">Add New</a>
<!-- <th>Id</th> -->
<th>Slider banner</th>
<th>text1 </th>
<th>text2 </th>
<th>text3 </th>
<th>text4 </th>
<th>text5 </th>

<th width="120px">Action</th>
</tr>
@foreach ($sliders as $slider)
<tr>
<td><img src="{{ asset($slider->banner) }}" style="width: 62px;"></td>
<td>{{ $slider->txt1 }}</td>
<td>{{ $slider->txt2 }}</td>
<td>{{ $slider->txt3 }}</td>
<td>{{ $slider->txt4 }}</td>
<td>{{ $slider->txt5 }}</td>
<td style="width: 200px;">
<form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
<a  class="btn btn-info btn-sm" href="{{ route('sliders.edit', $slider->id) }}"> <span class="glyphicon glyphicon-edit"></span>edit</a>
@csrf
@method('DELETE')

<a type="submit" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-trash"></span>delete</a>
</form>
</td>
</tr>
@endforeach
</table>

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