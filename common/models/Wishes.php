<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wishes".
 *
 * @property int $id_wishes
 * @property string $nama
 * @property string $ucapan
 * @property string $created_at
 */
class Wishes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wishes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'ucapan'], 'required'],
            [['ucapan'], 'string'],
            [['created_at'], 'safe'],
            [['nama'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wishes' => 'Id Wishes',
            'nama' => 'Nama',
            'ucapan' => 'Ucapan',
            'created_at' => 'Created At',
        ];
    }
}
