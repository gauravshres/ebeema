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


<div class="test">
<div id="inline1" style="display: none;" class="pop-up col-lg-10 col-lg-offset-1">
		<h3>Lorem ipsum <?php echo $message;?> <?= Html::encode($message); ?></h3>
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
						<input type="submit" class="btn btn-primary" value="Buy Now"></input><br>
						<a href="#" download><h4>Download Pdf <i class="fa fa-file-pdf-o"></i></h4> </a>
					</div>
		<div class="col-lg-12 descPolicy">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
		</p>
	</div>
	</div>
</div>

<div class="site-compare">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 compFilHead">
				<div class="compareFilters">
				
						<H3>Budget:</H3>
				
            			<div class="nstSlider" style="width:240px; background:#ecebec; margin-top:30px;" data-range_min="500" data-range_max="15000" 
                       data-cur_min="3000"    data-cur_max="12000">

						    <div class="bar" style="background:#4bb5d9;"></div>
						    <div class="leftGrip" style="background:#4fbc94;"></div>
						    <div class="rightGrip" style="background:#4fbc94;"></div>
						</div>
						<div class="leftLabel" style="float:left;" ></div>
						<div class="rightLabel" style="float:right;float: right; margin-right: -70px; margin-top: 2px;"></div>
   
            					
						</div>

						<div class="compareFilters">
				
						<H3>Premium:</H3>
				
            			<div class="nstSlider" style="width:240px; background:#ecebec; margin-top:30px;" data-range_min="4500" data-range_max="150000" 
                       data-cur_min="4500"    data-cur_max="150000">

						    <div class="bar" style="background:#f5ab36;"></div>
						    <div class="leftGrip" style="background:#4fbc94;"></div>
						    <div class="rightGrip" style="background:#4fbc94;"></div>
						</div>
						<div class="leftLabel" style="float:left;" ></div>
						<div class="rightLabel" style="float:right;float: right; margin-right: -70px; margin-top: 2px;"></div>
   
            					
						</div>

						<div class="compareRating compareFilters">
							<h3>Rating:</h3>
							<form action="">
							<input type="checkbox" name="star" value="1star"><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><br>
							<input type="checkbox" name="star" value="1star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><br>
							<input type="checkbox" name="star" value="1star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><br>
							<input type="checkbox" name="star" value="1star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><br>
							<input type="checkbox" name="star" value="1star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>

							</form>
						</div>	
			</div>
			<div class="compare_Form col-lg-10">
				<form>

					<select name="Sort by">

						<option disabled selected>Sort By</option>
						<option>Price</option>
						<option>Company</option>
					</select>
				</form>
		

				<div class="policy-compare col-xs-9 col-sm-4 col-md-4 col-lg-3">
					<div class="p-compare cp cp1">
						<img src="/advanced/frontend/images/children_03.png"/>

					</div>
						<div class="compare-wrap col-lg-12">
						<h4>Lorem ipsum </h4>
						<p class="policy-desc">Lorem ipsum dolor sit amet, consectetur 
							adipiscing elit, sed do eiusmod tempor 
							incididunt ut labore et dolore magna 
							aliqua.e</p>
						<a class="various" href="#inline1">Read More</a>
						<p class="policy-cost">Rs. 15,000</p>
						<p class="policy-dollar">(ASD - 3100)</p>
							<fieldset class="rating">
							    <input type="radio" id="star5" name="rating" value="5"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							    <input type="radio" id="star4half" name="rating" value="4 and a half" checked /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
							</fieldset>
							<p>User Review</p>


					</div>
					<input type="submit" class="btn btn-primary" value="Buy Now"></input>
					

				</div>

				<div class="policy-compare col-xs-9 col-sm-4 col-md-4 col-lg-3">
					<div class="p-compare cp cp1">
						<img src="/advanced/frontend/images/children_03.png"></img>
											</div>
						<div class="compare-wrap col-lg-12">
						<h4>Lorem ipsum </h4>
						<p class="policy-desc">Lorem ipsum dolor sit amet, consectetur 
							adipiscing elit, sed do eiusmod tempor 
							incididunt ut labore et dolore magna 
							aliqua.e</p>
						<a href="#">Read More</a>
						<p class="policy-cost">Rs. 15,000</p>
						<p class="policy-dollar">(ASD - 3100)</p>
							<fieldset class="rating">
							    <input type="radio" id="star5" name="rating1" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							    <input type="radio" id="star4half" name="rating1" value="4 and a half" checked /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							    <input type="radio" id="star4" name="rating1" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							    <input type="radio" id="star3half" name="rating1" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							    <input type="radio" id="star3" name="rating1" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							    <input type="radio" id="star2half" name="rating1" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							    <input type="radio" id="star2" name="rating1" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							    <input type="radio" id="star1half" name="rating1" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							    <input type="radio" id="star1" name="rating1" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							    <input type="radio" id="starhalf" name="rating1" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
							</fieldset>
							<p>User Review</p>


					</div>
					<input type="submit"  class="btn btn-primary" value="Buy Now"></input>
					

				</div>
				<div class="policy-compare col-xs-9 col-sm-4 col-md-4 col-lg-3">
					<div class="p-compare cp cp1">
						<img src="/advanced/frontend/images/children_03.png"></img>
											</div>
						<div class="compare-wrap col-lg-12">
						<h4>Lorem ipsum </h4>
						<p class="policy-desc">Lorem ipsum dolor sit amet, consectetur 
							adipiscing elit, sed do eiusmod tempor 
							incididunt ut labore et dolore magna 
							aliqua.e</p>
						<a href="#">Read More</a>
						<p class="policy-cost">Rs. 15,000</p>
						<p class="policy-dollar">(ASD - 3100)</p>
							<fieldset class="rating">
							    <input type="radio" id="star5" name="rating2" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							    <input type="radio" id="star4half" name="rating2" value="4 and a half" checked/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							    <input type="radio" id="star4" name="rating2" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							    <input type="radio" id="star3half" name="rating2" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							    <input type="radio" id="star3" name="rating2" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							    <input type="radio" id="star2half" name="rating2" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							    <input type="radio" id="star2" name="rating2" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							    <input type="radio" id="star1half" name="rating2" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							    <input type="radio" id="star1" name="rating2" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							    <input type="radio" id="starhalf" name="rating2" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
							</fieldset>
							<p>User Review</p>


					</div>
					<input type="submit" class="btn btn-primary" value="Buy Now"></input>
					

				</div>

				<div class="policy-compare col-xs-9 col-sm-4 col-md-4 col-lg-3">
					<div class="p-compare cp cp1">
						<img src="/advanced/frontend/images/children_03.png"></img>
											</div>
						<div class="compare-wrap col-lg-12">
						<h4>Lorem ipsum </h4>
						<p class="policy-desc">Lorem ipsum dolor sit amet, consectetur 
							adipiscing elit, sed do eiusmod tempor 
							incididunt ut labore et dolore magna 
							aliqua.e</p>
						<a href="#">Read More</a>
						<p class="policy-cost">Rs. 15,000</p>
						<p class="policy-dollar">(ASD - 3100)</p>
							<fieldset class="rating">
							    <input type="radio" id="star5" name="rating3" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							    <input type="radio" id="star4half" name="rating3" value="4 and a half" checked/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							    <input type="radio" id="star4" name="rating3" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							    <input type="radio" id="star3half" name="rating3" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							    <input type="radio" id="star3" name="rating3" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							    <input type="radio" id="star2half" name="rating3" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							    <input type="radio" id="star2" name="rating3" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							    <input type="radio" id="star1half" name="rating3" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							    <input type="radio" id="star1" name="rating3" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							    <input type="radio" id="starhalf" name="rating3" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
							</fieldset>
							<p>User Review</p>


					</div>
					<input type="submit" class="btn btn-primary" value="Buy Now"></input>
					

				</div>
				<div class="policy-compare col-xs-9 col-sm-4 col-md-4 col-lg-3">
					<div class="p-compare cp cp1">
						<img src="/advanced/frontend/images/children_03.png"></img>
											</div>
						<div class="compare-wrap col-lg-12">
						<h4>Lorem ipsum </h4>
						<p class="policy-desc">Lorem ipsum dolor sit amet, consectetur 
							adipiscing elit, sed do eiusmod tempor 
							incididunt ut labore et dolore magna 
							aliqua.e</p>
						<a href="#">Read More</a>
						<p class="policy-cost">Rs. 15,000</p>
						<p class="policy-dollar">(ASD - 3100)</p>
							<fieldset class="rating">
							    <input type="radio" id="star5" name="rating4" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							    <input type="radio" id="star4half" name="rating4" value="4 and a half" checked/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							    <input type="radio" id="star4" name="rating4" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							    <input type="radio" id="star3half" name="rating4" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							    <input type="radio" id="star3" name="rating4" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							    <input type="radio" id="star2half" name="rating4" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							    <input type="radio" id="star2" name="rating4" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							    <input type="radio" id="star1half" name="rating4" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							    <input type="radio" id="star1" name="rating4" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							    <input type="radio" id="starhalf" name="rating4" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
							</fieldset>
							<p>User Review</p>


					</div>
					<input type="submit" class="btn btn-primary" value="Buy Now"></input>
					

				</div>
				<div class="policy-compare col-xs-9 col-sm-4 col-md-4 col-lg-3">
					<div class="p-compare cp cp1">
						<img src="/advanced/frontend/images/children_03.png"></img>
											</div>
						<div class="compare-wrap col-lg-12">
						<h4>Lorem ipsum </h4>
						<p class="policy-desc">Lorem ipsum dolor sit amet, consectetur 
							adipiscing elit, sed do eiusmod tempor 
							incididunt ut labore et dolore magna 
							aliqua.e</p>
						<a href="#">Read More</a>
						<p class="policy-cost">Rs. 15,000</p>
						<p class="policy-dollar">(ASD - 3100)</p>
							<fieldset class="rating">
							    <input type="radio" id="star5" name="rating5" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
							    <input type="radio" id="star4half" name="rating5" value="4 and a half" checked/><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
							    <input type="radio" id="star4" name="rating5" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
							    <input type="radio" id="star3half" name="rating5" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
							    <input type="radio" id="star3" name="rating5" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
							    <input type="radio" id="star2half" name="rating5" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
							    <input type="radio" id="star2" name="rating5" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
							    <input type="radio" id="star1half" name="rating5" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
							    <input type="radio" id="star1" name="rating5" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
							    <input type="radio" id="starhalf" name="rating5" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
							</fieldset>
							<p>User Review</p>


					</div>
					<input type="submit" class="btn btn-primary" value="Buy Now"></input>
					

				</div>

			</div>
		</div>
	</div>
  

</div>
