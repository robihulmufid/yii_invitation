<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Wishes */

$this->title = 'Update Wishes: ' . $model->id_wishes;
$this->params['breadcrumbs'][] = ['label' => 'Wishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_wishes, 'url' => ['view', 'id' => $model->id_wishes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wishes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
