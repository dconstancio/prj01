<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\adminTrechoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trechos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trecho-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar Trecho', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
      //  'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
         
            'rioDescricao',
            'descricao',
            'lat',
            'lon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
