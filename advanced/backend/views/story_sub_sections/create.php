<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Story_sub_sections */

$this->title = 'Create Story Sub Sections';
$this->params['breadcrumbs'][] = ['label' => 'Story Sub Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="story-sub-sections-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
