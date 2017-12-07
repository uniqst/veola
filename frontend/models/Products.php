<?php

namespace frontend\models;
use yii\db\Expression;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
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
 * @property integer $price
 * @property integer $old_price
 * @property string $created_at
 * @property string $updated_at
 */
class Products extends ActiveRecord
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

    public function behaviors(){
        return [
        [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];        
                
    }


    public function rules()
    {
        return [
            [['title', 'name', 'description', 'description_product', 'content', 'price', 'category_id'], 'required'],
            [['price', 'old_price', 'category_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],

            [['title', 'name',], 'string', 'max' => 255],
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
            'price' => Yii::t('app', 'Price'),
            'old_price' => Yii::t('app', 'Old Price'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['product_id' => 'id']);
    }

    public function getPhoto()
    {
        return $this->hasMany(Photo::className(), ['product_id' => 'id']);
    }

    public function getImage()
    {
        return $this->hasOne(Photo::className(), ['product_id' => 'id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
