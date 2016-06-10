<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HistorialDescuento;

/**
 * HistorialDescuentoSearch represents the model behind the search form about `app\models\HistorialDescuento`.
 */
class HistorialDescuentoSearch extends HistorialDescuento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_historial_desc', 'id_empresa', 'id_historial_camp', 'id_subcat', 'gasto'], 'integer'],
            [['descuento', 'imagen', 'vigencia_inicio', 'vigencia_fin', 'contacto', 'creado'], 'safe'],
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
        $query = HistorialDescuento::find();

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
            'id_empresa' => $this->id_empresa,
            'id_historial_camp' => $this->id_historial_camp,
            'id_subcat' => $this->id_subcat,
            'vigencia_inicio' => $this->vigencia_inicio,
            'vigencia_fin' => $this->vigencia_fin,
            'gasto' => $this->gasto,
            'creado' => $this->creado,
        ]);

        $query->andFilterWhere(['like', 'descuento', $this->descuento])
            ->andFilterWhere(['like', 'imagen', $this->imagen])
            ->andFilterWhere(['like', 'contacto', $this->contacto]);

        return $dataProvider;
    }
}
