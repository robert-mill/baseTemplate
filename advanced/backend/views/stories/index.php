<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stories-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Stories', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'story_id',
            'page_id_fk',
            'story_title',
            'story_subtitle',
            'story_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
