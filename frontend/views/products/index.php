<?php
$this->title = $main->title;
use yii\helpers\Url;
?>

<div class="row">
<?= \frontend\components\Slider::widget();?>
    <div class="col l3 hide-on-med-and-down">
        <?=\frontend\components\Category::widget()?>

        <p class="text-center widget-title">НОВЫЕ ТОВАРЫ</p>
        <?=\frontend\components\SidebarProduct::widget()?>
    </div>

    <div class="col s12 m12 l9">

        <?= $main->content?>

        <div class="row">
            <?php foreach($model as $cat):?>
            <div class="col s12 s6 m4" style="height: 410px;">
                <div class="product-item">
                    <a href="<?= Url::to(['/products/category', 'id' => $cat->id, 'name' => $cat->name])?>">
                        <img src="/img/category/<?= $cat->img?>">
                    </a>
                    <a title="<?= $cat->name?>" href="<?= Url::to(['/products/category', 'id' => $cat->id, 'name' => $cat->name])?>">
                        <p><?= $cat->name?></p>
                    </a>
                </div>
            </div>
        <?php endforeach;?>

            

            
        </div><!--row-->



    <!--col s8-->
</div><!--row-->

