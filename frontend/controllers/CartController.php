<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Products;
use frontend\models\Cart;


/**
 * Site controller
 */
class CartController extends Controller
{
    public function actionAdd()
    {
        $id=Yii::$app->request->get('id');
        $product = Products::find()->with('image')->one();
        if(empty($product)) return false;
        $session =Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product);
    }

}
