<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

   

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'idusuario',
            'nome',
            'username',
            //'password',
            'telefone',
             ['label'=>'Perfíl', 'attribute'=>'perfilDescricao'],
           // 'status_idstatus',
            //'authKey',
            //'password_reset_token',
            'status',
        ],
    ]) ?>
 <p>
        <?= Html::a('Editar', ['update', 'id' => $model->idusuario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->idusuario], [
            'class' => 'btn btn-danger',
            'data' => [
                 'confirm' => 'Você deseja apagar este item? Esta ação não poderá ser desfeita.',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
