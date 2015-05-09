<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Rio */

$this->title = 'Adicionar Rio';
$this->params['breadcrumbs'][] = ['label' => 'Rios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
