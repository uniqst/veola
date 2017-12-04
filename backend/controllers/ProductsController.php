<?php

namespace backend\controllers;

use Yii;
use frontend\models\Products;
use backend\models\SearchProducts;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use frontend\models\Photo;
use yii\web\UploadedFile;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchProducts();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (Yii::$app->request->isPost) {
                $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
                if($model->imageFiles){
                    foreach ($model->imageFiles as $file) {
                        $str = substr(md5(microtime() . rand(0, 9999)), 0, 20);
                        $file->saveAs('../../frontend/web/img/products/' . $str . '.' . $file->extension);
                        $photo = new Photo();
                        $photo->product_id = $model->id;
                        $photo->img = $str . '.' . $file->extension;
                        $photo->save();
                    }
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (Yii::$app->request->isPost) {
                $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles');
                if($model->imageFiles){
                    foreach ($model->imageFiles as $file) {
                        $str = substr(md5(microtime() . rand(0, 9999)), 0, 20);
                        $file->saveAs('../../frontend/web/img/products/' . $str . '.' . $file->extension);
                        $photo = new Photo();
                        $photo->product_id = $model->id;
                        $photo->img = $str . '.' . $file->extension;
                        $photo->save();
                    }
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Products model.
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
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
