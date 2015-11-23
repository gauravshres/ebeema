<?php

namespace frontend\models;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "ageGroupTable".
 *
 * @property string $ageGroup
 * @property integer $agerGroupAmout
 * @property integer $ageGroupId
 */
class AgeGroupTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ageGroupTable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ageGroup', 'agerGroupAmout'], 'required'],
            [['agerGroupAmout'], 'integer'],
            [['ageGroup'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ageGroup' => 'Age Group',
            'agerGroupAmout' => 'Ager Group Amout',
            'ageGroupId' => 'Age Group ID',
        ];
    }
}
