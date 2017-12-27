<?php
$this->title = $model->title;
?>

<div class="container">
    <div class="row">
        <div class="col l3 hide-on-med-and-down">
            <?=\frontend\components\Category::widget()?>
        </div>
        <div class="col s12 m12 l9">
            <H1 class="text-center"><?= $model->H1?></H1>
            <p><?= $model->content?></p>
        </div>
    </div>
</div>