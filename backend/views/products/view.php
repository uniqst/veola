<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Products */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Товары'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Редактировать'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Удалить'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Вы уверены, что хотите удалить этот элемент?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'category_id', 
                'value' => function($data){
                    return $data->category->name;
                }
            ],
            'title',
            'position',
            'name',
            'description',
            'description_product',
            'price',
            [
                'attribute' => 'status',
                'value' => function($data){
                    if($data->status == 0){
                        return '<button type="button" class="btn btn-secondary">Стандартный</button>';
                    }elseif($data->status == 1) {
                        return '<button type="button" class="btn btn-danger">Акционный</button>';
                    }
                    elseif($data->status == 2) {
                        return '<button type="button" class="btn btn-warning">Распродажа</button>';
                    }
                    elseif($data->status == 3) {
                        return '<button type="button" class="btn btn-info">Ожидается</button>';
                    }
                    elseif($data->status == 4) {
                        return '<button type="button" class="btn btn-primary">Новинка</button>';
                    }
                },
                'format' => 'html'
            ],
            'content',
            'old_price',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
