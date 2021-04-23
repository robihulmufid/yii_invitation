<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reservasi".
 *
 * @property int $id_reservasi
 * @property string $nama
 * @property string $email
 * @property int $number
 * @property string $pesan
 * @property string $created_at
 */
class Reservasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'number', 'pesan'], 'required'],
            [['number'], 'integer'],
            [['pesan'], 'string'],
            [['created_at'], 'safe'],
            [['nama', 'email'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_reservasi' => 'Id Reservasi',
            'nama' => 'Nama',
            'email' => 'Email',
            'number' => 'Number',
            'pesan' => 'Pesan',
            'created_at' => 'Created At',
        ];
    }
}
