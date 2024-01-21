<?php

use app\models\nuclearfacilities;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Nuclearfacilities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nuclearfacilities-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Nuclearfacilities', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'facility_id',
            'facility_name',
            'facility_type',
            'location',
            'operational_status',
            //'technical_specifications:ntext',
            //'safety_measures:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, nuclearfacilities $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'facility_id' => $model->facility_id]);
                 }
            ],
        ],
    ]); ?>


</div>
