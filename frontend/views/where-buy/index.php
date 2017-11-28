<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="row">
    <div class="col s12 m4 l3">
        <?=\frontend\components\Category::widget()?>

        <?=\frontend\components\Tags::widget()?>

        <?=\frontend\components\SidebarProduct::widget()?>
    </div>

    <div class="col s12 m8 l9">
        <a href="#">
            <h2 class="title-h2">
                Где купить?
            </h2>
        </a>
        <div class="g-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1798.2485453375818!2d30.635569941253294!3d50.401834486966116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5acc8ec71a3%3A0x4b245a22b0081fb6!2z0YPQuy4g0JzQuNGF0LDQuNC70LAg0JTRgNCw0LPQvtC80LDQvdC-0LLQsCwgMjksINCa0LjQtdCy!5e0!3m2!1sru!2sua!4v1511798319298"
                    width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="row">
            <div class="col s12 m7">
                <p class="text-box">
                    <span class="heavy-text-span">
                        Магазин электровелосипедов "VEOLA"<br>
                        ул. Драгоманова, 29, Киев, Украина<br>
                        пн - пт 11:00 -19:00<br>
                        <span>(icon)</span>(044) 502-17-69
                    </span>
                </p>
            </div>
            <div class="col s12 m5">
                <p class="text-center text-box">
                    <span class="heavy-text-span">
                        ОТДЕЛ ОПТОВЫХ ПРОДАЖ<br>
                        (img)<a href="#">+3 (8099) 536 24 75</a><br>
                        (img)<a href="#">+3 (8098) 995 72 67</a><br>
                        (img)<a href="#">+3 (8073) 904 80 50</a><br>
                    </span>
                </p>
            </div>

            <div class="col s12">
                <p class="text-box">
                    <span class="heavy-text-span">
                    Мы всегда готовы помочь вам, являетесь ли вы нашим клиентом или просто рассматриваете такую возможность.
                    </span>
                </p>
            </div>

            <div class="col s12">
                <p class="text-center text-box">
                    <span class="heavy-text-span">НАШИ ПРЕДСТАВИТЕЛИ:</span><br>
                    <span class="heavy-text-span" style="color:#000;">К И Е В</span>
                </p>
            </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">ДАРНИЦКИЙ РАЙОН</span><br>
                        Магазин ЭЛЕКТРОВЕЛОСИПЕДОВ "VEOLA"<br>
                        г. Киев, ул. Драгоманова, 29,<br>
                        метро Позняки,<br>
                        торговый комплекс "ЦЭНТРУМ"<br>
                        ( ТЦ "ЭЛТИКС")<br>
                        <span class="phone-span">img </span>(044) 502-17-69
                    </p>
                </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">ДНЕПРОВСКИЙ РАЙОН</span><br>
                        МОТОМАСТЕР<br>
                        г. Киев, бул. Верховного Совета, 34<br>
                        <span class="phone-span">img </span>(044) 592-84-32<br>
                        <span class="phone-span">img </span>(050) 327-48-81<br>
                        <span class="phone-span">img </span>(050) 469-39-49<br>
                        <a href="www.motomaster.com.ua">www.motomaster.com.ua</a>
                    </p>
                </div>

            <div class="clearfix"></div>

            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">ПОДОЛЬСКИЙ РАЙОН</span><br>
                        (ТОЛЬКО ВЕЛОСИПЕДЫ!!!)<br>
                        Velohit<br>
                        г. Киев, ул. Кирилловская 168-А<br>
                        <span class="phone-span">img </span>(044) 209-27-01<br>
                        <span class="phone-span">img </span>(067) 232-34-25<br>
                        <span class="phone-span">img </span>(050) 699-18-55<br>
                    </p>
                </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">СВЯТОШИНСКИЙ РАЙОН</span><br>
                        Интернет магазин EL-VEL<br>
                        Г.Киев,<br>
                        <span class="phone-span">img </span>(067) 107-38-37<br>
                        <span class="phone-span">img </span>(050) 331-00-68<br>
                        <a href="http://el-vel.com.ua">http://el-vel.com.ua</a>
                    </p>
                </div>

            <div class="col s12">
                <p class="text-center text-box">
                    <span class="heavy-text-span" style="color:#000;">У К Р А Ї Н А</span>
                </p>
            </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">ДНЕПРОПЕТРОВСКАЯ ОБЛАСТЬ</span><br>
                        г. Днепр<br>
                        Курчатовский ринок, INSTRADE<br>
                        <span class="phone-span">img </span>(096) 778-78-70<br>
                        <span class="phone-span">img </span>(095) 461-27-59<br>
                        <span class="phone-span">img </span>(063) 530-33-09<br>
                        <a href="www.instrade.prom.ua">www.instrade.prom.ua</a>
                    </p>
                </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">СУМСКАЯ ОБЛАСТЬ</span><br>
                        г. Шостка<br>
                        ул. Мира 8<br>
                        <span class="heavy-text-span">ЧП Кузьменко</span><br>
                        <span class="phone-span">img </span>(050) 918-92-58<br>
                    </p>
                </div>

            <div class="clearfix"></div>

            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">ЧЕРКАССКАЯ ОБЛАСТЬ</span><br>
                        г.Ватутино,<br>
                        ул. Калинина 23 ( Базарная пл.)<br>
                        магазин велосипедов«MOTO-plus»<br>
                        <span class="phone-span">img </span>(099) 3333-53-6<br>
                        <span class="phone-span">img </span>(096) 324-57-27<br>
                        <span class="phone-span">img </span>(093) 421-74-18<br>
                    </p>
                </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">ЧЕРКАССКАЯ ОБЛАСТЬ</span><br>
                        г. Черкассы<br>
                        ул. Благовестная, 182<br>
                        магазин «ВелоМото»<br>
                        <span class="phone-span">img </span>0472-32-52-53<br>
                        <span class="phone-span">img </span>(067) 761-27-74<br>
                        <span class="phone-span">img </span>(063) 755-83-52<br>
                        <a href="http://nikmoto.com.ua/">http://nikmoto.com.ua/</a>
                    </p>
                </div>

        </div><!-- row-->

    </div><!--col s8-->

</div><!-- row-->