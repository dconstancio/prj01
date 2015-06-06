<?php

namespace app\controllers;

use Yii;
use app\models\cPesquisa;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class adminPesquisaController extends \yii\web\Controller
{

    public function init()
    {
        parent::init();
        \Yii::$app->language = 'pt-BR';
        $this->layout = '/adm'; 
    }

    public function actionIndex()
    {
    	
    	 $model = new cPesquisa();
    	 $model->init();
    	   
    
    	 $this->layout = '/adm';
        return $this->render('index', [
                'model' => $model,
            ]);
    }

    public function actionCreate()
    {
       $post = Yii::$app->request->post();
        $model = new cPesquisa();
     
     $model->salvar($post);

    	 return $this->render('index', [
                'model' => $model,
            ]);
    }

}
