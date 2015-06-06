<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

use yii\helpers\ArrayHelper;
use app\models\PerguntaGrupo;
use app\models\Pergunta;
use app\models\PerguntaResposta;
use app\models\cPesquisa;

/* @var $this yii\web\View */
$this->title = 'Pesquisa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
<?php
 //$form = ActiveForm::begin(); //Default Active Form begin
$form = ActiveForm::begin([
    'id' => 'active-form',
    'action' => ['create'],
    'options' => [
				
				'enctype' => 'multipart/form-data',
				 'htmlOptions' => [
		                'class' => 'cPesquisa'
		             ]
				],
]);


	echo "<h4>Localização</h4>";
?>
<style>
#ui-datepicker-div{ display: table;}
.form-group{ margin-left:10px;}
h4{ color:#333;}
label h4{ margin-left:-10px;}
label{ font-weight: normal; margin-right: 10px;}
label.control-label{ font-weight: bold;}
</style>
<?= $form->field($model,'dt_cadastro')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'pt-BR',
])->textInput(array('class' => 'form-control', 'style' => 'width:150px;','placeholder' => 'Data de cadastro'))  ?>
<?= $form->field($model,'hr_cadastro')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '99:99:99'])->textInput(array('style' => 'width:150px;', 'placeholder' => 'Hora do cadastro')) ; ?>
<?= $form->field($model,'area')->textInput(array('style' => 'width:200px;','placeholder' => 'Área')); ?>
<?= $form->field($model,'largura')->textInput(array('style' => 'width:150px;','placeholder' => 'Largura')); ?>
<?= $form->field($model,'profundidade')->textInput(array('style' => 'width:150px;','placeholder' => 'Profundidade')); ?>
<?= $form->field($model,'latitude')->textInput(array('style' => 'width:150px;','placeholder' => 'Latitude')); ?>
<?= $form->field($model,'longitude')->textInput(array('style' => 'width:150px;','placeholder' => 'Longitude')); ?>


<?php
for ($i=0; $i < count($model->pgs) ; $i++) { 

unset($el);
$el = $model->pgs[$i];
unset($ar);
$ar = array();

foreach ($el['respostas'] as $r) {
	$ar[$r['id']] = $r['resposta'];
}

$tmpLabel = $el['pergunta'];
if ($el['nomeGrupo'] != "") {
	$tmpLabel = "<h4>".$el['nomeGrupo']."</h4>"."<br>". $el['pergunta'];
}

echo Html::activeHiddenInput($model, 'pgs['.$i.'][id]');
//echo $form->field($model,'pgs['.$i.'][id]')->hiddenInput(array( 'style' => 'display:none'))->label('');
echo $form->field($model,'pgs['.$i.'][resposta]')->radioList($ar,['itemOptions' => ['required' =>'required', 'class'=>'optRespostas']])->label($tmpLabel);
}
?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Adicionar' : 'Gravar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
<?php

ActiveForm::end();


?>
   
</div>
