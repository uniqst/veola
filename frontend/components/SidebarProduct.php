<?php
namespace frontend\components;

use yii\base\Widget;

Class SidebarProduct extends Widget{
    public function run(){
        return $this->render('sidebar-product');
    }
}