<?php

use app\models\emergencyresponse;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Emergencyresponses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emergencyresponse-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Emergencyresponse', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'response_id',
            'event_id',
            'response_plan:ntext',
            'response_team',
            'resource_allocation:ntext',
            //'contact_information:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, emergencyresponse $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'response_id' => $model->response_id]);
                 }
            ],
        ],
    ]); ?>


</div>
