<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

// @var $this \yii\web\View
// @var $content string

AppAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <?= 
Html::csrfMetaTags() ?>



    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
 <body>
<?php
       
     $this->beginBody() ?>


     <div id="home">
   <div class="navbar-wrapper">
            <div class="container">
      
              <?php
                    NavBar::begin([
                        'brandLabel' => '<img src="css/images/beema_logo.png">',
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                            'class' => 'navbar-inverse ',
                          
                        ],
                    ]);

                    ?>

            
                    
                    <?php
                    
                    $menuItems = [
                        ['label' => 'Products', 'url' => ['site/index'], 'items' => [
                        ['label' => 'Personal', 'url' => ['site/index', 'tag' => 'new1'],'options' => ['class' => 'title-1']],
                        ['label' => 'Personal', 'url' => ['site/index', 'tag' => 'popular1'],'options' => ['class' => 'title-1']],
                        ['label' => 'Personal', 'url' => ['site/index', 'tag' => 'new2'],'options' => ['class' => 'title-1']],
                        ['label' => 'Sub title One', 'url' => ['site/index', 'tag' => 'popular3']],
                        ['label' => 'Sub title One', 'url' => ['site/index', 'tag' => 'new3']],
                        ['label' => 'Sub title One', 'url' => ['site/index', 'tag' => 'popular3']],
                        ['label' => 'Sub title Two', 'url' => ['site/index', 'tag' => 'new4']],
                        ['label' => 'Sub title Two', 'url' => ['site/index', 'tag' => 'popular4']],
                        ['label' => 'Sub title Two', 'url' => ['site/index', 'tag' => 'new5']],
                        ['label' => 'Sub title Three', 'url' => ['site/index', 'tag' => 'popular5']],
                        ['label' => 'Sub title Three', 'url' => ['site/index', 'tag' => 'popular6'],'options' => ['class' => 'title-3']],
                        ['label' => 'Sub title Three', 'url' => ['site/index', 'tag' => 'popular6'],'options' => ['class' => 'title-3']],
                        ['label' => 'Sub title Four', 'url' => ['site/index', 'tag' => 'popular7']],
                        ['label' => 'Sub title Four', 'url' => ['site/index', 'tag' => 'popular8']],
                        ['label' => 'Sub title Four', 'url' => ['site/index', 'tag' => 'popular9']],
                        ['label' => 'Sub title Five', 'url' => ['site/index', 'tag' => 'popular10']],
                        ['label' => 'Sub title Five', 'url' => ['site/index', 'tag' => 'popular11']],
                        ['label' => 'Sub title Five', 'url' => ['site/index', 'tag' => 'popular12']],
                    ]],



                        ['label' => 'Form Two', 'url' => ['/site/formtwo']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
                        ['label' => 'About', 'url' => ['/site/about']],
                        ['label' => 'Prod List', 'url' => ['/site/test1']],
                        ['label' => 'Compare', 'url' => ['/site/test']],
                        ['label' => 'Resources & FAQs', 'url' => ['/site/resources']],
                        ['label' => 'Profile', 'url' => ['/site/profile']],
                        
                    ];
             
                    if (Yii::$app->user->isGuest) {


                        $menuItems[] = ['label' => 'Login','url'=>['/site/login']];
                    } else {
                        $menuItems[] = [
                            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ];
                    }
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav navbar-right'],
                        'items' => $menuItems,
                    ]);
                    NavBar::end();

                ?>
                


                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                   <?php
                    yii\bootstrap\Modal::begin([
                        'headerOptions' => ['id' => 'modalHeader'],
                        'id' => 'modal_list',
                        'size' => 'modal-lg',
                        //keeps from closing modal with esc key or by clicking out of the modal.
                        // user must click cancel or X to close
                        'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
                    ]);
                    echo "<div id='modalContent_list'></div>";
                    yii\bootstrap\Modal::end();
                ?>
            
           
            </div>
    </div>
    </div>
     <div class="row" id="test" >
        <div class="col-lg-5">
           
        </div>
    </div>

             
        <?= $content ?>
         <!-- </div> -->
        
  

    <footer class="footer">
        <div class="foot">
    
        
      <ul class="f-list">
       
        <li class="f f1 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
            <h2>?</h2>
          <p class="p-title">FAQs </p>
        </li>

        <li class="f f2 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">
          <h2>i</h2>
          <p class="p-title">About Us </p>
        </li>

        <li class="f f3 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">
          <h2>@</h2>
          <p class="p-title">Contact Us </p>
        </li>
      </ul>
      <div class="span"></div>
      <div class="footer-catogery col-lg-12">
        
        <ul class="fcatogery col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-sm-3 col-xs-offset-1">
            <li>Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>

        </ul>
        <ul class="fbusiness col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-3 col-xs-offset-2">
            <li>Business</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
        </ul>
        <ul class="fclaims col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-1">
            <li>Claims </li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
        </ul>
         <ul class="flearn col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-offset-1 col-sm-3 col-xs-offset-2">
            <li>Learn</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
        </ul>  
         <ul class="fhelp col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-1">
            <li>Help</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
            <li>Sub Catogery</li>
        </ul>     
           
        </div>
        
    </div>
        <div class="payment">
            <img class="paymentopt" src="http://localhost/advanced/frontend/images/payment.png"></img>
             <div class="span"></div>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
</h5>
        </div>
     

    
    

  </footer>
      

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

