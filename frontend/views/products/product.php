<?php
use yii\helpers\Url;
$this->title = $model->title;
?>
<div class="row">
    <div class="col s12 m4 l3">
        <?=\frontend\components\Category::widget()?>

    </div>

    <div class="col s12 m8 l9">
        
        <div class="row">

            <h2 class="title-h2" style="color:#000;">
                Купить электровелосипед
            </h2>

            <p class="text-box">
               <?=$model->description?>
            </p>
            <h2 class="title-h2" style="color:#373737;">
                <?=$model->name?>
            </h2>
            <div class="col s12 m6 l6">
                <div class="fotorama">
                    <?php foreach($model->photo as $photo):?>
                    <img src="/img/products/<?=$photo->img?>">
                    <?php endforeach;?>
                </div>
            </div>

                <p class="price-index">
                    <span style="color: black">Цена:</span> <?=$model->price?> грн.<br>
                    <span style="font-size: 14px" class="old-price-index">Старая цена: <span class="crossed"><?=$model->old_price?> грн.</span></span>
                </p>

                <p style="float: left">Рейтинг:  <span class="my-rating-product" data-rating="<?=$sum ? $sum : 0?>"></span> <span class="live-rating-product"></span> </p>

                <p style="float: right" class="">Хиты: (ХХХ)</p>
            <br><br>
            <ul class="prod-buttons">

                <li class="prod-qty">
                    Количество:
                </li>

                <li class="prod-qty-input">
                    <input type="text" name="quantity" id="qty" onkeyup="reloadPrices();" class="inputbox" style="width: 20px" value="1">
                </li>
                <li class="buttons">
                    <input type="submit" data-id="<?= $model->id?>" class="button cart" value="В корзину" onclick="">
                </li>
            </ul>
                <p class="text-box">
                   <?=$model->description_product?>
                    lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem lorem lorem lore morem
                </p>




         <div class="clearfix"></div>
            <a href="<?=Yii::$app->request->referrer?>"><input type="button" class="button" value="Назад" onclick=""></a>

            <h2 class="title-h3">
                СОПУТСТВУЮЩИЕ ТОВАРЫ
            </h2>

            <div class="product-filter"></div>

            <div class="row">

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
                    </div>
                </div>

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
                    </div>
                </div>

            </div><!-- row-->

            <h2 class="title-h3" style="color:#CF1F18;">
                ОТЗЫВ
            </h2>

            <div class="product-filter"></div>

            <?=\frontend\components\Comments::widget(['id' => $id]);?>



        </div><!-- row-->

    </div><!--col s8-->

</div><!-- row-->