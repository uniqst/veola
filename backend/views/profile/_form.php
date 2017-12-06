<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Photo;
use frontend\models\Filters;
use frontend\models\FiltersValue;
use frontend\models\Category;
use yii\helpers\ArrayHelper;
// $cat = Category::find()->where(['parent_id' => 0])->
$category = Category::find()->where(['parent_id' => 0])->with('category')->all();

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($photo, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-md-2">
    <?= $form->field($model, 'price_try')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
    <?= $form->field($model, 'price_try_two')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
    <?= $form->field($model, 'price_try_three')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
    <?= $form->field($model, 'price_usd_four')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
    <?= $form->field($model, 'taxi_try')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
        <?= $form->field($model, 'price_try_night')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <?= $form->field($model, 'price_usd')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_usd_two')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_usd_three')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_usd_four')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'taxi_usd')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_usd_night')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <?= $form->field($model, 'price_eur')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_eur_two')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_eur_three')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_eur_four')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'taxi_eur')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_eur_night')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'mesurements')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'about_myself')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        '0' => 'Waiting',
        '1' => 'Approved',
        '2'=> 'Disapproved'
        ]); ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>



<?php foreach($category as $cat):?>
    <?php $items = ArrayHelper::map($cat->category,'id','name');?>
    <?php $value = FiltersValue::find()->where(['filter_id' => $cat->id, 'product_id' => $model->id])->one(); 
     if(empty($value)){
        $value = new FiltersValue();
    }
    ?>
    <?= $form->field($value, 'value')->dropDownList($items, ['name' => 'value['.$cat->id.']'])->label($cat->name) ?>    
<?php endforeach;?>    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
