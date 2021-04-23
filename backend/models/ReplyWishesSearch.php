<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ReplyWishes;

/**
 * ReplyWishesSearch represents the model behind the search form of `common\models\ReplyWishes`.
 */
class ReplyWishesSearch extends ReplyWishes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_reply', 'id_wishes'], 'integer'],
            [['nama', 'ucapan', 'created_at'], 'safe'],
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
        $query = ReplyWishes::find();

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
            'id_reply' => $this->id_reply,
            'id_wishes' => $this->id_wishes,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'ucapan', $this->ucapan]);

        return $dataProvider;
    }
}
