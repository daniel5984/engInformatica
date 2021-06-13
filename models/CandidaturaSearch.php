<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Candidatura;

/**
 * CandidaturaSearch represents the model behind the search form of `app\models\Candidatura`.
 */
class CandidaturaSearch extends Candidatura
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'candidato_id'], 'integer'],
            [['classifications', 'jobs', 'specialization', 'languages'], 'safe'],
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
        $query = Candidatura::find();

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
            'id' => $this->id,
            'candidato_id' => $this->candidato_id,
        ]);

        $query->andFilterWhere(['like', 'classifications', $this->classifications])
            ->andFilterWhere(['like', 'jobs', $this->jobs])
            ->andFilterWhere(['like', 'specialization', $this->specialization])
            ->andFilterWhere(['like', 'languages', $this->languages]);

        return $dataProvider;
    }
}
