<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Stories */

$this->title = Yii::t('app', 'Create Stories');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
