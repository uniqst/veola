<?php

namespace backend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use frontend\models\Profile;
use frontend\models\Comments;
use frontend\models\Photo;
use frontend\models\UploadForm;
use frontend\models\Filters;
use frontend\models\FiltersValue;
use frontend\models\CategoryValue;
use frontend\models\Category;
use yii\web\UploadedFile;
use backend\models\SearchProfile;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProfileController implements the CRUD actions for Profile model.
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Profile models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchProfile();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $del = Yii::$app->request->get('del');
        if($del){
            $del = Photo::find()->where(['id' => $del])->one();
            $del->delete();
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Profile model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $comments = Comments::find()->where(['profile_id' => $id]); 
        $provider = new ActiveDataProvider([
    'query' => $comments,
    'pagination' => [
        'pageSize' => 10,
    ],
]);
        return $this->render('view', [
            'model' => Profile::find()->where(['id' => $id])->with('photo')->one(),
            'comments' => $provider,
        ]);
    }

    /**
     * Creates a new Profile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Profile();
        $photo = new UploadForm();

        $filters = Filters::find()->where(['parent_id' => 0])->with('value')->all();
        $value = new FiltersValue();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            foreach($_POST['value'] as $key=> $val){
                
                    $value = new FiltersValue();
                    $value->product_id = $model->id;
                    $value->filter_id = $key;
                    $value->value = $val;
                    $value->save();
                 
            }
            $photo->imageFiles = UploadedFile::getInstances($photo, 'imageFiles');
                foreach ($photo->imageFiles as $file) {
                    $str = substr(md5(microtime() . rand(0, 9999)), 0, 20);
                    $file->saveAs('../../frontend/web/photo/' . $str . '.' . $file->extension);
                    $image = new Photo();
                    $image->profile_id = $model->id;
                    $image->src = $str . '.' . $file->extension;
                    $image->save();
                }
             return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'photo' => $photo,
                'filters' => $filters,
                'value' => $value,
            ]);
        }
    }

    /**
     * Updates an existing Profile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $filters = Filters::find()->where(['parent_id' => 0])->with('value')->all();
        $model = $this->findModel($id);
        $photo = new UploadForm();
        $value = FiltersValue::find()->where(['product_id' => 'id'])->all();
         
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            foreach($_POST['value'] as $key=> $val){
                $value = FiltersValue::find()->where(['filter_id' => $key, 'product_id' => $model->id])->one();
                if(empty($value)){


                    $value = new FiltersValue();
                }
                    $value->product_id = $model->id;
                    $value->filter_id = $key;
                    $value->value = $val;
                    $value->save();
                 
            }
                if(!empty($_FILES['UploadForm'])){

                $photo->imageFiles = UploadedFile::getInstances($photo, 'imageFiles');
                    foreach ($photo->imageFiles as $file) {
                        $str = substr(md5(microtime() . rand(0, 9999)), 0, 20);
                        $file->saveAs('../../frontend/web/photo/' . $str . '.' . $file->extension);
                        $image = new Photo();
                        $image->profile_id = $model->id;
                        $image->src = $str . '.' . $file->extension;
                        $image->save();
                        }
                    }
           return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'photo' => $photo,
                'filters' => $filters,
                'value' => $value,
            ]);
        }
    }

    /**
     * Deletes an existing Profile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Profile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Profile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Profile::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
