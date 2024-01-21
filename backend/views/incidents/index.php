<?php

use app\models\incidents;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Incidents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incidents-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Incidents', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'incident_id',
            'incident_date',
            'location',
            'impact_range',
            'incident_level',
            //'description:ntext',
            //'response_measures:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, incidents $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'incident_id' => $model->incident_id]);
                 }
            ],
        ],
    ]); ?>


</div>
