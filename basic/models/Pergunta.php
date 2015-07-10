<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pergunta".
 *
 * @property integer $idpergunta
 * @property string $pergunta
 * @property integer $idperguntagrupo
 *
 * @property AcompanhamentoPerguntaResposta[] $acompanhamentoPerguntaRespostas
 * @property PerguntaGrupo $idperguntagrupo0
 * @property PerguntaResposta[] $perguntaRespostas
 */
class Pergunta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pergunta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idperguntagrupo'], 'integer'],
            [['pergunta'], 'string', 'max' => 155]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpergunta' => 'Idpergunta',
            'pergunta' => 'Pergunta',
            'idperguntagrupo' => 'Idperguntagrupo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcompanhamentoPerguntaRespostas()
    {
        return $this->hasMany(AcompanhamentoPerguntaResposta::className(), ['idpergunta' => 'idpergunta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerguntaGrupo()
    {
        return $this->hasOne(PerguntaGrupo::className(), ['idpergunta_grupo' => 'idperguntagrupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerguntaRespostas()
    {
        return $this->hasMany(PerguntaResposta::className(), ['idpergunta' => 'idpergunta']);
    }

     public function getNomeGrupo() {
     return  $this->perguntaGrupo->descricao; 
    }
}
