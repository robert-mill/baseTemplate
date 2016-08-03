<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Stories */

$this->title = 'Update Stories: ' . $model->story_id;
$this->params['breadcrumbs'][] = ['label' => 'Stories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->story_id, 'url' => ['view', 'id' => $model->story_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
