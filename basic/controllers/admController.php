<?php

namespace app\controllers;

class admController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$this->layout = '/adm';
        return $this->render('index');
    }

}
