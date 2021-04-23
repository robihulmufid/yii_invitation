<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Doa */

$this->title = 'Update Doa: ' . $model->id_doa;
$this->params['breadcrumbs'][] = ['label' => 'Doas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_doa, 'url' => ['view', 'id' => $model->id_doa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="doa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
