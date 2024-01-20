<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '新闻列表';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    /* 添加表格的边框样式 */
    .custom-grid-view {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
    }

    /* 自定义样式以使 'news_content' 列自动换行 */
    .custom-word-wrap {
        word-wrap: break-word;
        white-space: normal !important;
    }
</style>

<div class="site-new">
    <h1><?= Html::encode($this->title) ?></h1>

    <h2>新闻列表</h2>

    <!-- 添加自定义样式到表格容器 -->
    <div class="custom-grid-view">
        <?= GridView::widget([
            'dataProvider' => new \yii\data\ArrayDataProvider([
                'allModels' => $newsData,
            ]),
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'event_date:date',
                'location',
                'headline',
                [
                    'attribute' => 'news_content',
                    'format' => 'ntext',
                    // 使用自定义样式使 'news_content' 列自动换行
                    'contentOptions' => ['class' => 'custom-word-wrap'],
                ],
            ],
        ]); ?>
    </div>

</div>
