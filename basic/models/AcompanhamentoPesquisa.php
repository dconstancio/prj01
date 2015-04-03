<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acompanhamento_pesquisa".
 *
 * @property integer $acompanhamento_idacompanhamento
 * @property integer $pesquisa_idpesquisa
 * @property integer $pesquisa_itens_idpesquisa_itens
 *
 * @property Acompanhamento $acompanhamentoIdacompanhamento
 * @property Pesquisa $pesquisaIdpesquisa
 * @property PesquisaItens $pesquisaItensIdpesquisaItens
 */
class AcompanhamentoPesquisa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acompanhamento_pesquisa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acompanhamento_idacompanhamento', 'pesquisa_idpesquisa', 'pesquisa_itens_idpesquisa_itens'], 'required'],
            [['acompanhamento_idacompanhamento', 'pesquisa_idpesquisa', 'pesquisa_itens_idpesquisa_itens'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'acompanhamento_idacompanhamento' => 'Acompanhamento Idacompanhamento',
            'pesquisa_idpesquisa' => 'Pesquisa Idpesquisa',
            'pesquisa_itens_idpesquisa_itens' => 'Pesquisa Itens Idpesquisa Itens',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcompanhamentoIdacompanhamento()
    {
        return $this->hasOne(Acompanhamento::className(), ['idacompanhamento' => 'acompanhamento_idacompanhamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesquisaIdpesquisa()
    {
        return $this->hasOne(Pesquisa::className(), ['idpesquisa' => 'pesquisa_idpesquisa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesquisaItensIdpesquisaItens()
    {
        return $this->hasOne(PesquisaItens::className(), ['idpesquisa_itens' => 'pesquisa_itens_idpesquisa_itens']);
    }
}
