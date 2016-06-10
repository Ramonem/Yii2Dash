<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UsuarioEmpresa;

/**
 * UsuarioEmpresaSearch represents the model behind the search form about `app\models\UsuarioEmpresa`.
 */
class UsuarioEmpresaSearch extends UsuarioEmpresa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_ue', 'nombre', 'password', 'id_empresa'], 'safe'],
            //[['id_empresa'], 'integer'],
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
        $query = UsuarioEmpresa::find();

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


         $query->joinWith('idEmpresa');

        // grid filtering conditions


        $query->andFilterWhere(['like', 'email_ue', $this->email_ue])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'empresa.nombre_empresa', $this->id_empresa]);

        return $dataProvider;
    }
}
