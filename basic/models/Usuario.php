<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
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
 * @property Acompanhamento[] $acompanhamentos
 * @property GrupoUsuario[] $grupoUsuarios
 * @property Grupo[] $grupoIdgrupos
 * @property Perfil $perfilIdperfil
 * @property Status $statusIdstatus
 */
class Usuario extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
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
        return $this->hasMany(Acompanhamento::className(), ['usuario_idusuario' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupoUsuarios()
    {
        return $this->hasMany(GrupoUsuario::className(), ['usuario_idusuario' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupoIdgrupos()
    {
        return $this->hasMany(Grupo::className(), ['idgrupo' => 'grupo_idgrupo'])->viaTable('grupo_usuario', ['usuario_idusuario' => 'idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfilIdperfil()
    {
        return $this->hasOne(Perfil::className(), ['idperfil' => 'perfil_idperfil']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusIdstatus()
    {
        return $this->hasOne(Status::className(), ['idstatus' => 'status_idstatus']);
    }


  public static function getLogin($username,$password)
    {


        return $usuario = Usuario::find()
                ->where(['username' => $username,'password' => $password])
                ->one();
    }


     public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->idusuario;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
}
