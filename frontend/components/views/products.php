<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use frontend\models\ExchangeRates;
$r = ExchangeRates::findOne(1);
if(Yii::$app->session['rates'] == 'grn' or empty(Yii::$app->session['rates'])){
    $rates = $r->grn;
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

    <div class="product-filter"></div>
    <?php $count = 0;?>
    <?php foreach($model as $product):?>
        <?php
        $countc = count($product->comments);
        $summ = 0;
        foreach($product->comments as $s){
            $summ += $s->rating;
        }
        $sum = 0;
        if($countc != 0) {
            $c = $summ / $countc;
            $sum = ceil($c / 0.5) * 0.5;
        }
        ?>
        <?php ++$count;?>

    <div class="col s12 m4 l4
    <?php $arr = [2,5,8,11,14];?>
    <?php if(in_array($count, $arr)) {
        echo 'bordr-dotted';
    }?>
   ">

        <div class="product-item-index">
            <a class="img-a" href="<?=Url::to(['/products/product', 'id' => $product->id, 'name' => $product->name])?>">

                <div><!--Маркировка товара-->
                    <p style='display:none' class="product-mark new">Новинка</p>
                    <p style='display:none' class="product-mark sale">Распродажа</p>
                    <p style='display:none' class="product-mark stock">Акция</p>
                    <p class="product-mark expected">Ожидается</p>
                </div><!--Маркировка товара-->
                
                <img style="width: 100%" src="/img/products/<?=$product->image->img?>">
            </a>
            <a class="priduct-title-index" href="<?=Url::to(['/products/product', 'id' => $product->id, 'name' => $product->name])?>" title="Title text text andrey text text tex">
                <?=$product->name?>
            </a>
            <p class="price-index">
                <?=$product->price * $rates . ' ' . $ex?><br>
                <span class="old-price-index">Старая цена: <span class="crossed"><?=$product->old_price* $rates . ' ' . $ex?></span></span>
            </p>

            <p style="float: left"><span class="my-rating-product" data-rating="<?=$sum;?>"></span> </p>
            <p style="float: right" class="">Отзывов (<?=count($product->comments)?>)</p>

            <div class="clearfix"></div>

            <p class="product-discription-index">
               <?=$product->description_product?>
            </p>

            <div class="clearfix"></div>
            <a class="product-detail" style="float: left" href="<?=Url::to(['/products/product', 'id' => $product->id, 'name' => $product->name])?>">Подробнее</a>
            <a href="<?= Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>"  class="cart add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>
    </div>
        <?php if(($count) % 3  == 0 ):?>
            <div class="clearfix"></div>
    <div class="product-filter"></div><!--каждые 3 блока для компа-->
            <?php endif;?>
    <?php endforeach;?>

</div><!--row-->
<?php
// отображаем постраничную разбивку
echo LinkPager::widget([
    'pagination' => $pages,

        'prevPageLabel' => 'назад',
        'nextPageLabel' => 'вперед',
        'maxButtonCount' => 5,
]);
?>
