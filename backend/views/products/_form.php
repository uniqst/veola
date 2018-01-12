<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use frontend\models\Photo;
use frontend\models\Category;
use frontend\models\Products;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\widgets\Pjax;


$category = Category::find()->all();
$data = ArrayHelper::map($category,'id' , 'name');
// $dota = [
//         "red" => "red",
//       "green" => "green",
//         "blue" => "blue",
//        "orange" => "orange",
//         "white" => "white",
//         "black" => "black",
//         "purple" => "purple",
//        "cyan" => "cyan",
//         "teal" => "teal"
//     ];
    
/* @var $this yii\web\View */
/* @var $model frontend\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">
    <?php Pjax::begin(['enablePushState' => false]);?>
    <div id="im" class="row">
    
        <?php if(!empty($model->photo)):?>
        <?php foreach($model->photo as $photo):?>
        <div class="col-md-2">
        <a href="<?=Url::to(['/products/update','id' => $model->id, 'photo' => $photo->id])?>" class="img-trash"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        <img src="/img/products/<?=$photo->img?>" class="img-input" >
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'data-pjax' => true]]) ?>
        
        <?= $form->field($photo, 'position_img')->textInput(['maxlength' => true])->label(false) ?>
        <?= $form->field($photo, 'id')->hiddenInput(['value' => $photo->id])->label(false) ?>
        <input type="submit" name="position_img" value="ok">
        
        <?php ActiveForm::end(); ?>
        </div>
        <?php endforeach;?>
        <?php endif;?>
    
    </div>
    <?php Pjax::end();?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?php Pjax::begin(['enablePushState' => false]);?>
    
    <?= $form->field($model, 'imageFiles[]')->fileInput(['id' => 'imgInput', 'multiple' => true, 'accept' => 'image/*']) ?>
    
    <?php Pjax::end();?>
    <br>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

   <?php 
   
//    echo 
//         $form->field($model, 'group')->widget(Select2::classname(), [
//     'data' => ArrayHelper::map(Products::find()->all(), 'id','name'),
//     'language' => 'ru',
//     'options' => [
//         'placeholder' => 'Select provinces ...',
//         'multiple' => true
//     ],
// ]);

echo '<label class="control-label">Сопутствующие товары</label>';
echo Select2::widget([
    'name' => 'state_10',
    'data' => ArrayHelper::map(Products::find()->where(['not in', 'id', $model->id])->all(), 'id','name'),
    'options' => [
        'placeholder' => 'Выберите товар',
        'multiple' => true
    ],
]);

    

?>
<?php Pjax::begin(['enablePushState' => false]);?>
<div class="row">
    <?php foreach($model->groups as $group):?>
        <div class="col-md-3">
        <div class="group-block">
        <div class="row">
            <div class="col-md-4"><img src="/img/products/<?=$group->product->image->img?>" class="group-img"></div>
            <div class="col-md-8">
                <h5><?= $group->product->name?></h5>
                <p><a href="<?= Url::to(['/products/update','id' => $model->id, 'group_id' => $group->group_id])?>">Удалить</a></p>
            </div>
        </div></div></div>
    <?php endforeach;?>
</div>
<?php Pjax::end();?>
<style>
    .group-img{
        width:100%;
        height:85px;
    }
    .group-block{
        border:2px solid black;
        padding:5px;
        height:100px;
        margin-top:10px;
        margin-bottom:10px;
        border-radius:5px;
    }
</style>


    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ '0' => 'Стандартный', '1' => 'Акционный', '2' => 'Распродажа', '3' => 'Ожидается', '4' => 'Новинка', '5' => 'Не отображать']) ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        $data
        ); ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [

'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
      'preset' => 'full',
      'inline' => false,
  ]),

]);?>

    <?= $form->field($model, 'description_product')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
        'preset' => 'full',
        'inline' => false,
    ]),

  ]);?>

    <?= $form->field($model, 'content')->textArea(['maxlength' => true]) ?>  

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'old_price')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Создать') : Yii::t('app', 'Обновить'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
