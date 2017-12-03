<?php
use kartik\file\FileInput;

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?php
    if(isset($model->photo)) {
        $filename = "/../../frontend/web/img/slider/" . $model->photo;
        $files = filesize("../../frontend/web/img/slider/" . $model->photo);
    }

    echo $form->field($model, 'imageFile')->widget(FileInput::classname(), [
        'options' => [
                'accept' => 'image/*',
        ],
        'pluginOptions' => [
            'initialPreview'=>[
                $filename
            ],

            'initialPreviewAsData'=>true,
            'initialPreviewConfig' => [
                ['caption' => $model->photo, 'size' => $files],
            ],
            'overwriteInitial'=>false,
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
