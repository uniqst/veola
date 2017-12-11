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

<div class="wrap container z-depth-3" style="padding: 0;">

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

            <ul id="slide-out" class="side-nav">
                <li><a href="<?=Url::to(['/'])?>">Главная</a></li>
                <li><a href="<?=Url::to(['/products'])?>">Товары</a></li>
                <li><a href="<?=Url::to(['/where-buy'])?>">Где купить</a></li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a style="padding: 0 32px;" class="collapsible-header"><i style="margin: 0px" class="material-icons">arrow_drop_down</i>Инструкции</a>
                            <div class="collapsible-body">
                                <ul style=" padding-left: 30px;">
                                    <?php foreach($inst as $i):?>
                                        <li><a style="overflow: hidden;" href="<?=Url::to(['/instructions', 'id' => $i->id, 'name' => $i->title])?>"><?=$i->title?></a></li>
                                    <?php endforeach;?>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href="<?=Url::to(['/guarantees'])?>">Гарантии</a></li>
                <li><a href="#" onclick="return getCart()">Корзина</a></li>
                <li>
                123
                <form>
                <select>
                    <option value="grn">Гривна</option>
                    <option value="usd">Доллар</option>
                    <option value="eur">Евро</option>
                </select>
                </form>
                </li>
                <li><div class="product-filter"></div></li>
                <li>
                    <div style="padding: 0 32px;">
                        <?=\frontend\components\Category::widget()?>
                    </div>
                </li>

            </ul>
            <ul style="margin-left: 170px" class="hide-on-med-and-down">
                <li><a class="active" href="<?=Url::to(['/'])?>">Главная</a></li>
                <li><a href="<?=Url::to(['/products'])?>">Товары</a></li>
                <li><a href="<?=Url::to(['/where-buy'])?>">Где купить</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Инструкции 🠻</a></li>
                    <ul id='dropdown1' class='dropdown-content'>
                        <?php foreach($inst as $i):?>
                        <li><a href="<?=Url::to(['/instructions', 'id' => $i->id, 'name' => $i->title])?>"><?=$i->title?></a></li>
                        <?php endforeach;?>
                    </ul>
                <li><a href="<?=Url::to(['/guarantees'])?>">Гарантии</a></li>
                <li><a href="#" onclick="return getCart()">Корзина</a></li>
             
            </ul>
            <style>
                .retes{
                   background
                }
            </style>
            
            <a style="float:right;" class="dropdown-button money-select-btn" href="#!" data-activates="dropdown2">UAH ₴ 🠻</a>

                <ul id='dropdown2' class='dropdown-content money-select-dropdown' style="float: right; padding: 15px;">
                    <li class="rates btn <?php if(Yii::$app->session['rates'] == 'grn' or empty(Yii::$app->session['rates'])) echo 'active'?>"><a style="border: none;" href="<?= Url::to(['/site/exchange', 'rate' => 'grn'])?>">UAH ₴</a></li>
                    <li class="rates btn <?php if(Yii::$app->session['rates'] == 'usd') echo 'active'?>"><a style="border: none;" href="<?= Url::to(['/site/exchange', 'rate' => 'usd'])?>">USD $</a></li>
                    <li class="rates btn <?php if(Yii::$app->session['rates'] == 'eur') echo 'active'?>"><a style="border: none;" href="<?= Url::to(['/site/exchange', 'rate' => 'eur'])?>">EUR €</a></li>
                </ul>

            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            
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



        <p class="text-center">Разработано <a href="http://uniq-st.com/" target="_blank" style="color: gold">Uniq Studio Team</a></p>
    </footer>
</div>

<script>
  window.LiqPayCheckoutCallback = function() {
    LiqPayCheckout.init({
      data:"eyAidmVyc2lvbiIgOiAzLCAicHVibGljX2tleSIgOiAieW91cl9wdWJsaWNfa2V5IiwgImFjdGlv" + 
           "biIgOiAicGF5IiwgImFtb3VudCIgOiAxLCAiY3VycmVuY3kiIDogIlVTRCIsICJkZXNjcmlwdGlv" + 
           "biIgOiAiZGVzY3JpcHRpb24gdGV4dCIsICJvcmRlcl9pZCIgOiAib3JkZXJfaWRfMSIgfQ==",
      signature: "QvJD5u9Fg55PCx/Hdz6lzWtYwcI=",
      embedTo: "#liqpay_checkout",
      mode: "embed" // embed || popup,
       }).on("liqpay.callback", function(data){
			console.log(data.status);
			console.log(data);
			}).on("liqpay.ready", function(data){
				// ready
			}).on("liqpay.close", function(data){
				// close
		});
  };
</script>
<script src="//static.liqpay.ua/libjs/checkout.js" async></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
