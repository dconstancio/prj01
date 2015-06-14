<?php

namespace app\controllers;

use app\models\ContatoForm;
use app\models\HomePesquisa;
use app\models\LoginForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class SiteController extends Controller {

	public function init() {
		parent::init();
		\Yii::$app->language = 'pt-BR';

	}

	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['logout'],
				'rules' => [
					[
						'actions' => ['logout'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'logout' => ['post'],
				],
			],
		];
	}

	public function actions() {
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class' => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	public function actionIndex() {

		$model = new ContatoForm();
		return $this->render('index', [
			'model' => $model,
			'pesquisa' => new HomePesquisa(),
		]);
	}
	public function actionFormContato() {

		$model = new ContatoForm();

		if ($model->load(Yii::$app->request->post())) {
			Yii::$app->session->setFlash('contatoFormSubmitted');

			if ($model->send('nao.responder@baiadeguanabara.org.br')) {

				$items = ['ok'];
			} else {
				$items = ['erro'];
			}
			\Yii::$app->response->format = 'json';
			return $items;

		}
	}
	public function actionLogin() {
		$this->layout = '/adm';
		if (!\Yii::$app->user->isGuest) {
			return $this->goHome();
		}

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {

			$this->redirect(array('adm/index'));
			//return $this->goBack();
		} else {
			return $this->render('login', [
				'model' => $model,
			]);
		}
	}

	public function actionLogout() {
		Yii::$app->user->logout();

		return $this->goHome();
	}

	public function actionContact() {
		$model = new ContactForm();
		if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
			Yii::$app->session->setFlash('contactFormSubmitted');

			return $this->refresh();
		} else {
			return $this->render('contact', [
				'model' => $model,
			]);
		}
	}

	public function actionAbout() {
		return $this->render('about');
	}

	public function actionSay($message = 'Hello') {
		return $this->render('say', ['message' => $message]);
	}

	public function actionTrechos($id) {
		$hp = new HomePesquisa();

		$tre = $hp->getTrechos($id);
		$ret = "";

		if (count($tre) > 0) {
			echo "<option>Selecione o trecho</option>";
			foreach ($tre as $h) {

				echo "<option value=" . $h->idtrecho . ">" . $h->descricao . "( " . $h->lat . " | " . $h->lon . " )</option>";

			}

		} else {
			echo "<option>Nenhum trecho cadastrado</option>";
		}
		echo $ret;

	}

	public function actionFormBusca() {

		$model = new HomePesquisa();

		if ($model->load(Yii::$app->request->post())) {
			Yii::$app->session->setFlash('buscaFormSubmitted');

			print_r($model);die;
			$items = ['ok'];
			$items = ['erro'];

			\Yii::$app->response->format = 'json';
			return $items;

		}
	}
}
