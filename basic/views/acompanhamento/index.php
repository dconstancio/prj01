<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AcompanhamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Acompanhamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acompanhamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Acompanhamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idacompanhamento',
            'grupo_idgrupo',
            'usuario_idusuario',
            'dt_cadastro',
            'hr_cadastro',
            // 'area',
            // 'largura',
            // 'profundidade',
            // 'latitude',
            // 'longitude',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
