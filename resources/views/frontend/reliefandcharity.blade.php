@include('frontend.partial.header')


		<main class="main">
				<section class="promo-primary" >
				<!-- 	<picture>
						<source srcset="{{asset('frontend/images/reliefcharity.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/images/reliefcharity.jpg')}}" alt="img"/>
					</picture> -->
					<div class="promo-primary__description"> <span></span></div>
					<div class="container">
						<div class="row"  style="text-align:center">
							<div class="col-auto">
								<div class="align-container">

								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- causes inner start-->

				<section class="section causes-inner">
					<div class="container">

						<div class="row offset-margin">
                            @foreach ($charities as $charitie)

						<div class="col-md-8 offset-md-2 col-lg-12 offset-lg-0">
								<div class="causes-item causes-item--style-3">
									<div class="causes-item__body">
										<div class="row align-items-center">
											<div class="col-lg-5 col-xl-4">
												<div class="causes-item__img"><img class="img--bg" src="{{asset('frontend/charity')}}/{{$charitie->photo}}
" alt="img"/></div>
											</div>
											<div class="col-lg-7 col-xl-8">
												<!--<div class="causes-item__action">
													<div class="causes-item__badge" style="background-color: #49C2DF">Water Delivery</div><a class="causes-item__link" href="#">Donate</a>
												</div>-->
												<div class="causes-item__top">
													<h6 class="causes-item__title"> <a href="#">{{$charitie->title}}</a></h6>
													<p>{{$charitie->desp}}
</p>
													<a class="tags__item" target="_blank" href="{{$charitie->link}}">Details</a>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>

                            @endforeach

                        </div>





						</div>
					</div>
					<div class="container">
						<div class="row">

						</div>
					</div>
				</section>
				<!-- causes inner end-->
				<!-- bottom bg start-->
				<!--<section class="bottom-background background--brown">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bottom-background__img"><img src="img/bottom-bg.png" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>-->
				<!-- bottom bg end-->
			</main>
			@include('frontend.partial.footer')
