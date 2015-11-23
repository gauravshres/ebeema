<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Connection;
use yii\db\Command;
use yii\db\Query;
/**
 * This is the model class for table "childFormUser".
 *
 * @property string $name
 * @property integer $age
 * @property integer $appAge
 * @property integer $phoneNumber
 * @property string $email
 * @property integer $term
 * @property integer $premiumAmt
 * @property string $ageGroup
 */
class childForm extends ActiveRecord
{
    /**
     * @inheritdoc
     */

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
    public $ageGroup;
    public $salary;
    public $appAge;
    public $pwdrate;
    public $pwd;
    public static function tableName()
    {
        return 'childFormUser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'phoneNumber', 'email','appAge'], 'required'],
            [['age', 'phoneNumber','appAge'], 'integer'],
            [['name', 'email','ageGroup'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'age' => 'Age',
            'phoneNumber' => 'Phone Number',
            'email' => 'Email',
            'term' => 'Term',
            'premiumAmt' => 'Premium Amt',
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
         $connection->createCommand()->insert('childFormUser', [
            'name' => $this->name,
            'age' => $this->age,
            'phoneNumber' => $this->phoneNumber,
            'email' => $this->email,
            'appAge' => $this->appAge,
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
                                     ->where([ 'product_id'=>['LIC_14','LIC_15','LIC_18','NLIC_6','NLIC_7','ALIC_4'] ,
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


