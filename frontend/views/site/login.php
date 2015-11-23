<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

?>
<style type="text/css">
.site-login label{
    display: none;

}
.site-login .form-control{
  font-size:16px;
    color:#464442;
    height:45px;
}
.site-login .btn{
padding: 15px;
margin-top: 30px;
background: #15BF8F none repeat scroll 0% 0%;
border: 0px none;
font-size: 15px;
color:#fff;
}
</style>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

   

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                 <?= $form->field($model, 'username', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Enter your name'),],])->label(false); ?>
                <?= $form->field($model, 'password', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Password'),],])->label(false)->passwordInput(); ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div style="color:#999;margin:1em 0">
                   <?= Html::a('Forgot your password.', ['site/request-password-reset']) ?>.
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
       
    </div>
</div>
