<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\helpers\Url;
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 $(".fancybox").fancybox({
  maxWidth : 200,
  maxHeight : 350,
  fitToView : false,
  width  : '70%',
  height  : '70%',
  autoSize : false,
  closeClick : false,
  openEffect : 'none',
  closeEffect : 'none'
 });
});
</script>
<?php 
// $this->registerScriptFile("web/css/jquery.fancybox.js");

// $this->registerJs('web/css/jquery.fancybox.js', $this::POS_READY);
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
//  Yii::app()->clientScript->registerCssFile('http://yii.com/frontend/web/source/jquery.fancybox.css');
// Yii::app()->clientScript->registerScriptFile('http://yii.com/frontend/web/source/jquery.fancybox.js');
?>
<div class="contact-fixed">
  <span class="call">Call Us Now</span>
  <i class="sprite i-contact-phone"></i>
</div> 




 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li class="" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="active" data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- <div class="item">
          <img class="first-slide" src="css/images/slide-1.jpg" alt="First slide">
          
        </div>
        <div class="item">
          <img class="second-slide" src="css/images/slide-1.jpg"  alt="Second slide">
        
        </div> -->
        <div class="item active">
          <img class="third-slide" src="css/images/slide-1.jpg"  alt="Third slide">
        </div>
     <div class="policies10">
      <ul class="p-list">
          
                
        <li class="p1 p">

        <?= Html::button('', ['value'=>Url::to('index.php?r=site/formone'),'class'=>'btn btn-sucess sprite i-health','id'=>'modalButton'])?>
         <p class="p-title">Health </p>

        
         
        </li>

        <li class="p2 p ">
           <?= Html::button('', ['value'=>Url::to('index.php?r=site/moneyform'),'class'=>'btn btn-sucess sprite i-retire','id'=>'modalButton1'])?>


        

      
          <p class="p-title">Money Back </p>
          
        </li>

        <li class="p3 p">
          <?= Html::button('', ['value'=>Url::to('index.php?r=site/formone'),'class'=>'btn btn-sucess sprite i-home','id'=>'modalButton2'])?>


          <p class="p-title">Home </p>
        </li>

        <li class="p4 p ">
         <?= Html::button('', ['value'=>Url::to('index.php?r=site/formone'),'class'=>'btn btn-sucess sprite i-term','id'=>'modalButton3'])?>


        
          <p class="p-title">Term </p>
        </li>

        <li class="p5 p ">
          <?= Html::button('', ['value'=>Url::to('index.php?r=site/formone'),'class'=>'btn btn-sucess sprite i-car','id'=>'modalButton4'])?>


        
          <p class="p-title">Car </p>
        </li>

        <li class="p6 p ">
         <?= Html::button('', ['value'=>Url::to('index.php?r=site/travelform'),'class'=>'btn btn-sucess sprite i-travel','id'=>'modalButton5'])?>


          <p class="p-title">Travel </p>
        </li>

        <li class="p7 p ">
          <?= Html::button('', ['value'=>Url::to('index.php?r=site/childform'),'class'=>'btn btn-sucess sprite i-child','id'=>'modalButton6'])?>


       
          <p class="p-title">Child </p>
        </li>

        <li class="p8 p ">
          <?= Html::button('', ['value'=>Url::to('index.php?r=site/formone'),'class'=>'btn btn-sucess sprite i-critical','id'=>'modalButton7'])?>


       
          <p class="p-title">Critical </p>
        </li>

        <li class="p9 p ">
         <?= Html::button('', ['value'=>Url::to('index.php?r=site/formone'),'class'=>'btn btn-sucess sprite i-two','id'=>'modalButton8'])?>


       
          <p class="p-title">Two </p>
        </li>

        <li class="p10 p ">
          <?= Html::button('', ['value'=>Url::to('index.php?r=site/formone'),'class'=>'btn btn-sucess sprite i-personal','id'=>'modalButton9'])?>


        
          <p class="p-title">Personal </p>
        </li>

      </ul>
        <?php

       Modal::begin([
                                'id'=>'modal-login',
                                'size'=>'modal-sm',]);
                                echo"<div id='login1'> </div>";
                                Modal::end();?>
        <?php

       Modal::begin([
                                'id'=>'modal3',
                                'size'=>'modal-sm',]);
                                echo"<div id='modalContents3'> </div>";
                                Modal::end();?>


                                 <?php Modal::begin([
                                'id'=>'modal4',
                                'size'=>'modal-sm',]);
                                echo"<div id='modalContents4'> </div>";
                                Modal::end();?>
      

              <?php Modal::begin([
                                'id'=>'modal',
                                'size'=>'modal-sm',]);
                                echo"<div id='modalContents'> </div>";
                                Modal::end();?>


 <?php Modal::begin([
                                'id'=>'modal9',
                                'size'=>'modal-sm',]);
                                echo"<div id='modalContents9'> </div>";
                                Modal::end();?>

                                  <?php Modal::begin([
                                'id'=>'modal8',
                                'size'=>'modal-sm',]);
                                echo"<div id='modalContents8'> </div>";
                                Modal::end();?>

                                  <?php Modal::begin([
                                'id'=>'modal7',
                                'size'=>'modal-sm',]);
                                echo"<div id='modalContents7'> </div>";
                                Modal::end();?>

                                  <?php Modal::begin([
                                'id'=>'modal6',
                                'size'=>'modal-sm',]);
                                echo"<div id='modalContents6'> </div>";
                                Modal::end();?>


         <?php Modal::begin([
                                'id'=>'modal5',
                                'size'=>'modal-sm',]);
                                echo"<div id='modalContents5'> </div>";
                                Modal::end();?>
    
         <?php Modal::begin([
                                'id'=>'modal2',
                                'size'=>'modal-sm',]);
                                echo"<div id='modalContents2'> </div>";
                                Modal::end();?>
                                 <?php Modal::begin([
                                'id'=>'modal1',
                                'size'=>'modal-sm',]);
                                echo"<div id='modalContents1'> </div>";
                                Modal::end();?>


     </div>
        </div>
 
 


 
                                     
        
     
    </div><!-- /.carousel -->
     

    <section class="home-body">
     <div class="container">
      <div class="services">
        <h2>Our Services</h2>
        <div id="login" style="display:none;">test</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor... </p>
        <button class="readmore">
          Read more

        </button>

      </div>
     </div>

     <div class="testimonial container">
       <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class=" "></li>
            <li class="" data-target="#myCarousel1" data-slide-to="1"  ></li>
            <li class="" data-target="#myCarousel1" data-slide-to="2"  ></li>
            <li class="" data-target="#myCarousel1" data-slide-to="3"  ></li>
            <li class="" data-target="#myCarousel1" data-slide-to="4"  ></li>
            <li class="active" data-target="#myCarousel1" data-slide-to="5" ></li>
          </ol> 

          <div class="carousel-inner" role="listbox">
              <div class="item">
                <div class="first-block">
                  <img src="css/images/testimonial1.png" alt="First slide">
                  <span class="testimonial-name">
                    H. Rackman
                  </span>
                </div>
                <div class="saying">
                        <span class="saying-initial">B</span>ut I must explain to you how all this mistaken idea of denouncing pleasure and 
                                         praising pain was born and I will give you a complete account of the system, and 
                                         expound the actual... <span class="quote">,</span>
                </div>               
              </div>
              <div class="item">                
                <div class="first-block">
                  <img src="css/images/testimonial1.png" alt="First slide">
                  <span class="testimonial-name">
                    H. Rackman
                  </span>
                </div>
                <div class="saying">
                        <span class="saying-initial">B</span>ut I must explain to you how all this mistaken idea of denouncing pleasure and 
                                         praising pain was born and I will give you a complete account of the system, and 
                                         expound the actual... <span class="quote">,</span>
                </div>
              </div>
               <div class="item active">
                <div class="first-block">
                  <img src="css/images/testimonial1.png" alt="First slide">
                  <span class="testimonial-name">
                    H. Rackman
                  </span>
                </div>
                <div class="saying">
                        <span class="saying-initial">B</span>ut I must explain to you how all this mistaken idea of denouncing pleasure and 
                                         praising pain was born and I will give you a complete account of the system, and 
                                         expound the actual... <span class="quote">,</span>
                </div>
              </div>
              <div class="item">
                <div class="first-block">
                  <img src="css/images/testimonial1.png" alt="First slide">
                  <span class="testimonial-name">
                    H. Rackman
                  </span>
                </div>
                <div class="saying">
                        <span class="saying-initial">B</span>ut I must explain to you how all this mistaken idea of denouncing pleasure and 
                                         praising pain was born and I will give you a complete account of the system, and 
                                         expound the actual... <span class="quote">,</span>
                </div>
              </div>
               <div class="item">
                <div class="first-block">
                  <img src="css/images/testimonial1.png" alt="First slide">
                  <span class="testimonial-name">
                    H. Rackman
                  </span>
                </div>
                <div class="saying">
                        <span class="saying-initial">B</span>ut I must explain to you how all this mistaken idea of denouncing pleasure and 
                                         praising pain was born and I will give you a complete account of the system, and 
                                         expound the actual... <span class="quote">,</span>
                </div>
              </div>
               <div class="item">
                <div class="first-block">
                  <img src="css/images/testimonial1.png" alt="First slide">
                  <span class="testimonial-name">
                    H. Rackman
                  </span>
                </div>
                <div class="saying">
                        <span class="saying-initial">B</span>ut I must explain to you how all this mistaken idea of denouncing pleasure and 
                                         praising pain was born and I will give you a complete account of the system, and 
                                         expound the actual... <span class="quote">,</span>
                </div>
              </div>  
            </div>  
              <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
     
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
        
        <span class="sr-only">Previous</span>
      </a>
          </div> 
        </div><!-- /.carousel -->
    </section>
    <!-- end of home-body -->

    <section class="why-ebeema">
      <div class="container">
        <div class="row">
          <h3 class="col-xs-12 " >Why</h3>
          <h2  class="col-xs-12 " >eBeema?</h2>
        </div>
        <div class="row description">
          <div class="block1 col-xs-12 col-md-4 ">
            <div class="title">
              Title One
            </div>  
            <p class="para">
                Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit, sed 
                do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis 
                nostrud exercitation ullamco 
                laboris nisi ut. 
            </p>
          </div>
          <div class="block2 col-xs-12 col-md-4">
            <div class="title">
              Title Two
            </div>  
            <p class="para">
                Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit, sed 
                do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis 
                nostrud exercitation ullamco 
                laboris nisi ut. 
            </p>
          </div>
           <div class="block3 col-xs-12 col-md-4 ">
            <div class="title">
              Title Three
            </div> 
            <a href="#fancy1" class="fancybox"> 
            <p class="para">
                Lorem ipsum dolor sit amet, 
                consectetur adipiscing elit, sed 
                do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis 
                nostrud exercitation ullamco 
                laboris nisi ut. 
            </p>
            </a>
          </div>
        </div>
      </div> 
    </section>
    <!-- end of why-ebeema -->

    <section class="claims">
      <h2>How it works?</h2>
     <div class="container claim-icons">

      <span><p>1</p><i class="wsprite i-work1"></i><p class="wicon-name">lorem ipsum</p></span>
      <i class="wsprite i-arrow1"></i>
      <span><p>2</p><i class="wsprite i-work2"></i><p class="wicon-name">lorem ipsum</p></span>
      <i class="wsprite i-arrow2"></i>
      <span><p>3</p><i class="wsprite i-work3"></i><p class="wicon-name">lorem ipsum</p></span>
      <i class="wsprite i-arrow3"></i>
      <span><p>4</p><i class="wsprite i-work4"></i><p class="wicon-name">lorem ipsum</p></span>
      <i class="wsprite i-arrow4"></i>
      <span><p>5</p><i class="wsprite i-work5"></i><p class="wicon-name">lorem ipsum</p></span>
     </div>
    
  </section>

    <!-- end of claims -->

  <section class="clients ">
    <div id="myCarousel2" class="carousel slide container carousel-fade" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel2" data-slide-to="0" class=" "><img src="css/images/client-1.png"></li>
        <li class="" data-target="#myCarousel2" data-slide-to="1"  ><img src="css/images/client-2.png"></li>
        <li class="active" data-target="#myCarousel2" data-slide-to="2"  ><img src="css/images/client-b-3.png"></li>
        <li class="" data-target="#myCarousel2" data-slide-to="3"  ><img src="css/images/client-4.png"></li>
        <li class="" data-target="#myCarousel2" data-slide-to="4"  ><img src="css/images/client-5.png"></li>
       </ol> 

      <p class="our-clients container">Cicero Malorum </p> 

      <div class="carousel-inner container" role="listbox">

          <div class="item">
            <div class="first-slide">
              <img src="css/images/client-1.png" alt="First slide" >
              <div class="client-head col-xs-12">
                <h2>Lorem ipsum dolor sit amet, </h2>  
                <div class="client-detail"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                          do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                          Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                          laboris nisiut aliquip ex ea commodo consequat.</p>
                </div>   
              </div>
            </div>              
          </div>
                
          <div class="item">
            <div class="second-slide">
              <img src="css/images/client-2.png" alt="First slide" >
                <div class="client-head col-xs-12">
                    <h2>Lorem ipsum dolor sit amet, </h2>  
                    <div class="client-detaile"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                                                          do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                          Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                                          laboris nisiut aliquip ex ea commodo consequatn"
                                                          </p>
                    </div>  
                </div>              
            </div>
          </div>
                 
          <div class="item active">
            <div class="third-slide">
              <img src="css/images/client-b-3.png" alt="Third slide" >
              <div class="client-head col-xs-12">
                <h2>Lorem ipsum dolor sit amet, </h2>  
                <div class="client-detail">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                            laboris nisiut aliquip ex ea commodo consequat"
                </div>   
              </div>             
            </div>
          </div>

        <div class="item">
          <div class="fourth-slide">
            <img src="css/images/client-4.png"  alt="Fourth slide" >
            <div class="client-head col-xs-12">
             <h2>Lorem ipsum dolor sit amet, </h2>  
              <div class ="client-detail"><p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                               do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisiut aliquip ex ea commodo consequat.pan"</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="fifth-slide">
            <img src="css/images/client-5.png"  alt="Fifth slide" >
            <div class="client-head col-xs-12">
               <h2>Lorem ipsum dolor sit amet, </h2>  
               <div class ="client-detailte"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed 
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                    laboris nisiut aliquip ex ea commodo consequat.pan"</p>
                </div>
            </div>
          </div>
        </div>
        
        <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
          <span class="sr-only">Previous</span>
        </a>      
      </div>        
    </div><!-- /.carousel -->
  </section>


    <section class="container1_1">
      <div class="our-partners row">
        <h3>Our</h3>
        <h2>Partners</h2>
        <ul>

          <li class=" col-md-3 parts " >
            <img src="css/images/partners1.png">
            <h4>Company Name</h4>
          </li>

           <li class=" col-md-3 parts">
            <img src="css/images/partners2.png">
            <h4>Company Name</h4>
          </li>

           <li  class="col-xs-12 col-md-3 parts">
            <img src="css/images/partners3.png">
            <h4>Company Name</h4>
          </li>

           <li  class="col-md-3 parts">
            <img src="css/images/partners4.png">
            <h4>Company Name</h4>
          </li>

            <li class=" col-md-3 parts" >
            <img src="css/images/partners1.png">
            <h4>Company Name</h4>
          </li>

           <li class=" col-md-3 parts">
            <img src="css/images/partners2.png">
            <h4>Company Name</h4>
          </li>

           <li  class="col-md-3 parts">
            <img src="css/images/partners3.png">
            <h4>Company Name</h4>
          </li>

           <li  class="col-xs-12 col-md-3 parts">
            <img src="css/images/partners4.png">
            <h4>Company Name</h4>
          </li>

        </ul>
      </div>
    </section>

    <section class="h-social">
            <div class="container">
                <div class="row">
                  <h3>Find Us On</h3>
                  <ul>
                    <li   class="col-xs-12 col-md-1 sf col-md-offset-3"><i class="csprite i-facebook" ></i></li>
                    <li class="col-xs-12 col-md-1 st"><i class="csprite i-twitter" ></i></li>
                    <li class="col-xs-12 col-md-1 sg"><i class="csprite i-google" ></i></li>
                    <li class="col-xs-12 col-md-1 ss">             
                    <i class="csprite i-skype" ></i>
                    </li>
                  </ul>
                </div>
            </div>
        </section>

  
