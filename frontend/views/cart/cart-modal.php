<?php
use frontend\models\ExchangeRates;
$model = ExchangeRates::findOne(1);
?>

<?php if(!empty($session['cart'])): ?>
    <div class="table-responsive scroll-custom">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Наименование</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item):?>
                <tr>
                    <td><img src="/img/products/<?= $item['img']?>" width="50px"></td>
                    <td><?= $item['name']?></td>
                    <td><?= $item['qty']?></td>
                    <td><?= round($item['price'] * $model->grn, 0)?></td>
                    <td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></td>
                </tr>
            <?php endforeach?>
            <tr>
                <td colspan="4">Итого: </td>
                <td><?= $session['cart.qty']?></td>
            </tr>
            <tr>
                <td colspan="4">На сумму:</td>
                <td><?= round($session['cart.sum'] * $model->grn, 0)?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php else:?>
    <h3>Kорзина пуста</h3>
<?php endif;?>