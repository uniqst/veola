<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use frontend\models\Products;
use frontend\models\Category;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchProducts */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Товары');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Создать Товар'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
              'attribute' => 'id',
              'value' => function($data){
                    return '<img src="../../../frontend/web/img/products/'.$data->image->img.'" style="width: 100px;">';
              },
                'format' => 'html'
            ],
            'title',
            [
                'attribute' => 'category_id', 
                'value' => function($data){
                    return $data->category->name;
                },
                'filter' => Html::activeDropDownList($searchModel, 'category_id', ArrayHelper::map(Category::find()->asArray()->all(), 'id', 'name'), ['class' => 'form-control', 'promt' => 'Пожалуйста, выберите категорию']),
            ],
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
                'format' => 'html',
                'filter'=>array("0"=>"Стандартный","1"=>"Акционный","2"=>"Распродажа","3"=>"Ожидается","4"=>"Новинка"),
            ],
            // 'content',
            // 'img',
            // 'price',
            // 'old_price',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
