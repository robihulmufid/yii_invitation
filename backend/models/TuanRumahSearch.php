<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TuanRumah;

/**
 * TuanRumahSearch represents the model behind the search form of `common\models\TuanRumah`.
 */
class TuanRumahSearch extends TuanRumah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tuan'], 'integer'],
            [['nama_pria', 'nickname_pria', 'deskripsi_pria', 'orangtua_pria', 'alamat_pria', 'nama_pasangan', 'nickname_wanita', 'deskripsi_wanita', 'orangtua_wanita', 'alamat_wanita', 'koordinat_pria', 'koordinat_wanita', 'tanggal_akad', 'waktu_akad', 'tanggal_resepsi', 'waktu_resepsi', 'created_at'], 'safe'],
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
        $query = TuanRumah::find();

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
            'id_tuan' => $this->id_tuan,
            'tanggal_akad' => $this->tanggal_akad,
            'waktu_akad' => $this->waktu_akad,
            'tanggal_resepsi' => $this->tanggal_resepsi,
            'waktu_resepsi' => $this->waktu_resepsi,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'nama_pria', $this->nama_pria])
            ->andFilterWhere(['like', 'nickname_pria', $this->nickname_pria])
            ->andFilterWhere(['like', 'deskripsi_pria', $this->deskripsi_pria])
            ->andFilterWhere(['like', 'orangtua_pria', $this->orangtua_pria])
            ->andFilterWhere(['like', 'alamat_pria', $this->alamat_pria])
            ->andFilterWhere(['like', 'nama_pasangan', $this->nama_pasangan])
            ->andFilterWhere(['like', 'nickname_wanita', $this->nickname_wanita])
            ->andFilterWhere(['like', 'deskripsi_wanita', $this->deskripsi_wanita])
            ->andFilterWhere(['like', 'orangtua_wanita', $this->orangtua_wanita])
            ->andFilterWhere(['like', 'alamat_wanita', $this->alamat_wanita])
            ->andFilterWhere(['like', 'koordinat_pria', $this->koordinat_pria])
            ->andFilterWhere(['like', 'koordinat_wanita', $this->koordinat_wanita]);

        return $dataProvider;
    }
}
