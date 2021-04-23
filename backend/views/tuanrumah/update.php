<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TuanRumah */

$this->title = 'Update Tuan Rumah: ' . $model->id_tuan;
$this->params['breadcrumbs'][] = ['label' => 'Tuan Rumahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tuan, 'url' => ['view', 'id' => $model->id_tuan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tuan-rumah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
