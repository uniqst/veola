<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Filters */

$this->title = Yii::t('app', 'Create Filters');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Filters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filters-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
