<?php
use yii\helpers\Url;
?>
<pre>
    <?php print_r($data);?>
</pre>
<?php if($data['status'] == 'sandbox'):?>
    <h1>Успешная оплата</h1>
    <h2>Сумма: <?= $data['amount']?> грн.</h2>
    <table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Фото</th>
					<th>Наименование</th>
					<th>Кол-во</th>
					<th>Цена</th>
					<th>Сумма</th>
				</tr>
			</thead>
			<tbody>
            <?php $qty = 0 ?>
			<?php foreach(json_decode($data['dae'], true) as $id => $item):?>
            <?php $qty += $item['qty']?>
				<tr>
                    <td><a href="<?= Url::to(['/products/product', 'id' => $id])?>"><img src="/img/products/<?= $item['img']?>" width="100px"></a></td>
					<td><a href="<?= Url::to(['/products/product', 'id' => $id])?>"><?= $item['name']?></a></td>
					<td><?= $item['qty']?></td>
					<td><?= $item['price']?></td>
					<td><?= $item['qty'] * $item['price']?></td>
				</tr>	
			<?php endforeach?>
				<tr>
					<td colspan="4">Итого: </td>
					<td><?= $qty?></td>
				</tr>
				<tr>
					<td colspan="4">На сумму:</td>
					<td><?= $data['amount']?></td>
				</tr>	
			</tbody>
		</table>
<?php else:?>
    <<h1>Это фиаско братан</h1>  
<?php endif;?>
