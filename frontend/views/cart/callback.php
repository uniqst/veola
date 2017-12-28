<?php
use yii\helpers\Url;
?>
<?php if($data['status'] == 'success'):?>
    <h1>Успешная оплата</h1>
    <h2>Сумма: <?= $data['amount']?> грн.</h2>
    
<?php else:?>
    <<h1>Ошибка</h1>  
<?php endif;?>
