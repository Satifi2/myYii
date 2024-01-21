<?php

use app\models\monitoringdata;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Monitoringdatas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoringdata-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Monitoringdata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'data_id',
            'event_id',
            'monitoring_station',
            'monitoring_time',
            'radiation_level',
            //'environmental_impact:ntext',
            //'weather_data:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, monitoringdata $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'data_id' => $model->data_id]);
                 }
            ],
        ],
    ]); ?>


</div>
