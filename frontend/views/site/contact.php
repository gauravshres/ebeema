
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

// $this->title = 'Contact';
// $this->params['breadcrumbs'][] = $this->title 27.7000, 85.3333;
?>
<link href="css/hover.css" rel="stylesheet" media="all">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript" src="jquery.fancybox.js"></script>
<script type="text/javascript" src="jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="jquery.fancybox.css" type="text/css" media="screen" />

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    
    jQuery(".fancybox").fancybox();
  });
</script>

<script>
var myCenter=new google.maps.LatLng(27.7000, 85.3333);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:7,
  scrollwheel:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>



    <div class="site-contact">
        <div class="form-wrapper"  >
                     <h1><?= Html::encode($this->title) ?></h1>

                
                            <div class="container">
                                <div class="row contact-row">
                                    <div class="contact-us col-lg-offset-1 col-xs-offset-1">
                                                   <h4 class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-3">Get in</h4>
                                                      <h2 class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-3" > Touch</h2>
                                                          <h6 class="col-lg-offset-2 col-md-offset-1 col-sm-offset-1 col-lg-7 col-md-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</h6>
                                                

                                                                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                                                    <?=$form->field($model, 'name', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Enter your name'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'email', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Enter your email address'),],])->label(false); ?>
                                                                    <?// $form->field($model, 'subject') ?>
                                                                    <div class="form-text">
                                                                      <?= $form->field($model, 'body',['inputOptions' => ['placeholder' => $model->getAttributeLabel('Message'),],])->label(false)->textArea(['rows' => 6]); ?>
                                                                    </div>
                                                                            <?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                                                             //'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                                                              //]) ?>
                                                                    <div class="form-group-button button ">
                                                                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary hvr-sweep-to-right', 'name' => 'contact-button']) ?>
                                                                    </div>
                                                                    <div class="contact-items col-lg-offset-1">
                                                                        
                                                                              <ul class="c-list">
                                                                               
                                                                                <li class="c1 c col-xs-12">
                                                                                  <p class="c-moble">9238938420</p>
                                                                                  <i class="csprite animated flip i-mobile" ></i>
                                                                                  
                                                                                </li>

                                                                                <li class="c2 c col-xs-12">
                                                                                  <p class="c-facebook">facebook.com/ebeema</p>
                                                                                  <i class="csprite animated flip i-facebook" ></i>
                                                                                  
                                                                                </li>

                                                                                <li class="c3 c col-xs-12">
                                                                                  <p class="c-twitter">twitter/ebeema</p>
                                                                                  <i class="csprite animated flip i-twitter" ></i>
                                                                                 
                                                                                </li>

                                                                                <li class="c4 c col-xs-12">
                                                                                  <p class="c-skype">skype/ebeema</p>
                                                                                  <i class="csprite animated flip i-skype" ></i>
                                                                                 
                                                                                </li>

                                                                                <li class="c5 c col-xs-12">
                                                                                  <p class="c-google">googleplus/ebeema</p>
                                                                                  <i class="csprite animated flip i-google" ></i>
                                                                                
                                                                                </li>
                                                                             </ul>

                                                                        
                                                                    </div>
                                     
                                    </div>
                                </div>
                            </div>
        </div>
        
   <div class="relative">
    <div id="googleMap" style="width:100%;height:500px;">
       
    </div>
    

<div style="display:none"><div id="data">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div></div>
     <div class="info col-lg-3 col-xs-5">
            <h3>Lorem ipsum dolor sit amet </h3>
            <p>Lorem ipsum dolor sit</br> 
            Address one</br>
            Address two</br>
            681236123,87123123</br>
            asda@hasid.com</p>
        </div>
        </div>

  <?php ActiveForm::end(); ?>  
 </div>
 
           
