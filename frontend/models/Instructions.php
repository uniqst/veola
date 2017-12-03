<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "instructions".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 */
class Instructions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instructions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['title'], 'string', 'max' => 255],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '#',
            'title' => 'Титул',
            'content' => 'Контент',
        ];
    }
}
