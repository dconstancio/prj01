<?php
use yii\helpers\Html;
use yii\helpers\Url;


/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\BaseMessage instance of newly created mail message */


?>
<div style="font-family:verdana; ">
Nome: <b> <?=$model->nome;?></b><Br>
E-mail: <b> <?=$model->email;?></b><Br>
<Br>
Mensagem:<br>
<?=$model->mensagem;?>
<br><Br>
<span>Mensagem enviada em: <?= date('m/d/Y h:i:s a', time());?></span>
</div>