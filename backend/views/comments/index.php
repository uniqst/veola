<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchComments */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Комментарии');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Создать Комментарий'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'product_id', 
                'value' => function($data){
                    return '<a  href="' . Url::to(["../../products/product", "id" => $data->product->id , "name" => $data->product->name]) . '">' . $data->product->name . '</a>';

                },
                'format' => 'html',

            ],
            'name',
            [
                'attribute' => 'status',
                'value' => function($data){
                    if($data->status == 0){
                        return '<i class="fa fa-times text-danger" aria-hidden="true"></i>';
                    }else {
                        return '<i class="fa fa-check text-success" aria-hidden="true"></i>';
                    }
                },
                'format' => 'html'
            ],
            'email:email',
            // 'rating',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
