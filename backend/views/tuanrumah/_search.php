<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TuanRumahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuan-rumah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tuan') ?>

    <?= $form->field($model, 'nama_pria') ?>

    <?= $form->field($model, 'nickname_pria') ?>

    <?= $form->field($model, 'deskripsi_pria') ?>

    <?= $form->field($model, 'orangtua_pria') ?>

    <?php // echo $form->field($model, 'alamat_pria') ?>

    <?php // echo $form->field($model, 'nama_pasangan') ?>

    <?php // echo $form->field($model, 'nickname_wanita') ?>

    <?php // echo $form->field($model, 'deskripsi_wanita') ?>

    <?php // echo $form->field($model, 'orangtua_wanita') ?>

    <?php // echo $form->field($model, 'alamat_wanita') ?>

    <?php // echo $form->field($model, 'koordinat_pria') ?>

    <?php // echo $form->field($model, 'koordinat_wanita') ?>

    <?php // echo $form->field($model, 'tanggal_akad') ?>

    <?php // echo $form->field($model, 'waktu_akad') ?>

    <?php // echo $form->field($model, 'tanggal_resepsi') ?>

    <?php // echo $form->field($model, 'waktu_resepsi') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
