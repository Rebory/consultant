<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>@yield('title') Immigration Consultants listing in Punjab</title> 
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
      <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="author" content="ScriptsBundle">
<link rel="icon" href="{{ asset('images/favicon.ico'
) }}" type="image/x-icon" />
<!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
<!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css">
<!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
<link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
<!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
<link rel="stylesheet" href="{{ asset('css/et-line-fonts.css') }}" type="text/css">
<!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
<link rel="stylesheet" href="{{ asset('css/forest-menu.css') }}" type="text/css">
<!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" type="text/css">
<!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
<link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
<!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
<link href="{{ asset('css/nouislider.min.css') }}" rel="stylesheet">
<!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
<link href="{{ asset('css/slider.css') }}" rel="stylesheet">
<!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}">
<!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
<link href="{{ asset('skins/minimal/minimal.css') }}" rel="stylesheet">
<!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
<link href="{{ asset('css/responsive-media.css') }}" rel="stylesheet">
<!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
<link rel="stylesheet" id="color" href="{{ asset('css/colors/defualt.css') }}">
<!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
<link rel="stylesheet" id="theme-color" type="text/css" href="#" />
<!-- JavaScripts -->
<script src="{{ asset('js/modernizr.js') }}"></script>

 <link href="skins/minimal/minimal.css" rel="stylesheet">
      <!-- =-=-=-=-=-=-= For This Page Only =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
      <link href="{{ asset('css/jquery.tagsinput.min.css') }}" rel="stylesheet">
      <!-- JavaScripts -->
      <script src="{{ asset('js/modernizr.js') }}"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->

</head>
<body>
    <!--   <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div> -->
     
      <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->
         <div class="header-top">
            <div class="container">
               <div class="row">
                  <!-- Header Top Left -->
                  <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                     <ul class="listnone">
                        <li><a href="{{$sitename}}"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                        <li><a href="{{$sitename}}"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>
                       <!--  <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> Language <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">English</a></li>
                              <li><a href="#">Punjabi</a></li>
                              
                           </ul>
                        </li> -->
                     </ul>
                  </div>
                  <!-- Header Top Right Social -->
                  <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                     <div class="pull-right">
                        <ul class="listnone">
                           <li><a href="{{$sitename}}login"><i class="fa fa-sign-in"></i> Log in</a></li>
                           <li><a href="{{$sitename}}register"><i class="fa fa-unlock" aria-hidden="true"></i> Register</a></li>

                            
                        <!--    <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> Username <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="{{ url('/users/logout') }}">Logout</a></li>
                                 
                              </ul>
                           </li> -->
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Top Bar End -->
         <!-- Navigation Menu -->
         <div class="clearfix"></div>
        
    
    
         <!-- menu start -->
            <nav id="menu-1" class="mega-menu">
               <!-- menu list items container -->
               <section class="menu-list-items">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                           <!-- menu logo -->
                           <ul class="menu-logo">
                              <li>
                                 <a href="{{ url('/')}}"><img src="{{ asset($logos[0]->image) }}" alt="logo"> </a>
                              </li>
                           </ul>
                           <!-- menu links -->
                           <ul class="menu-links">
                              <!-- active class -->
                                <li>
                                 <a href="{{ url('/')}}">Home</a>
                              </li>
                                <!-- using for each if dynamic navs as nav) -->
                              <li><a href="#">Immigration Consultant Listing </a></li>
                              <!-- endforeach -->
                           
                           </ul>
                           <ul class="menu-search-bar">
                              <li>
                                 <a href="#" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i> Post Free Ad</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </nav>
         <!-- menu end -->
      </div>
      <!-- Navigation Menu End -->
      <!-- =-=-=-=-=-=-= Light Header End  =-=-=-=-=-=-= -->