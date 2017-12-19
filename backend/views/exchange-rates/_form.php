<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ExchangeRates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exchange-rates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'grn')->textInput() ?>

    <?= $form->field($model, 'eur')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
