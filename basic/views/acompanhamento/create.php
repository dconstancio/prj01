<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Acompanhamento */

$this->title = 'Create Acompanhamento';
$this->params['breadcrumbs'][] = ['label' => 'Acompanhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acompanhamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
