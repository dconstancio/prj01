<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\Query;
use Date;
use DateTime;


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
   public $isNewRecord;



   public function attributeLabels()
    {
        return [
            'idacompanhamento' => 'Idacompanhamento',
            'grupo_idgrupo' => 'Grupo Idgrupo',
            'usuario_idusuario' => 'Usuario Idusuario',
            'dt_cadastro' => 'Data de cadastro',
            'hr_cadastro' => 'Hora de Cadastro',
            'area' => 'Área',
            'largura' => 'Largura',
            'profundidade' => 'Profundidade',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }

    public function rules()
    {
        return [
            [['grupo_idgrupo', 'usuario_idusuario','dt_cadastro','hr_cadastro','area','largura','profundidade','latitude','longitude','pgs[1][resposta]'], 'required'],
            [['grupo_idgrupo', 'usuario_idusuario'], 'integer'],
            [['dt_cadastro'], 'safe'],
            [['hr_cadastro'], 'string', 'max' => 10],
            [['area'], 'string', 'max' => 155],
            [['largura', 'profundidade', 'latitude', 'longitude'], 'string', 'max' => 45]
        ];
    }



   public function init()
   {
 
    $isNewRecord = TRUE;


    $busca_perguntas = Pergunta::find()
                   -> all();
        $i = 0;
        foreach ($busca_perguntas as $pg) {

            unset($tmp);
            $tmp['id'] = $pg->idpergunta;
            $tmp['pergunta'] = $pg->pergunta;

            if ($pg->exibeGrupo == 1 ) {
               $tmp['nomeGrupo'] = $pg->perguntaGrupo->descricao;
            
            }
            else
            {
              $tmp['nomeGrupo'] = "";  
            }

          
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
  
  public function salvar($p)
  {
        $p = $p['cPesquisa'];
       $connection = \Yii::$app->db;
       $session = Yii::$app->session;
       $usu =  $session['user'];
      
        $transaction = $connection->beginTransaction();
try {
    
    $date = strtotime(str_replace('/', '-', $p['dt_cadastro']));

   $acompanhamento =  $connection ->createCommand()
                ->insert('acompanhamento', [
                        'grupo_idgrupo' =>  $usu -> grupo_idgrupo,
                        'usuario_idusuario'=> $usu -> idusuario,
                        'dt_cadastro' => $date,
                        'hr_cadastro' => $p['hr_cadastro'],
                        'area' => $p['area'],
                        'largura' => $p['largura'],
                        'profundidade' => $p['profundidade'],
                        'latitude' => $p['latitude'],
                        'longitude' => $p['longitude']
                        ])
                ->execute();

             $id = Yii::$app->db->getLastInsertID();
             
                for ($i=0; $i < count($p['pgs']); $i++) { 
            
                $connection ->createCommand()
                ->insert('acompanhamento_pergunta_resposta', [
                       'idacompanhamento' => $id,
                        'idpergunta' => $p['pgs'][$i]['id'],
                        'idresposta' => $p['pgs'][$i]['resposta']
                        ])
                ->execute();
                }
    
    $transaction->commit();
} catch(Exception $e) {
     print_r($e);
    $transaction->rollback();
}

       

    return TRUE;

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
