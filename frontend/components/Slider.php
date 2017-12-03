<?php
namespace frontend\components;

use yii\base\Widget;
use frontend\models\Slider as Slide;

Class Slider extends Widget{
    public function run(){
        $slide = Slide::find()->all();
        return $this->render('slider', compact('slide'));
    }
}