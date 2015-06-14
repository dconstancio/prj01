<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rio */

$this->title = $model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Rios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rio-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'idrio',
           'baciaDescricao',
            'descricao',
        ],
    ]) ?>

     <p>
        <?= Html::a('Editar', ['update', 'id' => $model->idrio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->idrio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Deseja excluir este item? Esta ação não poderá ser desfeita.',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
