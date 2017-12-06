<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profiles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(['enablePushState' => false]); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div style="display:flex">
    <?php foreach($model->photo as $photo):?>
    <div>
       <div><a class="btn-danger btn" style="position: absolute" href="<?= Url::to(['/profile', 'del' => $photo->id])?>">Удалить</a></div>
        <img src="/frontend/web/photo/<?= $photo->src?>" style="width: 200px;">
    </div>
    <?php endforeach;?>
    </div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'email',
            'phone',
            'age',
            'nationality',
            'mesurements',
            'height',
            'weight',
            [ 'attribute' => 'status',
                'value' => function($model){
                    if($model->status == 1){
                        return '<i style="font-size:30px" class="fa fa-check-circle text-success" aria-hidden="true"></i>';
                    }
                    elseif($model->status == 0){
                        return '<i style="font-size:30px" class="fa fa-bell" aria-hidden="true"></i>';
                    }
                    else {
                        return '<i style="font-size:30px" class="fa fa-window-close text-danger" aria-hidden="true"></i>';
                    }
                },
                'format' => 'html'
            ],
            'about_myself',
            'date',
        ],
    ]) ?>

    
<?php Pjax::end(); ?>
</div>
