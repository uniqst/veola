<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $qty
 * @property double $sum
 * @property string $status
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 */
class Order extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'address', 'delivery', 'address_delivery'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['qty'], 'integer'],
            [['sum'], 'number'],
            [['status', 'pay'], 'boolean'],
            [['name', 'email', 'phone', 'address', 'delivery', 'address_delivery'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('app', 'Имя'),
            'created_at' => Yii::t('app', 'Создан'),
            'updated_at' => Yii::t('app', 'Редактирован'),
            'qty' => Yii::t('app', 'Количество'),
            'sum' => Yii::t('app', 'Сумма'),
            'status' => Yii::t('app', 'Статус'),
            'pay' => Yii::t('app', 'Оплата'),
            'email' => Yii::t('app', 'E-mail'),
            'phone' => Yii::t('app', 'Телефон'),
            'address' => Yii::t('app', 'Адрес'),
            'delivery' => Yii::t('app', 'Способ доставки'),
            'address_delivery' => Yii::t('app', 'Адрес отделения'),
        ];
    }

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

    public function getOrderItems(){
        return $this->hasMany(OrderItems::className(), ['order_id' => 'id']);
    }
}
