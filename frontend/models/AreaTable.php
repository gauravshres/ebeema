<?php

namespace frontend\models;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "areaTable".
 *
 * @property string $area_id
 * @property string $area
 */

class AreaTable extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $area;
    public static function tableName()
    {
        return 'areaTable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area_id', 'area'], 'required'],
            [['area_id', 'area'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'area_id' => 'Area ID',
            'area' => 'Area',
        ];
    }

     

         

}
