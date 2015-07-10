<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
$this->title = 'Index';
$pt = Yii::getAlias('@web');
$root = Yii::getAlias('@webroot');
?>
<div class="site-index">
  <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" id="logomarca"><img src="<?=$pt?>/images/logo.png" alt="img"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 zeraPadding">
                 <div id="main-carousel">
					  <?php
					$dir = $root."/images/banners/";
					$images = glob($dir . "*.jpg");
					foreach($images as $image)
					{
						$outimg = $pt.'/images/banners/'.str_replace($dir,"",$image);
					  echo '<div class="item"><img src="'.$outimg.'" alt="img"></div> ';
					}
					  ?>

					</div>
 <div id="frase">"Frase, citação ou qualquer texto curto aqui"</div>


                </div>
            </div>
        </div>
    </section>

  <!-- About Section -->
    <section id="idealizadores" class=" cinza1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 zeraPadding ">
                      <h3 class="bitter h3id">Conheça os idealizadores</h3>

                       <div id="idealizadores-carousel">
					<div class="item"><a href="http://www.google.com" target="_blank"> <img src="<?=$pt?>/images/idealizadores/idealizadores_01.jpg" alt="img"></a></div>
					<div class="item"><a href="http://www.google.com" target="_blank"> <img src="<?=$pt?>/images/idealizadores/idealizadores_01.jpg" alt="img"></a></div>
					<div class="item"><a href="http://www.google.com" target="_blank"> <img src="<?=$pt?>/images/idealizadores/idealizadores_01.jpg" alt="img"></a></div>
					<div class="item"><a href="http://www.google.com" target="_blank"> <img src="<?=$pt?>/images/idealizadores/idealizadores_01.jpg" alt="img"></a></div>
					<div class="item"><a href="http://www.google.com" target="_blank"> <img src="<?=$pt?>/images/idealizadores/idealizadores_01.jpg" alt="img"></a></div>
					<div class="item"><a href="http://www.google.com" target="_blank"> <img src="<?=$pt?>/images/idealizadores/idealizadores_01.jpg" alt="img"></a></div>
					<div class="item"><a href="http://www.google.com" target="_blank"> <img src="<?=$pt?>/images/idealizadores/idealizadores_01.jpg" alt="img"></a></div>

					</div>
                </div>
            </div>
        </div>
      
    </section>
  <!-- Services Section -->
    <section id="projeto" class="branco">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <h3 class="bitter">O projeto</h3>
                     <h5 class="subTituloFotos ">Falta design</h5>
                </div>
            </div>
            
        </div>
    </section>
    <!-- About Section -->
    <section id="galeria" class="branco">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 zeraPadding">
                     <h3 class="bitter">Galeria de fotos</h3>
                     <h5 class="subTituloFotos ">Acompanhe o andamento do projeto, trechos dos rios e muito mais aqui</h5>

                      
					  <?php
					$dir = $root."/images/galeria/thumb/";
					$images = glob($dir . "*.jpg");

                    $z = 0;
                    $blocos = "";

					for ($i=0; $i < count($images) ; $i++) { 
						   
	                      if ($z == 0) {
	                      	$blocos = $blocos . '<div class="item">';
	                      		
	                      }
	                      $z++;

						$outimg = $pt.'/images/galeria/thumb/'.str_replace($dir,"",$images[$i]);
						$outimgBig = $pt.'/images/galeria/grande/'.str_replace($dir,"",$images[$i]);
						$blocos = $blocos .'<a href="'.$outimgBig.'" rel="prettyPhoto[pp_gal]"><img src="'.$outimg.'"></a>';
                             
                        if ($z == 2) {
                         	$blocos = $blocos . '</div>';
                         	$z = 0;
                         } 
					}
				
					
					  ?>
<div id="galeria-carousel">
<?=$blocos?>
					</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="pesquisa" class="branco">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <h3 class="bitter">Pesquisar</h3>
                     <h5 class="subTituloFotos ">Pesquise aqui por trechos dos rios e outros filtros</h5>
                      <?= $this->render( '/home-pesquisa/index', ['model'=> $pesquisa, 'dados' => $dados]); ?>
                       

                </div>
            </div>
            
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contato" class="branco">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <h3 class="bitter">Contato</h3>
                     
                      <div class="row">
             <div class="col-lg-1"></div>
             <div class="col-lg-3 endereco">
             	<h4>Instituto Baía de Guanabara</h4>
             	<div class="endereco2">
             	Alameda São Boa Ventura, 770<br>
             	Fonseca, Niterói, RJ<br>
             	contato@baiadeguanabara.org.br<br>
             	www.baiadeguanabara.org.br<br>
             	</div>
             	</div>

              <div class="col-lg-7" style="text-align:left;">
              <h3 style="margin-top:10px;">Envie sua mensagem</h3>
            <?php $form = ActiveForm::begin(['id' => 'contato-form' ,  'action' => ['form-contato']]); ?>
           <div class="row">
             <div class="col-lg-6"><?= $form->field($model, 'nome')->textInput(array('placeholder' => 'Nome'))->label(''); ?></div>
             <div class="col-lg-6 "><?= $form->field($model, 'email')->textInput(array('placeholder' => 'E-mail'))->label(''); ?></div>
</div>
           <div class="row">
             <div class="col-lg-12">
                

                <?= $form->field($model, 'mensagem')->textArea(['rows' => 6, 'placeholder' =>'Mensagem'])->label('');  ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Enviar mensagem', ['class' => 'btEnviar', 'name' => 'contato-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        

              </div>
              <div class="col-lg-1"></div>
                </div>
                </div>
            </div>
        </div>
    </section>
<section>
 <div class="container">
            <div class="row">
                <div class="col-lg-12 zeraPadding">
 <?= $this->render( 'mapaPrincipal',array('lat'=>'-22.88109','lon'=>'-43.09035','tex'=>'Alameda São Boa Ventura, 770 Fonseca, Niterói, RJ')); ?>
 </div></div></div>
 </section>
</div>
<div class="modalf"></div>

