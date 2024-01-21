<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\nuclearfacilities $model */

$this->title = $model->facility_id;
$this->params['breadcrumbs'][] = ['label' => 'Nuclearfacilities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nuclearfacilities-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'facility_id' => $model->facility_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'facility_id' => $model->facility_id], [
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
            'facility_id',
            'facility_name',
            'facility_type',
            'location',
            'operational_status',
            'technical_specifications:ntext',
            'safety_measures:ntext',
        ],
    ]) ?>

</div>
