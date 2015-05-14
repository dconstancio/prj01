<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PerguntaResposta */

$this->title = $model->idpergunta_resposta;
$this->params['breadcrumbs'][] = ['label' => 'Pergunta Respostas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pergunta-resposta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idpergunta_resposta' => $model->idpergunta_resposta, 'idpergunta' => $model->idpergunta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idpergunta_resposta' => $model->idpergunta_resposta, 'idpergunta' => $model->idpergunta], [
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
            'idpergunta_resposta',
            'idpergunta',
            'resposta',
        ],
    ]) ?>

</div>
