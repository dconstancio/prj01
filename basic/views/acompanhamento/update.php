<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Acompanhamento */

$this->title = 'Update Acompanhamento: ' . ' ' . $model->idacompanhamento;
$this->params['breadcrumbs'][] = ['label' => 'Acompanhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idacompanhamento, 'url' => ['view', 'id' => $model->idacompanhamento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="acompanhamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
