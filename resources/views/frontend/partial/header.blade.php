<!DOCTYPE html>
<html style="" class="" lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>

      <title>Prof.Dr.Rashidul Hassan</title>
      <link rel="shortcut icon" href="">
      <script type="text/javascript">base_url = "index.html";</script>
      <!---------------------------- Bootstrap CSS ------------->
      <link href="{{asset('backend/dashboard/includes/assets/bootstrap/4.4.1/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet" />
      <!--font familly-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap" rel="stylesheet">
      <!---------------------------- Font Awesome CSS -------------->
      <link href="{{asset('backend/dashboard/includes/assets/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
      <link href="{{asset('backend/dashboard/includes/assets/fontawesome/css/brands.css')}}" rel="stylesheet">
      <link href="{{asset('backend/dashboard/includes/assets/fontawesome/css/solid.css')}}" rel="stylesheet">
      <!-- Swiper CSS -->
      <link rel="stylesheet" href="{{asset('backend/dashboard/includes/assets/slider/swiper/5.2.1/package/css/swiper.min.css')}}">
      <!---------------------------- custom CSS -------------->
      <link href="{{asset('backend/dashboard/includes/themes/best/yc/css/theme_ycbfb6.css?')}}" rel="stylesheet">
      <link href="{{asset('backend/dashboard/includes/themes/best/yc/css/menubfb6.css?')}}" rel="stylesheet">
   </head>
   <body>
      <header>
         <style>
            .swiper-container {
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
            }
            .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            }
            .swiper-pagination-bullet-active{
            background-color:#fff;
            }
            .banner_area{position: relative;}
            #close_bannaer{position: absolute; left: 10px; top: 10px;font-size:40px;z-index: 999;}
            #close_bannaer{color:#ffffff;}
            .tob_area{
            background: rgba(245, 245, 245, 0.4)!important;
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: 999;
            width: 100%;
            }
            .tob_area a, .tob_area .fa-search{color: #ffffff!important;}
            .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
            bottom: 100px;
            left: 30%;
            width: 100%;
            }
            .swiper-pagination-bullet {
            width: 15px;
            height: 15px;
            }
         </style>
         <section id="menu_bar" class="menu_bar bg-primary ">
            <a name="yc_home"></a>
            <nav class="navbar navbar-expand-lg navbar_main navbar-dark  sticky" data-toggle="sticky-onscroll" style="background-color:#163374;">
               <div class="container">
                  <div class="col-md-12">
                     <div class="row">
                        <a class="navbar-brand pl-3 pl-md-0" href="{{asset('/')}}">
                           <img  style="height: 60px;margin-left: -20px;" src="{{asset('frontend/images/logof.jpg')}}"/>

                        </a>
                        <button class="navbar-toggler mr-3 mr-md-0" type="button" data-toggle="collapse"
                           data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                           aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                           <ul class="navbar-nav  ml-auto">
                              <li class="nav-item dropdown megamenu-li">
                                 <a href="{{asset('about')}}" class="nav-link"
                                    aria-haspopup="true" aria-expanded="false">{{__('home.about')}}  </a>
                                 <!-- <div class="dropdown-menu " aria-labelledby="dropdown01">
                                    <div class="col-md-12">
                                       <div class="row megamenu">
                                          <div class="col-sm-6 col-lg-3 p-3">
                                             <h5>{{__('menu.who_we_are')}} </h5>
                                             <ul class="p-0 m-0" aria-labelledby="dropdown_About Us">
                                                <li class="dropdown-item"><a href="pages/1806/who-we-are.html"> Who we are </a>
                                                </li>
                                                <li class="dropdown-item"><a href="pages/1807/what-we-do.html"> What we do </a>
                                                </li>
                                                <li class="dropdown-item"><a href="pages/1808/mission-and-vision.html"> Mission and Vision </a>
                                                </li>
                                                <li class="dropdown-item"><a href="post/388/yunus-centre-partners.html"> Partners </a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="col-sm-6 col-lg-3  p-3">
                                             <h5>Search For</h5>
                                             <ul class="p-0 m-0" aria-labelledby="dropdown_About Us">
                                                <li class="dropdown-item"><a href="scholarship/one-young-world-2020.html"> Scholarship </a>
                                                </li>
                                                <li class="dropdown-item"><a href="search5fa2.html?keyword=Investors"> Investors </a>
                                                </li>
                                                <li class="dropdown-item"><a target="_blank" href="http://socialbusinesspedia.com/apps/application_bank/sbv/registration"> SB Volunteer </a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="col-sm-6 col-lg-3  p-3">
                                             <h5>Career</h5>
                                             <ul class="p-0 m-0" aria-labelledby="dropdown_About Us"> -->
                                                <!--                                            <li class="dropdown-item"><a href="https://www.muhammadyunus.org/post/2111/submit-your-cv"> Job Opportunity </a>
                                                   </li>
                                                   -->
                                                <!-- <li class="dropdown-item"><a href="post/2111/submit-your-cv.html"> - Submit your CV </a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="col-sm-6 col-lg-3  p-3">
                                             <h5>Contact Us</h5>
                                             <ul class="p-0 m-0">
                                                <li class="dropdown-item">
                                                   <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-mobile-alt text-theme-color"></i></span>
                                                   <span class="d-inline-block width-85 vertical-align-top padding-10px-left">+88 02 9023010</span>
                                                </li>
                                                <li class="dropdown-item">
                                                   <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-envelope text-theme-color"></i></span>
                                                   <span class="d-inline-block width-85 vertical-align-top padding-10px-left">info@yunuscentre.org</span>
                                                </li>
                                                <li class="dropdown-item"><a href="contact-us.html"> Contact Us </a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div> -->
                              </li>
                              <li class="nav-item dropdown megamenu-li">
                                 <a href="{{asset('rashidulhassanprofile')}}" class="nav-link"
                                    aria-haspopup="true" aria-expanded="false">{{__('home.profile')}}  </a>

                              </li>

                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="dropdown_media" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('home.healthcare')}}                            </a>
                                 <ul class="dropdown-menu shadow" aria-labelledby="dropdown_media">

                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('copd')}}"> {{__('home.copd')}} </a>
                                    </li>
                                     <li class="dropdown-item"><a
                                       target=""  href="{{asset('covid')}}"> {{__('home.covid19')}}</a>
                                    </li>
                                    <li class="dropdown-item"><a
                                       target=""  href=""> {{__('home.astham')}}</a>
                                    </li>
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('pr')}}"> PR</a>
                                    </li>

                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('paparp')}}"> {{__('home.papqr')}}</a>
                                    </li>
                                     <li class="dropdown-item"><a
                                       target=""  href="{{asset('ozonetherapy')}}"> Ozone Therapy</a>
                                    </li>
                                     <!-- <li class="dropdown-item"><a
                                       target=""  href=""> Others</a>
                                    </li>-->

                                 </ul>
                              </li>


                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="dropdown_publication" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 {{__('home.socialworks')}}                      </a>
                                 <ul class="dropdown-menu shadow" aria-labelledby="dropdown_publication">
                                     <li class="dropdown-item"><a
                                       target=""  href="{{asset('educationscholarship')}}">{{__('home.educationscholarship')}}</a>
                                    </li>
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('reliefandcharity')}}"> {{__('home.charity')}}</a>
                                    </li>
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('medicalprograms')}}"> {{__('home.medicalprograms')}}</a>
                                    </li>
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('betterliving')}}">{{__('home.living')}}</a>
                                    </li>

                                 </ul>
                              </li>
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="dropdown_media" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('home.researchandpublications')}}                           </a>
                                 <ul class="dropdown-menu shadow" aria-labelledby="dropdown_media">
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('ongoingproject')}}">{{__('home.ongoing')}} </a>
                                    </li>
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('booklist')}}"> {{__('home.books')}}</a>
                                    </li>
                                  <!--  <li class="dropdown-item"><a
                                       target=""  href="{{asset('booklist')}}"> {{__('home.booksreview')}}</a>
                                    </li>
                                    -->
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('article')}}"> {{__('home.articles')}} </a>
                                    </li>
                                    <!--<li class="dropdown-item"><a
                                       target=""  href="{{asset('guidelines')}}">{{__('home.guidelines')}} </a>
                                    </li>-->

                                 </ul>
                              </li>
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="dropdown_media" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('home.media')}}                           </a>
                                 <ul class="dropdown-menu shadow" aria-labelledby="dropdown_media">
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('news')}}">{{__('home.news')}} </a>
                                    </li>
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('photogellaryfolder')}}"> {{__('home.photogallery')}}</a>
                                    </li>
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('videogellaryfolder')}}"> {{__('home.videogallery')}}  </a>
                                    </li>

                                 </ul>
                              </li>
                              <!--<li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="dropdown_media" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('home.acknowledgement')}}                            </a>
                                 <ul class="dropdown-menu shadow" aria-labelledby="dropdown_media">
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('achievements')}}">{{__('home.achievements')}} </a>
                                    </li>
                                    <li class="dropdown-item"><a
                                       target=""  href="{{asset('affiliations')}}"> {{__('home.apllication')}}</a>
                                    </li>


                                 </ul>
                              </li>-->



                               <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="dropdown_ysbc" role="button"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('home.contacts')}}                   </a>
                                <ul class="dropdown-menu shadow" aria-labelledby="dropdown_ysbc">


                                    <!--<li class="dropdown-item"><a
                                        href="{{asset('contactus')}}"> {{__('home.forappointment')}} </a>
                                    </li>-->
                                    <li class="dropdown-item"><a
                                        href="{{asset('contactus')}}">{{__('home.generalquery')}} </a>
                                    </li>
                                 </ul>

                               </li>
                              <li class="nav-item" style="background-color:#CACED6">


                                 <li class="nav-item dropdown">
                                 <a class="nav-link " href="locale/en" id="dropdown_ysbc" role="button"
                                     aria-haspopup="true" aria-expanded="false">
                                 English                      </a>
                                 <ul class="dropdown-menu shadow" aria-labelledby="dropdown_ysbc">


                                    <li class="dropdown-item"><a
                                        href="locale/bn"> Bangla </a>
                                    </li>

                                 </ul>
                              </li>





                             </li>




                           </ul>
                           <style>
                              .megamenu h5{    font-size: 16px;
                              border-bottom: 1px solid var(--color_one);
                              }
                              .megamenu .dropdown-item {
                              font-size: 13px;
                              padding-top: 0px;
                              padding-bottom:0px;
                              border-bottom: 1px solid var(--color_seven);
                              padding-left: 10px;
                              }
                           </style>
                        </div>
                     </div>
                  </div>
               </div>
            </nav>

         </section>
      </header>
