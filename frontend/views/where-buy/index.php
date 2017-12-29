<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="row">
    <div class="col l3 hide-on-med-and-down">
        <?=\frontend\components\Category::widget()?>
            <H3 class="text-center">Новые товары</H3>
        <?=\frontend\components\SidebarProduct::widget()?>
    </div>

    <div class="col s12 m12 l9">
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
                        <img src="data:image/png;base64,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" border="0" width="16" height="16" style="vertical-align: text-bottom; border: 0;">
                        <a href="#">+3 (8099) 536 24 75</a><br>

                        <img src="data:image/png;base64,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" border="0" width="16" height="16" style="vertical-align: text-bottom; border: 0;">
                        <a href="#">+3 (8098) 995 72 67</a><br>

                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAbCAIAAABqReE6AAAFkklEQVRIicWWa2wUVRTHzzx2O7Pd7mx5VcQAlfAqtCAN3W2KsGt4B7V2u4GGKRCaWBIKRoRU+4VGoyYQQ6T4AauJGDFRSfyiHzRoYjSI0C4kSCQxQgixpXtn57nTne3OvdcP3dKncVGQk/+HMydn7v3lnJN7L9BHbfCoAUYIXEpTX34x8Nrh5M4GJDcgOYbkRiTHkBxDcjwpN6K8Yqg5ruzajprjSI6hnTFFbkByI5LjSI4rclyRG5HckJRjyeEVdsfR7rjSHFeaY0pzoyI3IDmW3FF/98C+9O1b4wism7+rM0UHgHgmyQvUA3TkkxYB5YACEA9gBlwAwgApAsICASAAhAHqHUn2AOWBeoB4wfXCEIALQD0wBNBfv2U8weVLGYnFAhCJJRJLJIZIzFiHSiwNsCTAYIl1Zonm/JnOdNGqmGvENthL52b8YM0Uza0RfU9Telk59uf/wgGGBBgqMUSCwWn8QKusra8lfob4QF1SPo7ATlzOlnqIAPnNJI7mnVGfSBwOcDkB1L079Ns31Re2KHub1IF+dW+TJTLozPuWoSrXr6qbnsYCEB/gYiABlkgcDbC4GIa8oB97Q/3h2ywH2Ad65cKJBE4pjwUYs/E4EYnFEoclbqgI9MNtGUr1puf1spLkquXGnGCqYp5lpvrPnE6WlzkiZHyQnjfDfjyQLQLsZ3KS1y71ZvysGa5M371jCwzxgVG1eBzBYKLHKfUUROAFvf1ABg9p62sNOWb/eD61OaKcO5vBrqX0Kd1dA6Hlqc8/Vq/8rCYuos72dJA3qivUSz8p3ae08rL0HzfM+TOIdwqC3mzBBObRI9lsxqhZZh1tz1Gqxp8dePUVOzekffdNX+se7deEeuF7VF1xt6XZwlnlYItWXaFe61U/PG3ODlpXL5m1VZQDs3LJhC7cRw2MtzudTFqtetLqbM8S14iG1aoFTnZQ7TiiNMccStG5T5TWXX3tB9PEMc9/bQd5e3qRM423y3xm4hd74xrCglG5eBJBsDACAfSTx+y0riycY77V6bhZs+4pfW214w6pnR3amx0OJejk8dSR/Wp7m/byPn37NscHOYAcB9bsYuu3K8YzNYQFY8XkOSiEIMBmi8E60+2YmjpvlvHucYfktFCFuaHOodQ42q7siqUpRS/tN1hIC6CX+W0v6NWLtbYWLbJaXVBmoz5t6RPEM2kO7MTlgroQYLMlrPbpR3b/HXX+9FT3KSuXUWqW6VsjOnXV1zv0UjF19oyhK2rvBT1xMfnVZ0bQoxxqtShNdR1LbVxjD5p2CU9FMKoWTSIIenDRP3aBdSXOXL1Ef6Z2cIaghytTz22w5kj2/JmofpO+clHOB+mgV9+8Tm9rMV7cqdWtypSwVmW5JterKxeqJ48bN65lGaDFUxD0ZAsi4HCQwwJgD+AAh4sAs+CWMNgPmAUsAg7yxA+EBxfAZYB4AUs8FsEF0BbNNQf+TB3aT3xAJhMMJnqzQW8hk4gljgS4ez6W+HxQ4og0Ic7jkWCumEmFK1H7QeuxAJEY6gdzYg2u9DjBgs7Ef6dckMuWQIYF7AcicdTPTCJIXH6oBGT0cmGxxE9BUPip/B8gRheZYhLTPZcyPnC9gIMMGXcxPjCCsaL+yZOoJJVIyCrhXT9giX/YBMQPxorxBITS9O1batc76QDvFgOeuhHcA5Mf9Ak1GLYcpamuE1aJB/vuPZbuV8yY9xU7xskXkkgsllhaDHrFgikI8hDvnUgHeFcAIgIRgApABSACUHFcZDh4T1QALIArgisCHpsmjoqIQESgArgAyY1rpiYYhkh+cHpgbQhFQ8loaCBSk4yGlUhYiYRRNKxEQsN+PhIJJSOhZDSMImEUCaFoeFTDmetq84rUomgYRUOobvXdhm3W9Wt/S/A/26Mn+At2XMBQX/JuKAAAAABJRU5ErkJgggA=" border="0" width="16" height="16" style="vertical-align: text-bottom; border: 0;">
                        <a href="#">+3 (8073) 904 80 50</a><br>
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
                <p class="text-center text-box" style="padding: 15px 70px 15px 10px;">
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
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(044) 502-17-69
                    </p>
                </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">ДНЕПРОВСКИЙ РАЙОН</span><br>
                        МОТОМАСТЕР<br>
                        г. Киев, бул. Верховного Совета, 34<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(044) 592-84-32<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(050) 327-48-81<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(050) 469-39-49<br>
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
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(044) 209-27-01<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(067) 232-34-25<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(050) 699-18-55<br>
                    </p>
                </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">СВЯТОШИНСКИЙ РАЙОН</span><br>
                        Интернет магазин EL-VEL<br>
                        Г.Киев,<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(067) 107-38-37<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(050) 331-00-68<br>
                        <a href="http://el-vel.com.ua">http://el-vel.com.ua</a>
                    </p>
                </div>

            <div class="col s12">
                <p class="text-center text-box" style="padding: 15px 70px 15px 10px;">
                    <span class="heavy-text-span" style="color:#000;">У К Р А Ї Н А</span>
                </p>
            </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">ДНЕПРОПЕТРОВСКАЯ ОБЛАСТЬ</span><br>
                        г. Днепр<br>
                        Курчатовский ринок, INSTRADE<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(096) 778-78-70<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(095) 461-27-59<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(063) 530-33-09<br>
                        <a href="www.instrade.prom.ua">www.instrade.prom.ua</a>
                    </p>
                </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">СУМСКАЯ ОБЛАСТЬ</span><br>
                        г. Шостка<br>
                        ул. Мира 8<br>
                        <span class="heavy-text-span">ЧП Кузьменко</span><br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(050) 918-92-58<br>
                    </p>
                </div>

            <div class="clearfix"></div>

            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">ЧЕРКАССКАЯ ОБЛАСТЬ</span><br>
                        г.Ватутино,<br>
                        ул. Калинина 23 ( Базарная пл.)<br>
                        магазин велосипедов«MOTO-plus»<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(099) 3333-53-6<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(096) 324-57-27<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(093) 421-74-18<br>
                    </p>
                </div>
            <div class="col s12 m6">
                    <p class="text-box">
                        <span class="heavy-text-span">ЧЕРКАССКАЯ ОБЛАСТЬ</span><br>
                        г. Черкассы<br>
                        ул. Благовестная, 182<br>
                        магазин «ВелоМото»<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>0472-32-52-53<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(067) 761-27-74<br>
                        <span class="phone-span">
                            <img src="http://s1.iconbird.com/ico/2013/9/446/w512h5121380376664MetroUIPhone.png" border="0" alt="Картинки по запросу значок телефонной трубки" width="16" height="16" style="font-family: Tahoma,Helvetica, Arial, sans-serif; font-size: 12.16px; border: 0; vertical-align: text-bottom;">
                        </span>(063) 755-83-52<br>
                        <a href="http://nikmoto.com.ua/">http://nikmoto.com.ua/</a>
                    </p>
                </div>

        </div><!-- row-->

    </div><!--col s8-->

</div><!-- row-->