<?php

use app\models\Rio;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
$pt = Yii::getAlias('@web');
$root = Yii::getAlias('@webroot');


 
?>
<?php Pjax::begin([
        'enableReplaceState'=>false,
        'enablePushState'=>false,
        'clientOptions'=>[
            'container'=>'x1',
        ]
    ]); ?>
<?php $form = ActiveForm::begin([
                                'id' => 'form-busca', 
                                'action' => ['form-busca'],
                                'enableAjaxValidation' => false,
                                'options'=>[
                                    'data-pjax'=>'#x1'
                                ],
            ]);?>
 

<style> 
.panel-heading{text-align: left;}
.perguntas {
   text-align: left;
   float: left;
   width: 50%;
}
.perguntas h3{ color:#666;}
.pr{ margin-bottom: 15px; line-height: 25px;}
.p2{padding-top:30px;}
.ui-datepicker{width: auto;}
</style>
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
  </div><div class="col-lg-2">
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
    
  </div>
  <div class="col-lg-1">
  <div class="form-group">
  <input type="image" src="<?=$pt?>/images/zoom-search-2-icon.png" alt="buscar" style="margin-top:25px;" />
  <!--  <?=Html::submitButton('OK', ['class' => 'btEnviarBusca', 'name' => 'busca-button'])?> -->
   </div>
</div>
</div>

<?php ActiveForm::end();?>

<?= $this->render( '/site/_lstPesquisa',['dados'=> $dados]); ?>


<?php Pjax::end(); ?>



<div id="x1"></div>