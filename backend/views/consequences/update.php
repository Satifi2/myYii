<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\consequences $model */

$this->title = 'Update Consequences: ' . $model->consequence_id;
$this->params['breadcrumbs'][] = ['label' => 'Consequences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->consequence_id, 'url' => ['view', 'consequence_id' => $model->consequence_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="consequences-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
