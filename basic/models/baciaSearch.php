<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\bacia;

/**
 * baciaSearch represents the model behind the search form about `app\models\bacia`.
 */
class baciaSearch extends bacia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idbacia'], 'integer'],
            [['descricao', 'status'], 'safe'],
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
        $query = bacia::find();

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
            'idbacia' => $this->idbacia,
        ]);

        $query->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
