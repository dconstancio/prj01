<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\PerguntaGrupo;
use app\models\Pergunta;
use app\models\PerguntaResposta;

/* @var $this yii\web\View */
$this->title = 'Administração';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
<?php

 $query = PerguntaGrupo::find()->all();

 
foreach ($query as $gr) {
	
	echo $gr->descricao;

   $busca_perguntas = Pergunta::find()
   					    ->where(['idperguntagrupo' => $gr->idpergunta_grupo])
   					    -> all();

	foreach ($busca_perguntas as $pg) {
		//echo $pg->pergunta;

  $busca_respostas = PerguntaResposta::find()
   					    ->where(['idpergunta' => $pg->idpergunta])
   					    -> all();


		foreach ($busca_respostas as $rs) {
			echo $rs->resposta;
		}

	}



}


?>
   
</div>
