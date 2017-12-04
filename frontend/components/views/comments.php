<?php
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
?>
<p style="color: black; display: block;font-weight: bold;margin-bottom: 10px;font-size: 12px;">Оставить отзыв</p>
<?php Pjax::begin();?>
<script>
    $(".comment-rating").starRating({
        strokeColor: '#894A00',
        strokeWidth: 10,
        starSize: 20,
        readOnly: true

    });
</script>
<?php if($_POST):?>
    <h2>Спасибо за комментарий</h2>
    <?php else:?>
<?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]);?>

   <div class="row">
        <label class="col m3" for="Username">Ваше имя</label>
        <?= $form->field($comment, 'name')->textInput(['style' => 'max-width: 180px;border: 1px solid #ddd;'])->label(false)?>
    </div>
    <div class="row">
        <label class="col m3" for="Email">Ваш E-mail</label>
        <?= $form->field($comment, 'email')->textInput(['style' => 'max-width: 180px;border: 1px solid #ddd;'])->label(false)?>

    </div>
    <div class="row">
        <label class="col m3" for ="description"> Текст комментария</label>
        <?= $form->field($comment, 'content')->textArea(['style' => 'max-width: 320px;min-height:67px;border: 1px solid #ddd;'])->label(false)?>
    </div>
    <div class="row">
        <p class="col m3" style="font-size: .8rem;color: #9e9e9e;">Оценка для продукта</p>
        <span class="my-rating-9"></span>
        <span class="live-rating"></span>
        <?= $form->field($comment, 'rating')->hiddenInput(['id' => 'srating'])->label(false);?>
        <?= $form->field($comment, 'product_id')->hiddenInput(['value' => $id])->label(false);?>
        <?= $form->field($comment, 'created_at')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false);?>


    </div>
<div class="input-field col s12">

</div>
    <div class="row">
        <div class="col offset-m3" style="padding: 0px">
            <input type="submit" class="button" value="Отправить">
        </div>
    </div>

<?php ActiveForm::end();?>
<?php endif?>
<div class="coment-box">

    <div class="product-filter"></div>
    <?php foreach($model as $comment):?>
    <p class="coment-username"><?=$comment->name?> <span class="coment-date"><?=$comment->created_at?></span> </p>

    <p style="float: right;margin-bottom: 0px"><span class="comment-rating" data-rating="<?=$comment->rating?>"></span></p>

    <div class="clearfix"></div>

    <p class="text-box">
        <?=$comment->content?>
    </p>
    <?php endforeach;?>
</div>

<?php Pjax::end();?>