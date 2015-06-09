<?php

namespace app\models;

use Yii;
use yii\base\Model;




class NewsForm extends Model
{
    
    public $email;
    
    

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [[ 'email'], 'required'],
            // email has to be a valid email address
            ['email', 'email']
        ];
    }
  


    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function send($email)
    {
        if ($this->validate()) {


            Yii::$app->mailer->compose('news',['model'=>$this])
                ->setTo($email)
                ->setFrom([$this->email])
                ->setSubject('IBG - Monitoração - newsletter')
                ->setTextBody($this->email)
                ->send();

            return true;
        } else {
            return false;
        }
    }
}
