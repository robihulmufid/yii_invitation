<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Salam */

$this->title = 'Update Salam: ' . $model->id_salam;
$this->params['breadcrumbs'][] = ['label' => 'Salams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_salam, 'url' => ['view', 'id' => $model->id_salam]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="salam-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
