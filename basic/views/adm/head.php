  <?php



  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\helpers\ArrayHelper;

  use app\models\Usuario;
  use app\models\Trecho;

  $id = Yii::$app->user->identity->idusuario;
  $u =  Usuario::findOne($id);
  if($u->grupoDescricao != 'Não associado')
  $t = Trecho::findOne($u->grupoIdgrupos->trecho_idtrecho);

  $a = Yii::$app->controller->id .'/'. Yii::$app->controller->action->id;


  ?>
  <style>
  .headAdm{margin-top:70px;}
  	.lbel{ font-size: 10px; color:#666;}
  	.subTrecho { border: 1px solid #eee; background: #fff; margin-top:10px; padding:5px;}
  </style>
  <div class="headAdm">

  	<table class="table table-striped">
  		<tr><td><div class="lbel">Usuário</div><?=$u->nome?></td></tr>
  		<tr><td><div class="lbel">Perfil</div><?=$u->perfilDescricao?></td></tr>
  		<tr><td><div class="lbel">Grupo</div><?=$u->grupoDescricao?>
  			<?php if($u->grupoDescricao != 'Não associado'){?>
  			<div class="subTrecho">
  			<div class="lbel">Trecho</div>
  			<?=$t->descricao?>
  		

  			 <?= $this->render( '/site/mapaPrincipal',array('lat'=>''.$t->lat.'','lon'=>''.$t->lon.'','tex'=>''.$t->descricao.'')); ?>

<div style="text-align:center;padding-top:10px;">

<?php if($a != 'admin-pesquisa/index'){
echo Html::a('Preencher pesquisa', ['/admin-pesquisa/index'], ['class'=>'btn btn-primary btn-lg']);} ?>

	</div>
  			</div>
  			<?php }?>


  		</td></tr>
  		<!-- <tr><td><?php print_r(Yii::$app->user->identity);?></td></tr>  -->

  	</table>


  </div>