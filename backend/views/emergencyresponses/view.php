<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\emergencyresponse $model */

$this->title = $model->response_id;
$this->params['breadcrumbs'][] = ['label' => 'Emergencyresponses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="emergencyresponse-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'response_id' => $model->response_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'response_id' => $model->response_id], [
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
            'response_id',
            'event_id',
            'response_plan:ntext',
            'response_team',
            'resource_allocation:ntext',
            'contact_information:ntext',
        ],
    ]) ?>

</div>
