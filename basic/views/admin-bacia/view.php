<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\bacia */

$this->title = $model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Bacias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bacia-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'idbacia',
            'descricao',
            'status',
        ],
    ]) ?>

     <p>
        <?= Html::a('Editar', ['update', 'id' => $model->idbacia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->idbacia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você deseja apagar este item? Esta ação não poderá ser desfeita.',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
