<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\japannuclearnews $model */

$this->title = 'Update Japannuclearnews: ' . $model->news_id;
$this->params['breadcrumbs'][] = ['label' => 'Japannuclearnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->news_id, 'url' => ['view', 'news_id' => $model->news_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="japannuclearnews-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
