<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GrupoUsuario;

/**
 * adminGrupoUsuarioSearch represents the model behind the search form about `app\models\GrupoUsuario`.
 */
class adminGrupoUsuarioSearch extends GrupoUsuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grupo_idgrupo', 'usuario_idusuario'], 'integer'],
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
        $query = GrupoUsuario::find();

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
            'grupo_idgrupo' => $this->grupo_idgrupo,
            'usuario_idusuario' => $this->usuario_idusuario,
        ]);

        return $dataProvider;
    }

     public function searchGrupo($params,$idGrupo)
    {
        $query = GrupoUsuario::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);


      $query->where($this->grupo_idgrupo = $idGrupo);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'grupo_idgrupo' => $this->grupo_idgrupo,
            'usuario_idusuario' => $this->usuario_idusuario,
        ]);

        return $dataProvider;
    }
}
