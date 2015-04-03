<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo_usuario".
 *
 * @property integer $grupo_idgrupo
 * @property integer $usuario_idusuario
 *
 * @property Grupo $grupoIdgrupo
 * @property Usuario $usuarioIdusuario
 */
class GrupoUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupo_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grupo_idgrupo', 'usuario_idusuario'], 'required'],
            [['grupo_idgrupo', 'usuario_idusuario'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grupo_idgrupo' => 'Grupo Idgrupo',
            'usuario_idusuario' => 'Usuario Idusuario',
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
}
