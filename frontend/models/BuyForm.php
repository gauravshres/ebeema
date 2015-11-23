<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * FormOne is the model behind the form one form.
 */
class buyForm extends Model
{
    public $drop1;
    public $drop2;
    public $drop3;
    public $drop4;
    public $drop5;
    public $drop6;
    public $drop7;
    

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['$drop1', '$drop2','$drop3','$drop4','$drop5','$drop6','$drop7'], 'required'],
            // email has to be a valid email address
           // ['email', 'email'],
            
        ];
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
