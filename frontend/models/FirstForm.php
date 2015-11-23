<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Connection;
use yii\db\Command;
use yii\db\Query;
/**
 * This is the model class for table "test".
 *
 * @property string $name
 * @property integer $age
 * @property integer $phoneNumber
 * @property string $email
 * @property integer $term
 * @property integer $premiumAmt
 */
class firstForm extends ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $name;
    public $email;
    public $phoneNumber;
    public $age;
    public $premiumAmt;
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


    
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'phoneNumber', 'email', 'term', 'premiumAmt'], 'required'],
            [['age', 'phoneNumber', 'term', 'premiumAmt'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255]
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
        $test = new Test();
      

        // $test1 = $this->$name;
         $connection->open();
        // $command =new Command();
         // $command = $connection->createCommand('INSERT INTO test (name) Values (`ram`)');
         // $command->execute();
        // $posts=$command->queryOne();
         $connection->createCommand()->insert('test', [
            'name' => $this->name,
            'age' => $this->age,
            'phoneNumber' => $this->phoneNumber,
            'email' => $this->email,
            'term' => $this->term,
            'premiumAmt' => $this->premiumAmt,  
            ])->execute();
       
          }


    public function calculation(){
        
         

         $command= new Command();



// to select the term_id from term value

            $rows = (new \yii\db\Query())
            ->select('term_id')
            ->from('termTable')
            ->where("term = $this->term");

            $command = $rows->createCommand();
            $rows = $command->queryAll();
           
             foreach ($rows as $row){
            $term_array= $row;
           }

           $this->term_id=$term_array['term_id'];

// end of selecting term_id

 // to select the age_id from age value

            $rows = (new \yii\db\Query())
            ->select('age_id')
            ->from('ageTable')
            ->where("age = $this->age");

            $command = $rows->createCommand();
            $rows = $command->queryAll();
           
             foreach ($rows as $row){
            $age_array= $row;
           }

           $this->age_id=$age_array['age_id'];

// end of selecting age_id


// finding rate and product name

          $rows = (new \yii\db\Query())
            ->select(['rate','product_id'])
            ->from('endowmentTable')
            ->where([ 'product_id'=>['LIC_1','ALIC_3','NLIC_1','ML_1','ALIC_1','ALIC_2','ALIC_4','ALIC_5','ALIC_6','NLIC_2','NLIC_3','LIC_2'] ,
                      'term_id' =>"$this->term_id",
                      'age_id'=>"$this->age_id"]);
        
        $command = $rows->createCommand();

        $rows = $command->queryAll();
         $j=1;

        $i=1;
        foreach ($rows as $row){
            $this->rates[$i]= $row['rate'];
            $product=$row['product_id'];


          $productrows = (new \yii\db\Query())
            ->select(['productName'])
            ->from('productTable')
            ->where([ 'product_id'=>"$product" ]);
        
        $command = $productrows->createCommand();

        $productrows = $command->queryOne();

        $this->products[$i]=$productrows['productName'];




 // finding discount rate on Premium and Payment Mode 

            $disRows = (new \yii\db\Query())
            ->select(['premiumDiscount','premiumAmount','product_id'])
            ->from('discountTable')
            ->where([ 'product_id'=>"$product" ]);
            
        
            $command = $disRows->createCommand();

            $disRows= $command->queryAll();
       
        $k=1;

     $val=count($disRows);
     if($val>0){
        foreach ($disRows as $row){

            $this->disRates[$k]= $row['premiumDiscount'];
            $this->dbPremiumAmount[$k]=$row['premiumAmount'];
            $this->dbProduct=$row['product_id'];
           
            $productName = (new \yii\db\Query())
            ->select(['productName'])
            ->from('productTable')
            ->where([ 'product_id'=>$this->dbProduct ]);

            $command= $productName->createCommand();
            $productName = $command->queryOne();

            $this->productName=$productName['productName'];

            $k++;
        }
      
                $disRowCount=count($this->disRates);
      
      
        if($disRowCount!=0)

       
          
{
        switch($disRowCount){


            case 1 :
                if( $this->premiumAmt >= $this->dbPremiumAmount[1]){
                    $this->premiumDiscountRate[$j] = $this->disRates[1];
                    $disRowCount=0;
                }

            break;
            case 2 :
                if($this->premiumAmt < $this->dbPremiumAmount[1]){
                    $this->premiumDiscountRate[$j] = $this->disRates[1];
                    $disRowCount=0;
                }
                else if($this->$premiumAmt > $this->dbPremiumAmount[2]&&$this->premiumAmt<$this->dbPremiumAmount[1]){
                    $this->premiumDiscountRate[$j] = $this->disRates[2];
                    $disRowCount=0;
                }

            break;
             case 3 :

                if($this->premiumAmt < $this->dbPremiumAmount[1]){
                    $this->premiumDiscountRate[$j] = $this->disRates[1];
                    
                }
                else if($this->premiumAmt > $this->dbPremiumAmount[1]&&$this->premiumAmt<=$this->dbPremiumAmount[2]){
                    $this->premiumDiscountRate[$j] = $this->disRates[2];
                  
                }
                 else if($this->premiumAmt > $this->dbPremiumAmount[3]){
                    $this->premiumDiscountRate[$j] = $this->disRates[3];
                   
                    }
          
                
                break;
                case 4 :
                if($this->premiumAmt < $this->dbPremiumAmount[1]){
                    $this->premiumDiscountRate[$j] = $this->disRates[1];
                }
                else if($this->premiumAmt > $this->dbPremiumAmount[1]&&$this->premiumAmt<=$this->dbPremiumAmount[2]){
                    $this->premiumDiscountRate[$j] = $this->disRates[2];
                }
                 else if($this->premiumAmt > $this->dbPremiumAmount[2]&&$this->premiumAmt<=$this->dbPremiumAmount[3]){
                    $this->premiumDiscountRate[$j] = $this->disRates[3];
                }
                 else if($this->premiumAmt >= $this->dbPremiumAmount[3]){
                    $this->premiumDiscountRate[$j] = $this->disRates[4];
                }
                break;

                default:
                $this->premiumDiscountRate[$j] =0;
                break;

           
        }

    }
    else{
    $this->premiumDiscountRate[$j] =0;

        
}
}
else{
 $this->premiumDiscountRate[$j] =0;
}
$j++;
//  end of finding discount rate on Premium and Payment Mode

// finding payment mode discount


$disRowsMode = (new \yii\db\Query())
            ->select(['Rate'])
            ->from('modeDiscount')
            ->where([ 'product_id'=>"$product" ]);
            
        
            $command = $disRowsMode->createCommand();

            $disRowsMode= $command->queryAll();

            $disRowsModeCount=count($disRowsMode);

            if($disRowsModeCount>0)
            {
                $l=1;
                foreach ($disRowsMode as $row ) {
                    $this->paymentMode[$i][$l]=$row['Rate'];
                    $l++;

                }
                $l=1;
                
            }
            else{
                for ($x=1; $x <=5  ; $x++) { 
                    # code...
                      $this->paymentMode[$i][$x]=0;
                }
              
                
            }
         



// end of finding payment mode discount
                 
            $i++;

        }

// end of finding rate and product name








    }

}
