<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PerguntaResposta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pergunta-resposta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idpergunta')->textInput() ?>

    <?= $form->field($model, 'resposta')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
