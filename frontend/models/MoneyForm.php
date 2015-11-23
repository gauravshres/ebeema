<?php

namespace frontend\models;
use yii\db\ActiveRecord;
use yii\db\Connection;
use yii\db\Command;
use yii\db\Query;
use Yii;

/**
 * This is the model class for table "moneybackuser".
 *
 * @property string $name
 * @property string $email
 * @property integer $phone
 * @property integer $age
 * @property string $term
 * @property string $salary
 * @property integer $moneyuserid
 */
class moneyForm extends ActiveRecord
{
    public $ageGroup;
    public $name;
    public $email;
    public $phoneNumber;
    public $age;
    public $term;
    public $sql;
    public $term_id;
    public $age_id;
    public $rates;
    public $products;
    public $premiumDiscountRate;
    public $disRates;
    public $dbPremiumAmount;
    public $dbProduct;
    public $productName;
    public $paymentMode;
    
    public $salary;
    public $appAge;
    public $pwdrate;
    public $pwd;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'moneybackuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'age', 'term', 'ageGroup'], 'required'],
            [['phone', 'age'], 'integer'],
            [['name', 'email', 'term', 'ageGroup'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'age' => 'Age',
            'term' => 'Term',
            'ageGroup' => 'Salary',
            'moneyuserid' => 'Moneyuserid',
        ];
    }
     public function echoing(){
         $connection = new Connection([
  
     'username' => 'root',
     'password' => 'fixation123' ,
    ]);
      
      

        // $test1 = $this->$name;
         $connection->open();
        // $command =new Command();
         // $command = $connection->createCommand('INSERT INTO test (name) Values (`ram`)');
         // $command->execute();
        // $posts=$command->queryOne();
         $connection->createCommand()->insert('moneybackuser', [
            'name' => $this->name,
            'age' => $this->age,
            'phone' => $this->phone,
            'email' => $this->email,
            'term' => $this->term,
            'ageGroup' =>$this->ageGroup,
                
      
            ])->execute();
       
          }

          public function calculation(){
        
         

                                        $command= new Command();

 // to select the age_id from age value

                                      $rows = (new\yii\db\Query())
                                      ->select('age_id')
                                      ->from('ageTable')
                                      ->where("age = $this->age");

                                      $command = $rows->createCommand();
                                      $rows = $command->queryAll();
                                   foreach($rows as $row){
                                      $age_array=$row['age_id'];
                                   }

                                     $this->age_id=$age_array;

// end of selecting age_id



                                    // finding rate and product name

                                     $rows = (new \yii\db\Query())
                                     ->select(['rate','product_id','term_id'])
                                     ->from('endowmentTable')
                                     ->where([ 'product_id'=>['LIC_10','LIC_11','LIC_12','LIC_13','NLIC_8','NLIC_9','LIC_19','NLIC_10','ALIC_9','ALIC_10','ALIC_11','ALIC_12','ML_3'] ,
                                                'age_id'=>"$this->age_id"]);
             
                                        $command = $rows->createCommand();

                                        $rows = $command->queryAll();
                                 

                                        $i=1;
                                        foreach ($rows as $row){
                                            $this->rates[$i]= $row['rate'];
                                            $product=$row['product_id'];
                                            $this->term_id[$i]=$row['term_id'];



                                            $productrows = (new \yii\db\Query())
                                            ->select(['productName'])
                                            ->from('productTable')
                                            ->where([ 'product_id'=>"$product" ]);
                                                                    
                                            $command = $productrows->createCommand();

                                            $productrows = $command->queryOne();

                                            $this->products[$i]=$productrows['productName'];

                                            $pwdrate = (new \yii\db\Query())
                                            ->select(['rate'])
                                            ->from('pwdTable')
                                            ->where([ 'product_id'=>"$product" ])
                                            ->andWhere(['<=', 'minAge', $this->appAge])
                                            ->andWhere(['>=', 'maxAge', $this->appAge])
                                            ->andWhere(['term_id'=>$this->term_id[$i]]);
                                                                    
                                            $command = $pwdrate->createCommand();

                                            $pwdrate = $command->queryOne();
                                            if (count($pwdrate)>0) {
                                                if (isset($pwdrate['rate'])) {
                                                    $this->pwd[$i]=$pwdrate['rate'];
                                                }
                                                else{
                                                    $this->pwd[$i]=0;
                                                }
                                                 
                                            }
                                            else{
                                                 $this->pwd[$i]=0;

                                            }

                                           



                                            $i++;
                                             }

                                    $ageGroupAmount = (new \yii\db\Query())
                                     ->select(['ageGroupAmount'])
                                     ->from('ageGroupTable')
                                     ->where( ['ageGroup'=>"$this->ageGroup"
                                                
                                            ]);
                                                                    
                                        $command = $ageGroupAmount->createCommand();

                                        $ageGroupAmount = $command->queryOne();
                                        $this->salary=$ageGroupAmount['ageGroupAmount'];
                                 





                                    }  
}
