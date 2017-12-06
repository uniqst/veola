<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Modal;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\Instructions;
$inst = Instructions::find()->all();

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap container z-depth-3">
    <div class="top-div">
        <p class="hide-on-med-and-down">
            Позвонить: 099-536-24-75 e-mail:
            <a href="#">
                veola12@ukr.net
            </a>
        </p>
    </div>
    <nav>
        <div class="nav-wrapper">
            <a href="<?=Url::to(['/'])?>" class="brand-logo"><img src="/img/nav-img/logo.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul style="margin-left: 170px;" class="left hide-on-med-and-down nav-ul">
                <li><a class="active" href="<?=Url::to(['/'])?>">Главная</a></li>
                <li><a href="<?=Url::to(['/products'])?>">Товары</a></li>
                <li><a href="<?=Url::to(['/where-buy'])?>">Где купить</a></li>

                <li><!-- Dropdown Trigger -->
                    <a class='dropdown-button' href='#' data-activates='dropdown1'>Инструкции</a>
                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                        <?php foreach($inst as $i):?>
                            <li><a href="<?=Url::to(['/instructions', 'id' => $i->id, 'name' => $i->title])?>"><?=$i->title?></a></li>
                        <?php endforeach;?>
                    </ul>
                </li>
                <li><a href="<?=Url::to(['/guarantees'])?>">Гарантии</a></li>
                <li><a href="#" onclick="return getCart()"><i class="material-icons">shopping_cart</i></a></li>


            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="<?=Url::to(['/'])?>">Главная</a></li>
                <li><a href="<?=Url::to(['/products'])?>">Товары</a></li>
                <li><a href="<?=Url::to(['/where-buy'])?>">Где купить</a></li>
                <li><a href="<?=Url::to(['/intstuctions'])?>">Инструкции</a></li>
                <li><a href="<?=Url::to(['/guarantees'])?>">Гарантии</a></li>
                <li><a href="#" onclick="return getCart()">Корзина</a></li>
            </ul>
        </div>
    </nav>


    <div style="margin-top: 20px;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

    <footer>

<?php
Modal::begin([
        'options' => [
              'class' => 'scroll-custom'
        ],
    'header' => '<h2>Корзина</h2>',
    'id' => 'cart',
    'footer' => '<button type="button" class="button" data-dismiss="modal">Продолжить</button>
        <button class="button"> 
             <a href="' . Url::to(['cart/view']) . '"  class="button">Оформить заказ</a>
        </button>
        <button type="button" class="button" onclick="clearCart()">Очистить</button>'
    ]);
Modal::end();

?>








        <p class="text-center">Разработано на коленке у АндреЙя</p>
    </footer>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
