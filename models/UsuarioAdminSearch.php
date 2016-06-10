<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UsuarioAdmin;

/**
 * UsuarioAdminSearch represents the model behind the search form about `app\models\UsuarioAdmin`.
 */
class UsuarioAdminSearch extends UsuarioAdmin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_admin', 'password', 'rol'], 'safe'],
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
        $query = UsuarioAdmin::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', 'email_admin', $this->email_admin])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'rol', $this->rol]);

        return $dataProvider;
    }
}
