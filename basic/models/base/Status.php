<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "status".
 *
 * @property integer $idstatus
 * @property string $descricao
 *
 * @property \app\models\Pesquisa[] $pesquisas
 * @property \app\models\PesquisaItens[] $pesquisaItens
 * @property \app\models\Usuario[] $usuarios
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
        return $this->hasMany(\app\models\Pesquisa::className(), ['status_idstatus' => 'idstatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesquisaItens()
    {
        return $this->hasMany(\app\models\PesquisaItens::className(), ['status_idstatus' => 'idstatus']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(\app\models\Usuario::className(), ['status_idstatus' => 'idstatus']);
    }
}
