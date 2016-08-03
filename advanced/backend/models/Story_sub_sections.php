<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "story_sub_sections".
 *
 * @property integer $id
 * @property integer $story_id_fk
 * @property string $story_sub_title
 * @property string $body_text
 */
class Story_sub_sections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'story_sub_sections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['story_id_fk'], 'required'],
            [['story_id_fk'], 'integer'],
            [['body_text'], 'string'],
            [['story_sub_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'story_id_fk' => 'Story Id Fk',
            'story_sub_title' => 'Story Sub Title',
            'body_text' => 'Body Text',
        ];
    }
}
