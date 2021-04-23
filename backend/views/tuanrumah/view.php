<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TuanRumah */

$this->title = $model->id_tuan;
$this->params['breadcrumbs'][] = ['label' => 'Tuan Rumahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tuan-rumah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tuan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tuan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_tuan',
            'nama_pria',
            'nickname_pria',
            'deskripsi_pria:ntext',
            'orangtua_pria',
            'alamat_pria:ntext',
            'nama_pasangan',
            'nickname_wanita',
            'deskripsi_wanita:ntext',
            'orangtua_wanita',
            'alamat_wanita:ntext',
            'koordinat_pria:ntext',
            'koordinat_wanita:ntext',
            'tanggal_akad',
            'waktu_akad',
            'tanggal_resepsi',
            'waktu_resepsi',
            'created_at',
        ],
    ]) ?>

</div>
