<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Story_sub_sections */

$this->title = 'Update Story Sub Sections: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Story Sub Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="story-sub-sections-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
