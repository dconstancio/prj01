<?php

namespace app\models\base;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\base\Usuario;

/**
* UsuarioSearch represents the model behind the search form about `app\models\base\Usuario`.
*/
class UsuarioSearch extends Usuario
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['idusuario', 'perfil_idperfil', 'status_idstatus'], 'integer'],
            [['nome', 'username', 'password', 'telefone', 'authKey', 'password_reset_token'], 'safe'],
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
$query = Usuario::find();

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
            'idusuario' => $this->idusuario,
            'perfil_idperfil' => $this->perfil_idperfil,
            'status_idstatus' => $this->status_idstatus,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'authKey', $this->authKey])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token]);

return $dataProvider;
}
}