<?php

use app\models\Rio;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(['id' => 'form-busca', 'action' => ['form-busca']]);?>

<div class="row" style="text-align:left;">
  <div class="col-lg-1"></div>
  <div class="col-lg-2">
   <?=$form->field($model, 'inicio')->widget(\yii\jui\DatePicker::classname(), [
'language' => 'pt-BR',
])->textInput(array('class' => 'form-control', 'style' => 'width:150px;', 'placeholder' => 'Data início'))?>
  </div><div class="col-lg-2">
  <?=$form->field($model, 'final')->widget(\yii\jui\DatePicker::classname(), [
'language' => 'pt-BR',
])->textInput(array('class' => 'form-control', 'style' => 'width:150px;', 'placeholder' => 'Data final'))?>
  </div><div class="col-lg-3">
  <?php
$listaRios = ArrayHelper::map(Rio::find()->all(), 'idrio', 'descricao');
echo $form->field($model, 'rio')->dropDownList($listaRios,
	[
		'prompt' => 'Selecione',
		'onchange' => '
   $.get( "' . \yii\helpers\Url::toRoute('trechos') . '", { id: $(this).val() } )
   .done(function( data ) {
    $( "#' . Html::getInputId($model, 'trecho') . '" ).html( data );
  }
  );
  ', ]);

?>
</div>
<div class="col-lg-3">
  <?=$form->field($model, 'trecho')->dropDownList(
[
'prompt' => '--',
])?>
    <div class="form-group">
      <?=Html::submitButton('OK', ['class' => 'btEnviarBusca', 'name' => 'busca-button'])?>
    </div>
  </div>
</div>
<div class="col-lg-1"></div>
<?php ActiveForm::end();?>