<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Grupo;

/**
* GrupoSearch represents the model behind the search form about `app\models\Grupo`.
*/
class GrupoSearch extends Grupo
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['idgrupo', 'trecho_idtrecho'], 'integer'],
            [['descricao', 'dt_criacao'], 'safe'],
];
}

/**
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = Grupo::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'idgrupo' => $this->idgrupo,
            'trecho_idtrecho' => $this->trecho_idtrecho,
        ]);

        $query->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'dt_criacao', $this->dt_criacao]);

return $dataProvider;
}
}