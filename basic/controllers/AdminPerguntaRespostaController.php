<?php

namespace app\controllers;

use Yii;
use app\models\PerguntaResposta;
use app\models\PerguntaRespostaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminPerguntaRespostaController implements the CRUD actions for PerguntaResposta model.
 */
class AdminPerguntaRespostaController extends Controller
{
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

    /**
     * Lists all PerguntaResposta models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PerguntaRespostaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerguntaResposta model.
     * @param integer $idpergunta_resposta
     * @param integer $idpergunta
     * @return mixed
     */
    public function actionView($idpergunta_resposta, $idpergunta)
    {
        return $this->render('view', [
            'model' => $this->findModel($idpergunta_resposta, $idpergunta),
        ]);
    }

    /**
     * Creates a new PerguntaResposta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PerguntaResposta();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idpergunta_resposta' => $model->idpergunta_resposta, 'idpergunta' => $model->idpergunta]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PerguntaResposta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idpergunta_resposta
     * @param integer $idpergunta
     * @return mixed
     */
    public function actionUpdate($idpergunta_resposta, $idpergunta)
    {
        $model = $this->findModel($idpergunta_resposta, $idpergunta);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idpergunta_resposta' => $model->idpergunta_resposta, 'idpergunta' => $model->idpergunta]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PerguntaResposta model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idpergunta_resposta
     * @param integer $idpergunta
     * @return mixed
     */
    public function actionDelete($idpergunta_resposta, $idpergunta)
    {
        $this->findModel($idpergunta_resposta, $idpergunta)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerguntaResposta model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idpergunta_resposta
     * @param integer $idpergunta
     * @return PerguntaResposta the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idpergunta_resposta, $idpergunta)
    {
        if (($model = PerguntaResposta::findOne(['idpergunta_resposta' => $idpergunta_resposta, 'idpergunta' => $idpergunta])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
