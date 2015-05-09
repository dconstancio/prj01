<?php

namespace app\controllers;

use Yii;
use app\models\GrupoUsuario;
use app\models\adminGrupoUsuarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminGrupoUsuarioController implements the CRUD actions for GrupoUsuario model.
 */
class AdminGrupoUsuarioController extends Controller
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
     * Lists all GrupoUsuario models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new adminGrupoUsuarioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GrupoUsuario model.
     * @param integer $grupo_idgrupo
     * @param integer $usuario_idusuario
     * @return mixed
     */
    public function actionView($grupo_idgrupo, $usuario_idusuario)
    {
        return $this->render('view', [
            'model' => $this->findModel($grupo_idgrupo, $usuario_idusuario),
        ]);
    }

    /**
     * Creates a new GrupoUsuario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GrupoUsuario();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'grupo_idgrupo' => $model->grupo_idgrupo, 'usuario_idusuario' => $model->usuario_idusuario]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing GrupoUsuario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $grupo_idgrupo
     * @param integer $usuario_idusuario
     * @return mixed
     */
    public function actionUpdate($grupo_idgrupo, $usuario_idusuario)
    {
        $model = $this->findModel($grupo_idgrupo, $usuario_idusuario);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'grupo_idgrupo' => $model->grupo_idgrupo, 'usuario_idusuario' => $model->usuario_idusuario]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing GrupoUsuario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $grupo_idgrupo
     * @param integer $usuario_idusuario
     * @return mixed
     */
    public function actionDelete($grupo_idgrupo, $usuario_idusuario)
    {
        $this->findModel($grupo_idgrupo, $usuario_idusuario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GrupoUsuario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $grupo_idgrupo
     * @param integer $usuario_idusuario
     * @return GrupoUsuario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($grupo_idgrupo, $usuario_idusuario)
    {
        if (($model = GrupoUsuario::findOne(['grupo_idgrupo' => $grupo_idgrupo, 'usuario_idusuario' => $usuario_idusuario])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
