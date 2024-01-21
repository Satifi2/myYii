<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\japannuclearnews $model */

$this->title = 'Create Japannuclearnews';
$this->params['breadcrumbs'][] = ['label' => 'Japannuclearnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="japannuclearnews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
