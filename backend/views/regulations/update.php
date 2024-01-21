<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\regulations $model */

$this->title = 'Update Regulations: ' . $model->regulation_id;
$this->params['breadcrumbs'][] = ['label' => 'Regulations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->regulation_id, 'url' => ['view', 'regulation_id' => $model->regulation_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="regulations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
