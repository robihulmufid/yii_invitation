<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ucapan */

$this->title = 'Create Ucapan';
$this->params['breadcrumbs'][] = ['label' => 'Ucapans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ucapan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
