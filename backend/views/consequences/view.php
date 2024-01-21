<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\consequences $model */

$this->title = $model->consequence_id;
$this->params['breadcrumbs'][] = ['label' => 'Consequences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="consequences-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'consequence_id' => $model->consequence_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'consequence_id' => $model->consequence_id], [
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
            'consequence_id',
            'consequence_type',
            'description:ntext',
        ],
    ]) ?>

</div>
