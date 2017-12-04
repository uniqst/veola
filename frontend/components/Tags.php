<?php
namespace frontend\components;

use yii\base\Widget;
use frontend\models\Products;

Class Tags extends Widget{
    public function run(){
        $model = Products::find()->limit(10)->all();
        return $this->render('tags', compact('model'));
    }
}