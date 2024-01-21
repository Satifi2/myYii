<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\emergencyresponse $model */

$this->title = 'Create Emergencyresponse';
$this->params['breadcrumbs'][] = ['label' => 'Emergencyresponses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emergencyresponse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
