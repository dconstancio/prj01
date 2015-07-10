<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Acompanhamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="acompanhamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grupo_idgrupo')->textInput() ?>

    <?= $form->field($model, 'usuario_idusuario')->textInput() ?>

    <?= $form->field($model, 'dt_cadastro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hr_cadastro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'largura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profundidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
