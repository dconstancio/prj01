<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acompanhamento".
 *
 * @property integer $idacompanhamento
 * @property integer $grupo_idgrupo
 * @property integer $usuario_idusuario
 * @property string $dt_cadastro
 *
 * @property Grupo $grupoIdgrupo
 * @property Usuario $usuarioIdusuario
 * @property AcompanhamentoPesquisa[] $acompanhamentoPesquisas
 */
class Acompanhamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acompanhamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grupo_idgrupo', 'usuario_idusuario'], 'required'],
            [['grupo_idgrupo', 'usuario_idusuario'], 'integer'],
            [['dt_cadastro'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idacompanhamento' => 'Idacompanhamento',
            'grupo_idgrupo' => 'Grupo Idgrupo',
            'usuario_idusuario' => 'Usuario Idusuario',
            'dt_cadastro' => 'Dt Cadastro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupoIdgrupo()
    {
        return $this->hasOne(Grupo::className(), ['idgrupo' => 'grupo_idgrupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioIdusuario()
    {
        return $this->hasOne(Usuario::className(), ['idusuario' => 'usuario_idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcompanhamentoPesquisas()
    {
        return $this->hasMany(AcompanhamentoPesquisa::className(), ['acompanhamento_idacompanhamento' => 'idacompanhamento']);
    }
}
