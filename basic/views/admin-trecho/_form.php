<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Rio;

/* @var $this yii\web\View */
/* @var $model app\models\Trecho */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trecho-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

       <?= $form->field($model, 'rio_idrio')->dropDownList(
        ArrayHelper::map(Rio::find()->all(),'idrio','descricao')
 , ['prompt' => 'Selecione']) ?>

    <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Adicionar' : 'Gravar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
