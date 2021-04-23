<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TuanRumah */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tuan-rumah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname_pria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_pria')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'orangtua_pria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_pria')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nama_pasangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname_wanita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_wanita')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'orangtua_wanita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_wanita')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'koordinat_pria')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'koordinat_wanita')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_akad')->textInput() ?>

    <?= $form->field($model, 'waktu_akad')->textInput() ?>

    <?= $form->field($model, 'tanggal_resepsi')->textInput() ?>

    <?= $form->field($model, 'waktu_resepsi')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
