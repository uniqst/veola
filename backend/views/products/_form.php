<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Photo;
use frontend\models\Category;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\widgets\Pjax;

$category = Category::find()->all();
$data = ArrayHelper::map($category,'id' , 'name');
/* @var $this yii\web\View */
/* @var $model frontend\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?php Pjax::begin(['enablePushState' => false]);?>
    <?= $form->field($model, 'imageFiles[]')->fileInput(['id' => 'imgInput', 'multiple' => true, 'accept' => 'image/*']) ?>
    <div id="im">
        <?php if(!empty($model->photo)):?>
        <?php foreach($model->photo as $photo):?>
        <a href="<?=Url::to(['/products/update','id' => $model->id, 'photo' => $photo->id])?>" class="img-trash"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        <img src="/img/products/<?=$photo->img?>" class="img-input" >
        <?php endforeach;?>
        <?php endif;?>
    </div>
    <?php Pjax::end();?>
    <br>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        $data
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
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Создать') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
