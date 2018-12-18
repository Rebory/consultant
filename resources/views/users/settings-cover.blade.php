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
            <div class="alert alert-danger divhide5">
               <p>{{ $message }}</p>
            </div>
            @endif

            @if ($message = Session::get('success'))
            <div class="alert alert-success divhide5">
               <p>{{ $message }}</p>
            </div>
            @endif
   <!-- Row -->
   <div class="profile-section margin-bottom-20">
      <div class="profile-tabs">
        <ul class="nav nav-justified nav-tabs">
          <li><a href="{{url('/settings')}}">Change Password</a></li>
          <li class="active"><a href="{{url('/settings-cover')}}">Change Cover</a></li>
           <!-- <li><a href="#payment" data-toggle="tab">Plan Setting</a></li> -->
          <!-- <li><a href="#settings" data-toggle="tab">Notification Settings</a></li> -->
      </ul>
         <div class="tab-content">
         
            <div class="profile-edit tab-pane fade in active" id="password">
               <!-- <h2 class="heading-md">Manage your Password</h2>
               <p>Manage Your Account</p> -->
               <!-- <div class="clearfix"></div> -->
               <form method="post" action="{{url('/settings-uptcover')}}" enctype="multipart/form-data" >
                  @csrf
                
                     <div class="row margin-bottom-20">
                        <div class="form-group">
                           <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                        
                              <img id="img-upload" class="img img-responsive" style="max-height: 315px;" src="{{asset(Auth::user()->upic)}}" alt="" />
                           </div>
                        </div> </div>
                        <!-- <div class="clearfix"></div> -->
                           <div class="col-md-9 col-sm-12 col-xs-12">
                              <div class="input-group">
                                 <span class="input-group-btn">
                                    <span class="btn btn-default btn-file margin-bottom-20">
                                       Browse… <input type="file" id="imgInp" name="cover">
                                    </span>
                                 </span>
                                 <input type="text" class="form-control" readonly>
                              </div>
                         </div>
                     
                     
                       <div class="col-md-3 col-sm-12 col-xs-12 text-right">
                           <button type="submit" class="btn btn-theme btn-lg">Update Cover</button>
                        </div>
               
                        
                  </form>
               </div>
               </div> </div>
               <div class="profile-edit tab-pane fade" id="payment">
                  <!-- <h2 class="heading-md">Manage your Package Settings</h2>
                  <p>Below are the payment options for your account.</p> -->
                  <br>
                  <form action="#" id="sky-form" class="sky-form" novalidate>
                     <!--Checkout-Form-->
                     <dl class="dl-horizontal">
                        <dt><strong>Current Plan</strong></dt>
                        <dd>
                        Premium
                        </dd>
                        <dt><strong>Expiration Date </strong></dt>
                        <dd>
                        2nd January 2017
                        </dd>
                     </dl>
                     <div class="row">
                        <div class="col-sm-12 col-md-12 margin-bottom-20">
                           <label>Select Plan You Want To Change<span class="color-red">*</span></label>
                           <select class="form-control">
                              <option value="0">Free</option>
                              <option value="1">Premium</option>
                              <option value="2">Advanced</option>
                           </select>
                        </div>
                     </div>
                     <button class="btn btn-sm btn-default" type="button">Cancel</button>
                     <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                     <!--End Checkout-Form-->
                  </form>
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