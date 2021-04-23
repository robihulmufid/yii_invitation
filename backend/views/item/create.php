<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ItemModel */

$this->title = 'Create Item Model';
$this->params['breadcrumbs'][] = ['label' => 'Item Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
