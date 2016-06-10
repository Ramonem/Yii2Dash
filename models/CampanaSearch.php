<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Campana;

/**
 * CampanaSearch represents the model behind the search form about `app\models\Campana`.
 */
class CampanaSearch extends Campana
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_campana', 'presupuesto_campana', 'id_presupuesto'], 'integer'],
            [['email_ue', 'nombre', 'descripcion', 'inicio', 'fin'], 'safe'],
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
        $query = Campana::find();

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
            'id_campana' => $this->id_campana,
            'presupuesto_campana' => $this->presupuesto_campana,
            'id_presupuesto' => $this->id_presupuesto,
            'inicio' => $this->inicio,
            'fin' => $this->fin,
        ]);

        $query->andFilterWhere(['like', 'email_ue', $this->email_ue])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
