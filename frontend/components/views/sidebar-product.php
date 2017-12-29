<?php
use yii\helpers\Url;
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
<div class="sidebar-product">
<?php foreach($products as $product):?>
   <div class="row">
       <div class="col s5">
           <a href="<?=Url::to(['/products/product', 'id' => $product->id, 'name'])?>">
               <img src="/img/products/<?=$product->image->img?>">
           </a>
       </div>
       <div class="col s7">
           <p>
               <a href="<?=Url::to(['/products/product', 'id' => $product->id, 'name'])?>"><?=$product->name?></a>
               <br>
               <span class="product-price">
               <?php if($ex == 'грн'):?>
                <?=round($product->price * $rates, 0) . ' ' . $ex?><br>
                <?php else:?>
                <?=$product->price * $rates . ' ' . $ex?><br>
                <?php endif;?>
               </span>
           </p>
       </div>
   </div><!--row-->
    <?php endforeach;?>
    <hr>
</div>
