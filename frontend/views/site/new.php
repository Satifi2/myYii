<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'new';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-new">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>对于这里基本的语法我已经理解了,new类似于index页面</p>

    <code><?= __FILE__ ?></code>
</div>
