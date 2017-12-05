<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Order */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at',
            'updated_at',
            'qty',
            'sum',
            [
                'attribute' => 'status',
                'value' => function($model){
                    if($model->status == 0){
                        return '<i class="fa fa-times text-danger" aria-hidden="true"></i>';
                    }else {
                        return '<i class="fa fa-check text-success" aria-hidden="true"></i>';
                    }
                },
                'format' => 'html'
            ],
            'name',
            'email:email',
            'phone',
            'address',
        ],
    ]) ?>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($model->orderItems as $item):?>
                    <tr>
                        <td><a href="<?=Url::to(['../../products/product', 'id' => $item->id, 'name' => $item->name])?>"><img src="/img/products/<?= $item->product->image->img?>" width="100px"></a></td>
                        <td><a href="<?=Url::to(['../../products/product', 'id' => $item->id, 'name' => $item->name])?>"><?= $item->name?></a></td>
                        <td><?= $item->qty_item?></td>
                        <td><?= $item->price?></td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>
</div>
