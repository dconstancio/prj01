<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rio */

$this->title = 'Editar Rio: ' . ' ' . $model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Rios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descricao, 'url' => ['view', 'id' => $model->idrio]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="rio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
