<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pergunta_grupo".
 *
 * @property integer $idpergunta_grupo
 * @property string $descricao
 */
class PerguntaGrupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pergunta_grupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao'], 'string', 'max' => 155]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idpergunta_grupo' => 'Idpergunta Grupo',
            'descricao' => 'Descricao',
        ];
    }
}
