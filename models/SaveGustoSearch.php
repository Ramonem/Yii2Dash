<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SaveGusto;

/**
 * SaveGustoSearch represents the model behind the search form about `app\models\SaveGusto`.
 */
class SaveGustoSearch extends SaveGusto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'id_cat'], 'safe'],
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
        $query = SaveGusto::find();

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
        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'id_cat', $this->id_cat]);

        return $dataProvider;
    }
}
