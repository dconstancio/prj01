<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bacia".
 *
 * @property integer $idbacia
 * @property string $descricao
 * @property string $status
 *
 * @property Rio[] $rios
 */
class Bacia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bacia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'string'],
            [['descricao'], 'string', 'max' => 155]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idbacia' => 'Idbacia',
            'descricao' => 'Descrição',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRios()
    {
        return $this->hasMany(Rio::className(), ['bacia_idbacia' => 'idbacia']);
    }
}
