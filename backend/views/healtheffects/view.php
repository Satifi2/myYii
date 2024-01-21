<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\healtheffects $model */

$this->title = $model->effect_id;
$this->params['breadcrumbs'][] = ['label' => 'Healtheffects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="healtheffects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'effect_id' => $model->effect_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'effect_id' => $model->effect_id], [
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
            'effect_id',
            'health_condition',
            'radiation_exposure',
            'cancer_incidence_rate',
            'genetic_mutations',
            'statistics:ntext',
        ],
    ]) ?>

</div>
