<?php
use yii\helpers\Url;
?>
<?php if($data['status'] == 'sandbox'):?>
    <h1>Успешная оплата</h1>
    <h2>Сумма: <?= $data['amount']?> грн.</h2>
    
<?php else:?>
    <<h1>Это фиаско братан</h1>  
<?php endif;?>
