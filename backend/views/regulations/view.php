<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\regulations $model */

$this->title = $model->regulation_id;
$this->params['breadcrumbs'][] = ['label' => 'Regulations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="regulations-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'regulation_id' => $model->regulation_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'regulation_id' => $model->regulation_id], [
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
            'regulation_id',
            'regulation_name',
            'publication_date',
            'description:ntext',
            'applicable_scope',
        ],
    ]) ?>

</div>
