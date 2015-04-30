<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\rioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Adicionar Rio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

       
             ['label'=>'Bacia', 'attribute'=>'baciaDescricao'],
            'descricao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
