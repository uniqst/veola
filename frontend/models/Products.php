<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $description_product
 * @property string $content
 * @property string $img
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    public $imageFiles;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'description_product', 'content', 'img'], 'required'],
            [['imageFiles'], 'file', 'maxFiles' => 4],
            [['title', 'img'], 'string', 'max' => 255],
            [['description', 'description_product'], 'string', 'max' => 500],
            [['content'], 'string', 'max' => 10000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'description_product' => Yii::t('app', 'Description Product'),
            'content' => Yii::t('app', 'Content'),
            'img' => Yii::t('app', 'Img'),
        ];
    }
}
