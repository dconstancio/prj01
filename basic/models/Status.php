<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $idstatus
 * @property string $descricao
 *
 * @property Pesquisa[] $pesquisas
 * @property PesquisaItens[] $pesquisaItens
 * @property Usuario[] $usuarios
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idstatus' => 'Idstatus',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesquisas()
    {
        return $this->hasMany(Pesquisa::className(), ['status_idstatus' => 'idstatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesquisaItens()
    {
        return $this->hasMany(PesquisaItens::className(), ['status_idstatus' => 'idstatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['status_idstatus' => 'idstatus']);
    }
}
