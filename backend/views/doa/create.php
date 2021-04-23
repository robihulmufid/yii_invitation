<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Doa */

$this->title = 'Create Doa';
$this->params['breadcrumbs'][] = ['label' => 'Doas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
