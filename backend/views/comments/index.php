<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchComments */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Comments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Comments'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'content',
            [
                'attribute' => 'status',
                'value' => function($data){
                    if($data->status == 1){
                        return '<i style="font-size:30px" class="fa fa-check-circle text-success" aria-hidden="true"></i>';
                    }
                    elseif($data->status == 0){
                        return '<i style="font-size:30px" class="fa fa-bell" aria-hidden="true"></i>';
                    }
                    else {
                        return '<i style="font-size:30px" class="fa fa-window-close text-danger" aria-hidden="true"></i>';
                    }
                        
                },
                'format' => 'html'
            ],

            // 'is_viewed',
            // 'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
