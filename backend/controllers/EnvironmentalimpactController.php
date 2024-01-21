<?php

namespace backend\controllers;

use app\models\environmentalimpact;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EnvironmentalimpactController implements the CRUD actions for environmentalimpact model.
 */
class EnvironmentalimpactController extends Controller
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
     * Lists all environmentalimpact models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => environmentalimpact::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'impact_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single environmentalimpact model.
     * @param int $impact_id Impact ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($impact_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($impact_id),
        ]);
    }

    /**
     * Creates a new environmentalimpact model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new environmentalimpact();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'impact_id' => $model->impact_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing environmentalimpact model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $impact_id Impact ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($impact_id)
    {
        $model = $this->findModel($impact_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'impact_id' => $model->impact_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing environmentalimpact model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $impact_id Impact ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($impact_id)
    {
        $this->findModel($impact_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the environmentalimpact model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $impact_id Impact ID
     * @return environmentalimpact the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($impact_id)
    {
        if (($model = environmentalimpact::findOne(['impact_id' => $impact_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
