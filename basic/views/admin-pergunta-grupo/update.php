<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PerguntaGrupo */

$this->title = 'Update Pergunta Grupo: ' . ' ' . $model->idpergunta_grupo;
$this->params['breadcrumbs'][] = ['label' => 'Pergunta Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpergunta_grupo, 'url' => ['view', 'id' => $model->idpergunta_grupo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pergunta-grupo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
