<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mainveola */

$this->title = 'Update Mainveola: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Mainveolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mainveola-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
