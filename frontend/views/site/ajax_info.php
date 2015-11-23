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
												
														
														<tr> <td><i class="fa1 fa fa-times"></i>PWB{{sel1}}</td> </tr>

														<tr> <td><i class="fa fa-times"></i>ADB</td> </tr>

														<tr> <td><i class="fa fa-times"></i>MIB</td> </tr>

														


													


												</table>
												<ul class="policy-desc-list">
													<?php 
													$sum = ($model->salary*1000)/$model->rates[$i];
													$prem = ($sum * $model->rates[$i])/1000;
													$pwdrate = $model->rates[$i]+ $model->pwd[$i];

													?>

													<li class="deslider visible" ><h4>Premium<br> <p>Rs.&nbsp <?php echo ceil($prem);?></p></h4></li>
													<li class="deslider visible" ><h3>Sum Assured <br><p>Rs.&nbsp <?php echo ceil($sum);?></p></br>Additional PWB Cost: <?php echo $model->pwd[$i];?></p></h3></li>
												
													
													<li class="paslider not-visible" ><h4>Premium<br> <p>Rs.&nbsp{{pm}}</p></h4></li>
													<li class="paslider not-visible" ><h3>Sum Assured<br> <p>Rs.&nbsp{{(sa/<?php echo $model->rates[$i];?>) | number: 0 }}</p></h3></li>

													<li class="saslider not-visible" ><h4>Premium<br> <p>Rs.&nbsp{{(pa1*<?php echo $model->rates[$i];?>) | number: 0 }}</p></h4></li>
													<li class="saslider not-visible" ><h3>Sum Assured<br> <p>Rs.&nbsp{{sa1}}</p></h3></li>

													<li class="pwbslider not-visible" ><h4>Premium<br> <p>Rs.</p></h4></li>
													<li class="pwbslider not-visible" ><h3>Sum Assured<br> <p>Rs.</p></h3></li>




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
													<p>User Review</p>


											</div>
											<input type="submit" class="btn btn-primary" value="Buy Now"></input>
											

										</div>
									<?php }?>