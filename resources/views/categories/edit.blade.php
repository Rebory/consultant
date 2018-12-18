@extends('layouts.adminlayout.adminApp')
@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{ url('admin/dashboard') }}">Home</a></li>
<li><a class="active" href="#">Categories</a></li>
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
<li class="active"><a href="#edit" data-toggle="tab">Edit Category</a></li>
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
<div class="col-md-12 col-sm-12 col-xs-12">
<a class="label label-warning pull-right" href="{{ route('categories.index') }}">back</a>


    <form action="{{ route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
<div class="form-group">
<label>Category: <span class="tx-danger">*</span></label>
<input type="text" name="catname" class="form-control" value="{{ $category->catname }}" placeholder="eg: Political,Social" data-parsley-class-handler="#fnWrapper" required>
</div><!-- form-group -->



<div class="form-group">
<button type="submit" class="btn btn-primary">Update</button>

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