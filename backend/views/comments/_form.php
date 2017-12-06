<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Comments;

/* @var $this yii\web\View */
/* @var $model frontend\models\Comments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent_id')->hiddenInput(['value' => 0])->label(false) ?>

    <?= $form->field($model, 'profile_id')->hiddenInput(['value' => 0])->label(false) ?>

    <?= $form->field($model, 'email')->hiddenInput(['value' => 0])->label(false) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_viewed')->hiddenInput(['value' => 0])->label(false) ?>

    <?= $form->field($model, 'status')->dropDownList([
        '0' => 'Waiting',
        '1' => 'Approved',
        '2'=> 'Disapproved'
        ]); ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
