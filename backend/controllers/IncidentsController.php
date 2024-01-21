<?php

namespace backend\controllers;

use app\models\incidents;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IncidentsController implements the CRUD actions for incidents model.
 */
class IncidentsController extends Controller
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
     * Lists all incidents models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => incidents::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'incident_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single incidents model.
     * @param int $incident_id Incident ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($incident_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($incident_id),
        ]);
    }

    /**
     * Creates a new incidents model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new incidents();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'incident_id' => $model->incident_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing incidents model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $incident_id Incident ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($incident_id)
    {
        $model = $this->findModel($incident_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'incident_id' => $model->incident_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing incidents model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $incident_id Incident ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($incident_id)
    {
        $this->findModel($incident_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the incidents model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $incident_id Incident ID
     * @return incidents the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($incident_id)
    {
        if (($model = incidents::findOne(['incident_id' => $incident_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
