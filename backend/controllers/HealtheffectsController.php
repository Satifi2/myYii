<?php

namespace backend\controllers;

use app\models\healtheffects;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HealtheffectsController implements the CRUD actions for healtheffects model.
 */
class HealtheffectsController extends Controller
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
     * Lists all healtheffects models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => healtheffects::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'effect_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single healtheffects model.
     * @param int $effect_id Effect ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($effect_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($effect_id),
        ]);
    }

    /**
     * Creates a new healtheffects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new healtheffects();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'effect_id' => $model->effect_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing healtheffects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $effect_id Effect ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($effect_id)
    {
        $model = $this->findModel($effect_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'effect_id' => $model->effect_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing healtheffects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $effect_id Effect ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($effect_id)
    {
        $this->findModel($effect_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the healtheffects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $effect_id Effect ID
     * @return healtheffects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($effect_id)
    {
        if (($model = healtheffects::findOne(['effect_id' => $effect_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
