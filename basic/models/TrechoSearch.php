<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trecho;

/**
* TrechoSearch represents the model behind the search form about `app\models\Trecho`.
*/
class TrechoSearch extends Trecho
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['idtrecho', 'rio_idrio'], 'integer'],
            [['descricao', 'lat', 'lon'], 'safe'],
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
$query = Trecho::find();

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
            'idtrecho' => $this->idtrecho,
            'rio_idrio' => $this->rio_idrio,
        ]);

        $query->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'lat', $this->lat])
            ->andFilterWhere(['like', 'lon', $this->lon]);

return $dataProvider;
}
}