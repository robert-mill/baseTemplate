<?php
use backend\models\Stories;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Story_sub_sections */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="story-sub-sections-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'story_id_fk')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Stories::find()->All(), 'story_id', 'story_title' ),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a Story'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]);?>



    <?= $form->field($model, 'story_sub_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
