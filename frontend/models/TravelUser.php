<?php

namespace frontend\models;
use yii\db\ActiveRecord;
use yii\db\Connection;
use yii\db\Command;
use yii\db\Query;
use Yii;
use frontend\models\AreaTable;


/**
 * This is the model class for table "travelUser".
 *
 * @property string $travelUserName
 * @property integer $travelUserNumber
 * @property integer $travelUserAge
 * @property string $travelUserEmail
 * @property string $departureDate
 * @property string $arrivalDate
 * @property string $area_id
 */


class TravelUser extends ActiveRecord
{
    
    public $t_rate;
    public $company_id;
    public $package_id;
    public $companyName;
    public $packageName;
    public $package;
    public $packagerows;
   
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travelUser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['travelUserName', 'travelUserNumber', 'travelUserAge', 'travelUserEmail', 'departureDate', 'arrivalDate'], 'required'],
            [['travelUserNumber', 'travelUserAge','days'], 'integer'],
            [['departureDate', 'arrivalDate'], 'safe'],
            [['travelUserName'], 'string', 'max' => 255],
            [['travelUserEmail'], 'string', 'max' => 255],
            [['area_id'], 'string', 'max' => 255]

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'travelUserName' => 'Travel User Name',
            'travelUserNumber' => 'Travel User Number',
            'travelUserAge' => 'Travel User Age',
            'travelUserEmail' => 'Travel User Email',
            'departureDate' => 'Departure Date',
            'arrivalDate' => 'Arrival Date',
            'area_id'=> 'Area'
        ];
    }

  

    public function echoing(){
         $connection = new Connection([
  
         'username' => 'root',
         'password' => 'fixation123' ,
           ]);


         // calculation of number of travel days
         $date1 = $this->arrivalDate;
         $date2 = $this->departureDate;

         $diff = abs(strtotime($date2) - strtotime($date1));

         $years = floor($diff / (365*60*60*24));
         $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
         $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        // end of calculation
      
    

        // dropdown area selected conversion
         // $connection->open();
         // if ($this->area==0) {
         //    $area1 = "Ar_1";
         
         // }
         // if ($this->area == 1) {
         //    $area1 = "Ar_2";
         //     # code...
         // }
         // if ($this->area == 2){
         //    $area1 = "Ar_3";
         // }
         // if ($this->area == 3) {
         //     $area1 = "Ar_4";
         // }
         // end of conversion

            $command= new Command();
            $rows = (new \yii\db\Query())
                                     ->select(['t_rate','company_id','package_id'])
                                     ->from('travelTable')
                                     ->where([
                                                'area_id'=>"$this->area_id"
                                                


                                               

                                                
                                               

                                                ]) ->andWhere(['>=', 'endDay', $days])
                                                    ->andWhere(['<=', 'initialDay', $days])
                                                    ->andWhere(['<=', 'initialAge', $this->travelUserAge])
                                                    ->andWhere(['>=', 'endAge', $this->travelUserAge])

                                                    ;                                                                    
                                        $command = $rows->createCommand();

                                        $rows = $command->queryAll();

                                        $countrows=count($rows);
                                        if($countrows>0){
                                        $loop=1;
                                        foreach ($rows as $row){

                                            $this->t_rate[$loop]= $row['t_rate'];
                                            $company_id = $row['company_id'];
                                            $this->package_id[$loop]= $row['package_id'];
                                           


                                            
                                            $packagerows = (new \yii\db\Query())
                                            ->select(['packageName'])
                                            ->from('packageTable')
                                            ->where(['like', 'package_id', $this->package_id[$loop]]);
                                        
                                        $command = $packagerows->createCommand();

                                        $packagerows = $command->queryAll();
                                        if(count($packagerows) >0){
                                        $j=1;
                                        foreach ($packagerows as $package)
                                        {
                                                 $this->package[$loop][$j]=$package['packageName'];
                                                 $j++;
                                        }
                                    }
                                    else{
                                        $this->package[$loop][1]=null;
                                    }

                                   

                                                                     
                                          $productrows = (new \yii\db\Query())
                                            ->select(['company'])
                                            ->from('companyTable')
                                            ->where([ 'company_id'=>"$company_id" ]);
                                        
                                        $command = $productrows->createCommand();

                                        $productrows = $command->queryOne();

                                        $this->companyName[$loop]=$productrows['company'];

                                       

                                                 
                                               
                                                    $loop++;
                                               
}
                                      
                                            $packageinfo = (new \yii\db\Query())
                                            ->select(['area'])
                                            ->from('areaTable')
                                            ->where([ 'area_id'=>"$this->area_id" ]);
                                        
                                        $command = $packageinfo->createCommand();

                                        $packageinfo = $command->queryOne();

                                        $this->packageName=$packageinfo['area'];

                                    }
                                    else{
                                        $this->t_rate[1]=0;
                                        $this->company_id[1]=null;
                                        $this->package_id[1]=null;
                                    }




         $connection->createCommand()->insert('travelUser', [
            'travelUserName' => $this->travelUserName,
            'travelUserAge' => $this->travelUserAge,
            'travelUserNumber' => $this->travelUserNumber,
            'travelUserEmail' => $this->travelUserEmail,
            'arrivalDate' => $this->arrivalDate,
            'departureDate' => $this->departureDate,
            'area_id'=>$this->area_id,
            'days' => $days,
            
            ])->execute();
       
          }
}
