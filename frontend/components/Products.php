<?php
namespace frontend\components;

use Yii;
use yii\base\Widget;
use frontend\models\Products as Product;

Class Products extends Widget{
    public function run(){
        $model = Product::find()->with('image', 'comments')->all();
        return $this->render('products', compact('model'));
    }
}