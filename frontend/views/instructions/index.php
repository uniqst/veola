<div class="container">
    <div class="row">
        <div class="col l3 hide-on-med-and-down">
            <?=\frontend\components\Category::widget()?>
        </div>
        <div class="col s12 m12 l9">
            <h1 class="red-text center-align"><?=$model->title?></h1>
            <p><?=$model->content?></p>
        </div>
     </div>
</div>