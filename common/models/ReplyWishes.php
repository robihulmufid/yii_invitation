<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reply_wishes".
 *
 * @property int $id_reply
 * @property string $nama
 * @property int $id_wishes
 * @property string $ucapan
 * @property string $created_at
 */
class ReplyWishes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reply_wishes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'id_wishes', 'ucapan'], 'required'],
            [['id_wishes'], 'integer'],
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
            'id_reply' => 'Id Reply',
            'nama' => 'Nama',
            'id_wishes' => 'Id Wishes',
            'ucapan' => 'Ucapan',
            'created_at' => 'Created At',
        ];
    }
}
