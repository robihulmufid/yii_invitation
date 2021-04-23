<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ucapan */

$this->title = 'Update Ucapan: ' . $model->id_ucapan;
$this->params['breadcrumbs'][] = ['label' => 'Ucapans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ucapan, 'url' => ['view', 'id' => $model->id_ucapan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ucapan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
