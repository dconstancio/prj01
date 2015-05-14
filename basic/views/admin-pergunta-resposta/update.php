<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerguntaResposta */

$this->title = 'Update Pergunta Resposta: ' . ' ' . $model->idpergunta_resposta;
$this->params['breadcrumbs'][] = ['label' => 'Pergunta Respostas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpergunta_resposta, 'url' => ['view', 'idpergunta_resposta' => $model->idpergunta_resposta, 'idpergunta' => $model->idpergunta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pergunta-resposta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
