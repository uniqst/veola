<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Instructions */

$this->title = 'Инструкция: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Инструкции', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="instructions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
