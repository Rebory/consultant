<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>Admin</title>
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

<link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
<link href="{{ asset('css/jquery.tagsinput.min.css') }}" rel="stylesheet">

<!-- JavaScripts -->
<script src="{{ asset('js/modernizr.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="//cdn.ckeditor.com/4.10.1/basic/ckeditor.js"></script>
<!--  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script> -->
 <!-- <script src="{{ asset('js/jquery-1.12.4-jquery.min.js') }}"></script>  -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
 
</head>
<body>
   <!--    <div id="loader-wrapper">
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
                        <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                        <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> Language <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">English</a></li>
                              <li><a href="#">Swedish</a></li>
                              <li><a href="#">Arabic</a></li>
                              <li><a href="#">Russian</a></li>
                              <li><a href="#">chinese</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <!-- Header Top Right Social -->
                  <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                     <div class="pull-right">
                        <ul class="listnone">
                           <!-- <li><a href="login"><i class="fa fa-sign-in"></i> Log in</a></li>
                           <li><a href="register"><i class="fa fa-unlock" aria-hidden="true"></i> Register</a></li> -->
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i>{{ Auth::user()->name }} <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li ><a href="{{ url('/settings') }}">Privacy Settings</a></li>
                                 <li><a href="{{url('users/logout')}}">Logout</a></li>
                                 
                              </ul>
                           </li>
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
                                 <a href="index.php"><img src="{{ asset('images/logo.png')}}" alt="logo"> </a>
                              </li>
                           </ul>
                           <!-- menu links -->
                           <ul class="menu-links">
                              <!-- active class -->
                                <li>
                                 <a href="#">Home</a>
                              </li>
                             
                              <li>
                                 <a href="javascript:void(0)">Listing <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down multilevel  -->
                                 <ul class="drop-down-multilevel">
                                    <li>
                                       <a href="javascript:void(0)">Grid Style<i class="fa fa-angle-right fa-indicator"></i> <span class="label label-info">New</span></a>
                                       <!-- drop down second level -->
                                       <ul class="drop-down-multilevel">
                                          <li><a href="listing.html">Listing Grid 1</a></li>
                                          <li><a href="listing-1.html">Listing Grid 2</a></li>
                                          <li><a href="listing-2.html">Listing Grid 3</a></li>
                                          <li><a href="listing-7.html">Listing Featured <span class="label label-info">New</span></a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">List Style<i class="fa fa-angle-right fa-indicator"></i> </a>
                                       <!-- drop down second level -->
                                       <ul class="drop-down-multilevel">
                                          <li><a href="listing-3.html">List View 1</a></li>
                                          <li><a href="listing-4.html">List View 2</a></li>
                                          <li><a href="listing-5.html">List View 3</a></li>
                                          <li><a href="listing-6.html">List View 4</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0)">Single Ad<i class="fa fa-angle-right fa-indicator"></i> <span class="label label-info">New</span></a>
                                       <!-- drop down second level -->
                                       <ul class="drop-down-multilevel">
                                          <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                          <li><a href="single-page-listing-featured.html">Ad (Featured) <span class="label label-info">New</span></a></li>
                                          <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                          <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a></li>
                                          <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="icons.html">Classified Icons </a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Categories <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down multilevel  -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="category-2.html">Modern Variation</a></li>
                                    <li><a href="category-3.html">Minimal Variation</a></li>
                                    <li><a href="category-4.html">Fancy Variation</a></li>
                                    
                                    <li><a href="category-6.html">Flat Variation</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Dashboard <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down multilevel  -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="profile.html">User Profile</a></li>
                                    <li><a href="profile-2.html">User Profile 2</a></li>
                                    <li><a href="archives.html">Archives</a></li>
                                    <li><a href="active-ads.html">Active Ads</a></li>
                              <li><a href="pending-ads.html">Pending Ads</a></li>
                                    <li><a href="favourite.html">Favourite Ads</a></li>
                                    <li><a href="messages.html">Message Panel</a></li>
                                    <li><a href="deactive.html">Account Deactivation</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down full width -->
                                 <div class="drop-down grid-col-12">
                                    <!--grid row-->
                                    <div class="grid-row">
                                       <!--grid column 2-->
                                       <div class="grid-col-3">
                                          <h4>Blog</h4>
                                          <ul>
                                             <li><a href="blog.html">Blog With Right Sidebar</a></li>
                                             <li><a href="blog-1.html">Blog With Masonry Style</a></li>
                                             <li><a href="blog-2.html">Blog Without Sidebar</a></li>
                                             <li><a href="blog-details.html">Single Blog </a></li>
                                             <li><a href="blog-details-1.html">Single Blog (Adsense) </a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
                                       <div class="grid-col-3">
                                          <h4>Miscellaneous</h4>
                                          <ul>
                                             <li><a href="about.html">About Us</a></li>
                                             <li><a href="cooming-soon.html">Comming Soon</a></li>
                                             <li><a href="elements.html">Shortcodes</a></li>
                                             <li><a href="error.html">404 Page</a></li>
                                             <li><a href="faqs.html">FAQS</a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
            
                                       <div class="grid-col-3">
                                          <h4>Others</h4>
                                          <ul>
                                             <li><a href="login.html">Login</a></li>
                                             <li><a href="register.html">Register</a></li>
                                             <li><a href="pricing.html">Pricing</a></li>
                                             <li><a href="site-map.html">Site Map</a></li>
                                             <li><a href="post-ad-1.html">Post Ad</a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
                                       <div class="grid-col-3">
                                          <h4>Detail Page</h4>
                                          <ul>
                                             <li><a href="post-ad-2.html">Post Ad 2</a></li>
                                             <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                             <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                             <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a></li>
                                             <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Drop Down <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down multilevel  -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="#">Item one</a></li>
                                    <li>
                                       <a href="javascript:void(0)">Items Right Side <i class="fa fa-angle-right fa-indicator"></i> </a>
                                       <!-- drop down second level -->
                                       <ul class="drop-down-multilevel">
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-buysellads"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-dashcube"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-medium"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-leanpub"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i> </a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                       </ul>
                                    </li>
                                    <li><a href="#">Item 2</a></li>
                                    <li>
                                       <a href="javascript:void(0)">Items Left Side <i class="fa fa-angle-left fa-indicator"></i> </a>
                                       <!-- add class left-side -->
                                       <ul class="drop-down-multilevel left-side">
                                          <li>
                                             <a href="#"> <i class="fa fa-forumbee"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-hotel"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-automobile"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level 2 <i class="fa fa-plus fa-indicator"></i> </a>
                                             <!--drop down second level-->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-bookmark"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-bell"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-soccer-ball-o"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-life-ring"></i> Level 2</a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li><a href="#">Item 4</a>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="contact.html">Contact </a></li>
                           </ul>
                           <ul class="menu-search-bar">
                              <li>
                                 <a href="post-ad-1.html" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i> Post Free Ad</a>
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