<?php
namespace frontend\components;
use frontend\models\Products;

use yii\base\Widget;
Class SidebarProduct extends Widget{
    public $products;
    public function run(){
        if($this->products) {
            $products = Products::find()
                ->select([
                    'products.*', // получить все атрибуты покупателя
                    'ceil(SUM(comments.rating) / COUNT(comments.rating) / 0.5) * 0.5 AS rating' // вычислить количество заказов
                ])
                ->joinWith('comments') // обеспечить построение промежуточной таблицы
                ->groupBy('products.id')
                ->orderBy(['rating' => SORT_DESC])
                ->limit(5)
                ->with('image')
                ->all();
                
        }else{
            $products = Products::find()->orderBy(['created_at' => SORT_DESC])->limit(5)->with('image')->all();
        }
        return $this->render('sidebar-product', compact('products'));
    }
}