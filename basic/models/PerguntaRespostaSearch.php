<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PerguntaResposta;

/**
 * PerguntaRespostaSearch represents the model behind the search form about `app\models\PerguntaResposta`.
 */
class PerguntaRespostaSearch extends PerguntaResposta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idpergunta_resposta', 'idpergunta'], 'integer'],
            [['resposta'], 'safe'],
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
        $query = PerguntaResposta::find();

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
            'idpergunta_resposta' => $this->idpergunta_resposta,
            'idpergunta' => $this->idpergunta,
        ]);

        $query->andFilterWhere(['like', 'resposta', $this->resposta]);

        return $dataProvider;
    }
}
