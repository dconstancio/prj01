<?php
use app\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

$pt = Yii::getAlias('@web');
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
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<?php $this->beginBody()?>
    <div class="wrap main">


        <div class="container zeraPadding">

            <?=$content?>
        </div>
    </div>

    <footer class="footer">
    <div class="container ">
            <div class="row">
                <div class="col-lg-4">
                <a class="navbar-brand page-scroll" href="#page-top" id="logomarca"><img src="<?=$pt?>/images/logorodape.jpg" alt="img"></a>

                <div class="subtexto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. eiusmod tempor incididunt ut labore et dolore magna aliqua.

                </div>
                </div>

                <div class="col-lg-3">
                <h2>Assine nossos informativos</h2>
                 <div class="subtexto zeraPadding" style="margin-top:0px;">
<div style="font-size:16px; margin:10px 0px;;">contato@baiadeguanabara.org.br</div>
                 Por esse canal você fica sabendo<br> das novidades sobre o projeto</div>
                </div>

                <div class="col-lg-2">
                <h2>Navegue</h2>
                 <ul class="">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#projeto">O Projeto</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#pesquisa">Pesquisar</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#galeria">Galeria de fotos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contato">Contato</a>
                    </li>
                </ul>
                </div>
                <div class="col-lg-3">
                 <div class="creditos"> Criado por DiegoAndrade<Br>
                 <span>  &copy; <?=date('Y')?> Instituto Baia de Guanabara. Todos os direitos reservados. (<a href="?r=site/login">AA</a>)  </span></div>
                </div>
                </div>


           <!-- <p class="pull-right"><?=Yii::powered()?></p> -->

    </footer>

<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>
