<?php

namespace frontend\models;

use Yii;
use yii\base\Model;



use yii\db\ActiveRecord;
use yii\db\Connection;
use yii\db\Command;
use yii\db\Query;

/**
 * FormOne is the model behind the form one form.
 */
class formTwo extends Model
{
    public $other;
    public $other_name;
    public $other_family_name;
    public $other_email;
    public $other_phone;
    public $first_check;
    public $drop_down;
    public $second_check;
    

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['other', 'first_check', 'drop_down','second_check'], 'required'],
            // email has to be a valid email address
            ['other_email', 'email'],
            
        ];
    }
    public function nextForm()
    {
         return $this->render('index');
            
    }


    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    // public function sendEmail($email)
    // {
    //     return Yii::$app->mailer->compose()
    //         ->setTo($email)
    //         ->setFrom([$this->email => $this->name])
    //         ->setSubject($this->dob)
    //         ->setTextBody($this->phone)
    //         ->send();
    // }
}
