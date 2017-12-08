<?php
use yii\helpers\Url;
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
               <a href="#"><?=$product->name?></a>
               <br>
               <span class="product-price">
                   <?=$product->price?> грн.
               </span>
           </p>
       </div>
   </div><!--row-->
    <?php endforeach;?>
    <hr>
</div>
