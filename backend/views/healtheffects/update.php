<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\healtheffects $model */

$this->title = 'Update Healtheffects: ' . $model->effect_id;
$this->params['breadcrumbs'][] = ['label' => 'Healtheffects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->effect_id, 'url' => ['view', 'effect_id' => $model->effect_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="healtheffects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
