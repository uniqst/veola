<?php
namespace frontend\controllers;

use Yii;
use yii\db\ActiveQuery;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Products;
use frontend\models\Category;
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
        $model = Category::find()->all();
        return $this->render('index', compact('model'));
    }

    public function actionCategory($id)
    {
        $model = Category::findOne($id);
        return $this->render('category', compact('model'));
    }

    public function actionProduct($id)
    {
        $model = Products::find()->where(['id' => $id])->with(['comments', 'photo'])->one();
        $group = Products::find()->where(['group' => explode(" ", $model->group)])->andWhere(['<>', 'id', $model->id])->all();
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