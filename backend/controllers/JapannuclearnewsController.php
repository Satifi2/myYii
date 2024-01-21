<?php

namespace backend\controllers;

use app\models\japannuclearnews;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JapannuclearnewsController implements the CRUD actions for japannuclearnews model.
 */
class JapannuclearnewsController extends Controller
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
     * Lists all japannuclearnews models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => japannuclearnews::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'news_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single japannuclearnews model.
     * @param int $news_id News ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($news_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($news_id),
        ]);
    }

    /**
     * Creates a new japannuclearnews model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new japannuclearnews();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'news_id' => $model->news_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing japannuclearnews model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $news_id News ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($news_id)
    {
        $model = $this->findModel($news_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'news_id' => $model->news_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing japannuclearnews model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $news_id News ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($news_id)
    {
        $this->findModel($news_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the japannuclearnews model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $news_id News ID
     * @return japannuclearnews the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($news_id)
    {
        if (($model = japannuclearnews::findOne(['news_id' => $news_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
