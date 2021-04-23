<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tamu".
 *
 * @property int $id_tamu
 * @property string $nama
 * @property string $alamat
 * @property string $status
 * @property string $created_at
 */
class Tamu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tamu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'status'], 'required'],
            [['alamat'], 'string'],
            [['created_at'], 'safe'],
            [['nama', 'status'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tamu' => 'Id Tamu',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
