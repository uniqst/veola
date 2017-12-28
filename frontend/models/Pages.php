<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property string $title
 * @property string $alias
 * @property string $name
 * @property string $H1
 * @property string $content
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'alias', 'name', 'H1', 'content'], 'required'],
            [['content'], 'string'],
            [['title', 'alias', 'name', 'H1'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Титул',
            'alias' => 'Алиас',
            'name' => 'Имя',
            'H1' => 'H1',
            'content' => 'Содержимое страницы',
        ];
    }
}
