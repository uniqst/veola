<?php
namespace frontend\components;

use yii\base\Widget;

Class Slider extends Widget{
    public function run(){
        return $this->render('slider');
    }
}