<?php

use app\models\healtheffects;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Healtheffects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healtheffects-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Healtheffects', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'effect_id',
            'health_condition',
            'radiation_exposure',
            'cancer_incidence_rate',
            'genetic_mutations',
            //'statistics:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, healtheffects $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'effect_id' => $model->effect_id]);
                 }
            ],
        ],
    ]); ?>


</div>
