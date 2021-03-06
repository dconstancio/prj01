<?php

namespace app\models;

use Yii;
use yii\base\Model;




class ContatoForm extends Model
{
    public $nome;
    public $email;
    public $mensagem;
    

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['nome', 'email', 'mensagem'], 'required'],
            // email has to be a valid email address
            ['email', 'email']
        ];
    }
  
  /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'nome' => 'Nome',
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


            Yii::$app->mailer->compose('contato',['model'=>$this])
                ->setTo($email)
                ->setFrom([$this->email => $this->nome])
                ->setSubject('IBG - Monitoração')
                ->setTextBody($this->mensagem)
                ->send();

            return true;
        } else {
            return false;
        }
    }
}
