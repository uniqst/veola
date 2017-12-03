<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchSlider */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Слайдеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить слайдер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
              'attribute' => 'photo',
              'value' => function($data){
                    return "<img src='/../../frontend/web/img/slider/{$data->photo}' style='width: 400px;'";
              },
              'format' => 'html'
            ],
            'title',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{update} {delete}'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
