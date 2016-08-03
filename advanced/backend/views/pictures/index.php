<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PicturesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pictures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pictures-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pictures', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'story_sub_section_id_fk',
            'image',
            'alt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
