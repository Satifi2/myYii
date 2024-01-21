<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\monitoringdata $model */

$this->title = 'Create Monitoringdata';
$this->params['breadcrumbs'][] = ['label' => 'Monitoringdatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoringdata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
