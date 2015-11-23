<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\AreaTable;
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
        <?= $form->field($model, 'arrivalDate')?>
        <?= $form->field($model, 'departureDate')?>
        <?= $form->field($model, 'area_id')->dropdownList(
    AreaTable::find()->select(['area', 'area_id'])->indexBy('area_id')->column(),
    ['prompt'=>'Select Category']
);?>

    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- travelform -->