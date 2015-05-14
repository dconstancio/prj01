<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property integer $idgrupo
 * @property string $descricao
 * @property string $dt_criacao
 * @property integer $trecho_idtrecho
 *
 * @property Acompanhamento[] $acompanhamentos
 * @property Trecho $trechoIdtrecho
 * @property GrupoUsuario[] $grupoUsuarios
 * @property Usuario[] $usuarioIdusuarios
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trecho_idtrecho'], 'required'],
            [['trecho_idtrecho'], 'integer'],
            [['descricao'], 'string', 'max' => 155],
            [['dt_criacao'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idgrupo' => 'Idgrupo',
            'descricao' => 'Descricao',
            'dt_criacao' => 'Dt Criacao',
            'trecho_idtrecho' => 'Trecho',
            'trechoDescricao' => 'Trecho',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcompanhamentos()
    {
        return $this->hasMany(Acompanhamento::className(), ['grupo_idgrupo' => 'idgrupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrechoIdtrecho()
    {
        return $this->hasOne(Trecho::className(), ['idtrecho' => 'trecho_idtrecho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupoUsuarios()
    {
        return $this->hasMany(GrupoUsuario::className(), ['grupo_idgrupo' => 'idgrupo']);
    }

    

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioIdusuarios()
    {
        return $this->hasMany(Usuario::className(), ['idusuario' => 'usuario_idusuario'])->viaTable('grupo_usuario', ['grupo_idgrupo' => 'idgrupo']);
    }

     public function getTrechoDescricao() {
     return $this->trechoIdtrecho->descricao;
    }
}
