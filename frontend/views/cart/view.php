<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<div class="container">
	<?php if(Yii::$app->session->hasFlash('success') ): ?>
	<div class="alert alert-succes alert-dismissble" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<?php endif;?>

	<?php if( Yii::$app->session->hasFlash('error') ):?>
		<div class="alert alert-danger alert-dismissble" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php echo Yii::$app->session->getFlash('error'); ?>
		</div>
	<?php endif;?>		

	<?php if(!empty($session['cart'])): ?>
	<div class="table-responsive">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Фото</th>
					<th>Наименование</th>
					<th>Кол-во</th>
					<th>Цена</th>
					<th>Сумма</th>
					<th><span class="glyphicon glyphicon-remove" aria-hidden="true"></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($session['cart'] as $id => $item):?>
				<tr>
					<td><img src="/img/products/<?= $item['img']?>" width="200px"></td>
					<td><a href="<?= Url::to(['/products/product', 'id' => $id])?>"><?= $item['name']?></a></td>
					<td><?= $item['qty']?></td>
					<td><?= $item['price']?></td>
					<td><?= $item['qty'] * $item['price']?></td>
					<td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></td>
				</tr>	
			<?php endforeach?>
				<tr>
					<td colspan="4">Итого: </td>
					<td><?= $session['cart.qty']?></td>
				</tr>
				<tr>
					<td colspan="4">На сумму:</td>
					<td><?= $session['cart.sum']?></td>
				</tr>	
			</tbody>
		</table>
	</div>
	<hr/>
	<?php $form = ActiveForm::begin()?>
	<?= $form->field($order, 'name')?>
	<?= $form->field($order, 'email')?>
	<?= $form->field($order, 'phone')?>
	<?= $form->field($order, 'address')?>
	<?= Html::submitbutton('Заказать', ['class' => 'btn btn-success'])?>
	<?php $form = ActiveForm::end()?>				
<?php else:?>
	<h3>Kорзина пуста</h3>
<?php endif;?>
</div>