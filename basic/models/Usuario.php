<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property string $dt_cadastro
 * @property integer $cd_status
 * @property integer $cd_perfil
 *
 * @property Status $cdStatus
 * @property Perfil $cdPerfil
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
            [['nome', 'email', 'senha'], 'required'],
            [['dt_cadastro'], 'safe'],
            [['cd_status', 'cd_perfil'], 'integer'],
            [['nome', 'email'], 'string', 'max' => 100],
            [['senha'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'email' => 'Email',
            'senha' => 'Senha',
            'dt_cadastro' => 'Dt Cadastro',
            'cd_status' => 'Cd Status',
            'cd_perfil' => 'Cd Perfil',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCdStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'cd_status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCdPerfil()
    {
        return $this->hasOne(Perfil::className(), ['id' => 'cd_perfil']);
    }
}
