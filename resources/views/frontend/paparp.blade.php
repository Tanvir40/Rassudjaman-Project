@include('frontend.partial.header')
<section class="sub_header_sec">

        <div class="container">

            <div class="row clearfix">

                <div class="col-md-12 text-center">

                    </br></br>

                    <div class="sub_header">

                        <h2>PA-PRP</h2>

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

                            <p>{{$paparps->first()->text}}
 </br>


 </p>
<hr>



                        </div>

                    </div>

                    <!-- NEWS SINGLE CONTENT SECTION END -->

                </div>


                  <div class="col-md-4">


        <div class="sidebar_section">


            <div class="widget_area event_widget">

                                <div class="widget_content">
                    <ul class="event_lists list-inline">
                        <li class="event_item">
                            <div class="event_img">
                               <iframe width="453" height="380" src="https://www.youtube.com/embed/RNCxGIPapuU" title="ইনজিনিয়াস যেন আপনার ফুসফুসের বন্ধু" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>

                        </li>
                    </ul>

                </div>

                            </div>
            <!-- EVENTS WIDGET END -->

            <!-- FIND DOCTOR SECTION -->
            <!-- <div class="widget_area find_doc_widget">
                <div class="widget_title">
                    <h3>Find a Member</h3>
                </div>
                <div class="widget_content">
                    <form>
                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmailsearch" onkeyup="findmembers()" aria-describedby="emailHelp" placeholder="Search Here . . .">
                      </div>
                    </form>
                    <div class="drop_dpwn_dr_list">
                        <span id="member_searching_result"></span>
                    </div>
                </div>
            </div> -->
            <!-- FIND DOCTOR SECTION END -->





            <!-- Home Section -->

        </div>


                </div>







            </div>



        </div>







    </div>
@include('frontend.partial.footer')
