<?php
use frontend\models\Order;
use frontend\models\Comments;
$count_order = Order::find()->where(['status' => '0'])->count();
$count_comments = Comments::find()->where(['status' => '0'])->count();
?>
<aside class="main-sidebar">

    <section class="sidebar">
        <!-- Sidebar user panel -->
       

        <!-- search form -->
        
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Слайдер', 'icon' => 'fa fa-user-circle-o', 'url' => ['/slider']],
                    ['label' => 'Главная страница', 'icon' => 'fa fa-user-circle-o', 'url' => ['/mainveola/update', 'id' => 1]],
                    ['label' => 'Категории', 'icon' => 'fa fa-user-circle-o', 'url' => ['/category']],
                    ['label' => "Комментарии(". $count_comments .")", 'icon' => 'fa fa-user-circle-o', 'url' => ['/comments']],
                    ['label' => 'Курс валют', 'icon' => 'fa fa-user-circle-o', 'url' => ['/exchange-rates/update', 'id' => 1]],
                    ['label' => 'Инструкции', 'icon' => 'fa fa-user-circle-o', 'url' => ['/instructions']],
                    ['label' => 'Товары', 'icon' => 'fa fa-user-circle-o', 'url' => ['/products']],
                    ['label' => "Заказы (". $count_order .")", 'icon' => 'fa fa-user-circle-o', 'url' => ['/order']],
                    ['label' => 'Профиль', 'icon' => 'fa fa-user-circle-o', 'url' => ['/user/update', 'id' => 1]],
                    ['label' => 'Разделы', 'icon' => 'fa fa-user-circle-o', 'url' => ['/pages']],
                    ['label' => 'Контакты', 'icon' => 'fa fa-user-circle-o', 'url' => ['/contacts/update', 'id' => 1]],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
