@extends('layouts.userlayout.userApp')

@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
   <div class="container">
      <div class=" breadcrumb-link">
         <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a class="active" href="#">Dashboard</a></li>
         </ul>
      </div>
   </div>
</div>
<!-- Small Breadcrumb -->
<div class="col-md-12 col-sm-12 col-xs-12">
   <!-- Row -->
   <div class="grid-card">
      <div class="heading-panel">
         <h3 class="main-title text-left">
         Verify Mobile First    
         </h3>
      </div>
      
      
      <div class="panel panel-body ">

         
         

@if ($message = Session::get('error'))
<div class="alert alert-danger divhide5">
<p>{{ $message }}</p>
</div>
@endif



@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif





        
            <div class="row">
                 <form id="selectForm2" class="form-horizontal"  method="post" action="{{ url('/finalverifyOTP') }}" >
           @csrf

                  <div class="col-md-4 col-sm-12 col-xs-12">
                   <input type="text" class="form-control margin-bottom-20" name="mobile" value="{{ Auth::user()->mobile }}" readonly="true">
                  </div>

                  <div class="col-md-4 col-sm-12 col-xs-12">
                     <input type="number" class="form-control margin-bottom-20 " name="otp" placeholder="Enter 6 digit OTP" id="otp">
                  </div>
                  <div class="col-md-2 col-sm-12 col-xs-12">
                     <input class="btn btn-success" type="submit" name="verifyBtn" value="verify">
                  </div>
               </form>
            </div>
            </div> <!-- end row -->
            
            <!-- <div style="height: 300px;"> </div> -->
            <!-- </div> end main 8 col -->
         </div>
         <!-- Row End -->
      </div>
      <!-- Middle Content Area  End -->
   </div>
   <!-- Row End -->
</div>
<!-- Main Container End -->
</section>

 
@endsection