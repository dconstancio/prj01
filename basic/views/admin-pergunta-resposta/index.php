<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PerguntaRespostaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pergunta Respostas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pergunta-resposta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pergunta Resposta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpergunta_resposta',
            'idpergunta',
            'resposta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
