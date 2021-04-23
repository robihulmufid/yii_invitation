<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Salam */

$this->title = 'Create Salam';
$this->params['breadcrumbs'][] = ['label' => 'Salams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
