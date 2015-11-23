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


<script type="text/javascript">
function toggle(Info) {
  var CState = document.getElementById(Info);
  CState.style.display = (CState.style.display != 'block')
                       ? 'block' : 'none';



}
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

	<div class="container-fluid resFaq ">
		<div class="col-lg-12">
		<div class="row">
				<h2>Resources</h2>
				<div class="resourcesIcon">
					<div class="col-lg-offset-1 col-lg-3">
						<div class="calc">
							<div class="rlist rlist1">
								<i class="sprite3 i-calc"></i>
							</div>
							<p>Calculator</p>

						</div>
					</div>
					<div class="col-lg-4">
						<div class="calc">
							<div class="rlist rlist2" id="hospitalLocator">
								<i class="sprite3 i-hospitalLocator"></i>
							</div>
							<p>Hospital Locator</p>

						</div>
					</div>
					<div class="col-lg-3">
						<div class="calc">
							<div class="rlist rlist3">
								<i class="sprite3 i-jargon"></i>
							</div>
							<p>Jargon Dictonary</p>

						</div>
					</div>
				</div>
				<h2 class="faqh2">FAQs</h2>
				<div class="col-lg-offset-2 col-lg-8 QA">
					<DIV class="FAQ" onclick="toggle('faq1')"><i class="fa fa-caret-down fa-lg"></i>
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incunt? 
						 <div id="faq1" class="FAA">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
						</DIV>

						<DIV class="FAQ" onclick="toggle('faq2')"><i class="fa fa-caret-down fa-lg"></i>
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incunt? 

						 <div id="faq2" class="FAA">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						</DIV>

						<DIV class="FAQ" onclick="toggle('faq3')"><i class="fa fa-caret-down fa-lg"></i>
						  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incunt? 

						 <div id="faq3" class="FAA">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <b>nothing</b>?</div>
						</DIV>

						<DIV class="FAQ" onclick="toggle('faq4')"><i class="fa fa-caret-down fa-lg"></i>
						  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incunt? 

						 <div id="faq4" class="FAA">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <b>nothing</b>?</div>
						</DIV>
						<DIV class="FAQ" onclick="toggle('faq5')"><i class="fa fa-caret-down fa-lg"></i>
						  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incunt? 

						 <div id="faq5" class="FAA">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <b>nothing</b>?</div>
						</DIV>


				</div>
				
		</div>
	</div>
</div>	