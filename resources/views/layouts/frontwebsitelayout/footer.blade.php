     

<section style="padding-top:15px;padding-bottom: 15px;">
<div class="container">
<div class="row">
<div class="col-md-12  col-sm-12 col-xs-12">
   @foreach($usertags as $tag)
<a class="label label-info" href="{{$sitename}}pages/{{$tag->id}}" style="margin-left: 5px;"> <span class="glyphicon glyphicon-tag"></span> {{ $tag->name}} </a>
@endforeach
</div>
</div>
</div>
</section>
     <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <footer>
            <!-- Footer Content -->
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3  col-sm-6 col-xs-12">
                        <!-- Info Widget -->
                        <div class="widget">
                           <div class="logo"> <img alt="" src="{{ asset($logos[0]->image) }}"> </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dolor eget erat fringilla port.</p>
                          <!--  <ul>
                              <li><img src="images/appstore.png" alt=""></li>
                              <li><img src="images/googleplay.png" alt=""></li>
                           </ul> -->
                        </div>
                        <!-- Info Widget Exit -->
                     </div>
                     <div class="col-md-3  col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget socail-icons">
                           <h5>Follow Us</h5>
                           <ul>
                              <li><a class="fb" href="#"><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
                              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
                              <!-- <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a><span>Linkedin</span></li> -->
                              <!-- <li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a><span>Google+</span></li> -->
                           </ul>
                        </div>
                        <!-- Follow Us End -->
                     </div>
                     <div class="col-md-6  col-sm-6 col-xs-12">
                        <!-- Newslatter -->
                        <div class="widget widget-newsletter">
                           <h5>Singup for Weekly Newsletter</h5>
                           <div class="fieldset">
                              <p>We may send you information about related events, webinars, products and services which we believe.</p>
                              <form>
                                 <input class="" value="Enter your email address" type="text">
                                 <input class="submit-btn" name="submit" value="Submit" type="submit"> 
                              </form>
                           </div>
                        </div>
                        <!-- Newslatter -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Copyrights -->
            <div class="copyrights">
               <div class="container">
                  <div class="copyright-content">
                     <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                           <p>© 2018 Immigration Consultant Listing All rights reserved.</p> </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           <p class="pull-right">Design by <a href="http://mywebdeal.xyz/" target="_blank">My Web Deal</a> </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End -->
      <!-- Post Ad Sticky -->
 <!--      <a href="#" class="sticky-post-button hidden-xs">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
         <h4>SELL</h4>
      </a> -->
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
     
      
      <!-- / Product Preview Popup -->
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="{{ asset('js/jquery.min.js') }}""></script>
      <!-- Bootstrap Core Css  -->
      <script src="{{ asset('js/bootstrap.min.js') }}""></script>
      <!-- Jquery Easing -->
      <script src="{{ asset('js/easing.js') }}""></script>
      <!-- Menu Hover  -->
      <script src="{{ asset('js/forest-megamenu.js') }}"></script>
      <!-- Jquery Appear Plugin -->
      <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
      <!-- Numbers Animation   -->
      <script src="{{ asset('js/jquery.countTo.js') }}"></script>
      <!-- Jquery Smooth Scroll  -->
      <script src="{{ asset('js/jquery.smoothscroll.js') }}"></script>
      <!-- Jquery Select Options  -->
      <script src="{{ asset('js/select2.min.js') }}"></script>
      <!-- noUiSlider -->
      <script src="{{ asset('js/nouislider.all.min.js') }}"></script>
      <!-- Carousel Slider  -->
      <script src="{{ asset('js/carousel.min.js') }}"></script>
      <script src="{{ asset('js/slide.js') }}"></script>
      <!-- Image Loaded  -->
      <script src="{{ asset('js/imagesloaded.js') }}"></script>
      <script src="{{ asset('js/isotope.min.js') }}"></script>
      <!-- CheckBoxes  -->
      <script src="{{ asset('js/icheck.min.js') }}"></script>
      <!-- Jquery Migration  -->
      <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
      <!-- Sticky Bar  -->
      <script src="{{ asset('js/theia-sticky-sidebar.js') }}"></script>
      <!-- Style Switcher -->
      <script src="{{ asset('js/color-switcher.js') }}"></script>
      <!-- Template Core JS -->
      <script src="{{ asset('js/custom.js') }}"></script>

       <script src="{{ asset('js/custom.js') }}"></script>
      <!-- For this Page Only -->
      <!-- Ckeditor  -->
      <script src="{{ asset('js/ckeditor/ckeditor.js') }}" ></script>
      <!-- Ad Tags  -->
      <script src="{{ asset('js/jquery.tagsinput.min.js') }}"></script>
      <!-- DROPZONE JS  -->
      <script src="{{ asset('js/dropzone.js') }}" ></script>
      <script src="{{ asset('js/form-dropzone.js') }}" ></script>


      
      <script type="text/javascript">
   function mask(textbox, e) {

      var charCode = (e.which) ? e.which : e.keyCode;
      if (charCode == 46 || charCode > 31&& (charCode < 48 || charCode > 57)) 
         {
            //alert("Only Numbers Allowed");
            return false;
         }
     else
         {
             return true;
         }
       }

</script>

 <script type="text/javascript">
/*--------- Textarea Ck Editor --------*/
        CKEDITOR.replace( 'editor1' );
       
      /*--------- Ad Tags --------*/ 
       $('#tags').tagsInput({
            'width':'100%'
       });
      
         /*--------- create remove function in dropzone --------*/
         Dropzone.autoDiscover = false;
         var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
         var fileList = new Array;
         var i = 0;
         $("#dropzone").dropzone({
           addRemoveLinks: true,
           maxFiles: 5, //change limit as per your requirements
         acceptedFiles: '.jpeg,.jpg,.png,.gif',
           dictMaxFilesExceeded: "Maximum upload limit reached",
           acceptedFiles: acceptedFileTypes,
         url: "uploads",
           dictInvalidFileType: "upload only JPG/PNG",
           init: function () {
               // Hack: Add the dropzone class to the element
               $(this.element).addClass("dropzone");
           }
         });
       (jQuery);
      </script>
      <!-- JS -->


</footer>
</body>
</html>
