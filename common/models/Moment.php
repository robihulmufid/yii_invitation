<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "moment".
 *
 * @property int $id_moment
 * @property string $judul
 * @property string $deskripsi
 * @property string $ig
 * @property string $fb
 * @property string $created_at
 */
class Moment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'moment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi', 'ig', 'fb'], 'required'],
            [['deskripsi'], 'string'],
            [['created_at'], 'safe'],
            [['judul', 'ig', 'fb'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_moment' => 'Id Moment',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'ig' => 'Ig',
            'fb' => 'Fb',
            'created_at' => 'Created At',
        ];
    }
}
