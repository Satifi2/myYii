<?php

namespace backend\controllers;

use app\models\countriesreactions;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CountriesreactionsController implements the CRUD actions for countriesreactions model.
 */
class CountriesreactionsController extends Controller
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
     * Lists all countriesreactions models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => countriesreactions::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'reaction_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single countriesreactions model.
     * @param int $reaction_id Reaction ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($reaction_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($reaction_id),
        ]);
    }

    /**
     * Creates a new countriesreactions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new countriesreactions();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'reaction_id' => $model->reaction_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing countriesreactions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $reaction_id Reaction ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($reaction_id)
    {
        $model = $this->findModel($reaction_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'reaction_id' => $model->reaction_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing countriesreactions model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $reaction_id Reaction ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($reaction_id)
    {
        $this->findModel($reaction_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the countriesreactions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $reaction_id Reaction ID
     * @return countriesreactions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($reaction_id)
    {
        if (($model = countriesreactions::findOne(['reaction_id' => $reaction_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
