<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use frontend\models\Profile; 
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchProfile */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Profiles');
$model = Profile::find()->with('photo')->all();
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Profile'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'kartik\grid\ExpandRowColumn',
            'value' => function ($model, $key, $index, $column) {
                return GridView:: ROW_COLLAPSED;
            },
            'detail' => function ($model, $key, $index, $column) {

                
                return Yii::$app->controller->renderPartial('view', [
                        'model' => $model,

                ]);
            },

        ],
            [
                'attribute' => 'id',
                'value' => function($data){
                    return "<img src='/frontend/web/photo/".$data->image->src."' style='width: 150px;' />";
                },
                'format' => 'html',
            ],
            'name',
            'age',
//            'country',
//            'about_myself',
            // 'contacts',
            // 'date',
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
