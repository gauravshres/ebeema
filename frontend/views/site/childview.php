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
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-touch.min.js"></script>
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
<link href="css/hover.css" rel="stylesheet" media="all">


<div id='ng-app' ng-app="CalculationApp">
	<div ng-controller="MainCtrl">

<div class="test">
<div id="inline1" style="display: none;" class="pop-up col-lg-10 col-lg-offset-1">
		<h3>Lorem ipsum </h3>
					<div class="p-compare cp cp1 col-lg-2">
						<img src="/advanced/frontend/images/children_03.png"/>
					</div>
					<div class="col-lg-5">
						<div class="col-lg-6 popPrice">
						<p class="col-lg-offset-1  h-1 text-center">54,000 /- </p>
							<p class="small text-center">IDV</p>
						</div>
						<div class="col-lg-5 popPrice">
						<p class="text-center h-1">3,000 /-</p>
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
				
					
					<h3>Premium</h3>
            			   <slider class="premSlider" floor='20000' ceiling='100000' step='1000' precision='0' stickiness='20'
	            			ng-model='value2' style="width:250px;" ng-change="calculate();"></slider>


	            				<h3>Sum Assured</h3>
            			   <slider class="sumSlider"floor='100000' ceiling='1000000' step='10000' precision='0' stickiness='20'
	            			ng-model='value1' style="width:250px;" ng-change="calculate1();"></slider>
<!-- 
						   <span  ng-model="value1"> {{sa1}}</span> -->
						
						   						<h3 >Add Benefits</h3>
						   						<form  class="child_select"action="">
												   <label>
												    	
												    	<input type="checkbox" ng-model="vm" ng-change="oncheckpwb(vm)" ><b data-toggle="tooltip" title="Premium Waver Benifit info">PWB </b>
												    </label>
												    <label>
												    	<input type="checkbox" id="advanced-list" value="checked"> <b data-toggle="tooltip" title="Accidental Death Benifit info">ADB</b>
												    </label>
												     <label>
												    	<input type="checkbox" id="advanced-list" value="checked"><b data-toggle="tooltip" title="Monthly Income Benifit info"> MIB</b>
												    </label>
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
			

	<div id="demo">

								<?php $var=count($model->products);
								for($i=1;$i<=$var;$i++){
								?>
								
				
									<div class="policy-compare col-xs-9 col-sm-4 col-md-4 col-lg-3">
										<div class="p-compare cp cp1">
											<img src="/advanced/frontend/images/children_03.png"></img>
																</div>
											<div class="compare-wrap col-lg-12 childview">
											<h4><?php echo $model->products[$i];?></h4>
											<p class="policy-desc">
												<table>
												
														
														<tr> <td><i class="<?php if($model->pwd[$i]>0){echo "fa1";}?> fa fa-times"></i>PWB</td> </tr>

														<tr> <td><i class="fa fa-times"></i>ADB</td> </tr>

														<tr> <td><i class="fa fa-times"></i>MIB</td> </tr>

														


													


												</table>
												<ul class="policy-desc-list">
													<?php 
													$sum = ($model->salary*1000)/$model->rates[$i];
													$prem = ($sum * $model->rates[$i])/1000;

													$pwdrate[$i] = $model->rates[$i]+ $model->pwd[$i];
													$sum1 = $sum;
													$prem1 = ($sum1 * $pwdrate[$i])/1000;


													?>

													<li class="deslider visible" ><h4>Premium<br> <p>Rs.&nbsp <?php $premium = ceil($prem);echo ceil($prem);?></p></h4></li>
													<li class="deslider visible" ><h3>Sum Assured <br><p>Rs.&nbsp <?php echo ceil($sum);?></p></br></h3></li>
												
													
													<li class="paslider not-visible" ><h4>Premium<br> <p>Rs.&nbsp{{pm}}</p></h4></li>
													<li class="paslider not-visible" ><h3>Sum Assured<br> <p>Rs.&nbsp{{(sa/<?php echo $model->rates[$i];?>) | number: 0 }}</p></h3></li>

													<li class="saslider not-visible" ><h4>Premium<br> <p>Rs.&nbsp{{(pa1*<?php echo $model->rates[$i];?>) | number: 0 }}</p></h4></li>
													<li class="saslider not-visible" ><h3>Sum Assured<br> <p>Rs.&nbsp{{sa1}}</p></h3></li>

													<li class="paslider1 not-visible" ><h4>Premium<br> <p>Rs.&nbsp{{pm}}</p></h4></li>
													<li class="paslider1 not-visible" ><h3>Sum Assured<br> <p>Rs.&nbsp{{(sa/<?php echo $pwdrate[$i];?>) | number: 0 }}</p></br>Additional PWB Cost: <?php echo $model->pwd[$i];?></h3></li>

													<li class="saslider2 not-visible" ><h4>Premium<br> <p>Rs.&nbsp{{(pa1*<?php echo $pwdrate[$i];?>) | number: 0 }}</p></h4></li>
													<li class="saslider2 not-visible" ><h3>Sum Assured<br> <p>Rs.&nbsp{{sa1}}</p></br>Additional PWB Cost: <?php echo $model->pwd[$i];?></h3></li>

													<li class="pwbslider3 not-visible" ><h4>Premium<br> <p>Rs.&nbsp <?php echo ceil($prem1);?></p></h4></li>
													<li class="pwbslider3 not-visible" ><h3>Sum Assured<br> <p>Rs.&nbsp <?php echo ceil($sum1);?></p></br>Additional PWB Cost: <?php echo $model->pwd[$i];?></p></h3></li>

											


												</ul>
											</p>

		
											<a href="#">Read More</a>
											<!-- <p class="policy-cost"><?php echo $model->rates[$i]; ?></p> -->
												<p class="policy-dollar"></p>
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
													<div>
										
													</div>
													<div class="site-firstForm">
    

    <div class="row">
        <div class="col-lg-12">
        			
        			
        			
    	              <button ng-if="counter == 2"  class="test1" id="rest<?php echo $i;?>" value="product=<?php echo $model->products[$i];?>&prem=<?php echo ceil($prem);?>&sum=<?php echo ceil($sum); ?>">Buy Now</button>

					
				
    	                     <button  ng-if="counter == 1" class="test1" id="rest<?php echo $i;?>" value="product=<?php echo $model->products[$i];?>&prem=<?php echo ceil($prem1);?>&sum=<?php echo ceil($sum1);?>">Buy Now</button>

				
					<div ng-if="counter == 3">
    	                     <button  class="test1" id="rest<?php echo $i;?>" value="product=<?php echo $model->products[$i];?>&prem={{pm}}&sum={{(sa/<?php echo $pwdrate[$i];?>) | number: 0 }}">Buy Now</button>

					</div>
					<div ng-if="counter == 4">
    	                     <button  class="test1" id="rest<?php echo $i;?>" value="product=<?php echo $model->products[$i];?>&prem={{pm}}&sum={{(sa/<?php echo $model->rates[$i];?>) | number: 0 }}">Buy Now</button>

					</div>
					<div ng-if="counter == 5">
    	                     <button  class="test1" id="rest<?php echo $i;?>" value="product=<?php echo $model->products[$i];?>&prem={{(pa1*<?php echo $pwdrate[$i];?>) | number: 0 }}&sum={{sa1}}">Buy Now</button>

					</div>
					<div ng-if="counter == 6">
    	                     <button  class="test1" id="rest<?php echo $i;?>" value="product=<?php echo $model->products[$i];?>&prem={{(pa1*<?php echo $model->rates[$i];?>) | number: 0 }}&sum={{sa1}}">Buy Now</button>

					</div>
        </div>
    </div>
</div>
													<p>User Review</p>


											</div>
											       				
                                                                    
                                                              
											
											

										</div>
									<?php } ?>
									</div>
								

							</div>
					</div>
		</div>
	</div>
  

		</div>
	</div>
</div>
			

<script>


		var app = angular.module('urlApp', []);
app.controller('urlCtrl', function ($scope, $log, $window) {
    $scope.ClickMeToRedirect = function () {
        var url = "http://" + $window.location.host + "/Account/Login";
        $log.log(url);
        // $window.location.href = "../views/site/formtwo";
    };
});


	    function dump(obj) {
		    var out = '';
		    for(var i in obj) {
			    out += i + ": " + obj[i] + "\n";
		    }

		    return out;
	    }
	    angular.module('CalculationApp', ['vr.directives.slider']).controller('MainCtrl', ['$scope', function($scope) {
		    $scope.scopes = [];
		    $scope.value = 5;
		    $scope.values = {
			    low : 4,
			    high: 7
		    };
		    $scope.scale = function(value) {
			    return Math.pow(value, 3);
		    };
		    $scope.inverseScale = function(value) {
			    var sign = value == 0?1:(value / Math.abs(value));
			    return sign * Math.pow(Math.abs(value), 1 / 3);
		    };

		    $scope.addScope = function() {
			    $scope.scopes.push({
				    values: {
					    low : 4,
					    high: 7
				    },
				    value : 5
			    });
		    };
		    $scope.counter = 2;
		    $scope.oncheckpwb1 = function(){
		    	$window.location.href = '/index.html';
		    }
		    $scope.oncheckpwb = function() {

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  };
 

  if ($scope.vm==true) {
  		$scope.counter = 1;

  		<?php 
  		

  		$var=count($model->products);

	for($i=1;$i<=$var;$i++){
  		if($model->pwd[$i]==0){
  			echo " ";
  		}
  		else{
  			echo "$('.fa1').addClass('fa-check');
  				$('.fa1').removeClass('fa-times');";
  		}


}
$i=1;

  		?>
  				
  				$(".deslider").addClass('not-visible');
		    	$(".deslider").removeClass('visible');
		    	$(".deslider").addClass('not-visible');
				$(".paslider").addClass('not-visible');
		    	$(".paslider").removeClass('visible');
		    	$(".saslider").addClass('not-visible');
		    	$(".saslider").removeClass('visible');
		    	$(".pwbslider3").addClass('visible');
		    	$(".pwbslider3").removeClass('not-visible');
		    	$(".paslider1").addClass('not-visible');
		    	$(".paslider1").removeClass('visible');
		    	$(".saslider2").addClass('not-visible');
		    	$(".saslider2").removeClass('visible');
	
		    	
	}

	else if($scope.vm==false){
			
			$scope.counter = 2;
		$(".fa1").removeClass('fa-check');
  				$(".fa1").addClass('fa-times');
				$(".deslider").removeClass('not-visible');
		    	$(".deslider").addClass('visible');
		    	$(".paslider").addClass('not-visible');
		    	$(".paslider").removeClass('visible');
		    	$(".saslider").addClass('not-visible');
		    	$(".saslider").removeClass('visible');
		    	$(".pwbslider3").addClass('not-visible');
		    	$(".pwbslider3").removeClass('visible');
		    	$(".paslider1").addClass('not-visible');
		    	$(".paslider1").removeClass('visible');
		    	$(".saslider2").addClass('not-visible');
		    	$(".saslider2").removeClass('visible');
	}
	
		$scope.calculate = function(){
			 if($scope.vm==true && $scope.value2>=1){
			 	
			 	$scope.counter = 3;

				$(".deslider").removeClass('visible');
		    	$(".deslider").addClass('not-visible');
		    	$(".paslider").addClass('not-visible');
		    	$(".paslider").removeClass('visible');
		    	$(".saslider").addClass('not-visible');
		    	$(".saslider").removeClass('visible');
		    	$(".pwbslider3").addClass('not-visible');
		    	$(".pwbslider3").removeClass('visible');
		    	$(".paslider1").addClass('visible');
		    	$(".paslider1").removeClass('not-visible');
		    	$(".saslider2").addClass('not-visible');
		    	$(".saslider2").removeClass('visible');
		    	var C = $scope.value2;	    	
			    
			   	$scope.sa =  (C * 1000);
			   	$scope.pm = $scope.value2;
		    }else if($scope.vm==false && $scope.value2>=1){
		    	
		    	$scope.counter = 4;

				$(".deslider").removeClass('visible');
		    	$(".deslider").addClass('not-visible');
		    	$(".paslider").addClass('visible');
		    	$(".paslider").removeClass('not-visible');
		    	$(".saslider").addClass('not-visible');
		    	$(".saslider").removeClass('visible');
		    	$(".pwbslider3").addClass('not-visible');
		    	$(".pwbslider3").removeClass('visible');
		    	$(".paslider1").addClass('not-visible');
		    	$(".paslider1").removeClass('visible');
		    	$(".saslider2").addClass('not-visible');
		    	$(".saslider2").removeClass('visible');
		    	var C = $scope.value2;	    	
			    
			   	$scope.sa =  (C * 1000);
			   	$scope.pm = $scope.value2;
		    }


	};
		$scope.calculate1 = function(){
			 if($scope.vm==true && $scope.value1>=1){
			 	
			 	$scope.counter = 5;

				$(".deslider").removeClass('visible');
		    	$(".deslider").addClass('not-visible');
		    	$(".paslider").addClass('not-visible');
		    	$(".paslider").removeClass('visible');
		    	$(".saslider").addClass('not-visible');
		    	$(".saslider").removeClass('visible');
		    	$(".pwbslider3").addClass('not-visible');
		    	$(".pwbslider3").removeClass('visible');
		    	$(".paslider1").addClass('not-visible');
		    	$(".paslider1").removeClass('visible');
		    	$(".saslider2").addClass('visible');
		    	$(".saslider2").removeClass('not-visible');
		    	var k = $scope.value1;

		    	$scope.sa1 = $scope.value1;
		    	$scope.pa1 = (k / 1000);
		    }else if($scope.vm==false && $scope.value1>=1){
		    	
		    	$scope.counter = 6;

				$(".deslider").removeClass('visible');
		    	$(".deslider").addClass('not-visible');
		    	$(".paslider").addClass('not-visible');
		    	$(".paslider").removeClass('visible');
		    	$(".saslider").addClass('visible');
		    	$(".saslider").removeClass('not-visible');
		    	$(".pwbslider3").addClass('not-visible');
		    	$(".pwbslider3").removeClass('visible');
		    	$(".paslider1").addClass('not-visible');
		    	$(".paslider1").removeClass('visible');
		    	$(".saslider2").addClass('not-visible');
		    	$(".saslider2").removeClass('visible');
		    	var k = $scope.value1;

		    	$scope.sa1 = $scope.value1;
		    	$scope.pa1 = (k / 1000);
		    }


	};
		
				



};


	$scope.calculate = function(){
				
				$scope.counter = 4;

				$(".deslider").removeClass('visible');
		    	$(".deslider").addClass('not-visible');
		    	$(".paslider").addClass('visible');
		    	$(".paslider").removeClass('not-visible');
		    	$(".saslider").addClass('not-visible');
		    	$(".saslider").removeClass('visible');
		    	$(".pwbslider3").addClass('not-visible');
		    	$(".pwbslider3").removeClass('visible');
		    	$(".paslider1").addClass('not-visible');
		    	$(".paslider1").removeClass('visible');
		    	$(".saslider2").addClass('not-visible');
		    	$(".saslider2").removeClass('visible');
		    	var C = $scope.value2;	    	
			    
			   	$scope.sa =  (C * 1000);
			   	$scope.pm = $scope.value2;
		    
	};

	









	$scope.calculate1 = function(){
				
				$scope.counter = 6;
				$(".paslider").addClass('not-visible');
		    	$(".paslider").removeClass('visible');
		    	$(".deslider").addClass('not-visible');
		    	$(".deslider").removeClass('visible');
		    	$(".saslider").removeClass('not-visible');
		    	$(".saslider").addClass('visible');
		    	$(".pwbslider3").addClass('not-visible');
		    	$(".pwbslider3").removeClass('visible');
		    	$(".paslider1").addClass('not-visible');
		    	$(".paslider1").removeClass('visible');
		    	$(".saslider2").addClass('not-visible');
		    	$(".saslider2").removeClass('visible');
		    	
		    	var k = $scope.value1;

		    	$scope.sa1 = $scope.value1;
		    	$scope.pa1 = (k / 1000);


	};

		    $scope.translate = function(value) {
			    return '$' + value;
		    };

		    $scope.translateCombined = function(low, high) {
			    return $scope.translate(low.toFixed($scope.precision)) + " *** " + $scope.translate(high.toFixed($scope.precision));
		    };

		    $scope.translateRange = function(low, high) {
			    return $scope.translate((high - low).toFixed($scope.precision));
		    };

		    $scope.fireResizeEvent = function() {
			    $scope.$broadcast('refreshSlider');
		    };
	    }]);
    </script>


