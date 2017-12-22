<?php
include_once 'LiqPay.php';
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>

<div class="container" style='padding-bottom: 15px;'>
	<?php if(!$_GET['step']):?>
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
	<div class="table-responsive" style='min-height: 75vh;'>
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
                    <td><a href="<?= Url::to(['/products/product', 'id' => $id])?>"><img src="/img/products/<?= $item['img']?>" width="100px"></a></td>
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

				
	<a class="button" href="<?= Url::to(['/cart/view', 'step' => 'step2'])?>">Продолжить</a>	
<?php else:?>
	<h3>Kорзина пуста</h3>
<?php endif;?>
<?php elseif($_GET['step'] == 'step2'):?>
	<H1>Доставка</H1>
	<p>
По Украине-службами доставки<br>
<br>
Стоимость доставки согласно тарифов перевозчика.<br>
<br>
Возможна доставка следующими перевозчиками:<br>
<br>
"Новая почта"<br>
<br>
"Ин-тайм"<br>
<br>
"Автолюкс"<br>
</p>
<a class="button" href="<?= Url::to(['/cart/view', 'step' => 'step3'])?>">Продолжить</a>	
<?php elseif($_GET['step'] == 'step3'):?>
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


	<div class="table-responsive">
	<?php Pjax::begin()?>
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
                    <td><a href="<?= Url::to(['/products/product', 'id' => $id])?>"><img src="/img/products/<?= $item['img']?>" width="100px"></a></td>
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
		<?php Pjax::end()?>
		<!-- <?php $liqpay = new LiqPay('i41459134084' , '6x9lAfTxUNcu0YbKyOePa0M1a3m4RUgDfs7gndDq');
$html = $liqpay->cnb_form(array(
'action'         => 'pay',
'amount'         => $session['cart.sum'],
'currency'       => 'UAH',
'sandbox'		 => '1',
'description'    => 'Оплата заказа',
'result_url' 	 => 'veola/cart/callback',
'version'        => '3',
'dae'	 => json_encode($session['cart'])

));?> -->
	</div>
	<hr/>
	<?php $form = ActiveForm::begin()?>
	<?= $form->field($order, 'name')?>
	<?= $form->field($order, 'email')?>
	<?= $form->field($order, 'phone')?>
	<?= $form->field($order, 'address')?>
	<?= Html::submitbutton('Заказать', ['class' => 'btn btn-success pay'])?>
	<?php $form = ActiveForm::end()?>
<?php endif;?>
</div>