<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exchange Rates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchange-rates-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Exchange Rates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'grn',
            'eur',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
