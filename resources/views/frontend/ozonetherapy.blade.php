@include('frontend.partial.header')
<section class="sub_header_sec">

        <div class="container">

            <div class="row clearfix">

                <div class="col-md-12 text-center">

                    </br></br>

                    <div class="sub_header">

                        <h2>Ozone Therapy</h2>

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

                    <div class="section_area news_single_content" style="text-align:justify">

                        <div class="section_content">

                            <p>

                                {{$ozonetherapy->first()->text}}

 </p>
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


    </div>
@include('frontend.partial.footer')
