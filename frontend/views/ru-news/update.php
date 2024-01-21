<?php

/**
 *  Team: BaoSha
 *  Coding by 李星谊 2113601  1/20
 *  NuclearPollution frontend
 */

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RuNews $model */

$this->title = 'Update Ru News: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Ru News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ru-news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
