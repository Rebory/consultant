@extends('layouts.userlayout.userApp')
@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{ url('/home') }}">Home</a></li>
<li><a class="active" href="{{ url('/settings') }}">Settings</a></li>
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
<li class="active"><a href="#password" data-toggle="tab">Change Password</a></li>
<li><a href="{{url('/settings-cover')}}">Change Cover</a></li>
<!-- <li><a href="#payment" data-toggle="tab">Plan Setting</a></li> -->
<li><a href="#settings" data-toggle="tab">Notification Settings</a></li>
</ul>
<div class="tab-content">

@if ($message = Session::get('error'))
<div class="alert alert-danger divhide5">
<p>{{ $message }}</p>
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success divhide5">
<p>{{ $message }}</p>
</div>
@endif

<div class="profile-edit tab-pane fade in active" id="password">
<!-- <h2 class="heading-md">Manage your Password</h2>
<p>Manage Your Account</p> -->
<div class="clearfix"></div>
<form method="post" action="{{ url('/update-pass') }}">
@csrf
<div class="row">
<hr>

<div class="col-md-10 col-sm-10 col-xs-12 {{ $errors->has('cpass') ? 'has-error' : '' }}">
<label>Currunt Password <span style="display:none;" class="label label-info" id="chkPwd"></span></label>
<input type="password" id="cpass" class="form-control margin-bottom-20" name="cpass" >
</div>
<div class="col-md-10 col-sm-10 col-xs-12 {{ $errors->has('npass') ? 'has-error' : '' }}">
<label>New Password <span class="color-red">*</span></label>
<input type="password" class="form-control margin-bottom-20" name="npass" value="">

</div>
<div class="col-md-3 col-sm-6 col-xs-12 text-left">
<br>
<button type="submit" class="btn btn-theme btn-sm">Update</button>
</div>
</form>
</div>
</div>


<div class="profile-edit tab-pane fade" id="settings">
<h2 class="heading-md">Manage your Notifications.</h2>
<p>Below are the notifications you may manage.</p>
<br>
<form>
<div class="skin-minimal">
<ul class="list">
<li>
<input  type="checkbox" id="minimal-checkbox-1">
<label for="minimal-checkbox-1">Send me email notification when Ad is processed</label>
</li>
<li>
<input  type="checkbox" id="minimal-checkbox-2">
<label for="minimal-checkbox-2">Send me email notification when user comment</label>
</li>
<li>
<input  type="checkbox" id="minimal-checkbox-3">
<label for="minimal-checkbox-3">Send me email notification for the latest update</label>
</li>
<li>
<input  type="checkbox" id="minimal-checkbox-4">
<label for="minimal-checkbox-4"> Receive our monthly newsletter</label>
</li>
<li>
<input  type="checkbox" id="minimal-checkbox-5">
<label for="minimal-checkbox-5">Email notification</label>
</li>
</ul>
</div>
<div class="button-group margin-top-20">
<button class="btn btn-sm btn-default" type="button">Reset</button>
<button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
</div>
</form>
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