<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\monitoringdata $model */

$this->title = 'Update Monitoringdata: ' . $model->data_id;
$this->params['breadcrumbs'][] = ['label' => 'Monitoringdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->data_id, 'url' => ['view', 'data_id' => $model->data_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="monitoringdata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
