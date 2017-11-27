<?php
namespace frontend\components;

use yii\base\Widget;

Class Category extends Widget{
    public function run(){
        return $this->render('category');
    }
}