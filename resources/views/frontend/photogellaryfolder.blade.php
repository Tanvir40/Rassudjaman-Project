@include('frontend.partial.header');

			<main class="main">
				<section class="promo-primary">

					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item">
										<h1 class="promo-primary__title"><span>Photo Gallery</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- blog start-->
				<section class="section blog background--brown">
					<div class="container">
						<div class="row offset-margin">

							<div class="col-md-6 col-lg-5 col-xl-6">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img">
									<a href="{{asset('scientificseminaratfeni')}}" data-fancybox="gallery">
									<img class="img--bg" src="{{asset('frontend/images/photogellary/scientificseminaratfeni')}}/{{$scientificseminaratfeni->first()->photo}}" alt="img"/>
                                        </a>
                                        <div style="text-align: center;"><p>Scientific Seminar at Feni</p></div>
									</div>

								</div>
							</div>

								<div class="col-md-6 col-lg-5 col-xl-6">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img">
									<a href="{{asset('pureweek')}}" data-fancybox="gallery">
									<img class="img--bg" src="{{asset('frontend/images/photogellary/pureweek')}}/{{$pureweek->first()->photo}}" alt="img"/>
                                        </a>
                                        <div style="text-align: center;"><p>PuRe WEEK</p></div>
									</div>

								</div>
							</div>
							<div class="col-md-6 col-lg-5 col-xl-6">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img">
									<a href="{{asset('freemaskdistribution')}}" data-fancybox="gallery">
									<img class="img--bg" src="{{asset('frontend/images/photogellary/freemaskdistribution')}}/{{$maskdistrubation->first()->photo}}" alt="img"/>
                                        </a>
                                        <div style="text-align: center;"><p>Free Mask Distribution</p></div>
									</div>

								</div>
							</div>




								<div class="col-md-6 col-lg-5 col-xl-6">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img">
									<a href="{{asset('photogellary')}}" data-fancybox="gallery">
									<img class="img--bg" src="{{asset('frontend/images/photogellary/photogellary')}}/{{$photogellary->first()->photo}}" alt="img"/>
                                        </a>
                                        <div style="text-align: center;"><p>Association with AURKO Foundation</p></div>
									</div>

								</div>
							</div>





						</div>

					</div>
				</section>
				<!-- blog end-->
				<!-- bottom bg start-->

				<!-- bottom bg end-->
			</main>
			<!-- footer start-->
			@include('frontend.partial.footer');
