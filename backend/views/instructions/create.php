<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Instructions */

$this->title = 'Добавить инструкцию';
$this->params['breadcrumbs'][] = ['label' => 'Instructions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
