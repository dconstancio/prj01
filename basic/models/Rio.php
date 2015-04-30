<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rio".
 *
 * @property integer $idrio
 * @property integer $bacia_idbacia
 * @property string $descricao
 *
 * @property Bacia $baciaIdbacia
 * @property Trecho[] $trechoes
 */
class Rio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bacia_idbacia'], 'required'],
            [['bacia_idbacia'], 'integer'],
            [['descricao'], 'string', 'max' => 155]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idrio' => 'Idrio',
            'bacia_idbacia' => 'Bacia',
             'BaciaDescricao' => 'Bacia',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBacia()
    {
        return $this->hasOne(Bacia::className(), ['idbacia' => 'bacia_idbacia']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrechoes()
    {
        return $this->hasMany(Trecho::className(), ['rio_idrio' => 'idrio']);
    }

     public function getBaciaDescricao() {
     return $this->bacia->descricao;
    }
}
