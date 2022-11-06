@include('frontend.partial.header')

   <div class="content-header inner_page_title_bar py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 animatable bounceIn">
                                <h2>All Ongoing Research</h2>
                                <p>  </p>
                                                            </div>
                            <div class="col-12 text-white"><ul class="breadcrumb"><li class="breadcrumb-item"><a href="index.html">Home</a><span class="divider">&nbsp;</span></li><li class="breadcrumb-item">Ongoing Research<span class="divider-last">&nbsp;</span></li></ul>  </div>
                        </div>
                    </div>
                </div>


 </br></br>

 @foreach ($OngoingResearch as $research)
				<section class="section causes-inner">
				     <div class="col-md-12 animatable bounceIn" style="margin-left:150px;">
                                <h2><u>{{$research->research_title}}</u></h2>

                                                            </div>

                                                            </br></br>
					<div class="container">

						<div class="row offset-margin">


						<div class="col-md-8 offset-md-2 col-lg-12 offset-lg-0">
								<div class="causes-item causes-item--style-3">
									<div class="causes-item__body">
										<div class="row align-items-center">

											<div class="col-lg-12 col-xl-12">
												<!--<div class="causes-item__action">
													<div class="causes-item__badge" style="background-color: #49C2DF">Water Delivery</div><a class="causes-item__link" href="#">Donate</a>
												</div>-->
												<div class="causes-item__top" style="text-align:justify">
													<h4 class="causes-item__title"> <a href="#">{{$research->research_desp}}</a></h4>


												</div>

											</div>
										</div>
									</div>
								</div>
							</div>

							</br></br>







						</div>
					</div>
					<div class="container">
						<div class="row">

						</div>
					</div>
				</section>
                @endforeach
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
