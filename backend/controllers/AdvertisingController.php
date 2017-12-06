<?php

namespace backend\controllers;

use Yii;
use frontend\models\Advertising;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AdvertisingController implements the CRUD actions for Advertising model.
 */
class AdvertisingController extends Controller
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
     * Lists all Advertising models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Advertising::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Advertising model.
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
     * Creates a new Advertising model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Advertising();

        if ($model->load(Yii::$app->request->post())) {
              if (Yii::$app->request->isPost) {
                $str = substr(md5(microtime() . rand(0, 9999)), 0, 20);
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                $model->imageFile->saveAs('../../frontend/web/promo/' . $str . '.' . $model->imageFile->extension);
                $model->img = $str . '.' . $model->imageFile->extension;
        }
                $model->save();
             return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Advertising model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

       if ($model->load(Yii::$app->request->post())) {
              if (Yii::$app->request->isPost) {
                $str = substr(md5(microtime() . rand(0, 9999)), 0, 20);
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                if ($model->imageFile){
                    

                $model->imageFile->saveAs('../../frontend/web/promo/' . $str . '.' . $model->imageFile->extension);
                $model->img = $str . '.' . $model->imageFile->extension;
            }
        }
                $model->save();
             return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Advertising model.
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
     * Finds the Advertising model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Advertising the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Advertising::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
