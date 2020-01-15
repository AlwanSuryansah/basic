<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbDatatran;

/**
 * TbDatatranSearch represents the model behind the search form of `app\models\TbDatatran`.
 */
class TbDatatranSearch extends TbDatatran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_data', 'jumlah'], 'integer'],
            [['tanggl'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = TbDatatran::find();

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
            'id_data' => $this->id_data,
            'tanggl' => $this->tanggl,
            'jumlah' => $this->jumlah,
        ]);

        return $dataProvider;
    }
}
