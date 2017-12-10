<?php
use yii\helpers\Url;
$this->title = $model->title;
?>
<div class="row">
    <div class="col l3 hide-on-med-and-down">
        <?=\frontend\components\Category::widget()?>

    </div>

    <div class="col s12 m12 l9">
        
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
            <div class="col s12 m6 l6" style="padding: 10px">
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
            <?php if(!empty($model->group)):?>
            <?php foreach($group as $product):?>
                <div class="col s12 m6 l4">
                    <div class="product-item-index">
                        <a href="<?=Url::to(['/products/product', 'id' => $product->id, 'name' => $product->name])?>">
<!--                            <p class="new-priduct">NEW</p>-->
                            <img style="width: 100%" src="/img/products/<?=$product->image->img?>">
                        </a>
                        <a class="priduct-title-index" href="<?=Url::to(['/products/product', 'id' => $product->id, 'name' => $product->name])?>" title="Title text text andrey text text tex">
                            <?=$product->name?>
                        </a>
                        <p class="price-index">
                        <?=$product->price?> грн.<br>
                            <span class="old-price-index">Старая цена: <span class="crossed"><?=$product->old_price?> грн.</span></span>
                        </p>
                    </div>
                </div>
            <?php endforeach;?>
            <?php endif;?>
            </div><!-- row-->

            <h2 class="title-h3" style="color:#CF1F18;">
                ОТЗЫВ
            </h2>

            <div class="product-filter"></div>

            <?=\frontend\components\Comments::widget(['id' => $id]);?>



        </div><!-- row-->

    </div><!--col s8-->

</div><!-- row-->