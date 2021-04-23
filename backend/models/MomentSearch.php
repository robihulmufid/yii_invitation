<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Moment;

/**
 * MomentSearch represents the model behind the search form of `common\models\Moment`.
 */
class MomentSearch extends Moment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_moment'], 'integer'],
            [['judul', 'deskripsi', 'ig', 'fb', 'created_at'], 'safe'],
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
        $query = Moment::find();

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
            'id_moment' => $this->id_moment,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'ig', $this->ig])
            ->andFilterWhere(['like', 'fb', $this->fb]);

        return $dataProvider;
    }
}
