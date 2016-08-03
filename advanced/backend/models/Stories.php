<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stories".
 *
 * @property integer $story_id
 * @property integer $page_id_fk
 * @property string $story_title
 * @property string $story_subtitle
 * @property string $story_status
 */
class Stories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id_fk'], 'required'],
            [['page_id_fk'], 'integer'],
            [['story_status'], 'string'],
            [['story_title', 'story_subtitle'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'story_id' => 'Story ID',
            'page_id_fk' => 'Page Name',
            'story_title' => 'Story Title',
            'story_subtitle' => 'Story Subtitle',
            'story_status' => 'Story Status',
        ];
    }
}
