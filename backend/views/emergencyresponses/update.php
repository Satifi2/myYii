<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\emergencyresponse $model */

$this->title = 'Update Emergencyresponse: ' . $model->response_id;
$this->params['breadcrumbs'][] = ['label' => 'Emergencyresponses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->response_id, 'url' => ['view', 'response_id' => $model->response_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emergencyresponse-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
