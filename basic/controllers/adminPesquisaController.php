<?php

namespace app\controllers;

use Yii;
use app\models\cPesquisa;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class adminPesquisaController extends \yii\web\Controller
{
    public function actionIndex()
    {

    	 $model = new cPesquisa();
    	 $model->init();
    
    	 $this->layout = '/adm';
        return $this->render('index', [
                'model' => $model,
            ]);
    }

}
