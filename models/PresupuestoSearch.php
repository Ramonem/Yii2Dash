<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Presupuesto;

/**
 * PresupuestoSearch represents the model behind the search form about `app\models\Presupuesto`.
 */
class PresupuestoSearch extends Presupuesto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_presupuesto', 'presupuesto'], 'integer'],
            [['nombre', 'fecha_inicio', 'fecha_final', 'email_ue'], 'safe'],
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
        $query = Presupuesto::find();

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
            'id_presupuesto' => $this->id_presupuesto,
            'presupuesto' => $this->presupuesto,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_final' => $this->fecha_final,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'email_ue', $this->email_ue]);

        return $dataProvider;
    }
}
