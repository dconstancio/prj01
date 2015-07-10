<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
$this->title = 'Administração';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h3>Pesquisas realizadas</h3>
 <?php

if(Yii::$app->user->identity->perfil_idperfil >2 )
{

 echo GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

             'trechoDescricao',
            'DataDescricao',
            'hr_cadastro',
             'area',
            // 'largura',
            
             'latitude',
             'longitude',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
}
else
{

echo GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'idacompanhamento',
            // 'grupo_idgrupo',

             'UsuarioDescricao',
              'trechoDescricao',
            'DataDescricao',
            'hr_cadastro',
             'area',
            // 'largura',
            // 'profundidade',
             'latitude',
             'longitude',

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);


}
 
     ?>




 

</div>
