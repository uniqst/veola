<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\SocialWeb */

$this->title = Yii::t('app', 'Social Web');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Social Webs'), 'url' => ['update', 'id' => $model->id]];
?>
<div class="social-web-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
