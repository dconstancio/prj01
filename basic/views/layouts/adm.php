<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Sistema',
                'brandUrl' => Yii::$app->homeUrl ."?r=adm%2Findex",
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    // ['label' => 'About', 'url' => ['/site/about']],
                    // ['label' => 'Contact', 'url' => ['/site/contact']],
                    ['label' => 'Administração', 'url' => ['/adm/index'], 
                    'items'=>[ 
                        ['label' => 'Usuários', 'url' => ['/admin-usuario/index']],
                        ['label' => 'Grupos', 'url' => ['/admin-grupo/index']],
                        '<li class="divider"></li>',
                        ['label' => 'Bacias', 'url' => ['/admin-bacia/index']],
                        ['label' => 'Rios', 'url' => ['/admin-rio/index']],
                        ['label' => 'Trechos', 'url' => ['/admin-trecho/index']],
                        '<li class="divider"></li>',
                        ['label' => 'Grupos de Pergunta', 'url' => ['/admin-pergunta-grupo/index']],
                        ['label' => 'Perguntas', 'url' => ['/admin-pergunta/index']],
                        ['label' => 'Respostas', 'url' => ['/admin-pergunta-resposta/index']],
                        '<li class="divider"></li>',
                          ['label' => 'Pesquisa', 'url' => ['/admin-pesquisa/index']],

                    ],  
                    'visible' => !Yii::$app->user->isGuest ],
                     Yii::$app->user->isGuest ?
                        ['label' => 'Entrar', 'url' => ['/site/login']] :
                        ['label' => 'Sair (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= 


            Breadcrumbs::widget([

                'links' =>   isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'homeLink'=>[
            'label' => 'Administração',
            'url' => ['/adm/index', 'r'=>'adm/index']
          
        ]
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; admEmpresa <?= date('Y') ?></p>
          <!--   <p class="pull-right"><?= Yii::powered() ?></p> -->
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
