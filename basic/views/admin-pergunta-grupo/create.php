<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PerguntaGrupo */

$this->title = 'Create Pergunta Grupo';
$this->params['breadcrumbs'][] = ['label' => 'Pergunta Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pergunta-grupo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
