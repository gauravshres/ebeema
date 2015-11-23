<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Url;



/* @var $this yii\web\View */
/*$this->title = 'FormTwo';*/



?>
<script type="text/javascript">

    function myFunction(){
         var $li = $('.leftWig ul li.active').next();
         $li.click();


   
}
    
</script>
<div class="site-formtwo container">
    

   <div id="form-two" class="leftWig col-lg-7">

            <ul class="form-two-list nav nav-tabs nav-justified" >
                <li class="formList active" data-toggle="tab" id="profileTab1" href="#menu1">Details</li>
                <li class="formList1" data-toggle="tab" id="profileTab2" href="#menu2">Step 2</li>
                <li class="formList2" data-toggle="tab" id="profileTab3" href="#menu3">Step 3</li>
                <li class="formList3" data-toggle="tab" id="profileTab4" href="#menu4">Step 4</li>                                
            </ul>
            
                 <div class="tab-content">
   
                            <div id="menu1" class="profTab tab-pane fade active in">
                                <div class="form-two-step1">

                 <?php $form = ActiveForm::begin(['id'=>'formTwo']); ?>
                 <div id="firstitem">
                   <p>1. Select Child's Gender</p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Male<span ></span>',2=>'Female<span ></span>'))->label(false);; ?>
                   </div></br>
                     <div id="seconditem">
                   <p>1. Select Applicant's Gender</p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Male<span ></span>',2=>'Female<span ></span>'))->label(false);; ?>
                   </div>


                   <div class="seconditem-group"><h3>Proposers's Information</h3> <?=$form->field($model, 'other_name', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Nationality'),],])->label(false); ?>
                                                                    <?=$form->field($model, 'other_name', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Address'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'other_email', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Relationship with child'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'other_phone', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Full Name of the Apointy'),],])->label(false); ?>
                                                                    <?= $form->field($model, 'other_phone', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Appointy Age'),],])->label(false); ?>

                    </div>
                  
                                                                 
                                                                    <div class="form-group-button">
                                                                        <?= Html::a('reset it', ['site/request-second-form']) ?>
                                                                        <?= Html::Button('Next', ['class' => 'btn btn-primary', 'name' => 'contact-button','onclick'=>'myFunction()']) ?> 


       
                                                                        
                                                                           
                                                                   

            </div>
       
</div>
                            
                             </div>
                                        <div id="menu2" class="tab-pane fade">
                                          <h3>Income Info </h3>
                                                                    <?= $form->field($model, 'other_phone', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Academic qualification '),],])->label(false); ?>
                   <p>Current Occupation</p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Self Employed<span ></span>',2=>'Employee<span ></span>'))->label(false);; ?>

                                                                    <div class="seconditem-group"> <?=$form->field($model, 'other_name', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Name of employer / business'),],])->label(false); ?>
                                                                    <?=$form->field($model, 'other_name', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Business address '),],])->label(false); ?>
                                                                    <?= $form->field($model, 'other_email', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Position '),],])->label(false); ?>
                                                                    <?= $form->field($model, 'other_phone', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Number of years in the organization '),],])->label(false); ?>

                                                                    </div>
                   <p style="clear: both;">Does your job involve exposure to physical risk? </p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Self Employed<span ></span>',2=>'Employee<span ></span>'))->label(false);; ?>
                   <p style="clear: both;">Do you plant to do any work (Dehaya* not understood meaning)land/air/water army (if other than regular traveller paying normal fair as route permitted by authorized airlines ) </p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Yes<span ></span>',2=>'No<span ></span>'))->label(false);; ?>
                   <p style="clear: both;">Will the insured party be living outside Nepal? </p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Yes<span ></span>',2=>'No<span ></span>'))->label(false);; ?>


                                            <!-- <div class="thirditem-group">
                        <p>2. Is the insured party different form the applicant?</p>
                        <?php echo $form->field($model, 'first_check[]')->checkboxList(['a' => 'Yes<span ></span>', 'b' => 'No<span ></span>']); ?>
                    </div> 

                    <div class="fourthitem-group">
                       <p>3. Is the insured party different form the applicant?</p> <?php echo $form->field($model, 'drop_down')->dropDownList(['a' => 'Yes', 'b' => 'No', 'c' => 'Not sure']); ?>    
                    </div>     

                    <div class="fifthitem-group">
                        <p>4. Is the insured party different form the applicant?</p>
                        <?php echo $form->field($model, 'first_check[]')->checkboxList(['a' => 'Yes<span ></span>', 'b' => 'No<span ></span>']); ?>
                    </div>  -->
                                                                        <?= Html::Button('Next', ['class' => 'btn btn-primary', 'name' => 'contact-button','onclick'=>'myFunction()']) ?> 

                                        </div>
                                        <div id="menu3" class="tab-pane fade">
                                          <h3>Policy Detail</h3>
                   <p style="clear: both;">Would you like a term rider benefit? </p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Yes<span ></span>',2=>'No<span ></span>'))->label(false);; ?>
                   Term rider sum assured amount 
                                                                    <?= $form->field($model, 'other_phone', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Term rider sum assured amount '),],])->label(false); ?>

                                          

                                                                        <?= Html::Button('Next', ['class' => 'btn btn-primary', 'name' => 'contact-button','onclick'=>'myFunction()']) ?> 

                                        </div>
                                         <div id="menu4" class="tab-pane fade">
                                          <h3>General</h3>
                                                                    <?= $form->field($model, 'other_phone', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Height '),],])->label(false); ?>
                                                                    <?= $form->field($model, 'other_phone', ['inputOptions' => ['placeholder' => $model->getAttributeLabel('Weight '),],])->label(false); ?>
                   <p style="clear: both;">Do You Smoke? </p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Yes<span ></span>',2=>'No<span ></span>'))->label(false);; ?>
                   <p style="clear: both;">Do you consume alcohol?  </p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Yes<span ></span>',2=>'No<span ></span>'))->label(false);; ?>
                   <p style="clear: both;">Do you consume drugs for any non medical related purpose? </p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Yes<span ></span>',2=>'No<span ></span>'))->label(false);; ?>
                   <p style="clear: both;">Are you generally in good health currently?  </p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Yes<span ></span>',2=>'No<span ></span>'))->label(false);; ?>
                   <p style="clear: both;">Have you ever suffered from any major disease?   </p>  <?= $form->field($model, 'other')->radioList(array('1'=>'Yes<span ></span>',2=>'No<span ></span>'))->label(false);; ?>

                                          

                                                                            <?= Html::button(' ', ['value'=>Url::to('index.php?r=site/buyform'),'class'=>'btn btn-sucess btn-primary','id'=>'modalBuy1'])?>

                                            <?php Modal::begin([
                                                                            'id'=>'modal-buy-1',
                                                                            'size'=>'modal-lg',]);
                                                                            echo"<div id='modalContents-buy-1'> </div>";
                                                                            Modal::end();?></p>
                                        </div>
                                           <?php ActiveForm::end(); ?>
                 </div>

            </div>

            <div class="policy-compare col-xs-9 col-sm-4 col-md-4 col-lg-3">
       

                    <div class="p-compare cp cp1">
                        <img src="/advanced/frontend/images/children_03.png"/>

                    </div>
                        <div class="compare-wrap col-lg-12">
                        <h4> <?php echo $_GET["product"];?> </h4>
                        <p class="policy-desc">Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna 
                            aliqua.e</p>
                            <div class="policy-desc-list">
                                <li class="deslider visible" ><h4>Premium<br> <p>Rs.&nbsp <?php echo $_GET["prem"];?></p></h4></li>
                                <li class="deslider visible" ><h3>Sum Assured <br><p>Rs.&nbsp <?php echo $_GET["sum"];?> </p></br></h3></li>
                            </div>
                        <a class="various" href="#inline1">Read More</a>
                        
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5"/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" checked /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                            <p>User Review</p>


                    </div>
                
                    

                </div>

            



</div>

    

</div>