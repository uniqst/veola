<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
            <a href="#" class="brand-logo"><img src="../img/nav-img/logo.png"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul style="margin-left: 170px;" class="left hide-on-med-and-down nav-ul">
                <li><a class="active" href="<?=Url::to(['/'])?>">Главная</a></li>
                <li><a href="<?=Url::to(['/products'])?>">Товары</a></li>
                <li><a href="<?=Url::to(['/where-buy'])?>">Где купить</a></li>
                <li><a href="<?=Url::to(['/intstuctions'])?>">Инструкции</a></li>
                <li><a href="<?=Url::to(['/guarantees'])?>">Гарантии</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="<?=Url::to(['/'])?>">Главная</a></li>
                <li><a href="<?=Url::to(['/products'])?>">Товары</a></li>
                <li><a href="<?=Url::to(['/where-buy'])?>">Где купить</a></li>
                <li><a href="<?=Url::to(['/intstuctions'])?>">Инструкции</a></li>
                <li><a href="<?=Url::to(['/guarantees'])?>">Гарантии</a></li>

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
        <p class="text-center">Разработано на коленке у АндреЙя</p>
    </footer>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
