<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Products */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(['enablePushState' => false]); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div style="display:flex">
    <?php foreach($model->img as $photo):?>
    <div>
       <div><a class="btn-danger btn" style="position: absolute" href="<?= Url::to(['/products', 'del' => $photo->id])?>">Удалить</a></div>
        <img src="/frontend/web/img/products/<?= $photo->src?>" style="width: 200px;">
    </div>
    <?php endforeach;?>
    </div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
            'description_product',
            'content',
            'img',
        ],
    ]) ?>

<?php Pjax::end(); ?>
</div>
