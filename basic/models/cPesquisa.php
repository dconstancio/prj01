<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "acompanhamento".
 *
 * @property integer $idacompanhamento
 * @property integer $grupo_idgrupo
 * @property integer $usuario_idusuario
 * @property string $dt_cadastro
 * @property string $hr_cadastro
 * @property string $area
 * @property string $largura
 * @property string $profundidade
 * @property string $latitude
 * @property string $longitude
 *
 * @property Grupo $grupoIdgrupo
 * @property Usuario $usuarioIdusuario
 * @property AcompanhamentoPerguntaResposta[] $acompanhamentoPerguntaRespostas
 */
class cPesquisa extends Model
{
   public $idgrupo;
   public $idusuario;
   public $dt_cadastro;
   public $hr_cadastro;
   public $area;
   public $largura;
   public $profundidade;
   public $latitude;
   public $longitude;
   public $pgs;

   public function init()
   {
 


    $busca_perguntas = Pergunta::find()
                -> all();
        $i = 0;
        foreach ($busca_perguntas as $pg) {

            $tmp['id'] = $pg->idpergunta;
            $tmp['pergunta'] = $pg->pergunta;
            $tmp['resposta'] = '0';
          

          
                $busca_respostas = PerguntaResposta::find()
                    ->where(['idpergunta' => $pg->idpergunta])
                    -> all();
                     $z = 0;
                    foreach ($busca_respostas as $rs) {
            
                         $tmp['respostas'][$z]['id'] = $rs->idpergunta_resposta;
                         $tmp['respostas'][$z]['resposta'] = $rs->resposta;
                       $z++;
                    }

                     if($z > 0)
                     {
                     $ar[$i] = $tmp;
                      $i++;
                  }
}


      $this['pgs'] = $ar;

   }
  

}

class cPeguntaGrupo extends Model
{
  public $grupoid;
  public $grupodesc;
  public $perguntas;
  public function getGrupo($idgrupo)
  {

    $sg= PerguntaGrupo::find()
        ->where(['idpergunta_grupo' => $idgrupo])
        ->one();

    $this['grupoid']  = $idgrupo;
    $this['grupodesc']  = $sg-> descricao;
        
     $p = new cPergunta();
   // $this['perguntas'] = $p->getPerguntas($idgrupo);

  }
}

class cPergunta extends Model
{
 
   public $pergunta;
   public $respostas;

   //public function getPergunta($idgrupo)
   // {
   //      $this['perguntas'] = Pergunta::find()
   //                        ->where(['idperguntagrupo' => $idgrupo])
   //                        -> all();
         

   // }
}


class cResposta extends Model
{
   public $idresposta;
   public $resposta;

   public function getPerguntas($idpergunta)
   {
          $busca_respostas = PerguntaResposta::find()
                          ->where(['idpergunta' => $idpergunta])
                          -> all();

   }
}
