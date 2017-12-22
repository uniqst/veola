<?php
    include_once 'LiqPay.php';
?>


<div class="container">
<?php $liqpay = new LiqPay('i41459134084' , '6x9lAfTxUNcu0YbKyOePa0M1a3m4RUgDfs7gndDq');
$html = $liqpay->cnb_form(array(
'action'         => 'pay',
'amount'         => '1',
'currency'       => 'UAH',
'sandbox'		 => '1',
'description'    => 'Оплата заказа',
'result_url' 	 => 'veola/cart/callback',
'version'        => '3',
'dae'            => $model->id,
));?>

<?= $html?></div>