<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pictures".
 *
 * @property integer $id
 * @property integer $story_sub_section_id_fk
 * @property string $image
 * @property integer $alt
 */
class Pictures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pictures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['story_sub_section_id_fk', 'image', 'alt'], 'required'],
            [['story_sub_section_id_fk', 'alt'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'story_sub_section_id_fk' => 'Story Sub Section Id Fk',
            'image' => 'Image',
            'alt' => 'Alt',
        ];
    }
}
