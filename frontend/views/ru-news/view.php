<?php

/**
 *  Team: BaoSha
 *  Coding by 李星谊 2113601  1/20
 *  NuclearPollution frontend
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\RuNews $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Ru News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ru-news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title:ntext',
            'url:ntext',
            'author:ntext',
            'date:ntext',
            'description:ntext',
            'img_path:ntext',
            'comment_num',
            'score',
        ],
    ]) ?>

</div>
