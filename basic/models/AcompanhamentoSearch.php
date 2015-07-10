<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Acompanhamento;

/**
 * AcompanhamentoSearch represents the model behind the search form about `app\models\Acompanhamento`.
 */
class AcompanhamentoSearch extends Acompanhamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idacompanhamento', 'grupo_idgrupo', 'usuario_idusuario'], 'integer'],
            [['dt_cadastro', 'hr_cadastro', 'area', 'largura', 'profundidade', 'latitude', 'longitude'], 'safe'],
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
        $query = Acompanhamento::find();

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
            'idacompanhamento' => $this->idacompanhamento,
            'grupo_idgrupo' => $this->grupo_idgrupo,
            'usuario_idusuario' => $this->usuario_idusuario,
        ]);

        $query->andFilterWhere(['like', 'dt_cadastro', $this->dt_cadastro])
            ->andFilterWhere(['like', 'hr_cadastro', $this->hr_cadastro])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'largura', $this->largura])
            ->andFilterWhere(['like', 'profundidade', $this->profundidade])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude]);

        return $dataProvider;
    }
}
