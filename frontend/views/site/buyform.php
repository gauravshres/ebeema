<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */



?>
<div class="site-buyForm">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-12">
        	<p class="buy-first-text">Please</p>
        	<p class="buy-second-text">Confirm</p>
     <div class="buy-description">
     	<span class="p8"> <i class="sprite i-health"></i></span><p class="buy-first-description">Lorem ipsum</p>
     	<p class="buy-second-description">Lorem ipsum dolor sit amet, consectetur  adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
     	<p class="amount">Rs. 15,000 </p>
     	<p class="amount"> (ASD - 3100) </p>


     </div>
 
                                                                    <?php $form = ActiveForm::begin(['id' => 'buyForm']); ?>
                                                                    <div class="buy-form-fields">
                                                                    <div class="field-block">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incunt? </p>
<div class="col-md-4 col-md-offset-4">
 <?php echo $form->field($model, 'drop1')->dropDownList(['a' => 'Yes', 'b' => 'No', 'c' => 'Not sure']); ?> </div></div>  
 <div class="field-block"> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incunt? </p>
<?php echo $form->field($model, 'drop2')->dropDownList(['a' => '1992', 'b' => '10', 'c' => '29']); ?>

<?php echo $form->field($model, 'drop3')->dropDownList(['a' => '10', 'b' => '2010', 'c' => '2020']); ?>
<?php echo $form->field($model, 'drop4')->dropDownList(['a' => '25', 'b' => 'No', 'c' => 'Not sure']); ?>
</div> 
 <div class="field-block">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incunt? </p>
<?php echo $form->field($model, 'drop5')->dropDownList(['a' => '2010', 'b' => 'No', 'c' => 'Not sure']); ?> 
<?php echo $form->field($model, 'drop6')->dropDownList(['a' => '10', 'b' => 'No', 'c' => 'Not sure']); ?>  
<?php echo $form->field($model, 'drop7')->dropDownList(['a' => '25', 'b' => 'No', 'c' => 'Not sure']); ?>
</div> 
</div>                                                                    
                                          <div class="col-md-4 col-md-offset-4">
                                                                        <?= Html::submitButton('Buy Now', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                                                    </div>


                                                                    <?php ActiveForm::end(); ?>  

        </div>
    </div>
</div>
