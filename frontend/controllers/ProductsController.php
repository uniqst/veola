<?php
namespace frontend\controllers;

use Yii;
use yii\db\ActiveQuery;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Products;
use frontend\models\Category;
use frontend\models\ExchangeRates;
use frontend\models\Mainveola;
use yii\db\Expression;
use yii\helpers\Url;

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
        $model = Products::find()->where(['id' => $id])->with(['comments', 'groups', 'photo' => function(yii\db\ActiveQuery $query){
            $query->orderBy('photo.position_img');
        }])->one();
        
      
        $count = count($model->comments);
        $summ = 0;
        foreach($model->comments as $s){
            $summ += $s->rating;
        }
        if($count != 0) {
            $c = $summ / $count;
            $sum = ceil($c / 0.5) * 0.5;
        }
        return $this->render('product', compact('model', 'id', 'sum'));
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

    public function actionSearchs($s)

     {
        $rates = ExchangeRates::findOne(1);
        $s = Yii::$app->request->get('s');
        $s = explode(" ", $s);
        if(!empty($_GET['s'])):
        $model = Products::find()->where(['like', 'name', $s])->with('image')->all();
        ?>
        <ul class="collection">
            <?php
        foreach($model as $product):?>

        
        <a  href="<?= Url::to(['/products/product', 'id' => $product->id, 'name' => $product->name])?>">
        <li style="width:100%; border-bottom:1px solid grey" class="collection-item avatar">
      <img style="left:0; width:70px; height:70px" src="/img/products/<?= $product->image->img?>" alt="" class="circle">
      <span style="color:black" class="title"><?= $product->name?></span>
      <p style="color:red"><?= round($product->price * $rates->grn, 0) ?> грн.</p>
        </li>
        </a>
        
       
        <?php endforeach;?>
        </ul>
        
    
 

        <?php else:?>
         <script type="text/javascript">
           $(".search_result").fadeOut();
         </script>
        <?php endif; 
     }

}