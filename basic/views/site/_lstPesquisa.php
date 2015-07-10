

<?php

use yii\bootstrap\Collapse;


$items = array();

if ($dados =="1" ) {

	echo '<p class="bg-warning" style="padding:20px">Não existem registros para a busca realizada</p>';

}
else
{

	for ($i=0; $i < count($dados) ; $i++) { 
		$p = $dados[$i];

		if ($i == 0 ) {

			echo $this->render( '/site/mapaPesquisa',array('lat'=>''.$p->trechoIdTrecho->lat.'','lon'=>''.$p->trechoIdTrecho->lon.'','tex'=>''.$p->trechoIdTrecho->descricao.'')); 

		}

		$con = "";
		$z = 0;
		foreach ($p->apr as $k ) {

			if ($z == 0 ) {


				$con = $con . "<div class='perguntas'>";
			}
			else if ($z ==8 || $z == (count($p->apr)))
			{
				$con = $con ."</div>";
				if($z == 8)$con = $con . "<div class='perguntas p2'>";
			}
			if($k->exibeGrupo > 0)
			{
				$con = $con .'<h3>'. $k->nomeGrupo ."</h3>";
			}
			$con = $con .'<div class="pr"><b>'. $k->pergunta ."</b><br>";
			$con = $con . $k->resposta ."</div>";

			$z++;
		}

		$items[] = ['label' => $p->dataDescricao , 'content' => $con];

	}

	echo Collapse::widget([
		'items' => $items,
		]);

}



?>


