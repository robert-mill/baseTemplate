<?php

use backend\models\Pages;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Stories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stories-form">

    <?php $form = ActiveForm::begin(); ?>

  
    <?= $form->field($model, 'page_id_fk')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Pages::find()->All(), 'id', 'page_name' ),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a page'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]);?>
    <?= $form->field($model, 'story_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'story_subtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'story_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
