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

<div class="wrap">

    <nav>
        <div class="nav-wrapper container" style="max-width: 900px;">
            <a href="#!" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?=Url::to(['/'])?>">Главная</a></li>
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



    <div class="container z-depth-3" style="max-width: 980px;position: relative; margin: auto;top:50px">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
