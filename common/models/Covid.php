<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "covid".
 *
 * @property int $id_covid
 * @property string $judul
 * @property string $deskripsi
 * @property string $aturan
 * @property string $created_at
 */
class Covid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'covid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi', 'aturan'], 'required'],
            [['deskripsi', 'aturan'], 'string'],
            [['created_at'], 'safe'],
            [['judul'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_covid' => 'Id Covid',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'aturan' => 'Aturan',
            'created_at' => 'Created At',
        ];
    }
}
