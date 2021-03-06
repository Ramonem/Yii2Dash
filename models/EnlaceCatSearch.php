<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EnlaceCat;

/**
 * EnlaceCatSearch represents the model behind the search form about `app\models\EnlaceCat`.
 */
class EnlaceCatSearch extends EnlaceCat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_subcat', 'id_cat'], 'safe'],
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
        $query = EnlaceCat::find();
        $query->joinWith(['idCat']);
        $query->joinWith(['idSubcat']);

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

         $query->andFilterWhere(['like', 'categoria.nombre_cat', $this->id_cat])
            ->andFilterWhere(['like', 'subcategoria.nombre_subcat', $this->id_subcat]);

        return $dataProvider;
    }
}
