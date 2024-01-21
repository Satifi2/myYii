<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\healtheffects $model */

$this->title = 'Create Healtheffects';
$this->params['breadcrumbs'][] = ['label' => 'Healtheffects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healtheffects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
