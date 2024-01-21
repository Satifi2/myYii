<?php

namespace backend\controllers;

use app\models\monitoringdata;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MonitoringdataController implements the CRUD actions for monitoringdata model.
 */
class MonitoringdataController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all monitoringdata models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => monitoringdata::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'data_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single monitoringdata model.
     * @param int $data_id Data ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($data_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($data_id),
        ]);
    }

    /**
     * Creates a new monitoringdata model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new monitoringdata();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'data_id' => $model->data_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing monitoringdata model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $data_id Data ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($data_id)
    {
        $model = $this->findModel($data_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'data_id' => $model->data_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing monitoringdata model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $data_id Data ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($data_id)
    {
        $this->findModel($data_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the monitoringdata model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $data_id Data ID
     * @return monitoringdata the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($data_id)
    {
        if (($model = monitoringdata::findOne(['data_id' => $data_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
