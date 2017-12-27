<?php
use yii\helpers\Url;
    include_once 'LiqPay.php';
?>
<H1 class="text-center">Ваш заказ принят</H1>
<H2 class="text-center">Желаете оплатить заказ онлайн?</H2>

<div class="container text-center" >
<div style="position:relative ; margin:auto">
<?php $liqpay = new LiqPay('i77978940624' , 'sD3DUo5GZsE61vfUnuQTOfWQmcNqab1L8Bb8F3T6');
$html = $liqpay->cnb_form(array(
'action'         => 'pay',
'amount'         => $model->sum * $rates->grn,
'currency'       => 'UAH',
'sandbox'		 => '1',
'description'    => 'Оплата заказа',
'result_url' 	 => 'veola/cart/callback',
'version'        => '3',
'dae'            => $model->id,
));?>

<?= $html?>

<a class="button" href="<?= Url::to('/')?>">Вернутся на главную</a>
</div>
</div>