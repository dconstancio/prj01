<?php

namespace app\controllers;

use Yii;

class admController extends \yii\web\Controller {
	public function actionIndex() {
		$this->layout = '/adm';
		$model = '';

		if(Yii::$app->user->isGuest){
			return $this->redirect('/site/login');
		}
		return $this->render('index', [
			'model' => $model,
			]);
	}




}
