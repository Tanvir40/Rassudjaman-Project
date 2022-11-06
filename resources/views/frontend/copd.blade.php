@include('frontend.partial.header')
<section class="sub_header_sec">

        <div class="container">

            <div class="row clearfix">

                <div class="col-md-12 text-center">

                    </br></br>

                    <div class="sub_header">

                        <h2>COPD</h2>

                    </div>



                </div>

            </div>

        </div>

    </section>
<div class="content_area">
                <div class="container">

            <!-- WITH SIDEBAR CONTENT AREA -->

            <div class="row content_holder clearfix">

                <div class="col-md-12">

                    <!-- NEWS SINGLE CONTENT SECTION -->

                    <div class="section_area news_single_content">

                        <div class="section_content" style="text-align:justify">

                            <p>{{$copds->first()->text}}
</p>
<hr>



                        </div>

                    </div>

                    <!-- NEWS SINGLE CONTENT SECTION END -->

                </div>
                <div class="container">

            <!-- WITH SIDEBAR CONTENT AREA -->

            <div class="row content_holder clearfix">


                                <div class="col-md-12">

                    <!-- NEWS SINGLE CONTENT SECTION -->

                    <div class="section_area news_single_content">

                        <div class="section_content" style="text-align:justify">

                            <iframe width="353" height="280" src="https://www.youtube.com/embed/s7KZuurCvuU" title="Ingenious Pulmo FIT Take Care Ep 32 Dr Rashidul Hassan COPD" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                                <iframe width="353" height="280" src="https://www.youtube.com/embed/pmjpg-ao9FE" title="Take Care Ep 20 Dr Rashidul Hassan COPD GERD" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                <iframe width="353" height="280" src="https://www.youtube.com/embed/bXIwbW5scnE" title="Take Care Ep 23 Dr Rashidul Hassan COPD Bronchiactasis" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>




                        </div>

                    </div>

                    <!-- NEWS SINGLE CONTENT SECTION END -->

                </div>

                </div>
                </div>






            </div>

            <!-- WITH SIDEBAR CONTENT AREA END -->



            <!-- LOGO AREA -->



            <!-- LOGO AREA END -->

        </div>

    </div>
@include('frontend.partial.footer')
