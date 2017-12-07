<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Photo;
use frontend\models\Category;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

$category = Category::find()->all();
$data = ArrayHelper::getColumn($category, 'name', 'id');
/* @var $this yii\web\View */
/* @var $model frontend\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>


    <?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        $data,
        ); ?>

    <?= $form->field($model, 'description')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_product')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
        'preset' => 'full',
        'inline' => false,
    ]),

  ]);?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
        'preset' => 'full',
        'inline' => false,
    ])
  ]);?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'old_price')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
