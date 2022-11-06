 <footer>
         <section class="footer_area" style="background-color:#163374">
            <div class="container py-5">
               <div class="row">
                  <div class="col-lg-4 col-md-6 ">
                     <img alt="footer-logo" src="{{asset('frontend/images/logof.jpg')}}">
                    <!--  <p class="text-white text-center"> Global Hub for Social Business</p>
                     <ul class="footer_list">
                        <li>
                           <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-map-marker-alt text-theme-color"></i></span>
                           <span class="d-flax width-85 vertical-align-top padding-10px-left">ingenious Fulmo Fit                      3rd Floor
                           Shaymoli, Dhaka 1216</span>
                        </li>
                        <li>
                           <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-mobile-alt text-theme-color"></i></span>
                           <span class="d-inline-block width-85 vertical-align-top padding-10px-left">+88 02 9023010</span>
                        </li>
                        <li>
                           <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-envelope text-theme-color"></i></span>
                           <span class="d-inline-block width-85 vertical-align-top padding-10px-left">info@drrashidulhassan.org</span>
                        </li>
                     </ul> -->
                  </div>
                  <div class="col-lg-4 col-md-6 mx-3 mx-md-0">
                     <h3 class="footer-title-style3 ">Quick Links</h3>
                     <div class="row footer-list">
                        <a class="nav-link " href="#"> About Us</a>
                        <a class="nav-link " href="#"> Events</a>

                        <a class="nav-link " href="#"> AURKO</a>
                        <a class="nav-link " href="#"> Visit Program</a>
                        <a class="nav-link " href="#"> News</a>
                        <a class="nav-link " href="#"> Publication</a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mx-3 mx-md-0">
                     <div class="padding-30px-left sm-no-padding-left">
                        <h3 class="footer-title-style3">Website</h3>

                        <ul class="list_container no-margin-bottom p-0">
                           <li class="mb-2"> <a href="" target="_blank">
                              <img src="{{asset('frontend/images/ingenious.png')}}" class="img-circle" alt="img" height="20">
                              <span class="label font-weight-600"> Ingenious Pulmo Fit </span>
                              </a>
                           </li>
                           <li>
                              <a href="http://aurkofoundation.com/" target="_blank">
                              <img src="{{asset('frontend/images/logoex.jpg')}}" width="19">
                              <span class="label font-weight-600">Aurko Foundation</span></a>
                           </li>
                        </ul>
                        <!--                    <ul class="footer-list">
                           <li class="nav-item px-2">
                               <a href="http://socialbusinesspedia.com/" target="_blank"><img src="/ycweb/img/yunus.jpg" class="img-circle" alt="img" height="20" style="display:inline-block;margin-left:10px;"> Professor Yunus </a>
                           </li>
                           <li class="nav-item border_left  px-2">
                               <a href=""><img src="http://socialbusinesspedia.com/img/logo/social-business-pedia-logo.png" width="19"> Social Business Pedia </a>
                           </li>
                           </ul>-->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="footer_copyright">
            <div class="container">
               <div class="row">
                <!--  <div class="col-md-12 px-4 pt-4">
                     <p class="text_copyright   text-center text-white">

                        Copyright ©2021-2022 ingenious Fulmo Fit.org All Rights Reserved

                     </p>
                  </div>-->
               </div>
            </div>
         </section>
         <style>
            a.hitCounter{color: #ffffff;
            font-size: 10px!important;
            background-image: none!important;
            text-indent: 0px!important;
            padding: 0px!important;
            min-width: auto!important;
            }
         </style>
      </footer>
      <a href="#" class="js-cd-top scroll-top scroll-top-visible"><i class="fa fa-chevron-up"></i></a>
      <!-- Core JS -->
      <script src="{{asset('backend/dashboard/includes/assets/jquery/core/jquery-3.3.1.slim.min.js')}}"></script>
      <!-- bootstrap JS -->
      <script src="{{asset('backend/dashboard/includes/assets/bootstrap/4.4.1/js/popper.min.js')}}"></script>
      <script src="{{asset('backend/dashboard/includes/assets/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
      <!-- Swiper JS -->
      <script src="{{asset('backend/dashboard/includes/assets/slider/swiper/5.2.1/package/js/swiper.min.js')}}"></script>
      <!-- Custom JS -->
      <script src="{{asset('backend/dashboard/includes/themes/best/yc/js/theme_ycbfb6.js?')}}"></script>
      <script src="{{asset('backend/dashboard/includes/assets/masonry/masonry.pkgd.min.js')}}"></script>
      <style>
         * { box-sizing: border-box; }
         .masonry_grid:after {
         content: '';
         display: block;
         clear: both;
         }
         .masonry_item {
         height: auto;
         float: left;
         padding: 10px;
         /*border: 1px solid #333;*/
         /*border-color: hsla(0, 0%, 0%, 0.5);*/
         border-radius: 5px;
         margin-bottom: 10px;
         }
      </style>
      <script>
         $('.masonry_grid').masonry({
             itemSelector: '.masonry_item',
             columnWidth: 160,
             gutter: 20
         });


      </script>
   </body>

</html>
