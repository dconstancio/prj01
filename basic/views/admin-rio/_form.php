<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Bacia;
/* @var $this yii\web\View */
/* @var $model app\models\rio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rio-form">

    <?php $form = ActiveForm::begin(); ?>


      <?= $form->field($model, 'bacia_idbacia')->dropDownList(
        ArrayHelper::map(Bacia::find()->all(),'idbacia','descricao')
 , ['prompt' => 'Selecione']) ?>


    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Gravar' : 'Alterar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
