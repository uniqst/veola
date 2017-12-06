<?php

use yii\helpers\Html;
use kartik\grid\GridView;   
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchProfile */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Category');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
//            'country',
//            'about_myself',
            // 'contacts',
            // 'date',
            ['class' => 'yii\grid\ActionColumn'],

      ],  
    ]); ?>
<?php Pjax::end(); ?></div>
