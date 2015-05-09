<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\bacia */

$this->title = 'Edição: ' . ' ' . $model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Bacias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descricao, 'url' => ['view', 'id' => $model->idbacia]];
$this->params['breadcrumbs'][] = 'Edição';
?>
<div class="bacia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
