<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\environmentalimpact $model */

$this->title = $model->impact_id;
$this->params['breadcrumbs'][] = ['label' => 'Environmentalimpacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="environmentalimpact-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'impact_id' => $model->impact_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'impact_id' => $model->impact_id], [
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
            'impact_id',
            'impact_type',
            'location',
            'impact_description:ntext',
            'environmental_data:ntext',
        ],
    ]) ?>

</div>
