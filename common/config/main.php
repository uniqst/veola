<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'language' => 'ru-RU', // <- здесь!
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
         'cart' => [
            'class' => 'dvizh\cart\Cart',
            'currency' => 'р.', //Валюта
            'currencyPosition' => 'after', //after или before (позиция значка валюты относительно цены)
            'priceFormat' => [2,'.', ''], //Форма цены
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'cart' => [
            'class' => 'dvizh\cart\Module',
        ],
    ],
    'name' => 'Veola'
];
