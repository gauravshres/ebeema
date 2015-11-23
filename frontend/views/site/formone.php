<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

?>


<div class="site-firstForm">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">
                                                                    <?php $form = ActiveForm::begin(['id' => 'firstForm']); ?>
                                                                    <?=$form->field($model, 'name', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Name'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'email', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Email'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'phoneNumber', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Phone Number'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'age',['inputOptions' => ['placeholder' => $model->getAttributeLabel('Date of Birth'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'premiumAmt',['inputOptions' => ['placeholder' => $model->getAttributeLabel('Premium Amount'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'term',['inputOptions' => ['placeholder' => $model->getAttributeLabel('Term'),],])->label(false); ?>
                                                                    
                                                                        <p>
                                                                            <?php
                                                                                if(yii::$app->session->hasFlash('success')){
                                                                                echo yii::$app->session->getFlash('success');
                                                                             }
?> 

                                                                        </p>
                                                                    <div class="form-group-button">
                                                                        <?= Html::submitButton('test', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                                                    </div>


                                                                    <?php ActiveForm::end(); ?>  

        </div>
    </div>
</div>
