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
                ],
                'price' => [
                    'asc' => ['price' => SORT_ASC],
                    'desc' => ['price' => SORT_DESC],
                ],
                'date' => [
                    'asc' => ['created_at' => SORT_ASC],
                    'desc' => ['created_at' => SORT_DESC],
                ],

            ],
        ]);

        $query = Product::find()->with('image', 'comments')->joinWith(['category' => function(yii\db\ActiveQuery $query){
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