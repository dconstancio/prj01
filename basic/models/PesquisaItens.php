<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesquisa_itens".
 *
 * @property integer $idpesquisa_itens
 * @property string $descricao
 * @property integer $pesquisa_idpesquisa
 * @property integer $status_idstatus
 *
 * @property AcompanhamentoPesquisa[] $acompanhamentoPesquisas
 * @property Pesquisa $pesquisaIdpesquisa
 * @property Status $statusIdstatus
 */
class PesquisaItens extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pesquisa_itens';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpesquisa_itens', 'pesquisa_idpesquisa', 'status_idstatus'], 'required'],
            [['idpesquisa_itens', 'pesquisa_idpesquisa', 'status_idstatus'], 'integer'],
            [['descricao'], 'string', 'max' => 145]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpesquisa_itens' => 'Idpesquisa Itens',
            'descricao' => 'Descricao',
            'pesquisa_idpesquisa' => 'Pesquisa Idpesquisa',
            'status_idstatus' => 'Status Idstatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcompanhamentoPesquisas()
    {
        return $this->hasMany(AcompanhamentoPesquisa::className(), ['pesquisa_itens_idpesquisa_itens' => 'idpesquisa_itens']);
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
    public function getStatusIdstatus()
    {
        return $this->hasOne(Status::className(), ['idstatus' => 'status_idstatus']);
    }
}
