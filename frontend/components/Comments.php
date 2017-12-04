<?php
namespace frontend\components;

use yii\base\Widget;

Class Comments extends Widget{
    public function run(){
        return $this->render('comments');
    }
}