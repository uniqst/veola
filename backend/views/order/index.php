<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchOrder */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'updated_at',
            'qty',
            'sum',
            // 'status',
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
            // 'name',
            // 'email:email',
            // 'phone',
             'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
