<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acompanhamento_pergunta_resposta".
 *
 * @property integer $idacompanhamento
 * @property integer $idpergunta
 * @property integer $idresposta
 *
 * @property Acompanhamento $idacompanhamento0
 * @property Pergunta $idpergunta0
 * @property PerguntaResposta $idresposta0
 */
class AcompanhamentoPerguntaResposta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acompanhamento_pergunta_resposta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idacompanhamento', 'idpergunta', 'idresposta'], 'required'],
            [['idacompanhamento', 'idpergunta', 'idresposta'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idacompanhamento' => 'Idacompanhamento',
            'idpergunta' => 'Idpergunta',
            'idresposta' => 'Idresposta',
            'perguntaDescricao' => 'pdesc'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdacompanhamento0()
    {
        return $this->hasOne(Acompanhamento::className(), ['idacompanhamento' => 'idacompanhamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdpergunta0()
    {
        return $this->hasOne(Pergunta::className(), ['idpergunta' => 'idpergunta']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdresposta0()
    {
        return $this->hasOne(PerguntaResposta::className(), ['idpergunta_resposta' => 'idresposta']);
    }

     public function getPergunta() {
     return  $this->idpergunta0->pergunta; 
    }

     public function getExibeGrupo() {
     return  $this->idpergunta0->exibeGrupo; 
    }

    public function getResposta() {
     return  $this->idresposta0->resposta; 
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getNomeGrupo()
    {
        return  $this->idpergunta0->nomeGrupo; 
    }
}
