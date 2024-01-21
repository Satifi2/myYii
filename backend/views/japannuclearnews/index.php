<?php

use app\models\japannuclearnews;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Japannuclearnews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="japannuclearnews-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Japannuclearnews', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'news_id',
            'event_date',
            'location',
            'headline',
            'news_content:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, japannuclearnews $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'news_id' => $model->news_id]);
                 }
            ],
        ],
    ]); ?>


</div>
