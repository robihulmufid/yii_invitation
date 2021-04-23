<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ReplyWishes */

$this->title = 'Create Reply Wishes';
$this->params['breadcrumbs'][] = ['label' => 'Reply Wishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reply-wishes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
