<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Connection;
use yii\db\Command;
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
class Test extends ActiveRecord
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
}
