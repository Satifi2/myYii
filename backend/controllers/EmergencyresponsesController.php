<?php

namespace backend\controllers;

use app\models\emergencyresponse;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EmergencyresponsesController implements the CRUD actions for emergencyresponse model.
 */
class EmergencyresponsesController extends Controller
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
     * Lists all emergencyresponse models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => emergencyresponse::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'response_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single emergencyresponse model.
     * @param int $response_id Response ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($response_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($response_id),
        ]);
    }

    /**
     * Creates a new emergencyresponse model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new emergencyresponse();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'response_id' => $model->response_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing emergencyresponse model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $response_id Response ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($response_id)
    {
        $model = $this->findModel($response_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'response_id' => $model->response_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing emergencyresponse model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $response_id Response ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($response_id)
    {
        $this->findModel($response_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the emergencyresponse model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $response_id Response ID
     * @return emergencyresponse the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($response_id)
    {
        if (($model = emergencyresponse::findOne(['response_id' => $response_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
