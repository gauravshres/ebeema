<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\AgeGroupTable;
use frontend\models\MoneyForm;



/* @var $this yii\web\View */

/* @var $model \frontend\models\ChildForm */
/* @var $form ActiveForm */
$listData=['10','15','16','20','25'];

?>


<div class="site-childForm">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">
                                                                    <?php $form = ActiveForm::begin(['id'=>'moneyForm']); ?>
                                                                    <?=$form->field($model, 'name', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Name'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'email', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Email'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'phone', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Phone Number'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'age',['inputOptions' => ['placeholder' => $model->getAttributeLabel('Applicants age'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'term')->dropDownList($listData,['prompt'=>'Select Term']);?>


                                                                    
                                                                                <?= $form->field($model, 'ageGroup')->dropdownList(
                                                                            AgeGroupTable::find()->select(['ageGroup'])->indexBy('ageGroup')->column(),
                                                                        ['prompt'=>'Yearly Salary']
                                                                         );?>
                                                                                                                                
                                                                            <p>
                                                                            <?php
                                                                                
?> 

                                                                        </p>
                                                                    <div class="form-group-button">
                                                                        <?= Html::submitButton('next', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                                                    </div>


                                                                    <?php ActiveForm::end(); ?>  

        </div>
    </div>
</div>
