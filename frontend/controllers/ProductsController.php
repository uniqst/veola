<?php
namespace frontend\controllers;

use Yii;
use yii\db\ActiveQuery;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Products;
use frontend\models\Category;
use frontend\models\Mainveola;
use yii\db\Expression;

/**
 * Site controller
 */
class ProductsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $main = Mainveola::findOne(1);
        $model = Category::find()->orderBy('position')->all();
        return $this->render('index', compact('model', 'main'));
    }

    public function actionCategory($cat_id)
    {
        $model = Category::findOne($cat_id);
        return $this->render('category', compact('model'));
    }

    public function actionProduct($id)
    {
        $model = Products::find()->where(['id' => $id])->with(['comments', 'photo'])->one();
        $group = Products::find()->andWhere(['<>', 'id', $model->id])->all();
      
        $count = count($model->comments);
        $summ = 0;
        foreach($model->comments as $s){
            $summ += $s->rating;
        }
        if($count != 0) {
            $c = $summ / $count;
            $sum = ceil($c / 0.5) * 0.5;
        }
        return $this->render('product', compact('model', 'id', 'sum', 'group'));
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

}