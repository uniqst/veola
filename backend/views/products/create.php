<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Products */

$this->title = Yii::t('app', 'Создать Товар');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Товары'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
