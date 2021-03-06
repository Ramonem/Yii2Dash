<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ubicacion;

/**
 * UbicacionSearch represents the model behind the search form about `app\models\Ubicacion`.
 */
class UbicacionSearch extends Ubicacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ubicacion'], 'integer'],
            [['direccion', 'id_empresa'], 'safe'],
            [['lat', 'lon'], 'number'],
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
        $query = Ubicacion::find();
             $query->joinWith(['idEmpresa']);

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
            'id_ubicacion' => $this->id_ubicacion,
            'lat' => $this->lat,
            'lon' => $this->lon,
        ]);

        $query->andFilterWhere(['like', 'direccion', $this->direccion])
        ->andFilterWhere(['like', 'empresa.nombre_empresa', $this->id_empresa]);

        return $dataProvider;
    }
}
