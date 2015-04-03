<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trecho".
 *
 * @property integer $idtrecho
 * @property integer $rio_idrio
 * @property string $descricao
 * @property string $lat
 * @property string $lon
 *
 * @property Grupo[] $grupos
 * @property Rio $rioIdrio
 */
class Trecho extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trecho';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rio_idrio'], 'required'],
            [['rio_idrio'], 'integer'],
            [['descricao'], 'string', 'max' => 155],
            [['lat', 'lon'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtrecho' => 'Idtrecho',
            'rio_idrio' => 'Rio Idrio',
            'descricao' => 'Descricao',
            'lat' => 'Lat',
            'lon' => 'Lon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupos()
    {
        return $this->hasMany(Grupo::className(), ['trecho_idtrecho' => 'idtrecho']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRioIdrio()
    {
        return $this->hasOne(Rio::className(), ['idrio' => 'rio_idrio']);
    }
}
