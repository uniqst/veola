<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Products;
use frontend\models\Cart;
use frontend\models\Order;
use frontend\models\OrderItems;
use frontend\models\ExchangeRates;
use frontend\models\Contacts;


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
        $model = ExchangeRates::findOne(1);
        $session =Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', compact('session', 'model'));
    }

    public function actionView(){
        $model = ExchangeRates::findOne(1);
        $session =Yii::$app->session;
        $session->open();
        $order = new Order();
        if($order->load(Yii::$app->request->post()) ){
            $order->qty = $session['cart.qty'];
            $order->sum = round($session['cart.sum'] * $model->grn, 0);

            

            if($order->save()){
                $this->saveOrderItems($session['cart'], $order->id);
               
                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                // return $this->refresh();
                return $this->redirect(['/cart/pay', 'id' => $order->id]);
            }
        }
        return $this->render('view', compact('session', 'order', 'model'));
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
        $rates = ExchangeRates::findOne(1);
        $model = Order::findOne($id);
        $contacts = Contacts::findOne(1);

        mail($contacts->email , "VEOLA - новый заказ", "Имя: $model->name". 
        "\n" . "Почта: $model->email" . 
        "\n" . "Телефон: $model->phone". 
        "\n" . "Адрес: $model->address");
        

        return $this->render('pay', compact('model', 'rates'));
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
