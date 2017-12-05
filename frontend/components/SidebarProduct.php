<?php
namespace frontend\components;
use frontend\models\Products;

use yii\base\Widget;

Class SidebarProduct extends Widget{
    public function run(){
        $products = Products::find()->limit(5)->with('image')->all();
        return $this->render('sidebar-product', compact('products'));
    }
}