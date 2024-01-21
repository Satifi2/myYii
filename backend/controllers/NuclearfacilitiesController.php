<?php

namespace backend\controllers;

use app\models\nuclearfacilities;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NuclearfacilitiesController implements the CRUD actions for nuclearfacilities model.
 */
class NuclearfacilitiesController extends Controller
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
     * Lists all nuclearfacilities models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => nuclearfacilities::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'facility_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single nuclearfacilities model.
     * @param int $facility_id Facility ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($facility_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($facility_id),
        ]);
    }

    /**
     * Creates a new nuclearfacilities model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new nuclearfacilities();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'facility_id' => $model->facility_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing nuclearfacilities model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $facility_id Facility ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($facility_id)
    {
        $model = $this->findModel($facility_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'facility_id' => $model->facility_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing nuclearfacilities model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $facility_id Facility ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($facility_id)
    {
        $this->findModel($facility_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the nuclearfacilities model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $facility_id Facility ID
     * @return nuclearfacilities the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($facility_id)
    {
        if (($model = nuclearfacilities::findOne(['facility_id' => $facility_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
