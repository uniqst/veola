<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property int $product_id
 * @property int $group_id
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'group_id'], 'required'],
            [['product_id', 'group_id'], 'integer'],
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
            'group_id' => 'Group ID',
        ];
    }

    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'group_id']);
    }
}
