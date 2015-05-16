<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\PerguntaGrupo;
use app\models\Pergunta;
use app\models\PerguntaResposta;
use app\models\cPesquisa;

/* @var $this yii\web\View */
$this->title = 'Administração';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
<?php
 //$form = ActiveForm::begin(); //Default Active Form begin
$form = ActiveForm::begin([
    'id' => 'active-form',
    'options' => [
				'class' => 'form-horizontal',
				'enctype' => 'multipart/form-data',
				 'htmlOptions' => [
		                'class' => 'cPesquisa'
		             ]
				],
])

?>

<?= $form->field($model,'dt_cadastro'); ?>
<?= $form->field($model,'hr_cadastro'); ?>
<?= $form->field($model,'area'); ?>
<?= $form->field($model,'largura'); ?>
<?= $form->field($model,'profundidade'); ?>
<?= $form->field($model,'latitude'); ?>
<?= $form->field($model,'longitude'); ?>


<?php
for ($i=0; $i < count($model->pgs) ; $i++) { 
$el = $model->pgs[$i];
$ar = array();
foreach ($el['respostas'] as $r) {
	$ar[$r['id']] = $r['resposta'];
}
echo $form->field($model,'pgs['.$i.'][resposta]')->radioList($ar)->label($el['pergunta']);
}
?>



<?php

ActiveForm::end();


?>
   
</div>
