<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\bootstrap\Modal;


/* @var $this yii\web\View */
/* @var $model app\models\Grupo */

$this->title = $model->descricao;
$this->params['breadcrumbs'][] = ['label' => 'Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupo-view">

    <h1><?= Html::encode($this->title) ?></h1>

  

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           
            'descricao',
            'trechoDescricao',
        ],
    ]) ?>

<!--  <?= GridView::widget([
        'dataProvider' => $modelU,
        //'filterModel' => $searchModel,
        'columns' => [
            'usuario_idusuario',
            'grupo_idgrupo',
        ],
    ]); ?> -->


    

      <p>
        <?= Html::a('Editar', ['update', 'id' => $model->idgrupo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->idgrupo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Deseja excluir este item? Esta ação não poder ser desfeita.',
                'method' => 'post',
            ],
        ]) ?>
    </p>



</div>
