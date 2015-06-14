<?php

namespace app\models;

use yii\base\Model;

class HomePesquisa extends Model {
	public $inicio;
	public $final;
	public $rio;
	public $trecho;

	/**
	 * @return array the validation rules.
	 */
	public function rules() {
		return [
			// name, email, subject and body are required
			[['inicio', 'final', 'rio', 'trecho'], 'required'],

		];
	}

	/**
	 * @return array customized attribute labels
	 */
	public function attributeLabels() {
		return [
			'inicio' => 'Data início',
			'final' => 'Data final',
			'rio' => 'Rio',
			'trecho' => 'Trecho',
		];
	}

	public function getTrechos($id) {

		return Trecho::find()
			->where(['rio_idrio' => $id])
			->all();

	}

}
