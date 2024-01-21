<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\countriesreactions $model */

$this->title = 'Update Countriesreactions: ' . $model->reaction_id;
$this->params['breadcrumbs'][] = ['label' => 'Countriesreactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reaction_id, 'url' => ['view', 'reaction_id' => $model->reaction_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="countriesreactions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
