<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "exchange_rates".
 *
 * @property integer $id
 * @property double $grn
 * @property double $eur
 */
class ExchangeRates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exchange_rates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grn', 'eur'], 'required'],
            [['grn', 'eur'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'grn' => 'Grn',
            'eur' => 'Eur',
        ];
    }
}
