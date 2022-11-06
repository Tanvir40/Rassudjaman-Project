@include('frontend.partial.header')


		<main class="main">
				<section class="promo-primary" >
				<picture>
						<source srcset="{{asset('frontend/images/medicalprograms.jpg')}}" media="(min-width: 992px)"/><img class="img--bg" src="{{asset('frontend/images/medicalprograms.jpg')}}" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span></span></div>
					<!-- <div class="container">
						<div class="row"  style="text-align:center">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
										<h1 class="promo-primary__title"><span>Better</span> <span>Living................</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</section>
				<!-- causes inner start-->

				<section class="section causes-inner">
					<div class="container">

						<div class="row offset-margin">






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
