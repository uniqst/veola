<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SocialWeb */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="social-web-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'printerest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'google_plus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linked_in')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
