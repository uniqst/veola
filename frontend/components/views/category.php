<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>

<p class="text-center widget-title">КАТЕГОРИЯ ТОВАРОВ</p>

<?php foreach($model as $category):?>

<div class="category-item <?php if($_GET['cat_id'] == $category->id ) echo 'active';?>">
    
    <a href="<?=Url::to(['/products/category','cat_id' => $category->id, 'name' => $category->name])?>">
        <?=$category->name?>
    </a>
</div>
    <?php endforeach;?>


