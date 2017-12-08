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
    public $rating;

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
            [['imageFiles'], 'file', 'maxFiles' => 20],
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
            'category_id' => Yii::t('app', 'Категории'),
            'title' => Yii::t('app', 'Титул'),
            'name' => Yii::t('app', 'Имя'),
            'description' => Yii::t('app', 'Описание сверху'),
            'description_product' => Yii::t('app', 'Характеристики'),
            'content' => Yii::t('app', 'Описание'),
            'price' => Yii::t('app', 'Цена'),
            'old_price' => Yii::t('app', 'Старая цена'),
            'created_at' => Yii::t('app', 'Создано'),
            'updated_at' => Yii::t('app', 'Отредактировано'),
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
