<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pergunta_resposta".
 *
 * @property integer $idpergunta_resposta
 * @property integer $idpergunta
 * @property string $resposta
 *
 * @property AcompanhamentoPerguntaResposta[] $acompanhamentoPerguntaRespostas
 * @property Pergunta $idpergunta0
 */
class PerguntaResposta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pergunta_resposta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpergunta'], 'required'],
            [['idpergunta'], 'integer'],
            [['resposta'], 'string', 'max' => 155]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpergunta_resposta' => 'Idpergunta Resposta',
            'idpergunta' => 'Idpergunta',
            'resposta' => 'Resposta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcompanhamentoPerguntaRespostas()
    {
        return $this->hasMany(AcompanhamentoPerguntaResposta::className(), ['idresposta' => 'idpergunta_resposta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdpergunta0()
    {
        return $this->hasOne(Pergunta::className(), ['idpergunta' => 'idpergunta']);
    }
}
