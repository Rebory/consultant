@extends('layouts.adminlayout.adminApp')
@section('content')

<!-- Small Breadcrumb -->
      <div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>
                  <li><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                  <li><a class="active" href="#">Dashboard</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
@include('layouts.adminlayout.leftsidebar')


      <div class="col-md-8 col-sm-12 col-xs-12">
                     <!-- Row -->
                     <div class="grid-card">
                        <div class="heading-panel">
                           <h3 class="main-title text-left">
                              Dashboard
                           </h3>
                        </div>
                        <div class="row">
                          
                              <div class="col-md-12 col-sm-12">
                                 <div class="alert alert-dismissible alert-info"> 
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