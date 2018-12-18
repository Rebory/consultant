 <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-4 col-sm-12 col-xs-12 leftbar-stick blog-sidebar">
                     <!-- Sidebar Widgets -->
                     <div class="user-profile">
                        <a href="#"><img src="{{ asset(Auth::user()->upic) }}" alt=""></a>
                        <div class="profile-detail">
                           <h4>{{ Auth::user()->name }}</h4>
                         
                        </div>
                        <ul>
                           <li  class="active"><a href="{{ url('/home') }}">Dashboard</a></li>
                          <!--  <li ><a href="#">My Ads <span class="badge">45</span></a></li>
                           <li><a href="#">Favourites Ads <span class="badge">15</span></a></li>
                           <li><a href="#">Archives</a></li> -->
                           <li ><a href="{{ url('/profile') }}">Profile</a></li>
                           <!-- <li ><a href="#">Messages</a></li> -->
                           <li ><a href="{{ url('/settings') }}">Settings</a></li>
                           <!-- <li><a href="">Logout</a></li> -->
                        </ul>
                     </div>
                     <!-- Categories --> 
                   <!--   <div class="widget">
                        <div class="widget-heading">
                           <h4 class="panel-title"><a>Change Your Plan</a></h4>
                        </div>
                        <div class="widget-content">
                           <select class=" form-control">
                              <option label="Select Option"></option>
                              <option value="0">Free</option>
                              <option value="1">Premium</option>
                              <option value="2">Featured</option>
                           </select>
                        </div>
                     </div> -->
                  </div>