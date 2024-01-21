<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\incidents $model */

$this->title = 'Update Incidents: ' . $model->incident_id;
$this->params['breadcrumbs'][] = ['label' => 'Incidents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->incident_id, 'url' => ['view', 'incident_id' => $model->incident_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="incidents-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
