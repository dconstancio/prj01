<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\rio */

$this->title = $model->idrio;
$this->params['breadcrumbs'][] = ['label' => 'Rios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idrio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idrio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idrio',
            'bacia_idbacia',
            'descricao',
        ],
    ]) ?>

</div>
