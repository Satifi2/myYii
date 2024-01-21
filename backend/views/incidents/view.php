<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\incidents $model */

$this->title = $model->incident_id;
$this->params['breadcrumbs'][] = ['label' => 'Incidents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="incidents-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'incident_id' => $model->incident_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'incident_id' => $model->incident_id], [
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
            'incident_id',
            'incident_date',
            'location',
            'impact_range',
            'incident_level',
            'description:ntext',
            'response_measures:ntext',
        ],
    ]) ?>

</div>
