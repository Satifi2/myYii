<?php

use app\models\regulations;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Regulations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="regulations-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Regulations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'regulation_id',
            'regulation_name',
            'publication_date',
            'description:ntext',
            'applicable_scope',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, regulations $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'regulation_id' => $model->regulation_id]);
                 }
            ],
        ],
    ]); ?>


</div>
