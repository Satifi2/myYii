<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\monitoringdata $model */

$this->title = $model->data_id;
$this->params['breadcrumbs'][] = ['label' => 'Monitoringdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="monitoringdata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'data_id' => $model->data_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'data_id' => $model->data_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'data_id',
            'event_id',
            'monitoring_station',
            'monitoring_time',
            'radiation_level',
            'environmental_impact:ntext',
            'weather_data:ntext',
        ],
    ]) ?>

</div>
