<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbHistory;

/**
 * TbHistorySearch represents the model behind the search form of `app\models\TbHistory`.
 */
class TbHistorySearch extends TbHistory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_history', 'jumlah_prediksi'], 'integer'],
            [['hari',  'waktu'], 'safe'],
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
        $query = TbHistory::find();

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
            'id_history' => $this->id_history,
            
            'tanggal' => $this->tanggal,
            'jumlah_prediksi' => $this->jumlah_prediksi,
            'waktu' => $this->waktu,
        ]);

        $query->andFilterWhere(['like', 'hari', $this->hari]);

        return $dataProvider;
    }
}
