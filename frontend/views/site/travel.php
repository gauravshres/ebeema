<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;
//@var $form yii\bootstrap\ActiveForm
//@var $model \frontend\models\ContactForm
//@var $this yii\web\View 
//$this->title = 'Test';
//$this->params['breadcrumbs'][] = $this->title;*/
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});

	$('.nstSlider').nstSlider({
    "crossable_handles": false,
    "left_grip_selector": ".leftGrip",
    "right_grip_selector": ".rightGrip",
    "value_bar_selector": ".bar",
    "value_changed_callback": function(cause, leftValue, rightValue) {
        $(this).parent().find('.leftLabel').text(leftValue);
        $(this).parent().find('.rightLabel').text(rightValue);
    }
});

	
});

</script>
<script type="text/javascript">

</script>
<link href="css/hover.css" rel="stylesheet" media="all">





<div class="site-compare">
	<div class="container ">
		<div class="row">
			<div class="col-lg-2 compFilHead">
				<div class="compareFilters">
				
					
				
						<div class="leftLabel" style="float:left;" ></div>
						<div class="rightLabel" style="float:right;float: right; margin-right: -70px; margin-top: 2px;"></div>
   
            					
						</div>

						<div class="compareFilters">
				
						<div class="leftLabel" style="float:left;" ></div>
						<div class="rightLabel" style="float:right;float: right; margin-right: -70px; margin-top: 2px;"></div>
   
            					
						</div>

						<div class="compareRating compareFilters">
							<h3>Coverage:</h3>
							<form action="">
							   <label>
							    <input type="checkbox"  checked value=""> Basic Coverage
							    </label>
							    <label>
							    <input type="checkbox" id="advanced-list" value="checked"> All Coverage
							    </label>
							 
							</form>
						</div>	
			</div>
			

			<div class="col-lg-10 content toggle"  id="main-content">
<?php
				if (count($model->t_rate) > 1) {
					
				

				$travelItems=count($model->t_rate);
				for($i=1;$i<=$travelItems;$i++){
					if ($model->companyName[$i] == 'United Travel') {
							$info = "United Insurance Co. (Nepal) Limited is an ISO 9001:2000 certified insurance company.The company has started its operation from December 1, 1993 (Mangsir 16, 2050).";
					}
					elseif ($model->companyName[$i]== 'HGI Travel') {
							$info = "HGI’s Overseas Medical Travel Insurance provides you a reliable & exclusive cover whilst you are traveling around the world.";
					}
					$basic=count($model->package[$i]);
						if($basic<4){
							$classvar="visible";
						}
						else{
							$classvar="not-visible";
						}
						?>	
				
					<div class="policy-compare col-xs-9 col-sm-4 col-md-4 col-lg-3 <?php echo $classvar;?>">
						<div class="p-compare p6 p">
							<div class="sprite i-travel"></div>
						</div>
						<div class="compare-wrap col-lg-12">
							<h4><?php echo $model->companyName[$i];?> </h4>
								<div class="policy-desc" >
									<table class="package-list">
										<?php 
																			
																			
																				if(count($model->package[$i]>1)){	
																			
																				for ($j=1; $j <= count($model->package[$i]); $j++) { 
																				?>
								
											
												<tr>

													<td><i class='fa fa-check'></i><?php echo $model->package[$i][$j];?></td>
													
												</tr>
											
										
												
																			
																				

																				
																			
																					<?php
																			}
																		}?>
																				</table>

								</div>
									
									<p class="policy-cost" ><b><?php echo $model->packageName; ?></b></p>
									<p class="policy-dollar"><b>$ <?php echo $model->t_rate[$i];?></b></p>
									<a class="various" href="#inline<?php echo $i;?>">Package Coverage</a>
								
							
									
												<div class="test">
													<div id="inline<?php echo $i;?>" style="display: none;" class="pop-up col-lg-10 col-lg-offset-1">
														<h3><?php echo $model->companyName[$i];?></h3>
																	<div class="p-compare cp cp1 col-lg-2">
																		<img src="/advanced/frontend/images/children_03.png"/>
																	</div>
																	<div class="col-lg-5">
																		<div class="col-lg-6 popPrice">
																		<p class="col-lg-offset-1  h-1 text-center">54,000 /- </p>
																			<p class="small text-center">IDV</p>
																		</div>
																		<div class="col-lg-5 popPrice">
																		<p class="text-center h-1">3,000 /- </p>
																			<p class="small text-center">Premium</p>
																		</div>
																	</div>
																	<div class="col-lg-3">
																		<form>
																		<input type="submit" class="btn btn-primary" value="Buy Now"/>
																		</form><br/>
																		<a href="#" download><h4>Download Pdf <i class="fa fa-file-pdf-o"></i></h4> </a>
																	</div>
																		<div class="col-lg-12 descPolicy">
																				This Insurance provides the  benefits of :
																				<?php 
																			
																						$j=1;
																				echo "</br><br>";
																				for ($j=1; $j <=count($model->package[$i]); $j++) { 
																				?>
																				<p>
																					<?php echo $j; echo ". ";echo $model->package[$i][$j];?>
																				</p>

																				
																			
																					<?
																			}?>

																	</div>
														</div>
													</div>
															
																<fieldset class="rating">
							    <input type="radio" id="star5" name="rating<?php echo $i;?>" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							    <input type="radio" id="star4half" name="rating<?php echo $i;?>" value="4 and a half" checked/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							    <input type="radio" id="star4" name="rating<?php echo $i;?>" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							    <input type="radio" id="star3half" name="rating<?php echo $i;?>" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							    <input type="radio" id="star3" name="rating<?php echo $i;?>" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							    <input type="radio" id="star2half" name="rating<?php echo $i;?>" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							    <input type="radio" id="star2" name="rating<?php echo $i;?>" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							    <input type="radio" id="star1half" name="rating<?php echo $i;?>" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							    <input type="radio" id="star1" name="rating<?php echo $i;?>" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							    <input type="radio" id="starhalf" name="rating<?php echo $i;?>" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
							</fieldset>
							<p>User Review</p>


						</div>
						<form>
							<input type="submit" class="btn btn-primary" value="Buy Now"/>
							</form>
					</div> 
					<?php } } ?>
					
						
			</div>

			
		
		</div>

	</div>

  

</div>
