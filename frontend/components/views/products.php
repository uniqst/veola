<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

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
    <div class="col s12 m6 l4">
        <div class="product-item-index">
            <a href="<?=Url::to(['/products/product', 'id' => $product->id, 'name' => $product->name])?>">
                <p class="new-priduct">NEW</p>
                <img style="width: 100%" src="/img/products/<?=$product->image->img?>">
            </a>
            <a class="priduct-title-index" href="<?=Url::to(['/products/product', 'id' => $product->id, 'name' => $product->name])?>" title="Title text text andrey text text tex">
                <?=$product->name?>
            </a>
            <p class="price-index">
                <?=$product->price?> грн.<br>
                <span class="old-price-index">Старая цена: <span class="crossed"><?=$product->old_price?> грн.</span></span>
            </p>

            <p style="float: left"><span class="my-rating-product" data-rating="<?=$sum;?>"></span> </p>
            <p style="float: right" class="">Отзывов (<?=count($product->comments)?>)</p>

            <div class="clearfix"></div>

            <p class="product-discription-index">
               <?=$product->description_product?>
            </p>

            <div class="clearfix"></div>
            <a class="product-detail" style="float: left" href="<?=Url::to(['/products/product', 'id' => $product->id, 'name' => $product->name])?>">Подробнее</a>
            <a href="<?= Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>"  class="add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
