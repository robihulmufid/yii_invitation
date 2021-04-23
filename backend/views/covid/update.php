<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Covid */

$this->title = 'Update Covid: ' . $model->id_covid;
$this->params['breadcrumbs'][] = ['label' => 'Covids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_covid, 'url' => ['view', 'id' => $model->id_covid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="covid-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
