<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $title
 * @property string $name
 * @property string $description
 * @property string $description_product
 * @property string $content
 * @property string $img
 * @property integer $price
 * @property integer $old_price
 * @property string $created_at
 * @property string $updated_at
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
            [['title', 'name', 'description', 'description_product', 'content', 'price'], 'required'],
            [['price', 'old_price'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'name', 'img'], 'string', 'max' => 255],
            [['imageFiles'], 'file', 'maxFiles' => 5],
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
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'description_product' => Yii::t('app', 'Description Product'),
            'content' => Yii::t('app', 'Content'),
            'img' => Yii::t('app', 'Img'),
            'price' => Yii::t('app', 'Price'),
            'old_price' => Yii::t('app', 'Old Price'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public function getComments(){
        return $this->hasMany(Comments::className(), ['product_id' => 'id']);
    }
}
