<?php

use app\models\countriesreactions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Countriesreactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countriesreactions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Countriesreactions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reaction_id',
            'country_name',
            'reaction_date',
            'reaction_description:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, countriesreactions $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'reaction_id' => $model->reaction_id]);
                 }
            ],
        ],
    ]); ?>


</div>
