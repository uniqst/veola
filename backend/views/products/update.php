<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Products */

$this->title = Yii::t('app', 'Редактировать {modelClass}: ', [
    'modelClass' => 'Товары',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Товары'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Обновить');
?>
<div class="products-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
