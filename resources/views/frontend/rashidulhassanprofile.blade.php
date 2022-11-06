@include('frontend.partial.header')
<div style="padding-right: 15px;padding-left: 15px;
    margin-right: auto;
    margin-left: auto;">



      <div class="view-content">
        <div>

          <div class="leadership-inner-content" style="text-align:center;">
<figure><img alt="" class="media-object" src="{{asset('backend/dashboard/includes/themes/best/yc/img/banner/Dr Md Rashidul Hassan.jpg')}}"> </figure>
<div class="chairman-title">
  <h1>Professor Dr. Mohammad Rashidul Hassan </h1>
  <h3>MD,MCPS,MBBS,FCPS</h3>
  <h3>Chest Disease </h3>
  <h3>BMDC Verified </h3>








</div>
</div>
<div style="border:4px;text-align:justify">
<p class="medium-text"></p>

{{$massages->first()->massage}}
<p></p>
<div class="col-12 p-3" style="text-align:center;">
	<div class="d-flex justify-content-between">

           </div> <h2>Resume Of Prof. Dr. Md. Rashidul Hassan </h2>


           <div class="mt-2">
           	<div class="embed-responsive embed-responsive-16by9">
           		<iframe src="{{asset('backend/dashboard/includes/themes/best/yc/img/banner/CV_RASHID_26-7-17 (1).pdf')}}
"></iframe>
           	</div>
           </div>

                  </div>

</div>
    </div>



</div>
@include('frontend.partial.footer')
