<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TuanRumah */

$this->title = 'Create Tuan Rumah';
$this->params['breadcrumbs'][] = ['label' => 'Tuan Rumahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuan-rumah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
