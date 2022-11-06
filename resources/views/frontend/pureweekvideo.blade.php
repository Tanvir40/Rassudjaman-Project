@include('frontend.partial.header');
        <main>
                            <div class="main_content ">
                    <div class="container py-5">
                        <style>
    /*.portfolio-item{height: }*/
    .portfolio-item img{height: 100%;}


</style>
<div style="text-align: center; padding-bottom: 40px;"><button>PuRe WEEK</button></div>
<section class="p-b-0">

    <div class="container">

        <div id="gallery" class="row">
            @foreach ($pureweekvideo as $pure)
                <div class="col-md-6" >
                    <div class="box-shadow-large">
                        <iframe width="635" height="370" src="{{$pure->link}}" title="Take Care EP 18 Dr Rashidul Hassan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            @endforeach
        </div>

</div>

</section>
                    </div>
                </div>
                    </main>

                   @include('frontend.partial.footer');
