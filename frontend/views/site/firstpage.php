<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'First Page'; // 设置页面标题
$this->params['breadcrumbs'][] = $this->title; // 添加面包屑导航

?>
<div class="site-firstpage">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the content of the First Page.</p>

    <code><?= __FILE__ ?></code>
</div>
