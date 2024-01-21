<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\regulations $model */

$this->title = 'Create Regulations';
$this->params['breadcrumbs'][] = ['label' => 'Regulations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regulations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
