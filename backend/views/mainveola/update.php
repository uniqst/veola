<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mainveola */

$this->title = 'Редактировать Главную ' . $model->title;
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="mainveola-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
