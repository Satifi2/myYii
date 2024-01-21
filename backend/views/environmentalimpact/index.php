<?php

use app\models\environmentalimpact;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Environmentalimpacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="environmentalimpact-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Environmentalimpact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'impact_id',
            'impact_type',
            'location',
            'impact_description:ntext',
            'environmental_data:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, environmentalimpact $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'impact_id' => $model->impact_id]);
                 }
            ],
        ],
    ]); ?>


</div>
