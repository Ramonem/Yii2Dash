<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HistorialCompartir;

/**
 * HistorialCompartirSearch represents the model behind the search form about `app\models\HistorialCompartir`.
 */
class HistorialCompartirSearch extends HistorialCompartir
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_historial_desc', 'contador'], 'integer'],
            [['email'], 'safe'],
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
        $query = HistorialCompartir::find();

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
        $query->andFilterWhere([
            'id_historial_desc' => $this->id_historial_desc,
            'contador' => $this->contador,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
