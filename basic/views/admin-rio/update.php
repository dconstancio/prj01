<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\rio */

$this->title = 'Update Rio: ' . ' ' . $model->idrio;
$this->params['breadcrumbs'][] = ['label' => 'Rios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idrio, 'url' => ['view', 'id' => $model->idrio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
