<?php

/**
 *  Team: BaoSha
 *  Coding by 李星谊 2113601  1/16
 *  NuclearPollution frontend
 */

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RuNews $model */

$this->title = 'Create Ru News';
$this->params['breadcrumbs'][] = ['label' => 'Ru News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ru-news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
