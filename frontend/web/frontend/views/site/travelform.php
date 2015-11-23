<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TravelUser */
/* @var $form ActiveForm */
?>
<div class="travelform">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'travelUserName') ?>
        <?= $form->field($model, 'travelUserNumber') ?>
        <?= $form->field($model, 'travelUserAge') ?>
        <?= $form->field($model, 'travelUserEmail') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- travelform -->
