<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $name
 * @property string $email
 * @property string $content
 * @property integer $rating
 * @property string $created_at
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'name', 'email', 'content'], 'required'],
            [['product_id', 'rating'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'email'], 'string', 'max' => 50],
            [['content'], 'string', 'max' => 500],
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
            'name' => 'Name',
            'email' => 'Email',
            'content' => 'Content',
            'rating' => 'Rating',
            'created_at' => 'Created At',
        ];
    }
}