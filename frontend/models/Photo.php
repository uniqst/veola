<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $img
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo';
    }

    public $imageFiles;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id'], 'required'],
            [['product_id'], 'integer'],
            [['imageFiles'], 'file', 'maxFiles' => 5],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'img' => 'Img',
        ];
    }
}
