<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AcompanhamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acompanhamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idacompanhamento') ?>

    <?= $form->field($model, 'grupo_idgrupo') ?>

    <?= $form->field($model, 'usuario_idusuario') ?>

    <?= $form->field($model, 'dt_cadastro') ?>

    <?= $form->field($model, 'hr_cadastro') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'largura') ?>

    <?php // echo $form->field($model, 'profundidade') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
