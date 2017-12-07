<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $img
 * @property string $name
 * @property string $description
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    public $imageFile;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img', 'name'], 'required'],
            [['description'], 'string'],
            [['img', 'name'], 'string', 'max' => 255],
            [['imageFile'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '#',
            'img' => 'Фото',
            'name' => 'Название',
            'description' => 'Описание',
            'imageFile' => 'Фото'
        ];
    }

    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['category_id' => 'id']);
    }
}
