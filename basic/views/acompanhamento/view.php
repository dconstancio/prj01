<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Acompanhamento */

$this->title = $model->idacompanhamento;
$this->params['breadcrumbs'][] = ['label' => 'Acompanhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acompanhamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idacompanhamento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idacompanhamento], [
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
            'idacompanhamento',
            'grupo_idgrupo',
            'usuario_idusuario',
            'dt_cadastro',
            'hr_cadastro',
            'area',
            'largura',
            'profundidade',
            'latitude',
            'longitude',
        ],
    ]) ?>

</div>
