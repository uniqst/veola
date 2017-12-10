<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ExchangeRates */

$this->title = 'Create Exchange Rates';
$this->params['breadcrumbs'][] = ['label' => 'Exchange Rates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchange-rates-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
