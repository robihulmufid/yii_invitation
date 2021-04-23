<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TuanRumahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tuan Rumahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuan-rumah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tuan Rumah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tuan',
            'nama_pria',
            'nickname_pria',
            'deskripsi_pria:ntext',
            'orangtua_pria',
            //'alamat_pria:ntext',
            //'nama_pasangan',
            //'nickname_wanita',
            //'deskripsi_wanita:ntext',
            //'orangtua_wanita',
            //'alamat_wanita:ntext',
            //'koordinat_pria:ntext',
            //'koordinat_wanita:ntext',
            //'tanggal_akad',
            //'waktu_akad',
            //'tanggal_resepsi',
            //'waktu_resepsi',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
