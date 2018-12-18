@extends('layouts.userlayout.userApp')
@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{ url('/home') }}">Home</a></li>
<li><a class="active" href="{{ url('/profile')}}">Edit Profile</a></li>
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
<li ><a href="{{ url('/profile')}}" >Profile</a></li>
<li class="active"><a href="#edit" data-toggle="tab">Edit Profile</a></li>
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
<div class="profile-edit tab-pane fade in active" id="edit">
<h2 class="heading-md">Manage your Security Settings</h2>
<p>Manage Your Account</p>


<div class="clearfix"></div>
<form method="post" action="{{ url('/uptsettings') }}">
@csrf 
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 {{ $errors->has('name') ? 'has-error' : '' }}">
<label>Your Business Name </label>

<input type="text" class="form-control margin-bottom-20" name="name" value="{{ Auth::user()->name }}" placeholder="eg: ABC Immigration Jalandhar">
@if ($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</span>
@endif
</div>


<!--<div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20 {{ $errors->has('city') ? 'has-error' : '' }}">
<label>Category <span class="color-red">*</span></label>
<select class="form-control" name="category" >
<option label="Select Category" @if(Auth::user()->city=="") selected @endif></option>
<option value="Immigration Consultant" @if(Auth::user()->category=="Immigration Consultant") selected @endif > Immigration Consultant</option>
<option value="Ielts Training Centre" @if(Auth::user()->category=="Ielts Training Centre") selected @endif> Ielts Training Centre</option>
</select>
@if ($errors->has('category'))
<span class="text-danger">{{ $errors->first('category') }}</span>
@endif
</div>-->

<div class="col-md-12 col-sm-12 col-xs-12 {{ $errors->has('description') ? 'has-error' : '' }}">
<label>About Description <span class="color-red">*</span></label>
<textarea name="description" id="editor1" rows="8" class="form-control" placeholder="">{{ Auth::user()->description }}</textarea>
</div>

<div class="col-md-6 col-sm-6 col-xs-12 {{ $errors->has('email') ? 'has-error' : '' }}">
<label>Email Address <span class="color-red">*</span></label>
<input type="text" class="form-control margin-bottom-20" name="email" value="{{ Auth::user()->email }}" readonly="true">
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
<div class="col-md-6 col-sm-12 col-xs-12 {{ $errors->has('mobile') ? 'has-error' : '' }}">  
<label>Contact (Mobile) Number <span class="color-red">*</span></label>
<input type="text" class="form-control margin-bottom-20"name="mobile" value="{{ Auth::user()->mobile }}" readonly="true">
@if ($errors->has('mobile'))
<span class="text-danger">{{ $errors->first('mobile') }}</span>
@endif
</div>

<div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
<label>Landline Numbers with STD code <span class="color-red">*</span></label>
<input type="text" class="form-control margin-bottom-20"name="landline" value="{{ Auth::user()->landline }}" placeholder="eg: 0181-1234567,01882-1234567">
</div>

<div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20 {{ $errors->has('city') ? 'has-error' : '' }}">
<label>City <span class="color-red">*</span></label>
<select class="form-control" name="city" >
<option label="Select City" @if(Auth::user()->city=="") selected @endif></option>
<option value="Jalandhar" @if(Auth::user()->city=="Jalandhar") selected @endif >Jalandhar</option>
<option value="Amritsar" @if(Auth::user()->city=="Amritsar") selected @endif>Amritsar</option>
<option value="Hoshiarpur" @if(Auth::user()->city=="Hoshiarpur") selected @endif>Hoshiarpur</option>
<option value="Ludiana" @if(Auth::user()->city=="Ludiana") selected @endif>Ludiana</option>
</select>
@if ($errors->has('city'))
<span class="text-danger">{{ $errors->first('city') }}</span>
@endif
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<label>Website <span class="color-red">*</span></label>
<input type="text" class ="form-control margin-bottom-20" name="website" value="{{ Auth::user()->website }}">
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<label>Address <span class="color-red">*</span></label>
<textarea class = "form-control margin-bottom-20" rows = "3" name="address" >{{ Auth::user()->address }}</textarea>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<label>Twitter Username only<span class="color-red">*</span></label>
<input type="text" placeholder="eg: mywebdeal" class = "form-control margin-bottom-20" name="twitter" value="{{ Auth::user()->twitter }}">
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<label>Facebook Username only<span class="color-red">*</span></label>
<input type="text" placeholder="eg: mywebdeal" class = "form-control margin-bottom-20" name="facebook" value="{{ Auth::user()->facebook }}">
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<label>Instagram Username only<span class="color-red">*</span></label>
<input type="text" placeholder="eg: mywebdeal" class = "form-control margin-bottom-20" name="instagram" value="{{ Auth::user()->instagram }}">
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<label>Google Map <span class="color-red">*</span></label>
<textarea class = "form-control margin-bottom-20" rows = "3" name="map" >{{ Auth::user()->map }}</textarea>
</div>

<div class="col-md-4 col-sm-4 col-xs-12 text-right">
<button type="submit" class="btn btn-theme btn-sm">Save</button>
</div> </form>

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