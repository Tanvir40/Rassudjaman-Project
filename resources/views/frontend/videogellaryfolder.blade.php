@include('frontend.partial.header');

			<main class="main">
				<section class="promo-primary">
					
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item">
										<h1 class="promo-primary__title"><span>Video Gallery</span></h1>
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
							
						
							
							<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="blog-item blog-item--style-1">
										<div class="blog-item__img">
									<a href="{{asset('pureweekvideo')}}" data-fancybox="gallery">
									<img class="img--bg" src="public/frontend/images/3.jpg" alt="img"/>
                                        </a>
                                        <div style="text-align: center;"><p>PuRe WEEK</p></div>
									</div>
									
								</div>
							</div>
							
						
							<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="blog-item blog-item--style-1">
										<div class="blog-item__img">
									<a href="{{asset('takecare')}}" data-fancybox="gallery">
									<img class="img--bg" src="public/frontend/images/thumb__ictures_folder.png" alt="img"/>
                                        </a>
                                        <div style="text-align: center;"><p>Take Care</p></div>
									</div>
									
								</div>
							</div>
							<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="blog-item blog-item--style-1">
										<div class="blog-item__img">
									<a href="{{asset('covidmanagement')}}" data-fancybox="gallery">
									<img class="img--bg" src="public/frontend/images/thumb__ictures_folder.png" alt="img"/>
                                        </a>
                                        <div style="text-align: center;"><p> Covid-19 Management</p></div>
									</div>
									
								</div>
							</div>
							<div class="col-md-6 col-lg-5 col-xl-4">
								<div class="blog-item blog-item--style-1">
										<div class="blog-item__img">
									<a href="{{asset('ramadanlifestyle')}}" data-fancybox="gallery">
									<img class="img--bg" src="public/frontend/images/4.jpg" alt="img"/>
                                        </a>
                                        <div style="text-align: center;"><p>Ramadan Lifestyle</p></div>
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