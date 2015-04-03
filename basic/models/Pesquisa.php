<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesquisa".
 *
 * @property integer $idpesquisa
 * @property string $descricao
 * @property integer $status_idstatus
 *
 * @property AcompanhamentoPesquisa[] $acompanhamentoPesquisas
 * @property Status $statusIdstatus
 * @property PesquisaItens[] $pesquisaItens
 */
class Pesquisa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pesquisa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_idstatus'], 'required'],
            [['status_idstatus'], 'integer'],
            [['descricao'], 'string', 'max' => 145]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpesquisa' => 'Idpesquisa',
            'descricao' => 'Descricao',
            'status_idstatus' => 'Status Idstatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcompanhamentoPesquisas()
    {
        return $this->hasMany(AcompanhamentoPesquisa::className(), ['pesquisa_idpesquisa' => 'idpesquisa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusIdstatus()
    {
        return $this->hasOne(Status::className(), ['idstatus' => 'status_idstatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesquisaItens()
    {
        return $this->hasMany(PesquisaItens::className(), ['pesquisa_idpesquisa' => 'idpesquisa']);
    }
}
