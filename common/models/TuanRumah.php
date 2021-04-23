<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tuan_rumah".
 *
 * @property int $id_tuan
 * @property string $nama_pria
 * @property string $nickname_pria
 * @property string $deskripsi_pria
 * @property string $orangtua_pria
 * @property string $alamat_pria
 * @property string $nama_pasangan
 * @property string $nickname_wanita
 * @property string $deskripsi_wanita
 * @property string $orangtua_wanita
 * @property string $alamat_wanita
 * @property string $koordinat_pria
 * @property string $koordinat_wanita
 * @property string $tanggal_akad
 * @property string $waktu_akad
 * @property string $tanggal_resepsi
 * @property string $waktu_resepsi
 * @property string $created_at
 */
class TuanRumah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuan_rumah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pria', 'nickname_pria', 'deskripsi_pria', 'orangtua_pria', 'alamat_pria', 'nama_pasangan', 'nickname_wanita', 'deskripsi_wanita', 'orangtua_wanita', 'alamat_wanita', 'koordinat_pria', 'koordinat_wanita', 'tanggal_akad', 'waktu_akad', 'tanggal_resepsi', 'waktu_resepsi'], 'required'],
            [['deskripsi_pria', 'alamat_pria', 'deskripsi_wanita', 'alamat_wanita', 'koordinat_pria', 'koordinat_wanita'], 'string'],
            [['tanggal_akad', 'waktu_akad', 'tanggal_resepsi', 'waktu_resepsi', 'created_at'], 'safe'],
            [['nama_pria', 'nickname_pria', 'orangtua_pria', 'nama_pasangan', 'nickname_wanita', 'orangtua_wanita'], 'string', 'max' => 250],
            ['tanggal_resepsi', 'date', 'timestampAttribute' => 'tanggal_resepsi'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tuan' => 'Id Tuan',
            'nama_pria' => 'Nama Pria',
            'nickname_pria' => 'Nickname Pria',
            'deskripsi_pria' => 'Deskripsi Pria',
            'orangtua_pria' => 'Orangtua Pria',
            'alamat_pria' => 'Alamat Pria',
            'nama_pasangan' => 'Nama Pasangan',
            'nickname_wanita' => 'Nickname Wanita',
            'deskripsi_wanita' => 'Deskripsi Wanita',
            'orangtua_wanita' => 'Orangtua Wanita',
            'alamat_wanita' => 'Alamat Wanita',
            'koordinat_pria' => 'Koordinat Pria',
            'koordinat_wanita' => 'Koordinat Wanita',
            'tanggal_akad' => 'Tanggal Akad',
            'waktu_akad' => 'Waktu Akad',
            'tanggal_resepsi' => 'Tanggal Resepsi',
            'waktu_resepsi' => 'Waktu Resepsi',
            'created_at' => 'Created At',
        ];
    }
}
