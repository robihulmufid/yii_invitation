<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ucapan".
 *
 * @property int $id_ucapan
 * @property string $judul
 * @property string $deskripsi
 * @property string $penulis
 * @property string $created_at
 */
class Ucapan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ucapan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi', 'penulis'], 'required'],
            [['deskripsi'], 'string'],
            [['created_at'], 'safe'],
            [['judul', 'penulis'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ucapan' => 'Id Ucapan',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'penulis' => 'Penulis',
            'created_at' => 'Created At',
        ];
    }
}
