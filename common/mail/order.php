<?php
use yii\helpers\Url;
?>

<div class="table-responsive">
            <table class="table table-hover table-striped">
            
                <tbody>
                    <tr><td>Имя</td><td><?= $model->name?></td></tr>
                    <tr><td>Почта</td><td><?= $model->email?></td></tr>
                    <tr><td>Телефон</td><td><?= $model->phone?></td></tr>
                    <tr><td>Адрес</td><td><?= $model->address?></td></tr>
                    <tr><td>Способ доставки и оплаты</td><td><?= $model->delivery?></td></tr>
                    <tr><td>Адрес отделения</td><td><?= $model->address_delivery?></td></tr>
                    <tr><td>Количество</td><td><?= $model->qty?></td></tr>
                    <tr><td>Сумма</td><td><?= $model->sum?></td></tr>
                </tbody>
            </table>
        </div>

<div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($model->orderItems as $item):?>
                    <tr>
                        <td><a href="<?=Url::to(['http://veola.kiev.ua/products/product', 'id' => $item->id, 'name' => $item->name])?>"><img src="http://veola.kiev.ua/img/products/<?= $item->product->image->img?>" width="100px"></a></td>
                        <td><a href="<?=Url::to(['http://veola.kiev.ua/products/product', 'id' => $item->id, 'name' => $item->name])?>"><?= $item->name?></a></td>
                        <td><?= $item->qty_item?></td>
                        <td><?= $item->price?></td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>

        