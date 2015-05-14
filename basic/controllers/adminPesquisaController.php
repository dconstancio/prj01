<?php

namespace app\controllers;

class adminPesquisaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$this->layout = '/adm';
        return $this->render('index');
    }

}
