<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\environmentalimpact $model */

$this->title = 'Update Environmentalimpact: ' . $model->impact_id;
$this->params['breadcrumbs'][] = ['label' => 'Environmentalimpacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->impact_id, 'url' => ['view', 'impact_id' => $model->impact_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="environmentalimpact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
