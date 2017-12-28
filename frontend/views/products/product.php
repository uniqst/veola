<?php
use frontend\models\ExchangeRates;
use yii\helpers\Url;
$this->title = $model->title;
$r = ExchangeRates::findOne(1);
if(Yii::$app->session['rates'] == 'grn' or empty(Yii::$app->session['rates'])){
    $rates = round($r->grn, 0);
    $ex = 'грн';
}elseif(Yii::$app->session['rates'] == 'eur'){
    $rates = $r->eur;
    $ex = '<i class="fa fa-eur" aria-hidden="true"></i>';
}elseif (Yii::$app->session['rates'] == 'usd'){
    $rates = 1;
    $ex = '<i class="fa fa-usd" aria-hidden="true"></i>';
}
    
?>
<div class="row">
    <div class="col l3 hide-on-med-and-down">
        <?=\frontend\components\Category::widget()?>
    </div>

    <div class="col s12 m12 l9">
        
        <div class="row">

            <h2 class="title-h2" style="color:#000;">
                Купить <?= $model->category->name?>
            </h2>

            <p class="text-box">
               <?=$model->description?>
            </p>
            <h2 class="title-h2" style="color:#373737;">
                <?=$model->name?>
            </h2>
            <div class="col s12 m6 l6" style="padding: 10px">
                   
                    <a data-fancybox="gallery" href="/img/products/<?=$model->photo[0]->img?>">
                       <img style='width:100%' src="/img/products/<?=$model->photo[0]->img?>">                   
                    </a>

                    <div class="row product-img-small">
                    <?php $slice = array_slice($model->photo, 1)?>
                    <?php foreach($slice as $image):?>
                        <div class="col s4 m4">
                            <a data-fancybox="gallery" href="/img/products/<?=$image->img?>">
                                <img style='width:100%' src="/img/products/<?=$image->img?>">                   
                            </a>
                        </div>

                    <?php endforeach;?>
                        

                    </div><!--row-->
            </div><!--col s12 m6 l6-->

                <p class="price-index">
                    <span style="color: black">Цена:</span> 
                    <?php if($ex == 'грн'):?>
                    <?=round($model->price * $rates, 0) . ' ' . $ex?><br>
                    <?php else:?>
                    <?=$model->price * $rates . ' ' . $ex?><br>
                    <?php endif;?>
                    <span style="font-size: 14px" class="old-price-index">
                    <?php if($model->old_price == 0):?>
                    <?php else:?>
                    Старая цена: <span class="crossed">
                    <?php if($ex == 'грн'):?>
                    <?=round($model->old_price * $rates, 0) . ' ' . $ex?>
                    <?php else:?>
                    <?=$model->old_price * $rates . ' ' . $ex?>
                    <?php endif;?>
                    <?php endif;?>
                    </span></span>
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
            <script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,counter,theme=05" data-services="vkontakte,facebook,twitter,linkedin,google"></div>
                <p class="text-box">
                   <?=$model->description_product?>
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
                        <?php if($ex == 'грн'):?>
                        <?=round($product->price * $rates, 0) . ' ' . $ex?><br>
                        <?php else:?>
                        <?=$product->price * $rates . ' ' . $ex?><br>
                        <?php endif;?>
                            <?php if($model->old_price != 0):?>
                            <span class="old-price-index">Старая цена: <span class="crossed">
                            
                            <?php if($ex == 'грн'):?> 
                            <?=round($product->old_price * $rates, 0) . ' ' . $ex?>
                            <?php else:?>
                            <?=$product->old_price * $rates . ' ' . $ex?>
                            
                            <?php endif;?>
                            </span></span>
                            <?php endif;?>
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