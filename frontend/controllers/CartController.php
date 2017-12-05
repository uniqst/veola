<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Products;
use frontend\models\Cart;
use frontend\models\Order;
use frontend\models\OrderItems;


/**
 * Site controller
 */
class CartController extends Controller
{
    public function actionAdd()
    {
        $id=Yii::$app->request->get('id');
        $qty=(int)Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;
        $product = Products::find()->where(['id' => $id])->with('image')->one();
        if(empty($product)) return false;
        $session =Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product, $qty);
        if ( !Yii::$app->request->isAjax){
            return $this->redirect(Yii::$app->request->referrer);
        }
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionClear(){
        $session =Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionDelItem(){
        $id = Yii::$app->request->get('id');
        $session =Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionShow(){
        $session =Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

    public function actionView(){
        $session =Yii::$app->session;
        $session->open();
        $order = new Order();
        if($order->load(Yii::$app->request->post()) ){
            $order->qty = $session['cart.qty'];
            $order->sum = $session['cart.sum'];
            if($order->save()){
                Yii::$app->session->setFlash('success', 'Ваш заказ принят.');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Ошибка оформления заказа');
            }
        }
        return $this->render('view', compact('session', 'order'));
    }

}
