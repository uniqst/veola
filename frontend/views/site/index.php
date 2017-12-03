<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<?= \frontend\components\Slider::widget();?>


<div class="row">

    <div class="col s12 m4 l3">
        <?=\frontend\components\SidebarProduct::widget()?>

        <?=\frontend\components\Category::widget()?>

        <?=\frontend\components\SidebarProduct::widget()?>
    </div>

    <div class="col s12 m8 l9">

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
                <a href="#">СПИСОК ИНТЕРНЕТ МАГАЗИНОВ РАБОТАЮЩИХ С НАМИ</a>
            </span>
        </p>


        <div class="row">

            <div class="product-filter"></div>

            <div class="col s12 m6 l4">
                <div class="product-item-index">
                    <a href="#">
                        <p class="new-priduct">NEW</p>
                        <img style="width: 100%" src="http://www.veola.com.ua/components/com_jshopping/files/img_categories/bfbfa7f356ff8c524e541f1726070134.jpg">
                    </a>
                    <a class="priduct-title-index" href="#" title="Title text text andrey text text tex">
                        Title text text andrey text text text
                        Title text text andrey text text text
                        Title text text andrey text text text
                    </a>
                    <p class="price-index">
                        1000 UH<br>
                        <span class="old-price-index">Old price: <span class="crossed">500 UH</span></span>
                    </p>

                    <p style="float: left">* * * * * </p>
                    <p style="float: right" class="">Отзывов (ХХХ)</p>

                    <div class="clearfix"></div>

                    <p class="product-discription-index">
                        Описание
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam dolorum explicabo fugiat, impedit molestiae repellat saepe similique? Delectus doloribus earum explicabo, facere ipsam modi neque nisi obcaecati vero vitae?
                    </p>

                    <div class="clearfix"></div>
                    <a class="product-detail" style="float: left" href="#">Подробнее</a>
                    <a class="add-to-cart" href="#">+</a>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="product-item-index">
                    <a href="#">
                        <img style="width: 100%" src="http://www.veola.com.ua/components/com_jshopping/files/img_categories/bfbfa7f356ff8c524e541f1726070134.jpg">
                    </a>
                    <a class="priduct-title-index" href="#">
                        Title text text andrey text text text
                        Title text text andrey text text text
                        Title text text andrey text text text
                    </a>
                    <p class="price-index">
                        1000 UH<br>
                        <span class="old-price-index">Old price: <span class="crossed">500 UH</span></span>
                    </p>

                    <p style="float: left">* * * * * </p>
                    <p style="float: right" class="">Отзывов (ХХХ)</p>

                    <div class="clearfix"></div>

                    <p class="product-discription-index">
                        Описание
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam dolorum explicabo fugiat, impedit molestiae repellat saepe similique? Delectus doloribus earum explicabo, facere ipsam modi neque nisi obcaecati vero vitae?
                    </p>

                    <div class="clearfix"></div>
                    <a class="product-detail" style="float: left" href="#">Подробнее</a>
                    <a class="add-to-cart" href="#">+</a>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="product-item-index">
                    <a href="#">
                        <img style="width: 100%" src="http://www.veola.com.ua/components/com_jshopping/files/img_categories/bfbfa7f356ff8c524e541f1726070134.jpg">
                    </a>
                    <a class="priduct-title-index" href="#">
                        Title text text andrey text text text
                        Title text text andrey text text text
                        Title text text andrey text text text
                    </a>
                    <p class="price-index">
                        1000 UH<br>
                        <span class="old-price-index">Old price: <span class="crossed">500 UH</span></span>
                    </p>

                    <p style="float: left">* * * * * </p>
                    <p style="float: right" class="">Отзывов (ХХХ)</p>

                    <div class="clearfix"></div>

                    <p class="product-discription-index">
                        Описание
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam dolorum explicabo fugiat, impedit molestiae repellat saepe similique? Delectus doloribus earum explicabo, facere ipsam modi neque nisi obcaecati vero vitae?
                    </p>

                    <div class="clearfix"></div>
                    <a class="product-detail" style="float: left" href="#">Подробнее</a>
                    <a class="add-to-cart" href="#">+</a>
                </div>
            </div>

            <div class="product-filter"></div><!--каждые 3 блока для компа-->

        </div><!--row-->



    </div><!--col s8-->
</div><!--row-->

