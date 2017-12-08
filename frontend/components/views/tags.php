<?php
use yii\helpers\Url;
?>
<p class="text-center widget-title">Теги</p>
<?php foreach($model as $tag):?>
<div class="category-item">
    <a href="<?=Url::to(['/products/product', 'id' => $tag->id, 'name' => $tag->name])?>">
        <?=$tag->name?>
    </a>
</div>
<?php endforeach;?>