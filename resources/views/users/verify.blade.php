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
        
            <div class="row">
              

                <form method="post" action="{{ url('/sendotp') }}">
        @csrf
               <div class="col-md-4 col-sm-12 col-xs-12">
                 
                     <input type="text" id="mobile" class="form-control margin-bottom-20" name="mobile" onKeyPress="if(this.value.length==10) return false;"  value="{{ Auth::user()->mobile }}" readonly="true">
                  </div>
                  <div class="col-md-2 col-sm-12 col-xs-12">
                     <input class="btn btn-success" type="submit" name="Send" value="Request OTP" >
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

@endsection