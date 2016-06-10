<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subcategoria;

/**
 * SubcategoriaSearch represents the model behind the search form about `app\models\Subcategoria`.
 */
class SubcategoriaSearch extends Subcategoria
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_subcat'], 'integer'],
            [['nombre_subcat'], 'safe'],
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
        $query = Subcategoria::find();

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
            'id_subcat' => $this->id_subcat,
        ]);

        $query->andFilterWhere(['like', 'nombre_subcat', $this->nombre_subcat]);

        return $dataProvider;
    }
}