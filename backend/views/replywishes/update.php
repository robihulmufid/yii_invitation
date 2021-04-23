<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ReplyWishes */

$this->title = 'Update Reply Wishes: ' . $model->id_reply;
$this->params['breadcrumbs'][] = ['label' => 'Reply Wishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_reply, 'url' => ['view', 'id' => $model->id_reply]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reply-wishes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
