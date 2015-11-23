<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\FirstForm;
use frontend\models\BuyForm;
use frontend\models\FormTwo;
use frontend\models\FormThree;
use frontend\models\ContactForm;
use frontend\models\MoneyForm;

use frontend\models\compareForm;
use frontend\models\Test;
use frontend\models\ChildForm; 

use frontend\models\TravelUser; 
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
          
          $model = new firstForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }         
       
      

    }


    public function actionCompareform()
        {
            $model = new CompareForm();

            if ($model->load(Yii::$app->request->post())) {
                if ($model->validate()) {
                    // form inputs are valid, do something here
                    return;
                }
            }

            return $this->render('compareForm', [
                'model' => $model,
            ]);
        }


    
    
    public $message;


    public function actionFormone()
    {
            $model = new firstForm();
            if($model->load(yii::$app->request->post())&&$model->validate()) {
                $message= "hello";
                echo $model->echoing();
                echo $model->calculation();
                yii::$app->session->setFlash('success','You have entered data successfully');
          
               // return $this->render('test', ['model' => $model ]);
                return $this->render('test',[ 'model' => $model , 'message'=>$message]);
            }else{
                return $this->renderAjax('formone', ['model' => $model ]);

            }
         
            
           
                 
        
    }

       public function actionTravelform()
    {
            $model = new TravelUser();
            if($model->load(yii::$app->request->post())&&$model->validate()) {
                $message= "hello";
                 echo $model->echoing();

                
               
          
               // return $this->render('test', ['model' => $model ]);
                return $this->render('travel',[ 'model' => $model , 'message'=>$message]);
            }else{
                return $this->renderAjax('travelform', ['model' => $model ]);

            }
         
            
           
                 
        
    }
   public function actionBuyform()
    {
            $model = new buyForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->renderAjax('buyform', [
                'model' => $model,
            ]);
        }
    }
    public function actionFormtwo()
    {
        $model= new formTwo();
        return $this->render('formtwo',['model'=>$model]);
    }
    

    public function actionRequestSecondForm()
    {
       $model= new formThree();
        return $this->render('formthree',['model'=>$model]);
    }


    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->renderAjax('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }



public function actionChildform()
    {
         
                
          $model = new Childform();
            if($model->load(yii::$app->request->post())&&$model->validate()) {
                $message= "hello";
                echo $model->echoing();
                echo $model->calculation();
                yii::$app->session->setFlash('success','You have entered data successfully');
               
               // return $this->render('test', ['model' => $model ]);
                return $this->render('childview',[ 'model' => $model , 'message'=>$message]);
                

             

            }else{
                return $this->renderAjax('childform', ['model' => $model ]);

            }
               
}
public function actionMoneyform()
    {
         
                
          $model = new MoneyForm();
            if($model->load(yii::$app->request->post())&&$model->validate()) {
                $message= "hello";
                echo $model->echoing();
                echo $model->calculation();
                yii::$app->session->setFlash('success','You have entered data successfully');
               
               // return $this->render('test', ['model' => $model ]);
                return $this->render('moneyview',[ 'model' => $model , 'message'=>$message]);
                

             

            }else{
                return $this->renderAjax('moneyform', ['model' => $model ]);

            }
               
}
public function actionTest1()
{
    return $this->render('test1');
}


    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
    
  

    public function actionAjax_info(){

            $model = new Childform();
            if($model->load(yii::$app->request->post())&&$model->validate()) {
                $message= "hello";
                echo $model->echoing();
                echo $model->calculation();
                yii::$app->session->setFlash('success','You have entered data successfully');
               
               // return $this->render('test', ['model' => $model ]);
                return $this->render('ajax_info',[ 'model' => $model , 'message'=>$message]);
                

             

            }
    }


    public function actionAbout()
    {
        return $this->render('about');
    }
       public function actionChildview()
    {

                
        return $this->render('childview');
             

            
    }
        public function actionMoneyview()
    {

                
        return $this->render('moneyview');
             

            
    }
   
     public function actionTravel()
    {
         //return $this->render('travel', ['model' => $model ]);
         $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('travel');
        }elseif (Yii::$app->request->isAjax) {
            return $this->renderAjax('travel', [
                        'model' => $model
            ]);
        } else {
            return $this->render('travel', [
                        'model' => $model
            ]);
        }
    }
       public function actionTest()
    {
        return $this->render('test');
    }
    public function actionResources()
    {
        return $this->render('resources');
    }
    public function actionProfile()
    {
        return $this->renderAjax('profile');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->renderAjax('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }
   
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionTravelviewajax($id) {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('test');
        }elseif (Yii::$app->request->isAjax) {
            return $this->renderAjax('test', [
                        'model' => $model
            ]);
        } else {
            return $this->render('test', [
                        'model' => $model
            ]);
        }
    }
}
