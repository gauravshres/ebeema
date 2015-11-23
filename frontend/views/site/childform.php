<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\AgeGroupTable;


/* @var $this yii\web\View */

/* @var $model \frontend\models\ChildForm */
/* @var $form ActiveForm */

?>


<div class="site-childForm">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">
                                                                    <?php $form = ActiveForm::begin(['id'=>'childForm']); ?>
                                                                    <?=$form->field($model, 'name', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Name'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'email', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Email'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'phoneNumber', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Phone Number'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'age',['inputOptions' => ['placeholder' => $model->getAttributeLabel('Child age (max age 10)'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'appAge',['inputOptions' => ['placeholder' => $model->getAttributeLabel('Applicants age (max age 50)'),],])->label(false); ?>
                                                                                <?= $form->field($model, 'ageGroup')->dropdownList(
                                                                            AgeGroupTable::find()->select(['ageGroup'])->indexBy('ageGroup')->column(),
                                                                        ['prompt'=>'Yearly Salary']
                                                                         );?>
                                                                                                                                
                                                                            <p>
                                                                            <?php
                                                                                if(yii::$app->session->hasFlash('success')){
                                                                                echo yii::$app->session->getFlash('success');
                                                                             }
?> 

                                                                        </p>
                                                                    <div class="form-group-button">
                                                                        <?= Html::submitButton('next', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                                                    </div>


                                                                    <?php ActiveForm::end(); ?>  

        </div>
    </div>
</div>
