<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\environmentalimpact $model */

$this->title = 'Create Environmentalimpact';
$this->params['breadcrumbs'][] = ['label' => 'Environmentalimpacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="environmentalimpact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
