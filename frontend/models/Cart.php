<?php

namespace frontend\models;

use frontend\models\Products;
use frontend\models\Cart;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property integer $id
 * @property integer $qty
 * @property string $name
 * @property double $price
 * @property string $img
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
   

    public function addToCart($product, $qty = 1){
        if(isset($_SESSION['cart'][$product->id])){
            $_SESSION['cart'][$product->id]['qty'] += $qty;
        }else{
            $_SESSION['cart'][$product->id] = [
                'qty' => $qty,
                'name' => $product->name,
                'price' => $product->price,
                'img' => $product->img
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;

        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $product->price : $qty * $product->price;
    }
}
