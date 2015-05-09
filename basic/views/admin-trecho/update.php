<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trecho */

$this->title = 'Editar Trecho: ' . ' ' . $model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Trechoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descricao, 'url' => ['view', 'id' => $model->idtrecho]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trecho-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
