@include('frontend.partial.header');

   <main>
                            <div class="content-header inner_page_title_bar py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 animatable bounceIn">
                                <h2>Article</h2>
                                <p>  </p>
                                                            </div>
                            <div class="col-12 text-white"><ul class="breadcrumb"><li class="breadcrumb-item"><a href="../../index.html">Home</a><span class="divider">&nbsp;</span></li><li class="breadcrumb-item"><a href="../../post.html">All Post</a><span class="divider">&nbsp;</span></li><li class="breadcrumb-item">Article...<span class="divider-last">&nbsp;</span></li></ul>  </div>
                        </div>
                    </div>
                </div>
                                <div class="main_content ">
                    <div class="container py-5">

                                <div class="row" >
                                    <div class="col-xs-8 col-md-8">

<div class="blog-list-simple pb-4">
    <div class="row">

        <div class="col-md-12">
            <div class="blog-list-simple-text">
                <h2> Article </h2>
                <p class="bold py-0"></p>
                <!--<p class="pt-1 pb-0 px-2 meta_data"> <i class="fa fa-address-book"> Yunus Cntre Press Release</i>    <i class="fa fa-calendar float-right"> 16th April 2018</i>   </p>-->





                <p><strong>List of Article By Professor Dr. Mohammad Rashidul Hassan published till date</strong></p>
<table width="600" border="4" align="center">
<tbody>
<tr>
<td><strong>SL</strong></td>
<td><strong>Article</strong></td>

<td><strong>Details</strong></td>
</tr>
@foreach ($articles as $key=>$article)
<tr>
<td>{{$key+1}}</td>
<td>
<p>{{$article->article}}</p>


</td>

<td><a href="{{asset('frontend/pdf')}}/{{$article->pdf}}
" border="0" width="140" height="310" />Click Here</a>
</tr>
@endforeach


</tbody>
</table>


            </div>


        </div>
    </div>
</div>
  <div class="col-md-12 text-right">
       <!-- Go to www.addthis.com/dashboard to customize your tools -->
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56c8262ccffd6080"></script>-->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src=""></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share_toolbox"></div>
  </div>



                                    </div>
                                    <div class="col-xs-4 col-md-4 page_side_bar">

                                        <div class="side-bar">





















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
