<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PerguntaResposta */

$this->title = 'Create Pergunta Resposta';
$this->params['breadcrumbs'][] = ['label' => 'Pergunta Respostas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pergunta-resposta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
