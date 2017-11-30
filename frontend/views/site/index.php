<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="slider" id="slider">
    <div class="slider-bottom-shadow"></div>

    <ul class="slider__container">
        <li class="slider__item is-active">
            <figure class="slider__itemImage" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-1_993_730.jpg);"></figure>
            <div class="slider__itemText">
                <h2 class="slider__itemTitle">У ВЛАДЕЛЬЦА<br>
                <span>электровелосипеда отсутствуют проблемы с пробками на дорогах</span></h2>
            </div>
        </li>
        <li class="slider__item">
            <figure class="slider__itemImage" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-2_993_730.jpg)"></figure>
            <div class="slider__itemText">
                <h2 class="slider__itemTitle">НА ЭЛЕКТРОВЕЛОСИПЕДЕ<br>
                <span>Вы можете ехать сразу, не тратя время на прогрев мотора.</span></h2>
            </div>
        </li>
        <li class="slider__item">
            <figure class="slider__itemImage" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-3_993_730.jpg)"></figure>
            <div class="slider__itemText">
                <h2 class="slider__itemTitle">СТОИМОСТЬ КИЛОМЕТРА<br>
                <span>поездки на электрическом приводе в 20-30 раз меньше, чем на бензиновом.</span></h2>
            </div>
        </li>
        <li class="slider__item">
            <figure class="slider__itemImage" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-4_993_730.jpg)"></figure>
            <div class="slider__itemText">
                <h2 class="slider__itemTitle">ЭЛЕКТРОВЕЛОСИПЕД<br>
                <span>лучший транспорт для тех, кто действительно хочет защищать окружающую среду</span></h2>
            </div>
        </li>
        <li class="slider__item">
            <figure class="slider__itemImage" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-5_993_730.jpg)"></figure>
            <div class="slider__itemText">
                <h2 class="slider__itemTitle">ПРИ ПОЕЗДКЕ<br>
                <span>на электровелосипеде, даже если Вы увлечетесь и все-таки разрядите аккумулятор, Вы сможете спокойно доехать до дома, покручивая педали.</span></h2>
            </div>
        </li>
        <li class="slider__item">
            <figure class="slider__itemImage" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-6_993_730.jpg)"></figure>
            <div class="slider__itemText">
                <h2 class="slider__itemTitle">ОБРАТИВ ВНИМАНИЕ<br>
                <span>на электровелосипед, Вы приобретаете возможность подарить себе новизну ощущений</span></h2>
            </div>
        </li>
        <li class="slider__item">
            <figure class="slider__itemImage" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-7_993_730.jpg)"></figure>
            <div class="slider__itemText">
                <h2 class="slider__itemTitle">ВЫ СТАНОВИТЕСЬ<br>
                <span>обладателем технической новинки 21 века</span></h2>
            </div>
        </li>
        <li class="slider__item">
            <figure class="slider__itemImage" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-8_993_730.jpg)"></figure>
            <div class="slider__itemText">
                <h2 class="slider__itemTitle">ЭЛЕКТРОВЕЛОСИПЕД<br>
                    <span>
                    это приятная тренировка с дозируемой нагрузкой, просто поездка в магазин или в гости - по Вашему желанию</span></h2>
            </div>
        </li>
    </ul>


    <div class="slider__prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="-1 -1 12 32">
            <path d="M 10,0 0,15 10,30" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    <div class="slider__next is-active">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="-1 -1 12 32">
            <path d="M0 0l10 15L0 30" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>


    <ul class="navThumbs">
        <li class="navThumbs__item is_active" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-1_993_730.jpg)"></li>
        <li class="navThumbs__item" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-2_993_730.jpg)"></li>
        <li class="navThumbs__item" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-3_993_730.jpg)"></li>
        <li class="navThumbs__item" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-4_993_730.jpg)"></li>
        <li class="navThumbs__item" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-5_993_730.jpg)"></li>
        <li class="navThumbs__item" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-6_993_730.jpg)"></li>
        <li class="navThumbs__item" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-7_993_730.jpg)"></li>
        <li class="navThumbs__item" style="background-image:url(http://www.veola.com.ua/images/resized/images/stories/demo/slideshow/sl-8_993_730.jpg)"></li>
    </ul>
</div>



<div class="row">

    <div class="col s12 m4 l3">
        <?=\frontend\components\SidebarProduct::widget()?>

        <?=\frontend\components\Category::widget()?>

        <?=\frontend\components\SidebarProduct::widget()?>
    </div>

    <div class="col s12 m8 l9">

        <h2 class="title-h2" style="color:#000;">
            Купить электровелосипед
        </h2>

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

