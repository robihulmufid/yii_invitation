<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "salam".
 *
 * @property int $id_salam
 * @property string $judul
 * @property string $deskripsi
 * @property string $surat
 * @property string $created_at
 */
class Salam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi', 'surat'], 'required'],
            [['deskripsi'], 'string'],
            [['created_at'], 'safe'],
            [['judul', 'surat'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_salam' => 'Id Salam',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'surat' => 'Surat',
            'created_at' => 'Created At',
        ];
    }
}
