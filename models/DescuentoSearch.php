<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Descuento;

/**
 * DescuentoSearch represents the model behind the search form about `app\models\Descuento`.
 */
class DescuentoSearch extends Descuento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_descuento', 'id_empresa', 'id_convenio', 'id_campana', 'id_subcat', 'gasto'], 'integer'],
            [['nombre', 'descuento', 'link', 'descripcion', 'imagen', 'vigencia_inicio', 'vigencia_fin', 'contacto', 'creado'], 'safe'],
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
        $query = Descuento::find();

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
            'id_descuento' => $this->id_descuento,
            'id_empresa' => $this->id_empresa,
            'id_convenio' => $this->id_convenio,
            'id_campana' => $this->id_campana,
            'id_subcat' => $this->id_subcat,
            'vigencia_inicio' => $this->vigencia_inicio,
            'vigencia_fin' => $this->vigencia_fin,
            'gasto' => $this->gasto,
            'creado' => $this->creado,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descuento', $this->descuento])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'imagen', $this->imagen])
            ->andFilterWhere(['like', 'contacto', $this->contacto]);

        return $dataProvider;
    }
}
