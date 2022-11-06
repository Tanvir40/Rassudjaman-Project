@include('frontend.partial.header');
<main>
   <div class="main_content ">
      <div class="container py-5">
         <style>
            /*.portfolio-item{height: }*/
            .portfolio-item img{height: 100%;}
         </style>
         <div style="text-align: center; padding-bottom: 40px;"><button>Photo Gallery</button></div>
         <section class="p-b-0">
            <div class="container">

                <div id="gallery" class="row">
                   @foreach ($photogellary as $photo)
                  <div class="col-md-6" >
                     <div class="box-shadow-large">
                        <iframe width="635" height="370" src="{{asset('frontend/images/photogellary/photogellary')}}/{{$photo->photo}}
                        " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>

                  </div>
                  @endforeach
               </div>



               </div>
               <div class="heading-text heading-section text-center py-4">
                  <a   href="gallery.html" class="btn btn-success text-center">View All Galleries</a>
               </div>
            </div>
         </section>
      </div>
   </div>
</main>
@include('frontend.partial.footer');
