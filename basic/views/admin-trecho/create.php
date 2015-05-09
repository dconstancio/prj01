<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Trecho */

$this->title = 'Criar Trecho';
$this->params['breadcrumbs'][] = ['label' => 'Trechos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trecho-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
