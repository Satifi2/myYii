<?php

use app\models\consequences;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Consequences';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consequences-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Consequences', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'consequence_id',
            'consequence_type',
            'description:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, consequences $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'consequence_id' => $model->consequence_id]);
                 }
            ],
        ],
    ]); ?>


</div>
