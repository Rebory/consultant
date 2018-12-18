@extends('layouts.frontwebsitelayout.frontApp')

@section('content')
<!-- Small Breadcrumb -->
<div class="small-breadcrumb">
    <div class="container">
        <div class=" breadcrumb-link">
            <ul>
                <li><a href="#">Home Page</a></li>
                <li><a class="active" href="#">Sign Up</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Small Breadcrumb -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding error-page pattern-bg ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-5 col-md-push-7 col-sm-12 col-xs-12">
                    <!--  Form -->
                    <div class="form-grid">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                               <span class="label label-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <!-- <div class="form-group">
                                <label>Contact Number</label>
                                <input placeholder="Enter Your Contact Number" class="form-control" type="text">
                            </div> -->
                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                               <span class="label label-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                             <div class="form-group">
                                <label>Mobile</label>
                                <input id="mobile" type="number" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('email') }}" required>
                                @if ($errors->has('mobile'))
                               <span class="label label-danger" role="alert">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                <span class="label label-danger" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                               <div class="form-group">
                                <label>Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                               
                            </div>

                          
                        <button class="btn btn-theme btn-lg btn-block">Register</button>
                    </form>
                </div>
                <!-- Form -->
            </div>
            <div class="col-md-7  col-md-pull-5  col-sm-12 col-xs-12">
                <div class="heading-panel">
                    <h3 class="main-title text-left">
                    Create Your Account
                    </h3>
                </div>
                <div class="content-info">
                    <div class="features">
                        <div class="features-icons">
                            <img src="images/icons/chat.png" alt="img">
                        </div>
                        <div class="features-text">
                            <h3>Chat & Messaging</h3>
                            <p>
                                Access your chats and account info from any device.
                            </p>
                        </div>
                    </div>
                    <div class="features">
                        <div class="features-icons">
                            <img src="images/icons/panel.png" alt="img">
                        </div>
                        <div class="features-text">
                            <h3>User Dashboard</h3>
                            <p>
                                Maintain a wishlist by saving your favourite items.
                            </p>
                        </div>
                    </div>
                    <div class="features">
                        <div class="features-icons">
                            <img src="images/icons/history.png" alt="img">
                        </div>
                        <div class="features-text">
                            <h3>Track History</h3>
                            <p>
                                Track the status of your ads history.
                            </p>
                        </div>
                    </div>
                    <div class="features">
                        <div class="features-icons">
                            <img src="images/icons/featured-listing.png" alt="img">
                        </div>
                        <div class="features-text">
                            <h3>features Listing</h3>
                            <p>
                                Get more value fro your ad.
                            </p>
                        </div>
                    </div>
                    <span class="arrowsign hidden-sm hidden-xs"><img src="images/arrow.png" alt=""></span>
                </div>
            </div>
            <!-- Middle Content Area  End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Main Container End -->
</section>
<!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
@endsection