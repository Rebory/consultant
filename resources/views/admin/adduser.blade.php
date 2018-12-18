@extends('layouts.adminlayout.adminApp')
@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{ url('/dashboard') }}">Home</a></li>
<li><a class="active" href="{{ url('/adduser')}}">Add User</a></li>
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
<li class="active"><a href="#edit" data-toggle="tab">Adduser</a></li>
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
<form method="post" action="{{ url('/admin/addusersubmit') }}" enctype="multipart/form-data">
@csrf 
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 {{ $errors->has('name') ? 'has-error' : '' }}">
<label>Your Business Name </label>

<input type="text" class="form-control margin-bottom-20" name="name" value="{{ old('name') }}" placeholder="eg: ABC Immigration Jalandhar">
@if ($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</span>
@endif
</div>

<!--<div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20 {{ $errors->has('city') ? 'has-error' : '' }}">
<label>Category <span class="color-red">*</span></label>
<select class="form-control" name="category" value="{{ old('category') }}">
<option label="Select Category" @if(Auth::user()->city=="") selected @endif></option>
<option value="Immigration Consultant" @if(Auth::user()->category=="Immigration Consultant") selected @endif > Immigration Consultant</option>
<option value="Ielts Training Centre" @if(Auth::user()->category=="Ielts Training Centre") selected @endif> Ielts Training Centre</option>
</select>
@if ($errors->has('category'))
<span class="text-danger">{{ $errors->first('category') }}</span>
@endif
</div> -->

<div class="col-md-12 col-sm-12 col-xs-12 {{ $errors->has('description') ? 'has-error' : '' }}">
<label>About Description <span class="color-red">*</span></label>
<textarea name="description" id="editor1" rows="4" class="form-control" placeholder="">{{ old('description') }}</textarea>
</div>

<div class="col-md-6 col-sm-6 col-xs-12 {{ $errors->has('email') ? 'has-error' : '' }}">
<label>Email Address <span class="color-red">*</span></label>
<input type="text" class="form-control margin-bottom-20" name="email" value="{{ old('email') }}" >
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
<div class="col-md-6 col-sm-12 col-xs-12 {{ $errors->has('mobile') ? 'has-error' : '' }}">  
<label>Contact (Mobile) Number <span class="color-red">*</span></label>
<input type="text" class="form-control margin-bottom-20"name="mobile" value="{{ old('mobile') }}">
@if ($errors->has('mobile'))
<span class="text-danger">{{ $errors->first('mobile') }}</span>
@endif
</div>

<div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
<label>Landline Numbers with STD code <span class="color-red">*</span></label>
<input type="text" class="form-control margin-bottom-20"name="landline" value="{{ old('landline') }}" placeholder="eg: 0181-1234567,01882-1234567">
</div>

<div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20 {{ $errors->has('city') ? 'has-error' : '' }}">
<label>City <span class="color-red">*</span></label>
<select class="form-control" name="city" value="{{ old('city') }}">
<option label="Select City"></option>
<option value="Jalandhar">Jalandhar</option>
<option value="Amritsar">Amritsar</option>
<option value="Hoshiarpur">Hoshiarpur</option>
<option value="Ludiana">Ludiana</option>
</select>
@if ($errors->has('city'))
<span class="text-danger">{{ $errors->first('city') }}</span>
@endif
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<label>Website <span class="color-red">*</span></label>
<input type="text" class ="form-control margin-bottom-20" name="website" value="{{ old('website') }}">
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<label>Address <span class="color-red">*</span></label>
<textarea class = "form-control margin-bottom-20" rows = "2" name="address" value="{{ old('address') }}"></textarea>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<label>Twitter <span class="color-red">*</span></label>
<input type="text" class = "form-control margin-bottom-20" name="twitter" value="{{ old('twitter') }}">
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<label>Facebook <span class="color-red">*</span></label>
<input type="text" class = "form-control margin-bottom-20" name="facebook" value="{{ old('facebook') }}">
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<label>Instagram <span class="color-red">*</span></label>
<input type="text" class = "form-control margin-bottom-20" name="instagram" value="{{ old('instagram') }}">
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<label>Google Map <span class="color-red">*</span></label>
<textarea class = "form-control margin-bottom-20" rows = "3" name="map">{{ old('map') }}</textarea>
</div>


<div class="col-md-12 col-sm-12 col-xs-12">

<img id="img-upload" class="img img-responsive" style="max-height: 315px;" src="#" alt="" />
</div>

<!-- <div class="clearfix"></div> -->
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="input-group">
<span class="input-group-btn">
<span class="btn btn-default btn-file margin-bottom-20">
Browse… <input type="file" id="imgInp" name="cover">
</span>
</span>
<input type="text" class="form-control" readonly>
</div>
</div>

<div class="col-md-4 col-sm-4 col-xs-12 text-right">
<button type="submit" class="btn btn-theme btn-sm"> User Create</button>
</div> 
</form>

             <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

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