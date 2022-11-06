	@include('frontend.partial.header')

			<main class="main">
				<section class="promo-primary">
					<picture ">
						<source srcset="{{asset('frontend/images/aboutus.jpg')}}" height="380px" width="1400px"><img class="img--bg" src="{{asset('frontend/images/aboutus.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">

								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- stories start-->
				<section class="section stories">
					<div class="container">
						<div class="row offset-70">

							<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
								<div class="stories-item">
									<div class="row align-items-center flex-column-reverse flex-lg-row"  style="text-align:justify">
										<div class="col-lg-6 col-xl-6">
											<div class="heading heading--primary">
												<h2 class="heading__title"><span> </span> <span>About </span></h2>
											</div>
											<p>{{$abouts->first()->about}}
</p><!--<a class="button stories-item__button button--primary" href="storie-details.php">Read Story</a>-->
										</div>
										<div class="col-lg-6 col-xl-5 offset-xl-1">
											<div class="img-box"><img class="img--layout" src="{{asset('backend/dashboard/includes/themes/best/yc/img/banner/Dr Md Rashidul Hassan.jpg')}}" alt="img"/>

											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>
				<!-- stories end-->
			</main>
			<!-- footer start-->
			@include('frontend.partial.footer')
