<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Comments */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Комментарии'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-view">

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
                'attribute' => 'product_id', 
                'value' => function($model){
                    return $model->product->name;
                }
            ],
            'name',
            'email:email',
            'content',
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
            'rating',
            'created_at',
        ],
    ]) ?>

</div>
