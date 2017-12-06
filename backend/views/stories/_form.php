<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Stories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stories-form">

   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

   <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textArea(['maxlength' => true, 'rows' => 6]) ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
