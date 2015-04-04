<?php

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "usuario".
 *
 * @property integer $idusuario
 * @property string $nome
 * @property string $username
 * @property string $password
 * @property string $telefone
 * @property integer $perfil_idperfil
 * @property integer $status_idstatus
 * @property string $authKey
 * @property string $password_reset_token
 *
 * @property \app\models\Acompanhamento[] $acompanhamentos
 * @property \app\models\GrupoUsuario[] $grupoUsuarios
 * @property \app\models\Grupo[] $grupoIdgrupos
 * @property \app\models\Perfil $perfilIdperfil
 * @property \app\models\Status $statusIdstatus
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['perfil_idperfil', 'status_idstatus'], 'required'],
            [['perfil_idperfil', 'status_idstatus'], 'integer'],
            [['nome'], 'string', 'max' => 155],
            [['username', 'password', 'telefone', 'authKey', 'password_reset_token'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusuario' => 'Idusuario',
            'nome' => 'Nome',
            'username' => 'Username',
            'password' => 'Password',
            'telefone' => 'Telefone',
            'perfil_idperfil' => 'Perfil Idperfil',
            'status_idstatus' => 'Status Idstatus',
            'authKey' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcompanhamentos()
    {
        return $this->hasMany(\app\models\Acompanhamento::className(), ['usuario_idusuario' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupoUsuarios()
    {
        return $this->hasMany(\app\models\GrupoUsuario::className(), ['usuario_idusuario' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupoIdgrupos()
    {
        return $this->hasMany(\app\models\Grupo::className(), ['idgrupo' => 'grupo_idgrupo'])->viaTable('grupo_usuario', ['usuario_idusuario' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfilIdperfil()
    {
        return $this->hasOne(\app\models\Perfil::className(), ['idperfil' => 'perfil_idperfil']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusIdstatus()
    {
        return $this->hasOne(\app\models\Status::className(), ['idstatus' => 'status_idstatus']);
    }
}
