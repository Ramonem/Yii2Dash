<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UbicacionDescuento;

/**
 * UbicacionDescuentoSearch represents the model behind the search form about `app\models\UbicacionDescuento`.
 */
class UbicacionDescuentoSearch extends UbicacionDescuento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ubicacion', 'id_descuento'], 'safe'],
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
        $query = UbicacionDescuento::find();
         $query->joinWith(['idDescuento']);
          $query->joinWith(['idUbicacion']);

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
        $query->andFilterWhere(['like', 'ubicacion.direccion', $this->id_ubicacion])
        ->andFilterWhere(['like', 'descuento.nombre', $this->id_descuento]);

        return $dataProvider;
    }
}
