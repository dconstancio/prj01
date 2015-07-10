<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAssetAdm;

/* @var $this \yii\web\View */
/* @var $content string */

AppAssetAdm::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Html::csrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head()?>
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>

    <style>
    	.breadcrumb{margin-top:70px;}

    	.detail-view th{width: 150px;}
    	
    	.colInfo{border-right: 1px solid #ccc; min-height: 400px;}

    	</style>
</head>
<body>

<?php $this->beginBody()?>
    <div class="wrap">
        <?php
NavBar::begin([
	'brandLabel' => 'Sistema',
	'brandUrl' => Yii::$app->homeUrl . "?r=adm%2Findex",
	'options' => [
		'class' => 'navbar-inverse navbar-fixed-top',
	],
]);
if(!Yii::$app->user->isGuest)
$idPerfil = Yii::$app->user->identity->perfil_idperfil;
echo Nav::widget([
	'options' => ['class' => 'navbar-nav navbar-right'],
	'items' => [
		['label' => 'Home', 'url' => ['/adm/index']],
		// ['label' => 'About', 'url' => ['/site/about']],
		// ['label' => 'Contact', 'url' => ['/site/contact']],
		['label' => 'Administração', 'url' => ['/adm/index'],
			'items' => [
				['label' => 'Usuários', 'url' => ['/admin-usuario/index']],
				['label' => 'Grupos', 'url' => ['/admin-grupo/index']],
				'<li class="divider"></li>',
				['label' => 'Bacias', 'url' => ['/admin-bacia/index']],
				['label' => 'Rios', 'url' => ['/admin-rio/index']],
				['label' => 'Trechos', 'url' => ['/admin-trecho/index']],
				// '<li class="divider"></li>',
				// ['label' => 'Grupos de Pergunta', 'url' => ['/admin-pergunta-grupo/index']],
				// ['label' => 'Perguntas', 'url' => ['/admin-pergunta/index']],
				// ['label' => 'Respostas', 'url' => ['/admin-pergunta-resposta/index']],
				 ['<li class="divider"></li>','visible' => (!Yii::$app->user->isGuest && $idPerfil > 2)],
				['label' => 'Adicionar pesquisa', 'url' => ['/admin-pesquisa/index'],'visible' => (!Yii::$app->user->isGuest && $idPerfil > 2)],

			],
			'visible' => (!Yii::$app->user->isGuest && $idPerfil < 3) ],
		Yii::$app->user->isGuest ?
		['label' => 'Entrar', 'url' => ['/site/login']] :
		['label' => 'Sair (' . Yii::$app->user->identity->nome . ')',
			'url' => ['/site/logout'],
			'linkOptions' => ['data-method' => 'post']],
	],
]);
NavBar::end();
?>

        <div class="container">
          

<div class="row">

<div class="col-sm-3 colInfo">

<?php if(!Yii::$app->user->isGuest) {?>
 <?= $this->render('/adm/head'); ?>
 <?php } ?>
	</div>
	<div class="col-sm-9">
	  <?=

Breadcrumbs::widget([

'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
'homeLink' => [
'label' => 'Administração',
'url' => ['/adm/index', 'r' => 'adm/index'],

],
])?>
            <?=$content?>
        </div>
        
   

</div>
        </div>
    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy;  <?=date('Y')?></p>
          <!--   <p class="pull-right"><?=Yii::powered()?></p> -->
        </div>
    </footer>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
