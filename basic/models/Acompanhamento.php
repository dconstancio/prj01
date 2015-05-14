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
 * @property string $hr_cadastro
 * @property string $area
 * @property string $largura
 * @property string $profundidade
 * @property string $latitude
 * @property string $longitude
 *
 * @property Grupo $grupoIdgrupo
 * @property Usuario $usuarioIdusuario
 * @property AcompanhamentoPerguntaResposta[] $acompanhamentoPerguntaRespostas
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
            [['dt_cadastro'], 'safe'],
            [['hr_cadastro'], 'string', 'max' => 10],
            [['area'], 'string', 'max' => 155],
            [['largura', 'profundidade', 'latitude', 'longitude'], 'string', 'max' => 45]
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
            'hr_cadastro' => 'Hr Cadastro',
            'area' => 'Area',
            'largura' => 'Largura',
            'profundidade' => 'Profundidade',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
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
    public function getAcompanhamentoPerguntaRespostas()
    {
        return $this->hasMany(AcompanhamentoPerguntaResposta::className(), ['idacompanhamento' => 'idacompanhamento']);
    }
}
