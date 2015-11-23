<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
//@var $form yii\bootstrap\ActiveForm
//@var $model \frontend\models\ContactForm
//@var $this yii\web\View 
//$this->title = 'Test';
//$this->params['breadcrumbs'][] = $this->title;*/
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 191,
    itemMargin: 5
  });
});
</script>

<div class="productList">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
					<div class="lifeIns col-lg-offset-5 col-lg-2">
						<h3>Life Insurence</h3>
					</div>
						<div class="slide-wrap col-lg-12">
						<div class="flexslider">
						  <ul class="slides">
						    <li>
						    	<div class="termIns col-lg-12">
						    		<h4>Term Insurance</h4>
						    		
										<div class="term-slide1">
											<div class="plist plist1">
												<i class="sprite-term i-productterm"></i>
											</div>
					
										
						
								
												<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
														adipiscing elit, sed do eiusmod tempor 
													incididunt ut labore et dolore magna 
													aliqua.e</p>
												
										</div>
									<input type="submit"  class="btn btn-primary" value="Read More"/>
					

								</div>
						    	
						      
						    </li>
						    <li>
						   		<div class="termIns col-lg-12">
						    		<h4>Investment and Saving</h4>
						    		
										<div class="term-slide1">
											<div class="plist plist2">
												<i class="sprite-term i-invs"></i>
											</div>
					
										
						
								
												<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
														adipiscing elit, sed do eiusmod tempor 
													incididunt ut labore et dolore magna 
													aliqua.e</p>
												
										</div>
									<input type="submit"  class="btn btn-primary" value="Read More"/>
					

								</div>
						    	
						    </li>
						    <li>
						      <div class="termIns col-lg-12">
						    		<h4>Retirement and Plan</h4>
						    		
										<div class="term-slide1">
											<div class="plist plist3">
												<i class="sprite-term i-retirementplan"></i>
											</div>
					
										
						
								
												<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
														adipiscing elit, sed do eiusmod tempor 
													incididunt ut labore et dolore magna 
													aliqua.e</p>
												
										</div>
									<input type="submit"  class="btn btn-primary" value="Read More"/ >
					

								</div>
						    	
						    </li>
						    <li>
						      <div class="termIns col-lg-12">
						    		<h4>Child Plans</h4>
						    		
										<div class="term-slide1">
											<div class="plist plist4">
												<i class="sprite-term i-childplan"></i>
											</div>
					
										
						
								
												<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
														adipiscing elit, sed do eiusmod tempor 
													incididunt ut labore et dolore magna 
													aliqua.e</p>
												
										</div>
									<input type="submit"  class="btn btn-primary" value="Read More"/>
					

								</div>
						    	
						    </li>
						   <li>
						      <div class="termIns col-lg-12">
						    		<h4>Term Insurance</h4>
						    		
										<div class="term-slide1">
											<div class="plist plist5">
												<i class="sprite-term i-productterm"></i>
											</div>
					
										
						
								
												<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
														adipiscing elit, sed do eiusmod tempor 
													incididunt ut labore et dolore magna 
													aliqua.e</p>
												
										</div>
									<input type="submit"  class="btn btn-primary" value="Read More"/>
					

								</div>
						    	
						    </li>
						       <li>
						      <div class="termIns col-lg-12">
						    	
					

								</div>
						    	
						    </li>
						   
						    <!-- items mirrored twice, total of 12 -->
						  </ul>
						</div>

					</div>
					<!-- End of life Insurence -->


					<!-- Start of Non Life Insurance -->

					<div class="nonLife">
							<div class="row">
								<div class="filler"></div>
							<!-- Start of Private Vehicle -->
								<div class="col-lg-6">
										<div class="nonlifeIns col-lg-offset-5 col-lg-4" id="nonLifeIns">
											<h3>Private Vehicle</h3>
										</div>
											<div class="slide-wrap col-lg-12">
												<div class="flexslider" id="privateFlex">
												  <ul class="slides">
													    <li>
													    	<div class="termIns col-lg-12">
													    		<h4>Two Wheeler</h4>
													    		
																	<div class="term-slide1">
																			<div class="plist plist5">
																				<i class="sprite-term i-twowheeler"></i>
																			</div>
										
																				<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
																				adipiscing elit, sed do eiusmod tempor 
																				incididunt ut labore et dolore magna 
																				aliqua.e</p>
																		
																	</div>
																		<input type="submit"  class="btn btn-primary" value="Read More"/>
															</div>
							    	
							      						</li>
							  						 	 <li>
							  						 		<div class="termIns col-lg-12">
							    								<h4>Four Wheeler</h4>
							    		
																	<div class="term-slide1">
																		<div class="plist plist6">
																			<i class="sprite-term i-fourwheel"></i>
																		</div>
																		<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
																				adipiscing elit, sed do eiusmod tempor 
																			incididunt ut labore et dolore magna 
																			aliqua.e</p>
																	</div>
																		<input type="submit"  class="btn btn-primary" value="Read More"/>
															</div>
							    						</li>
												 </ul>
												</div>
											</div>
										</div>
								<!-- End of Private Vehicle -->
								<!-- Start of Home Insurance -->

						<div class="col-lg-6">
								<div class="nonlifeIns col-lg-offset-3 col-lg-4" id="homeInsur">
									<h3>Home Insurance</h3>
								</div>
									<div class="slide-wrap  col-lg-12" id="slidebtm">
													<div class="flexslider">
													  <ul class="slides">
														    <li>
														    	<div class="termIns col-lg-12" id="fireEarthflex">
														    		<h4>Fire and Earthquake</h4>
														    		
																		<div class="term-slide1">
																			<div class="plist plist7">
																				<i class="sprite-term i-fireEarth"></i>
																			</div>
																						<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
																						adipiscing elit, sed do eiusmod tempor 
																						incididunt ut labore et dolore magna 
																						aliqua.e</p>
																		</div>
																						<input type="submit"  class="btn btn-primary" value="Read More"/>
																</div>
							    	
							     							</li>
														    <li>
														   		<div class="termIns col-lg-12">
														    		<h4>Burglary</h4>
														    		
																		<div class="term-slide1">
																			<div class="plist plist8">
																				<i class="sprite-term i-burglary1"></i>
																			</div>
																					<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
																						adipiscing elit, sed do eiusmod tempor 
																						incididunt ut labore et dolore magna 
																						aliqua.e</p>
																		</div>
																						<input type="submit"  class="btn btn-primary" value="Read More"/>
																</div>
							    	
							  								  </li>
														</ul>
													</div>
									</div>
					</div>
					<!-- End of Home Insurance -->
				</div>
				<!-- End of row -->
			</div>
			<!-- End of Non Life -->
			<!-- start of others -->
			<div class="lifeIns col-lg-offset-5 col-lg-2" id="otherInsur">
						<h3>Others</h3>
					</div>
						<div class="slide-wrap col-lg-12" id="btm-wrap">
						<div class="flexslider">
						  <ul class="slides">
						    <li>
						    	<div class="termIns col-lg-12">
						    		<h4>Health Insurance</h4>
						    		
										<div class="term-slide1">
											<div class="plist plist9">
												<i class="sprite-term i-healthInsur"></i>
											</div>
					
										
						
								
												<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
														adipiscing elit, sed do eiusmod tempor 
													incididunt ut labore et dolore magna 
													aliqua.e</p>
												
										</div>
									<input type="submit"  class="btn btn-primary" value="Read More"/>
					

								</div>
						    	
						      
						    </li>
						    <li>
						   		<div class="termIns col-lg-12">
						    		<h4>Personal Accident</h4>
						    		
										<div class="term-slide1">
											<div class="plist plist10">
												<i class="sprite-term i-personalAcc"></i>
											</div>
					
										
						
								
												<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
														adipiscing elit, sed do eiusmod tempor 
													incididunt ut labore et dolore magna 
													aliqua.e</p>
												
										</div>
									<input type="submit"  class="btn btn-primary" value="Read More"/>
					

								</div>
						    	
						    </li>
						    <li>
						      <div class="termIns col-lg-12">
						    		<h4>Travel Insurance</h4>
						    		
										<div class="term-slide1">
											<div class="plist plist11">
												<i class="sprite-term i-travelInsur"></i>
											</div>
					
										
						
								
												<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
														adipiscing elit, sed do eiusmod tempor 
													incididunt ut labore et dolore magna 
													aliqua.e</p>
												
										</div>
									<input type="submit"  class="btn btn-primary" value="Read More"/ >
					

								</div>
						    	
						    </li>
						    <li>
						      <div class="termIns col-lg-12">
						    		<h4>Group Health</h4>
						    		
										<div class="term-slide1">
											<div class="plist plist12">
												<i class="sprite-term i-groupHealth"></i>
											</div>
					
										
						
								
												<p class="term-desc">Lorem ipsum dolor sit amet, consectetur 
														adipiscing elit, sed do eiusmod tempor 
													incididunt ut labore et dolore magna 
													aliqua.e</p>
												
										</div>
									<input type="submit"  class="btn btn-primary" value="Read More"/>
					

								</div>
						    	
						    </li>
						  
						       
						   
						    <!-- items mirrored twice, total of 12 -->
						  </ul>
						</div>

					</div>

			<!-- end of others -->


		</div>
	</div>
	<!-- End of top row -->
</div>
	<!-- end of container-fluid -->
</div>










