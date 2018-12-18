@extends('layouts.frontwebsitelayout.frontApp')
@section('content')

<!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
<!-- <div class="page-header-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="header-page">
<h1> Reset Password</h1>
</div>
</div>
</div>
</div>
</div> -->
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
<div class="container">
<div class=" breadcrumb-link">
<ul>
<li><a href="#">Home</a></li>
<li><a class="active" href="#">Admin Reset Password</a></li>
</ul>
</div>
</div>
</div>
<!-- Small Breadcrumb -->
<!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
<!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
<section class="section-padding error-page pattern-bg ">
<!-- Main Container -->
<div class="container">
<!-- Row -->
<div class="row">
<!-- Middle Content Area -->
<div class="col-md-6 col-md-offset-3">
<!--  Form -->
<div class="form-grid"> 

  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
   <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.password.email') }}">
                        {{ csrf_field() }}
                       

                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
</div>
<!-- Form -->
</div>

</div>
<!-- Row End -->
</div>
<!-- Main Container End -->
</section>
<!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->

@endsection
