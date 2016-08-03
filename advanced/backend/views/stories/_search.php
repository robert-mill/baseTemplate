<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StoriesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stories-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'story_id') ?>

    <?= $form->field($model, 'page_id_fk') ?>

    <?= $form->field($model, 'story_title') ?>

    <?= $form->field($model, 'story_subtitle') ?>

    <?= $form->field($model, 'story_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
