<?php

namespace backend\controllers;

use app\models\consequences;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ConsequencesController implements the CRUD actions for consequences model.
 */
class ConsequencesController extends Controller
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
     * Lists all consequences models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => consequences::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'consequence_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single consequences model.
     * @param int $consequence_id Consequence ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($consequence_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($consequence_id),
        ]);
    }

    /**
     * Creates a new consequences model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new consequences();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'consequence_id' => $model->consequence_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing consequences model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $consequence_id Consequence ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($consequence_id)
    {
        $model = $this->findModel($consequence_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'consequence_id' => $model->consequence_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing consequences model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $consequence_id Consequence ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($consequence_id)
    {
        $this->findModel($consequence_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the consequences model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $consequence_id Consequence ID
     * @return consequences the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($consequence_id)
    {
        if (($model = consequences::findOne(['consequence_id' => $consequence_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
