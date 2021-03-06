<?php

namespace app\models;

use Yii;
use yii\base\Model;
use  yii\web\Session;


/**
 * LoginForm is the model behind the login form.
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
           
            if (!$user) {
                $this->addError($attribute, 'Usuário ou senha inválidos.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
          

$session = Yii::$app->session;
if ($session->isActive)
    $session->destroy();
   
   $session = new Session;
   $session->open();
          $session['user'] = $this->_user;

            return Yii::$app->user->login($this->_user, $this->rememberMe ? 3600*24*30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) { 
           $this->_user =  Usuario::getLogin($this->username, $this->password);

           
        }

        return $this->_user;
    }
}
