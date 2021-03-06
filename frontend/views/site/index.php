<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<?= \frontend\components\Slider::widget();?>


<div class="row">

    <div class="col l3 hide-on-med-and-down">
        <p class="text-center widget-title">ПОПУЛЯРНЫЕ ТОВАРЫ</p>
        <?=\frontend\components\SidebarProduct::widget(['products' => true])?>

        <?=\frontend\components\Category::widget()?>

        <p class="text-center widget-title">НОВЫЕ ТОВАРЫ</p>
        <?=\frontend\components\SidebarProduct::widget()?>
    </div>

    <div class="col s12 m12 l9">

        <h2 class="title-h2" style="color:#000;">Купить велосипед</h2>

        <p class="text-box">
            Велосипед с двигателем – это новое слово в велосипедном производстве. Электро ВЕЛОСИПЕД – экологически чистый вид транспорта, т.к. используется электродвигатель. Для управления электровелосипедом не требуется ни ежегодное прохождение техосмотра, ни страховка, ни наличие прав, как для других видов транспорта. Велосипед с электромотором могут использовать люди всех возрастных категорий. С электровелосипедом подъемы на любые горки теперь не проблема, а если аккумулятор разрядится во время вашего пути, Вы доедете, просто крутя педали как на обычном велосипеде.
            <br>
            <span class="heavy-text-span">
                 Электровелосипед - это один из самых доступных видов гибридного транспорта на сегодня.
            </span>
        </p>


        <p class="text-box text-center" style="color:#000;">
            <span class="heavy-text-span">
                *ВСЕ ЦЕНЫ, УКАЗАННЫ КАК РЕКОМЕНДУЕМАЯ ДЛЯ РОЗНИЧНОЙ ПРОДАЖИ. В ИНТЕРНЕТ МАГАЗИНАХ, ЦЕНЫ НА ПРОДУКЦИЮ МОГУТ КОЛЕБАТЬСЯ В РАЗУМНЫХ ПРЕДЕЛАХ. МЫ ТАК ЖЕ ПРЕДОСТАВЛЯЕМ
                <a href="http://veola.kiev.ua/pages?alias=where_buy%3F">СПИСОК ИНТЕРНЕТ МАГАЗИНОВ РАБОТАЮЩИХ С НАМИ</a>
            </span>
        </p>


        <?=\frontend\components\Products::widget();?>


    </div><!--col s8-->
</div><!--row-->

