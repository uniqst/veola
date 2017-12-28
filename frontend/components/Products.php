<?php
namespace frontend\components;

use Yii;
use yii\base\Widget;
use frontend\models\Products as Product;
use yii\data\Pagination;
use yii\data\Sort;

Class Products extends Widget{

    public function run(){


        $sort = new Sort([
            'attributes' => [
                'name' => [
                    'asc' => ['name' => SORT_ASC],
                    'desc' => ['name' => SORT_DESC],
                ],
                'price' => [
                    'asc' => ['price' => SORT_ASC],
                    'desc' => ['price' => SORT_DESC],
                ],
                'date' => [
                    'asc' => ['created_at' => SORT_ASC],
                    'desc' => ['created_at' => SORT_DESC],
                ],
                'rating' => [
                    'asc' => ['rating' => SORT_ASC],
                    'desc' => ['rating' => SORT_DESC],
                ]
            ],
        ]);


        $query = Product::find()
            ->andFilterWhere(['like', 'products.name', $_GET['s']])
            ->select([
                'products.*', // получить все атрибуты покупателя
                'ceil(SUM(comments.rating) / COUNT(comments.rating) / 0.5) * 0.5 AS rating' // вычислить количество заказов
            ])
            ->joinWith('comments') // обеспечить построение промежуточной таблицы
            ->groupBy('products.id')
            ->with('image', 'comments')->joinWith(['category' => function(yii\db\ActiveQuery $query){
            $query->andFilterWhere(['category.id' => Yii::$app->request->get('id')]);
        }])->orderBy($sort->orders)->distinct();
        // делаем копию выборки
        $countQuery = clone $query;
        // подключаем класс Pagination, выводим по 10 пунктов на страницу
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 15]);
        // приводим параметры в ссылке к ЧПУ
        $pages->pageSizeParam = false;
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('products', compact('model', 'pages', 'sort'));
    }
}