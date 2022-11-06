@include('frontend.partial.header')
<section class="sub_header_sec">

        <div class="container">

            <div class="row clearfix">

                <div class="col-md-12 text-center">

                    </br></br>

                    <div class="sub_header">

                        <h2>PR</h2>

                    </div>



                </div>

            </div>

        </div>

    </section>
<div class="content_area">
                <div class="container">

            <!-- WITH SIDEBAR CONTENT AREA -->

            <div class="row content_holder clearfix">

                <div class="col-md-8">

                    <!-- NEWS SINGLE CONTENT SECTION -->

                    <div class="section_area news_single_content" style="text-align:justify">

                        <div class="section_content">

                            <p>{{$prs->first()->text}}
 </p>
<hr>



                        </div>

                    </div>

                    <!-- NEWS SINGLE CONTENT SECTION END -->

                </div>


                <div class="col-md-4">

                    <!-- NEWS SINGLE CONTENT SECTION -->

                    <div class="section_area news_single_content" style="text-align:justify">

                        <div class="section_content">

                     <iframe width="400" height="380" src="https://www.youtube.com/embed/RNCxGIPapuU" title="ইনজিনিয়াস যেন আপনার ফুসফুসের বন্ধু" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<hr>



                        </div>

                    </div>

                    <!-- NEWS SINGLE CONTENT SECTION END -->

                </div>







            </div>

            <!-- WITH SIDEBAR CONTENT AREA END -->



            <!-- LOGO AREA -->



            <!-- LOGO AREA END -->

        </div>

          <div class="container">

            <!-- WITH SIDEBAR CONTENT AREA -->

            <div class="row content_holder clearfix">

                <div class="col-md-8">

                   <h2>Integrative Care in COPD Pulmonary Rehabilitation</h2>

                    <!-- NEWS SINGLE CONTENT SECTION -->

                    <div class="section_area news_single_content" style="text-align:justify">

                        <div class="section_content">

                            <p>
                                {{$prs->first()->text2}}



 </p>
<hr>
<!--Physical Activity:
Optimal physical activity is the key component to maintaining sustainable benefit of successful PR. Any bodily movement produced by skeletal muscle that leads to energy expenditure. This includes:</br>
•	At least 30 minutes of moderate intensity physical activity for 5 or more days a week.</br>
•	Vigorous physical activity for 20 minutes 3 days every week.
•	Shorter bouts three-times moderate 10 minutes or two-times vigorous 10 minutes.</br>

Level of PA	Degree of Physical Activity
High Level</br>	•	Vigorous Intensity activity on at least three days and accumulating at least 1500 met-min/week. Or,</br>
•	Seven or more days of any combination of walking, moderate or vigorous intensity activities accumulating at least 3000 met-minutes/week.
Moderate</br>	•	Three or more days of vigorous intensity activity of at least 20 minutes per day. Or,
•	Five or more days of moderate intensity activity and or walking of at least 30 min per day. Or,</br>
•	Five or more days of any combination of walking, moderate or vigorous intensity activities accumulating at least 600 met-minutes/week.
Low	No activity is reported or some activity is reported but not enough to meet high and moderate categories.</br>

Education and self-management:</br>
•	Education alone has not been shown to be effective without physical training and self-management plan.</br>
•	Self-management means intervention with communication with a healthcare professional to improve health status and decrease hospitalizations and emergency department visits of COPD patients.-->



                        </div>

                    </div>

                    <!-- NEWS SINGLE CONTENT SECTION END -->

                </div>









            </div>

            <!-- WITH SIDEBAR CONTENT AREA END -->



            <!-- LOGO AREA -->



            <!-- LOGO AREA END -->

        </div>

        <div class="col-12 p-3" style="text-align:center;">
	<div class="d-flex justify-content-between">

           </div> <h2>Physical Activity:
</h2>


           <div class="mt-2">
           	<div class="embed-responsive embed-responsive-16by9">
           		<iframe src="{{asset('backend/dashboard/includes/themes/best/yc/img/banner/Physical Activity.pdf')}}

"></iframe>
           	</div>
           </div>

                  </div>


    </div>
@include('frontend.partial.footer')
