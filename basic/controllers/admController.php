<?php

namespace app\controllers;

use Yii;
use app\models\cPesquisa;
use app\models\Acompanhamento;
use app\models\AcompanhamentoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class AdmController extends Controller
{

     public function init()
    {
        parent::init();
        \Yii::$app->language = 'pt-BR';
        $this->layout = '/adm'; 
    }
    
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }



	public function actionIndex() {
		
		$this->layout = '/adm';

		if(Yii::$app->user->isGuest){
			print(1);die;
			return $this->redirect('/site/login');
		}

	if(Yii::$app->user->identity->perfil_idperfil >2 ){
 		
 		  $searchModel = new AcompanhamentoSearch([
               'usuario_idusuario' =>  Yii::$app->user->identity->idusuario ]
        	);
 		}
 		else
 		{
 			 $searchModel = new AcompanhamentoSearch();
 		}

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
	}




}
