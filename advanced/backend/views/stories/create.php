<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Stories */

$this->title = 'Create Stories';
$this->params['breadcrumbs'][] = ['label' => 'Stories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
