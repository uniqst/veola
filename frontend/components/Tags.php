<?php
namespace frontend\components;

use yii\base\Widget;

Class Tags extends Widget{
    public function run(){
        return $this->render('tags');
    }
}