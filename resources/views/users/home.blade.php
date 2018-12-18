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
@include('layouts.userlayout.leftsidebar')


      <div class="col-md-8 col-sm-12 col-xs-12">
                  @if ($errors->any())
<div class="alert alert-solid alert-danger divhide5">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-solid alert-danger divhide5">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{!! session('error') !!}</strong>
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-solid alert-success divhide5">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong>{!! session('success') !!}</strong>
</div>
@endif
                     <!-- Row -->
                     <div class="grid-card">
                        <div class="heading-panel">
                           <h3 class="main-title text-left">
                              Dashboard
                           </h3>
                        </div>
                        <div class="row">
                          
                              <div class="col-md-12 col-sm-12">
                                 <div class="alert alert-dismissible alert-success"> 
                                <h2>You are logged as {{ Auth::user()->name }}</h6>
                                 </div>
                              </div>
                             

                           <div style="height: 300px;"> </div>


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