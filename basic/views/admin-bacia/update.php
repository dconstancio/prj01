<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\bacia */

$this->title = 'Update Bacia: ' . ' ' . $model->idbacia;
$this->params['breadcrumbs'][] = ['label' => 'Bacias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idbacia, 'url' => ['view', 'id' => $model->idbacia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bacia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
