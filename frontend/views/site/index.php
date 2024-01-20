<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4">在前端的视图层可以修改每一个site的文字!例如,index主页的文字</h1>
            <p class="fs-5 fw-light">这个就是最单纯的html</p>
            <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">点击这个按钮可以跳转yiiframework是因为a标签</a></p>
            <!-- 显示用户名 -->
            <p>First user's username: <?= Html::encode($firstUser->username) ?></p>
        </div>
    </div>
    
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>下面的话也是单纯的html</h2>

                <p>测试1</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">也是a标签，Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>下面的话也是单纯的html</h2>

                <p>测试2</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">也是a标签，Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>下面的话也是单纯的html</h2>

                <p>测试3</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/extensions/">也是a标签，Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
