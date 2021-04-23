<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Moment */

$this->title = 'Update Moment: ' . $model->id_moment;
$this->params['breadcrumbs'][] = ['label' => 'Moments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_moment, 'url' => ['view', 'id' => $model->id_moment]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="moment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
