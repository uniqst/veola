<?php

namespace backend\controllers;

use Yii;
use frontend\models\Stories;
use backend\models\SearchStories;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\UploadForm;
use yii\web\UploadedFile;

/**
 * StoriesController implements the CRUD actions for Stories model.
 */
class StoriesController extends Controller
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
     * Lists all Stories models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchStories();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $this->layout = 'main';
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Stories model.
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
     * Creates a new Stories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Stories();
        if ($model->load(Yii::$app->request->post())) {
              if (Yii::$app->request->isPost) {
                $str = substr(md5(microtime() . rand(0, 9999)), 0, 20);
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                $model->imageFile->saveAs('../../frontend/web/stori/' . $str . '.' . $model->imageFile->extension);
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
     * Updates an existing Stories model.
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
                    
                $model->imageFile->saveAs('../../frontend/web/stori/' . $str . '.' . $model->imageFile->extension);
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
     * Deletes an existing Stories model.
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
     * Finds the Stories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Stories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Stories::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
