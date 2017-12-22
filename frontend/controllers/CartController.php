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

            $message = Yii::$app->mailer->compose()
            ->setFrom($order->email)
            ->setTo('zac95zua@gmail.com')
            ->setSubject('Веола - новый заказ')
            ->setTextBody('
                name: '.$order->name.'
                email: '.$order->email.'
                phone: '.$order->phone.'
                address: '.$order->address
                );
        $message->send();

            if($order->save()){
                $this->saveOrderItems($session['cart'], $order->id);
               
                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                // return $this->refresh();
                return $this->redirect(['/cart/pay', 'id' => $order->id]);
            }
        }
        return $this->render('view', compact('session', 'order'));
    }

    public function beforeAction($action) {
        $this->enableCsrfValidation = ($action->id !== "ДЕЙСТВИЕ"); 
        return parent::beforeAction($action);
    }

    public function actionCallback(){
        $sign = base64_encode( sha1( 
            $private_key .  
            $data . 
            $private_key 
            , 1 ));
            $data = json_decode(base64_decode(Yii::$app->request->post('data')), true);
            $model = Order::findOne($data['dae']);
            $model->pay = 1;
            $model->save();           
               
            
        return $this->render('callback', compact('data'));
    }

    public function actionPay($id)
    {
        $model = Order::findOne($id);
        return $this->render('pay', compact('model'));
    }
    protected function saveOrderItems($items, $order_id){
        foreach($items as $id => $item){
            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['qty'];
            $order_items->sum_item = $item['qty'] * $item['price'];
            $order_items->save();
        }
    }

}
