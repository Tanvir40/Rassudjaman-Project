@include('frontend.partial.header');


        <main>
                            <div class="content-header inner_page_title_bar py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 animatable bounceIn">
                                <h2>All News</h2>
                                <p>  </p>
                                                            </div>
                            <div class="col-12 text-white"><ul class="breadcrumb"><li class="breadcrumb-item"><a href="index.html">Home</a><span class="divider">&nbsp;</span></li><li class="breadcrumb-item">All News<span class="divider-last">&nbsp;</span></li></ul>  </div>
                        </div>
                    </div>
                </div>
                                <div class="main_content ">
                    <div class="container py-5">

                                <div class="row" >
                                    <div class="col-xs-8 col-md-8">
                                                 <div class="blog-list-simple pb-4">
                                                    @foreach ($news as $key=>$new)
            <div class="row">


                <div class="col-md-12">
                    <h4><a href="news/2194/-web-lecture-series-lecture-12-poverty-focused-programmes-in-nepal-special-features-of-the-nepals-people-terrain-and-economy">{{$new->title}}
</a></h4>

    <ul class="p-0 m-0 meta">



            <li>
                <a href="javascript:void(0);">
                    <i aria-hidden="true" class="fas fa-calendar-alt"></i> {{$new->created_at->format('D,d M,Y')}}
              </a>
            </li>
                                    <li>

            </li>
                    </ul>

                                            <div class="blog-list-simple-img">
                            <img class="img-fluid" alt="YSBC Web lecture Series - Lecture#12: Poverty-focused programmes in Nepal: Special features of the Nepal’s people, terrain and economy." src="{{$new->image_link}}
">
                        </div>
                                    </div>

                                  <div class="col-md-12 pt-2">
                    <div class="blog-list-simple-text">

                       {{$new->news_desp}}<a target="_blank" href="{{$new->news_link}}">।
                    <span>Read More</span></a>
                    </div>
                </div>


            </div>


            </br></br>
            @endforeach

















            <div class="row paging">

            <div class="col-md-12">
                 </div>
            <div class="col-md-12">
                <div class="paginator">
                    <ul class="pagination pagination-separate pagination-round pagination-flat"><li class="page-item active px-2">
                        <span class="page-link">1</span></li>
                        <li class="page-item px-2"><a href="" data-ci-pagination-page="2">2</a></li>
                        <li class="page-item px-2"><a href="" data-ci-pagination-page="3">3</a></li>
                        <li class="page-item px-2"><a href="" data-ci-pagination-page="4">4</a></li>
                        <li class="page-item px-2"><a href="" data-ci-pagination-page="5">5</a></li>
                        <li class="page-item px-2"><a href="" data-ci-pagination-page="2" rel="next">Next ></a></li>
                        <li class="page-item last px-2"><a href="" data-ci-pagination-page="34">Last >> </a></li> </ul></div> </div>

        </div>


                                                 </div>
                                    <div class="col-xs-4 col-md-4 page_side_bar">

                                        <div class="side-bar">






<!--<div class="  mb-5 py-4  text-center   social_business_pedia"  >
    <h2 class="text-white font-weight-bold py-2" style="font-size: 20px;">
        <a class="text-white" target="_blank" href="http://socialbusinesspedia.com/">    SocialBusinessPedia.com </a>
    </h2>
    <div class="sbpedia_logo  ">
        <a target="_blank" href="http://socialbusinesspedia.com/">    <img  style="width: 150px;" class="img-fluid circle-filled" src="../socialbusinesspedia.com/uploads/wiki/original/ua_089086500248389526510078384547.png"/></a>
    </div>
    <h3 class=" text-white py-3">A platform for Social Business </h3>
</div>-->















<!--<div class="bg-light mb-5" style="height: 300px;">
    <h2 class="p-3">SideBar Blog 2</h2>
</div>
<div class="bg-light mb-5" style="height: 300px;">
    <h2 class="p-3">SideBar Blog 3</h2>
</div>
<div class="bg-light mb-5" style="height: 300px;">
    <h2 class="p-3">SideBar Blog4</h2>
</div>-->
                                        </div>
                                    </div>
                                </div>
                                                    </div>
                </div>
                    </main>
        @include('frontend.partial.footer');
