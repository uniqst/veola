<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);


/* @var $this yii\web\View */
/* @var $model frontend\models\Instructions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instructions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?
    echo $form->field($model, 'content')->widget(CKEditor::className(), [
  'editorOptions' => ElFinder::ckeditorOptions(['elfinder', 'path' => '/gallery'],[/* Some CKEditor Options */]),
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
