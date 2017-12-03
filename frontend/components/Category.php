<?php
namespace frontend\components;

use yii\base\Widget;
use frontend\models\Category as Cat;

Class Category extends Widget{
    public function run(){
        $model = Cat::find()->all();
        return $this->render('category', compact('model'));
    }
}