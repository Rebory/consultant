@extends('layouts.adminlayout.adminApp')
@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="{{ url('admin/dashboard') }}">Home</a></li>
<li><a href="{{ url('admin/sliders') }}">Sliders</a></li>
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
<li class="active"><a href="#edit" data-toggle="tab">Add New slider</a></li>
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
<a class="label label-warning pull-right" href="{{ url('admin/sliders')}}">back</a>

<div class="clearfix"></div>
<form id="selectForm2" class="parsley-style-1 form-horizontal" method="post" action="{{ route('sliders.store') }}" enctype="multipart/form-data" >
@csrf
<div class="panel">

<!-- Accordion title -->
<div class="panel-heading">
<!-- Accordion content -->
<div id="demo-acc-panel-3" class="panel-collapse collapse in">
<div class="panel-body">

                    
                            <div class="col-md-12 col-sm-12 col-xs-12">
                        
                              <img id="img-upload" class="img img-responsive" style="max-height: 315px;" src="#" alt="" />
                          
                        </div> 
                        <!-- <div class="clearfix"></div> -->
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="input-group">
                                 <span class="input-group-btn">
                                    <span class="btn btn-default btn-file margin-bottom-20">
                                       Browse… <input type="file" id="imgInp" name="banner">
                                    </span>
                                 </span>
                                 <input type="text" class="form-control" readonly>
                              </div>
                         </div>


<div class="col-md-12 col-sm-12 col-xs-12">
<label >Text 1</label>
<input type="text" class="form-control margin-bottom-20" name="txt1">
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<label >Text 2</label>
<input type="text" class="form-control margin-bottom-20" name="txt2">
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<label >Text 3</label>
<input type="text" class="form-control margin-bottom-20" name="txt3">
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<label >Text 4</label>
<input type="text" class="form-control margin-bottom-20" name="txt4">
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<label >Text 5</label>
<input type="text" class="form-control margin-bottom-20" name="txt5">
</div>


<div class="col-md-4 col-md-offset-8">
<button type="submit" class="btn btn-theme pull-right"> Save </button>
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