@include('frontend.partial.header')

         <section class="banner_area" style="position: relative;">
            <!--  -->
            <section class="search_area " >
               <div class="container pt-5">
                  <a href="javascript:void(0);" class="search_close float-right">X</a>
                  <div class="row  pt-5">
                     <div class="col-12  pt-5">
                        <form method="get" class="form-inline my-2 my-lg-0 p-5" action="https://www.muhammadyunus.org/search">
                           <div class="input-group col-md-12">
                              <input type="text" name="keyword" value="" class="form-control"  placeholder="Type Search Keywords..." required>
                              <div class="input-group-append">
                                 <button type="submit" class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-search"></i>Search</button>
                              </div>
                           </div>
                           <div class="  col-md-12">
                              <p>Type keywords like Social Business, Grameen Bank etc.  </p>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </section>
            <!--<a href="#"  id="close_bannaer">X</a>-->
            <div class="swiper-container swiper_fullscreen">
               <div class="swiper-wrapper">

                @foreach ($banners as $banner)
                  <div class="swiper-slide slide_area no-repeat" style="background-image:url({{asset('frontend/images/Banners')}}/{{$banner->bannerimage}})">
                     <div class="container  text-center py-5">
                     </div>
                  </div>
                @endforeach
               </div>

               <!-- Add Pagination -->
               <div class="swiper-pagination"></div>
               <!-- Add Arrows -->
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
            </div>
         </section>
         <!--    <section id="logo_bar" class="logo_bar ">
            <div class="container">
                <div  class="row py-3">
                    <div class="col-md-12">

                         <a class="navbar-brand" href="https://www.muhammadyunus.org/"><img src="https://www.muhammadyunus.org/uploads/setting/XwMva3SuRRmHFVWKLD8zNGCIriFwsYil_tn.png"/></a>

                    </div>
                </div>
            </div>
            </section>-->
      </header>
      <main>




         <section class="parallax section_top_news py-5 section_alter_bg ">
            <div class="container">
               <div class="row animatable fadeInUp"  style="text-align:center">
                  <div id="top_news" class="col-lg-12 col-md-12 mb-4 mb-md-0">

                     <h2   class="pt-0 font-weight-bold"><a href=""> {{__('heading.heading_message')}}</a></h2>
                     <p class="  py-0 font-weight-bold"></p>
                     <ul class="p-0 m-0 meta">

                       <!-- <li>
                           <a href="javascript:void(0);">
                           <i aria-hidden="true" class="fas fa-calendar-alt"></i> 22nd September 2021                </a>
                        </li>-->
                     </ul>

                        <p style="text-align:justify">{{$massages->first()->massage}}</p>

                  </div>
                  <style>
                     .section_top_news  img {
                     max-width: 100%;
                     height: auto;
                     }
                     .border-radius-5 {
                     border-radius: 5px;
                     }
                     .box-shadow-primary {
                     -webkit-box-shadow: 0 18px 38px rgba(0,0,0,0.2);
                     box-shadow: 0 18px 38px rgba(0,0,0,0.2);
                     }
                  </style>
               </div>
            </div>
         </section>


          <!--<section class="parallax section_top_news py-5 section_alter_bg ">
            <div class="container">
               <div class="row animatable fadeInUp">
                  <div style="text-align:center;"><h2   class="pt-0 font-weight-bold"><a href=""> </a></h2></div>
                  <div id="top_news" class="col-lg-12 col-md-12 mb-4 mb-md-0">


                     <p class="  py-0 font-weight-bold"></p>
                     <ul class="p-0 m-0 meta">

                       <!-- <li>
                           <a href="javascript:void(0);">
                           <i aria-hidden="true" class="fas fa-calendar-alt"></i> 22nd September 2021                </a>
                        </li>
                     </ul>

<p>“When it comes to better living, take a deep breath”. </br>



“Don’t live to Die, Live like living”.

”
</p>
                     <a class="btn btn-sm btn-outline-info" href=""><span>...read more</span></a>
                  </div>
                  <style>
                     .section_top_news  img {
                     max-width: 100%;
                     height: auto;
                     }
                     .border-radius-5 {
                     border-radius: 5px;
                     }
                     .box-shadow-primary {
                     -webkit-box-shadow: 0 18px 38px rgba(0,0,0,0.2);
                     box-shadow: 0 18px 38px rgba(0,0,0,0.2);
                     }
                  </style>
               </div>
            </div>
         </section>-->




         <section class="parallax section_quotes py-5 section_alter_bg "  style="text-align:center;">
            <div class="container">
               <div class="section_heading">
                  <h2 class=" section_title_2 uppercase">{{__('heading.heading_1')}}</h2>
                  <p></p>
               </div>
               <div class="row animatable fadeInUp">
                  <div id="carousel_quote" class="carousel slide" data-ride="carousel" style="min-height:150px; text-align: center;">
                     <div class="carousel-inner py-0 px-3 px-md-0  text-cente" >
                         @foreach ($quotes as $quote)
                        <div class="carousel-item active">
                           <h2 class=" text-cente"> <span class="fa fa-quote-left margin-30px-right font-size20"></span> {{$quote->quotes_one}}<span class="fa fa-quote-right margin-10px-left font-size20"></span> </h2>
                        </div>

                        <div class="carousel-item">
                           <h2  class=" text-cente">
                              <span class="fa fa-quote-left margin-10px-right font-size20"></span>
                              {{$quote->quotes_two}}
                              <span class="fa fa-quote-right margin-10px-left font-size20"></span>
                           </h2>
                        </div>

                        @endforeach
                     </div>
                     <ol class="carousel-indicators" style="bottom: -50px;">
                        <li data-target="#carousel_quote" data-slide-to="0"   class="active"></li>
                        <li data-target="#carousel_quote" data-slide-to="1" ></li>
                     </ol>
                  </div>
                  <!-- <div class="col-md-12 pt-5 text-center">
                     <a href="quotes.html" class="btn btn-info  px-5"><span>Read All Quotes</span></a>
                  </div> -->
               </div>
            </div>
         </section>





         <!-- <section class="parallax section_social_business py-5  ">
            <div class="container">
               <div class="section_heading">
                  <h1 class=" section_title_2 uppercase">Social Business</h1>
                  <p></p>
               </div>
               <div class="row animatable fadeInUp">
                  <div class="col-lg-6 col-md-12">
                     <div class="about-text sm-no-padding-lr">
                        <div class="section-heading title-style6 left py-2">
                           <h4 >What is social business?</h4>
                        </div>
                        <div class="inner-content py-2">
                           <h2 class="text-justify"><strong>A social business</strong> is a non-dividend business whose
                              aim is to solve a social problem through business
                              methods. It is different from both a traditional
                              personal profit-making business and a not-for-profit
                              organization.
                           </h2>
                           <p class="font-italic py-2">All profits from operation of the business must go
                              toward achieving one or more social objectives in
                              addition to covering costs of the company. No
                              personal gain is desired by its investors. A social
                              business can address problems such as providing
                              healthcare, housing, and financial services for the
                              poor, nutrition for malnourished children, providing
                              safe drinking water, introducing renewable energy
                              and much more in a business way.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="social_business_box">
                        <h4>7 Principle of Social Business?</h4>
                        <ul>
                           <li>
                              <div class="number">01</div>
                              <div class="title">
                                 <span>Business objective will be to overcome poverty, or one or more problems (such as education, health, technology access, and environment) which threaten people and society; not profit maximization.</span>
                              </div>
                           </li>
                           <li>
                              <div class="number">02</div>
                              <div class="title">
                                 <span>  Financial and economic sustainability.</span>
                              </div>
                           </li>
                           <li>
                              <div class="number">03</div>
                              <div class="title">
                                 <span> Investors get back their investment amount only. No dividend is given beyond investment money.</span>
                              </div>
                           </li>
                           <li>
                              <div class="number">04</div>
                              <div class="title">
                                 <span> When investment amount is paid back, company profit stays with the company for expansion and improvement.</span>
                              </div>
                           </li>
                           <li>
                              <div class="number">05</div>
                              <div class="title">
                                 <span> Gender sensitive and environmentally conscious.</span>
                              </div>
                           </li>
                           <li>
                              <div class="number">06</div>
                              <div class="title">
                                 <span> Workforce gets market wage with better working conditions.</span>
                              </div>
                           </li>
                           <li>
                              <div class="number">07</div>
                              <div class="title">
                                 <span> ...Do it with joy</span>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->

         <!--<section class="parallax section_social_business_faq py-5  ">
            <div class="container">
               <div class="section_heading">
                  <h3 class=" section_title_2 uppercase">Message From The Professor Dr. Mohammad Rashidul Hassan
</h3>
                  <p></p>
               </div>
               <div class="row animatable fadeInUp">
                  <div class="col-md-12 text-center text-white">

                     <p  style="text-style:justify">The greatest blessing of Allah is wellness and it is realized when you feel sick. Doctor is not only a profession, it’s a noble service. As a human being or like a mother a doctor stands by the people when everyone leaves them due to their illness. A doctor not only helps his patients to improve their health and overcome diseases but also restores their faith and courage for living. As a physician, you would like to derive much satisfaction from compassionately serving your patients and they might not appreciate your efforts in return. Even then ask any doctor why he or she chose this profession or if he or she wants to stay in this profession or not and they would likely tell you they do it mostly because they just want to help others and this leads to a continuous source of happiness. The moral of a physician includes his sense of duty, conscience, consciousness, responsibility and devotion to patients.
For me, being a doctor is the ultimate opportunity to help others and stand beside humanity.

                     </p>
                     <a href="category/faqs.html" class="btn btn-info  px-5"><span>See All FAQ</span></a>
                  </div>
               </div>
            </div>
         </section>-->

        <!-- <section class="parallax section_image_and_media py-5  ">
            <div class="container">
               <div class="section_heading">
                  <h1 class=" section_title_2 uppercase">{{__('heading.imagemedia')}}</h1>
                  <p></p>
               </div>
               <div class="row animatable fadeInUp" style="text-align:center;">
                  <div class="col-lg-5">
                     <div class="box-shadow-large padding-15px-all">
                        <a href="gallery/6.html">
                        <img src="" alt="" class="sm-width-100">
                        </a>
                     </div>
                     <p class="py-4">
                        <a href="gallery/6.html">
                        Ingenious Pulmo Fit            </a>
                     </p>
                     <div class="heading-text heading-section text-center py-4">
                        <a   href="#" class="btn btn-success text-center">View All Galleries</a>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="box-shadow-large padding-15px-all embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nfcaOXCx3V0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <iframe width="683" height="394" src="https://www.youtube.com/embed/s7KZuurCvuU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </section>-->
         <section class="parallax section_social_media py-5 section_alter_bg ">
            <div class="container">
               <div class="section_heading">
                  <h1 class=" section_title_2 uppercase">{{__('heading.weareinmedia')}}</h1>
                  <p></p>
               </div>
               <div class="row animatable fadeInUp" style="text-align: center;">


                  <div class="col-md-4">
                     <h2>Get In Touch </h2>
                     <ul class="   sm_list_container">
                        <li>
                           <a target="_blank" href="https://www.facebook.com/mdrashidulhassan07">
                           <i class="fab fa-facebook-f"></i>
                           <span class="label ">Facebook/drrashidulhassan</span>
                           </a>
                        </li>


                     </ul>
                  </div>
               </div>
            </div>
         </section>
      </main>
     @include('frontend.partial.footer');
