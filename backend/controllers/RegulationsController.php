<?php

namespace backend\controllers;

use app\models\regulations;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegulationsController implements the CRUD actions for regulations model.
 */
class RegulationsController extends Controller
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
     * Lists all regulations models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => regulations::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'regulation_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single regulations model.
     * @param int $regulation_id Regulation ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($regulation_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($regulation_id),
        ]);
    }

    /**
     * Creates a new regulations model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new regulations();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'regulation_id' => $model->regulation_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing regulations model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $regulation_id Regulation ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($regulation_id)
    {
        $model = $this->findModel($regulation_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'regulation_id' => $model->regulation_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing regulations model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $regulation_id Regulation ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($regulation_id)
    {
        $this->findModel($regulation_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the regulations model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $regulation_id Regulation ID
     * @return regulations the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($regulation_id)
    {
        if (($model = regulations::findOne(['regulation_id' => $regulation_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
