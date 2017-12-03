<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property integer $id
 * @property string $position
 * @property string $title
 * @property string $description
 * @property string $photo
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }
    public $imageFile;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position', 'title', 'description'], 'required'],
            [['position', 'title', 'description', 'photo'], 'string', 'max' => 255],
            [['imageFile'], 'file'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position' => 'Position',
            'title' => 'Title',
            'description' => 'Description',
            'photo' => 'Photo',
        ];
    }
}
