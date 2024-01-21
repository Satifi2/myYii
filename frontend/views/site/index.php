<?php

/**
 *  Team: Baosha
 *  Coding by 李星谊 2113601 
 *   杜怡兴 2112847
 *   杨淇 2112893
 *   王健行 2111065
 *           2024/1/16
 *  frontend
 */

/** @var yii\web\View $this */

$this->title = 'R-U War intergrade';

use frontend\models\CountryNum;
use frontend\models\RuNews;
use frontend\models\Weapons;
use frontend\models\RCasualties;
use frontend\models\Suggestion;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

if (Yii::$app->session->hasFlash('success_save'))
    echo "<script>alert('" . Yii::$app->session->getFlash('success_save') . "')</script>";
if (Yii::$app->session->getFlash('login') == 'Have not logged in.') {
    echo "<script>alert('Please log in first!')</script>";
    Url::to(['#login']);
}
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="yiiapp">
    <meta name="author" content="Baosha">
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/icon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/icon/apple-touch-icon-57x57.png">

    <title>Frontend</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/cubeportfolio.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/pe-icons.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/timeline.css" rel="stylesheet">

    <script src="assets/js/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            'use strict';
            jQuery('#headerwrap').backstretch([
                "assets/img/bg/background1.jpg",
                "assets/img/bg/background2.jpg",
                "assets/img/bg/background3.jpg"
            ], {
                duration: 8000,
                fade: 800
            });
        });
    </script>
</head>

<body>

    <div class="preloader">
        <div class="preloader-img">
            <img src="assets/img/loading-spin.svg" width="100" alt="Loading icon" />
        </div>
    </div>

    <div id="searchwrapper" class="sb-slide">
        <div class="container">
            <div id="search">
                <button type="button" class="close">x</button>
                <form>
                    <input type="search" value="" placeholder="type keyword(s) here" />
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>


    <div id="main-navigation" class="navbar navbar-inverse navbar-fixed-top smoothtransition fadeInDown sb-slide" data-wow-delay="1s" role="navigation">
        <div class="container smoothtransition">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2><a class="navbar-brand" href="index.php">Baosha</a></h2>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#about-us">About</a></li>
                    <li><a class="page-scroll" href="#timeline">Timeline</a></li>
                    <li><a class="page-scroll" href="#losses">Losses</a></li>
                    <li><a class="page-scroll" href="#news">News</a></li>
                    <li><a class="page-scroll" href="#weapons">Weapons</a></li>
                    <li><a class="page-scroll" href="#map">Front Map</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                    <li><a id="searchtrigger" href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <header id="headerwrap" class="fullscreen">
        <div class="vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="fancy wow fadeInDown" data-wow-delay="1.5s"><span><strong>Baosha</strong></span></h3>
                        <h1 class="mb30 wow fadeInUp" data-wow-delay="2s">Nuclear Pollution</h1>
                        <a class="page-scroll btn btn-theme btn-lg btn-white wow fadeInUp" data-wow-delay="2.5s" href="#about-us">Have A Look</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="about-us" class="white section-wrapper">
        <div class="section-inner nopaddingbottom">
            <div class="container">
                <div class="row wow fadeInDown">
                    <div class="col-lg-12">
                        <h2 class="section-heading"><strong>About</strong> Us</h2>
                        <h3 class="section-subheading text-muted">Show the website develop team profiles and the purpose of this website.</h3>
                    </div>
                </div>
                <div class="row mb100 wow fadeInUp">
                    <div class="col-md-6">
                        <p>这个网站是南开大学《互联网数据库开发》课程Baosha小组的小组作业。我们<strong>通过爬虫收集了核污染全面的信息</strong>，通过我们的网站，可以深入了解核污染的各个方面，包括其<strong>后果、各国的反应、紧急响应、环境影响、健康效应、历史事件、最新日本核新闻、人口迁移、监测数据、核设施、核事故、辐射水平、法规以及提供建议的机会</strong>。
                            我们的网站提供了丰富的信息资源，并通过<strong>柱状图、条形图、折线图、散点图、热力图、箱型图和雷达图等可视化工具</strong>，帮助您更清晰地了解核污染的数据。</p>
                        <p>我们的小组成员包括：王健行、杨淇、李星谊、杜怡兴（从左到右），可以将鼠标悬停到对应的头像上，来查看名字</p>
                        <p class="mt"><a href="#contact" class="btn btn-primary btn-theme page-scroll">Get In Touch</a></p>
                    </div>

                    <div class="col-md-6">
                        <script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>
                        <div id="data-chart" style="width: 800px; height: 400px;"></div>
                        <script>
                            var data = ['后果', '各国的反应', '紧急响应', '环境影响', '健康效应', '历史事件', '最新日本核新闻', '人口迁移', '监测数据', '核设施', '核事故', '辐射水平', '法规'];
                            var amount = [14, 21, 12, 8, 9, 15, 30, 32, 50, 42, 13, 21, 6];

                            var chartDom = document.getElementById('data-chart');
                            var myChart = echarts.init(chartDom);
                            var option;

                            option = {
                                title: {
                                    text: '各数据表数据量统计',
                                    subtext: '单位：条',
                                    x: 'center'
                                },
                                tooltip: {
                                    trigger: 'axis'
                                },
                                xAxis: {
                                    type: 'category',
                                    data: data,
                                    axisLabel: {
                                        interval: 0,
                                        rotate: 45
                                    }
                                },
                                yAxis: {
                                    type: 'value'
                                },
                                series: [{
                                    data: amount,
                                    type: 'bar',
                                    barWidth: '40%',
                                    label: {
                                        show: true,
                                        position: 'top'
                                    }
                                }]
                            };

                            myChart.setOption(option);
                        </script>
                    </div>
                </div>
                <div class="row mb100">
                    <div class="col-sm-3 col-xs-12">
                        <figure class="hover-item">
                            <img src="assets/img/team/wjx.jpg" class="img-responsive" alt="image">
                            <figcaption>
                                <h3><strong>王健行 2111065</strong></h3>
                                <h2></h2>
                                <p class="icon-links pull-left fullwidth-me text-left">
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <figure class="hover-item">
                            <img src="assets/img/team/yq.jpg" class="img-responsive" alt="image">
                            <figcaption>
                                <h3><strong>杨淇 2112893</strong></h3>
                                <h2></h2>
                                <p class="icon-links pull-left fullwidth-me text-left">
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <figure class="hover-item">
                            <img src="assets/img/team/lxy.jpg" class="img-responsive" alt="image">
                            <figcaption>
                                <h3><strong>李星谊 2113601</strong></h3>
                                <h2></h2>
                                <p class="icon-links pull-left fullwidth-me text-left">
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <figure class="hover-item">
                            <img src="assets/img/team/dyx.jpg" class="img-responsive" alt="image">
                            <figcaption>
                                <h3><strong>杜怡兴 2112847</strong></h3>
                                <h2></h2>
                                <p class="icon-links pull-left fullwidth-me text-left">
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        
    </section>



    <section id="timeline" class="timeline-outer">
        <div class="container" id="content">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h2 class="section-heading"><strong>Timeline</strong> Of the Fukushima incident</h2>
                    <a href="https://www.thepaper.cn/newsDetail_forward_24349085">learn more >></a>
                    <ul class="timeline">
                        <li class="event" data-date="2011">
                            <h3>2011</h3>
                            <p>March 11: A massive earthquake and tsunami led to the meltdown of three reactors at the Fukushima Daiichi plant.</p>
                            <p>March 12: Following a hydrogen explosion at the plant, a 20km evacuation order was issued.</p>
                            <p>April 4: TEPCO began releasing contaminated water into the Pacific due to storage capacity issues.</p>
                            <p>April 12: The event was elevated to a category 7 nuclear accident.</p>
                            <p>December 16: The reactors were declared in a stable state of "cold shutdown."</p>
                        </li>
                        <li class="event" data-date="2012">
                            <h3>2012</h3>
                            <p>July 23: An investigation concluded that the disaster was due to inadequate safety and crisis management.</p>
                        </li>
                        <li class="event" data-date="2013">
                            <h3>2013</h3>
                            <p>March 30: The Advanced Liquid Processing System (ALPS) began operating to treat contaminated water.</p>
                            <p>July 22: TEPCO acknowledged ongoing radioactive water leaks into groundwater.</p>
                        </li>
                        <li class="event" data-date="2014">
                            <h3>2014</h3>
                            <p>December 22: Spent nuclear fuel rods were removed from one reactor.</p>
                        </li>
                        <li class="event" data-date="2016">
                            <h3>2016</h3>
                            <p>March 31: An underground wall was introduced to reduce groundwater contamination.</p>
                        </li>
                        <li class="event" data-date="2018">
                            <h3>2018</h3>
                            <p>October 1: TEPCO admitted that water treated on-site still contained radioactive materials.</p>
                        </li>
                        <li class="event" data-date="2020">
                            <h3>2020</h3>
                            <p>February 10: A government panel recommended controlled water release into the sea.</p>
                        </li>
                        <li class="event" data-date="2021">
                            <h3>2021</h3>
                            <p>December 28: Japan outlined a plan for the water release, including safety and compensation measures.</p>
                        </li>
                        <li class="event" data-date="2023">
                            <h3>2023</h3>
                            <p>July 4: The IAEA approved Japan's water release plan after a two-year review.</p>
                            <p>August 22: Prime Minister Kishida announced the imminent discharge.</p>
                            <p>August 24: TEPCO began releasing the water.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="divider-wrapper-a section-wrapper opaqued" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="text-center">
                            <span class="stat-icon"><i class="pe-7s-timer fa-4x"></i></span>
                            <h2><span class="countup">10248</span></h2>
                            <h6>Hours Saved</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="text-center">
                            <span class="stat-icon"><i class="pe-7s-cloud-upload fa-4x"></i></span>
                            <h2><span class="countup">2035945</span></h2>
                            <h6>Files Uploaded</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="text-center">
                            <span class="stat-icon"><i class="pe-7s-tools fa-4x"></i></span>
                            <h2><span class="countup">24</span></h2>
                            <h6>Hours Of Support</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="text-center">
                            <span class="stat-icon"><i class="pe-7s-like fa-4x"></i></span>
                            <h2><span class="countup">99999999</span></h2>
                            <h6>Social Shares</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--战争损失图 使用echarts-->
    <section class="white echarts" id="losses">
        <div class="section-inner echarts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInDown">
                        <h2 class="section-heading">War <strong>Losses</strong> </h2>
                        <h3 class="section-subheading text-muted">Loss of personnel and weapons caused by war.</h3>
                    </div>
                </div>
            </div>
            <div id="filters-container" class="cbp-l-filters-work container">
                <div data-filter=".casualty" class="btn btn-theme cbp-filter-item-active cbp-filter-item c">
                    casualty<span></span>
                </div>
                <div data-filter=".weapons-ratio" class="btn btn-theme cbp-filter-item r">
                    weapons ratio
                </div>
                <div data-filter=".weapons-loss" class="btn btn-theme cbp-filter-item l">
                    weapons loss
                </div>
                <div data-filter=".company-propotion" class="btn btn-theme cbp-filter-item p">
                    company proportion
                </div>
            </div>
            <div id="grid-container" class="cbp-l-grid-work">
                <div class="cbp-item casualty">
                    <div class="row1">
                        <div class="echarts-item">
                            <div id="echarts1" style="width:1000px ; height: 600px;"></div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item weapons-ratio " id="r">
                    <div class="row1">
                        <div class="echarts-item">
                            <div id="echarts2" style="width:1000px ; height:600px;"></div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item weapons-loss " id="l">
                    <div class="row1">
                        <div class="echarts-item">
                            <div id="echarts3" style="width:1000px ; height:600px;"></div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item company-propotion" id="p">
                    <div class="row1">
                        <div class="echarts-item">
                            <div id="echarts4" style="width:1000px ; height:550px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--     -->

    <section id="news" class="divider-wrapper-a section-wrapper opaqued" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
        <div class="section-inner nopaddingbottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInDown">
                        <h2 class="section-heading"><strong>Nuclear Pollution News</strong> Posts</h2>
                        <h3 class="section-subheading text-muted">Click these images to reach latest news.</h3>
                    </div>
                </div>
            </div>
            <ul class="owl-carousel-paged owl-controls-inside list-unstyled wow fadeInUp" data-items="3" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                <?php
                $news_model = RuNews::findBySql('select * from ru_news')->all();
                $i = 0;
                foreach ($news_model as $item) {
                    echo ('<li class="portfolio-item">');
                    echo ('<figure class="hover-item">');
                    echo (sprintf(
                        '<img src="assets/img/news/%s/%s-9.jpg" class="img-responsive" alt="image">',
                        $item->img_path,
                        $item->img_path
                    ));
                    echo (sprintf(
                        '<figcaption>
                                        <h2>%s</h2>
                                        <p class="icon-links">
                                            <a href="https://www.nytimes.com/%s"><span class="fa fa-link"></span></a>
                                        </p>
                                    </figcaption>
                                </figure>',
                        $item->title,
                        $item->url
                    ));
                    if (++$i >= 5) break;
                }
                ?>
            </ul>
        </div>
    </section>

    <section class="divider-wrapper-a section-wrapper opaqued" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
        <div class="section-inner">
            <div class="container">
                <div class="col-lg-12 wow fadeInDown">
                    <h2 class="section-heading">
                        <a href="index.php?r=ru-news" class="btn btn-theme">View All</a>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- 添加了俄乌战争战线图（直接调用其他网站）-->
    <section id="map" class="white section-wrapper">
        <div class="section-inner nopaddingbottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInDown">
                        <h2 class="section-heading"><strong>Russia-ukraine War</strong> Front Map</h2>
                        <h3 class="section-subheading text-muted">Map of the Baosha front.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ua-war-data">
        <div class="nopadding">
            <div>
                <iframe src="https://www.uawardata.com/" name="ifd" height="100%" width="100%" scrolling="no" frameborder="0">
                </iframe>
            </div>
        </div>
    </section>


    <!-- 武器展示 -->
    <section id="weapons" class="white section-wrapper opaqued" data-parallax="scroll" data-image-src="assets/img/bg/bg-bw.jpg" data-speed="0.7">
        <div class="section-inner nopaddingbottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInDown">
                        <h2 class="section-heading"><strong>Weapons</strong> display </h2>
                        <h3 class="section-subheading text-muted">Russian-Ukrainian weapons and equipment and other light weapons.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="owl-carousel-paged testimonial-owl wow fadeInUp list-unstyled" data-items="1" data-items-tablet="[768,1]" data-items-mobile="[479,1]">

                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                        <img src="assets/img/weapons/vj6wjx.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-xs-4 item-caption">
                                        <p>
                                            <?php
                                            $model1 = Weapons::findBySql('SELECT * from weapons where name ="Kord-5.45" LIMIT 1')->all();
                                            foreach ($model1 as $item)
                                                echo ($item->content);
                                            ?>
                                        </p>
                                        <span><strong>The Kord-5.45 (КОРД-5.45) light machine gun</strong></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                        <img src="assets/img/weapons/scrshot06.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-xs-4 item-caption">
                                        <p>
                                            <?php
                                            $model1 = Weapons::findBySql('SELECT * from weapons where name ="RPL-20" LIMIT 1')->all();
                                            foreach ($model1 as $item)
                                                echo ($item->content);
                                            ?>
                                        </p>
                                        <span><strong>RPL-20 light machine gun (РПЛ-20)</strong></span>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                        <img src="assets/img/weapons/1845482.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-xs-4 item-caption">
                                        <p>
                                            <?php
                                            $model1 = Weapons::findBySql('SELECT * from weapons where name ="MSMC" LIMIT 1')->all();
                                            foreach ($model1 as $item)
                                                echo ($item->content);
                                            ?>
                                        </p>
                                        <span><strong>MSMC is known as the "Modern Submachine Carbine"</strong></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                        <img src="assets/img/weapons/pu-1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="col-xs-4 item-caption">
                                        <p>
                                            <?php
                                            $model1 = Weapons::findBySql('SELECT * from weapons where name ="PU" LIMIT 1')->all();
                                            foreach ($model1 as $item)
                                                echo ($item->content);
                                            ?>
                                        </p>
                                        <span><strong>PU "Uniformly Fed Machine Gun" (Пулемет с унифицированной подачей)</strong></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 俄乌战争7种轻武器 -->
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInDown">
                        <h2 class="section-heading">Different types of <strong>light weapons</strong></h2>
                        <h3 class="section-subheading text-muted">Seven different types of light weapons from Russia and Ukraine.</h3>
                    </div>
                </div>
                <div class="row">
                    <ul class="owl-carousel-paged testimonial-owl wow fadeInUp list-unstyled" data-items="1" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                        <li>
                            <div class="container">
                                <div class="row wow fadeInUp">
                                    <div class="col-md-12 centered">
                                        <div>
                                            <h2>Machine guns</h2>
                                        </div>
                                        <div class="col-xs-12">
                                            <figure class="hover-item">
                                                <img src="assets/img/weapons/weapon2.jpg" class="img-responsive" alt="image">
                                                <figcaption>
                                                    <h2>
                                                        <?php
                                                        $model2 = Weapons::findBySql('select * from weapons where kind ="2" LIMIT 1')->all();
                                                        foreach ($model2 as $item)
                                                            echo ($item->name);
                                                        ?>
                                                    </h2>
                                                    <p class="icon-links">
                                                        <a href="assets/img/weapons/weapon2.jpg" class="swipebox"><span class="fa fa fa-search-plus"></span></a>
                                                        <a href="weapons/weapon2.php" class="cbp-singlePage"><span class="fa fa-link"></span></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="container">
                                <div class="row wow fadeInUp">
                                    <div class="col-md-12 centered">
                                        <div>
                                            <h2>Shotguns</h2>
                                        </div>
                                        <div class="col-xs-12">
                                            <figure class="hover-item">
                                                <img src="assets/img/weapons/weapon6.jpg" class="img-responsive" alt="image">
                                                <figcaption>
                                                    <h2>
                                                        <?php
                                                        $model2 = Weapons::findBySql('select * from weapons where kind ="6" LIMIT 1')->all();
                                                        foreach ($model2 as $item)
                                                            echo ($item->name);
                                                        ?>
                                                    </h2>
                                                    <p class="icon-links">
                                                        <a href="assets/img/weapons/weapon6.jpg" class="swipebox"><span class="fa fa fa-search-plus"></span></a>
                                                        <a href="weapons/weapon6.php" class="cbp-singlePage"><span class="fa fa-link"></span></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="container">
                                <div class="row wow fadeInUp">
                                    <div class="col-md-12 centered">
                                        <div>
                                            <h2>Submachine guns/short assault rifles</h2>
                                        </div>
                                        <div class="col-xs-12">
                                            <figure class="hover-item">
                                                <img src="assets/img/weapons/weapon4.jpg" class="img-responsive" alt="image">
                                                <figcaption>
                                                    <h2>
                                                        <?php
                                                        $model2 = Weapons::findBySql('select * from weapons where kind ="4" LIMIT 1')->all();
                                                        foreach ($model2 as $item)
                                                            echo ($item->name);
                                                        ?>
                                                    </h2>
                                                    <p class="icon-links">
                                                        <a href="assets/img/weapons/weapon4.jpg" class="swipebox"><span class="fa fa fa-search-plus"></span></a>
                                                        <a href="weapons/weapon4.php" class="cbp-singlePage"><span class="fa fa-link"></span></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li>
                            <div class="container">
                                <div class="row wow fadeInUp">
                                    <div class="col-md-12 centered">
                                        <div>
                                            <h2>Rifles</h2>
                                        </div>
                                        <div class="col-xs-12">
                                            <figure class="hover-item">
                                                <img src="assets/img/weapons/weapon1.jpg" class="img-responsive" alt="image">
                                                <figcaption>
                                                    <h2>
                                                        <?php
                                                        $model2 = Weapons::findBySql('select * from weapons where kind ="1" LIMIT 1')->all();
                                                        foreach ($model2 as $item)
                                                            echo ($item->name);
                                                        ?>
                                                    </h2>
                                                    <p class="icon-links">
                                                        <a href="assets/img/weapons/weapon1.jpg" class="swipebox"><span class="fa fa fa-search-plus"></span></a>
                                                        <a href="weapons/weapon1.php" class="cbp-singlePage"><span class="fa fa-link"></span></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li>
                            <div class="container">
                                <div class="row wow fadeInUp">
                                    <div class="col-md-12 centered">
                                        <div>
                                            <h2>Sniper Rifles</h2>
                                        </div>
                                        <div class="col-xs-12">
                                            <figure class="hover-item">
                                                <img src="assets/img/weapons/weapon3.jpg" class="img-responsive" alt="image">
                                                <figcaption>
                                                    <h2>
                                                        <?php
                                                        $model2 = Weapons::findBySql('select * from weapons where kind ="3" LIMIT 1')->all();
                                                        foreach ($model2 as $item)
                                                            echo ($item->name);
                                                        ?>
                                                    </h2>
                                                    <p class="icon-links">
                                                        <a href="assets/img/weapons/weapon3.jpg" class="swipebox"><span class="fa fa fa-search-plus"></span></a>
                                                        <a href="weapons/weapon3.php" class="cbp-singlePage"><span class="fa fa-link"></span></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li>
                            <div class="container">
                                <div class="row wow fadeInUp">
                                    <div class="col-md-12 centered">
                                        <div>
                                            <h2>Pistols</h2>
                                        </div>
                                        <div class="col-xs-12">
                                            <figure class="hover-item">
                                                <img src="assets/img/weapons/weapon5.jpg" class="img-responsive" alt="image">
                                                <figcaption>
                                                    <h2>
                                                        <?php
                                                        $model2 = Weapons::findBySql('select * from weapons where kind ="5" LIMIT 1')->all();
                                                        foreach ($model2 as $item)
                                                            echo ($item->name);
                                                        ?>
                                                    </h2>
                                                    <p class="icon-links">
                                                        <a href="assets/img/weapons/weapon5.jpg" class="swipebox"><span class="fa fa fa-search-plus"></span></a>
                                                        <a href="weapons/weapon5.php" class="cbp-singlePage"><span class="fa fa-link"></span></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <li>
                            <div class="container">
                                <div class="row wow fadeInUp">
                                    <div class="col-md-12 centered">
                                        <div>
                                            <h2>Other support weapons</h2>
                                        </div>
                                        <div class="col-xs-12">
                                            <figure class="hover-item">
                                                <img src="assets/img/weapons/weapon7.jpg" class="img-responsive" alt="image">
                                                <figcaption>
                                                    <h2>
                                                        <?php
                                                        $model2 = Weapons::findBySql('select * from weapons where kind ="7" LIMIT 1')->all();
                                                        foreach ($model2 as $item)
                                                            echo ($item->name);
                                                        ?>
                                                    </h2>
                                                    <p class="icon-links">
                                                        <a href="assets/img/weapons/weapon7.jpg" class="swipebox"><span class="fa fa fa-search-plus"></span></a>
                                                        <a href="weapons/weapon7.php" class="cbp-singlePage"><span class="fa fa-link"></span></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="login" class="divider-wrapper-a section-wrapper opaqued" data-parallax="scroll" data-image-src="assets/img/bg/bg1.jpg" data-speed="0.7">
        <div class="section-inner">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-md-12 centered">
                        <div class='btn btn-theme btn-white pull-left subscribe-submit' style="font-size:30px;">Baosha</div>
                        <?php if (Yii::$app->session->getFlash('login') == 'Already log in.') {
                        ?>
                            <button class='btn btn-theme btn-white pull-right subscribe-submit' type="submit"><?= Html::a('Log Out', ['site/logout']) ?></button>
                        <?php } else { ?>
                            <button class='btn btn-theme btn-white pull-right subscribe-submit' type="submit" style="margin-left: 50px;"><?= Html::a('Log In', ['site/login']) ?></button>
                            <button class='btn btn-theme btn-white pull-right subscribe-submit' type="submit"><?= Html::a('Sign Up', ['site/signup']) ?></button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="white section-wrapper opaqued" data-parallax="scroll" data-image-src="assets/img/bg/bg-bw.jpg" data-speed="0.7">
        <div class="section-inner padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInDown">
                        <h2 class="section-heading"><strong>Contact</strong> Us</h2>
                        <h3 class="section-subheading text-muted">Put forward your suggestions for our website.</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php $form = ActiveForm::begin(); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'suggestion')->textarea(['row' => '6']) ?>

                        <div class="form-group">
                            <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-theme pull-left']) ?>
                            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-theme pull-right']) ?>

                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="col-md-6" style="margin-top:20px;">
                        <p>The information displayed on the website comes from the Internet, and since it is difficult to find reliable information, some indicators may not reflect the real situation, but we try to select reliable sources for you.If you find errors in the information on the website or have any comments, you can contact us.</p>
                        <p>Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage mr be. Hold do at tore in park feet near my case. Invitation at understood occasional sentiments insipidity inhabiting in. Off melancholy alteration principles old. Is do speedily kindness properly oh. Respect article painted cottage he is offices parlors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

    </section>

    <section id="social-profiles-fw">
        <div class="nopadding">
            <div class="social-profile smoothtransition col-xs-3 centered twitter-bg">
                <a href="#" class="wow fadeInUp"><i class="fa fa-twitter"></i></a>
            </div>
            <div class="social-profile smoothtransition col-xs-3 centered facebook-bg">
                <a href="#" class="wow fadeInUp"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="social-profile smoothtransition col-xs-3 centered gplus-bg">
                <a href="#" class="wow fadeInUp"><i class="fa fa-google-plus"></i></a>
            </div>
            <div class="social-profile smoothtransition col-xs-3 centered dribbble-bg">
                <a href="#" class="wow fadeInUp"><i class="fa fa-dribbble"></i></a>
            </div>
        </div>
    </section>


    <footer id="footerwrap">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget about-us-widget">
                            <h4 class="widget-title"><strong>Brief</strong> Introduction</h4>
                            <p>The site presents different data including battle line graphs, loss data charts, timeline and major events, New York Times news handling and weapons display modules used, and a suggestion and feedback module at the end. </p>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title"><strong>Team</strong> Members</h4>
                            <div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="assets/img/team/wjx-s.jpg" class="widget-img" alt="image">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="#">王健行</a></span>
                                        <small class="muted"></small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="assets/img/team/yq-s.jpg" class="widget-img" alt="image">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="#">杨淇</a></span>
                                        <small class="muted"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title"><strong>Team</strong> Members</h4>
                            <div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="assets/img/team/lxy-s.jpg" class="widget-img" alt="image">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="#">李星谊</a></span>
                                        <small class="muted"></small>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img src="assets/img/team/dyx-s.jpg" class="widget-img" alt="image">
                                    </div>
                                    <div class="media-body">
                                        <span class="media-heading"><a href="#">杜怡兴</a></span>
                                        <small class="muted"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h4 class="widget-title"><strong>Latest</strong> Topics</h4>
                            <div class="tagcloud">
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Russian</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Ukraine</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">War</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Time</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Feast</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Battle</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Rival</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Profit</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Key</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">U.S</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="lowerfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Copyright 2023 | Designed By Distinctive Themes and Team Baosha.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/cubeportfolio.js"></script>
    <script src="assets/js/init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>

    <script type="text/javascript">
        var i = document.getElementById('r');
        var start = 0;
        $(".c").click(function() {
            start = 0;
        });
        $(".r").click(function() {
            i.style.display = "block";
            start = 0;
        });
        i.style.display = "none";
        var j = document.getElementById('l');
        $(".l").click(function() {
            j.style.display = "block";
            start = 1;
        });
        j.style.display = "none";
        j.parentElement.parentElement.style.height = "530px";
    </script>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart1 = echarts.init(document.getElementById('echarts1'), null, {
            devicePixelRatio: 2.5
        });
        const days = [
            '5', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12',
            '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24',
            '25', '26', '27', '28', '29', '30', '31'
        ];
        // prettier-ignore
        const months = [
            'March', 'April', 'May', 'June', 'July',
            'August', 'September', 'October', 'November', 'December'
        ];
        // prettier-ignore
        const data1 = [
                <?php
                $model = RCasualties::findBySql('select * from r_casualties where time<"2023-01-01" order by time asc;')->all();
                $index = 0;
                $pre = 0;
                foreach ($model as $item) {
                    $month = intval(substr(strval(($item->time)), 5, 2)) - 3;
                    $day = intval(substr(strval(($item->time)), 8, 2)) - 1;
                    $increase = $item->num - $pre;
                    echo ('[' . $month . ',' . $day . ',' . $increase . '],');
                    $pre = $item->num;
                    if ($month == 1 && $month == 3 && $month == 6 && $month == 8) {
                        if ($day == 29) {
                            echo '[' . $month . ',30,0],';
                        }
                    }
                }
                ?>
            ]
            .map(function(item) {
                return [item[1], item[0], item[2] || '-'];
            });
        var option1 = {
            title: {
                text: 'Daily Casualties',
                left: '38%',
                textStyle: {
                    fontSize: 30, //字体大小
                    color: '#3d495d'
                }
            },
            tooltip: {
                position: 'top'
            },
            dataZoom: [{
                type: 'inside'
            }],
            grid: {
                height: '72%',
                width: '85%',
                top: '10%'
            },
            xAxis: {
                type: 'category',
                data: days,
                splitArea: {
                    show: true
                }
            },
            yAxis: {
                type: 'category',
                data: months,
                splitArea: {
                    show: true
                }
            },
            visualMap: {
                min: 0,
                max: 1000,
                calculable: true,
                orient: 'horizontal',
                left: 'center',
                bottom: '0%',
                inRange: {
                    color: ['#D9E9FF', "#0B69E3"]
                }
            },
            series: [{
                name: 'Casualties Num',
                type: 'heatmap',
                bottom: '5%',
                data: data1,
                label: {
                    show: true
                },
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        };
        // 使用刚指定的配置项和数据显示图表。
        myChart1.setOption(option1);
    </script>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart2 = echarts.init(document.getElementById('echarts2'), null, {
            devicePixelRatio: 2.5
        });
        $.getJSON('assets/data/echarts2.json', function(data) {
            var result = [];
            var result1 = [];
            var name = [];
            var name1 = [];
            $.each(data, function(i, item) {
                var j = 0;
                var flag = 0;
                result1[i] = {
                    'name': item.armsname,
                    'value': item.num
                };
                name1[i] = item.armsname;

                if (i == 0) {
                    result.push({
                        'name': item.category,
                        'value': item.num
                    })
                    name[0] = item.category;
                } else {
                    while (j != result.length) {
                        if (result[j]['name'] == item.category) {
                            result[j]['value'] += item.num;
                            flag = 1;
                            break;
                        }
                        j += 1;
                    }
                    if (flag == 0) {
                        result.push({
                            'name': item.category,
                            'value': item.num
                        });
                        name[j] = item.category;
                    }
                }
            });
            //alert(name.length);
            var option2 = {
                title: {
                    text: 'The Proportion Of Weapons In The War',
                    left: '20%',
                    textStyle: {
                        fontSize: 30, //字体大小
                        color: '#241e14'
                    }
                },
                legend: [{
                        orient: 'vertical',
                        left: '0%',
                        top: '5%',
                        textStyle: {
                            fontSize: 14
                        },
                        data: name
                    },
                    {
                        orient: 'vertical',
                        left: '8%',
                        top: '5%',
                        textStyle: {
                            fontSize: 12
                        },
                        data: name1
                    }
                ],
                color: [
                    '#988D80',
                    '#7F4620',
                    '#624F40',
                    '#223B3A',
                    '#532B23',
                    '#505B59',
                    '#343231',
                    '#714641',
                    '#7289ab',
                    '#5C4F43',
                    '#8E5118',
                    '#998A7E',
                    '#B6B6B6',
                    '#414141'
                ],
                series: [{
                        left: '20%',
                        top: '8%',
                        type: 'pie',
                        radius: [0, '30%'],
                        avoidLabelOverlap: false,
                        selectedMode: 'single',
                        label: {
                            position: 'inner',
                            fontSize: 14
                        },
                        labelLine: {
                            show: false
                        },
                        emphasis: {
                            label: {
                                show: true,
                                fontSize: '30',
                                fontWeight: 'bold'
                            }
                        },
                        data: result
                    },
                    {
                        left: '20%',
                        top: '8%',
                        type: 'pie',
                        radius: ['50%', '85%'],
                        avoidLabelOverlap: false,
                        label: {
                            formatter: '{b|{b}：}{c}  {per|{d}%}  ',
                            backgroundColor: '#F6F8FC',
                            borderColor: '#8C8D8E',
                            borderWidth: 1,
                            borderRadius: 4,
                            rich: {
                                hr: {
                                    borderColor: '#8C8D8E',
                                    width: '100%',
                                    borderWidth: 1,
                                    height: 0
                                },
                                b: {
                                    color: '#4C5058',
                                    fontSize: 12,
                                    fontWeight: 'bold',
                                    lineHeight: 32
                                },
                                per: {
                                    color: '#fff',
                                    backgroundColor: '#4C5058',
                                    padding: [3, 4],
                                    fontSize: 12,
                                    borderRadius: 4
                                }
                            }
                        },
                        labelLine: {
                            show: false
                        },
                        emphasis: {
                            label: {
                                show: true,
                                fontSize: '30',
                                fontWeight: 'bold'
                            }
                        },
                        itemStyle: {
                            borderRadius: 10,
                            borderColor: '#fff',
                            borderWidth: 2
                        },
                        data: result1
                    }
                ]
            };
            // 使用刚指定的配置项和数据显示图表。
            myChart2.setOption(option2);
        });
    </script>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart3 = echarts.init(document.getElementById('echarts3'), null, {
            devicePixelRatio: 2.5
        });
        // 指定图表的配置项和数据
        var result = [];
        var data = [];
        $.getJSON('assets/data/echarts3.json', function(data1) {
            $.each(data1, function(i, item) {
                result[i] = {
                    'name': item.armsname,
                    'value': item.num,
                    'time': item.time
                };
            });
            var category_num = 0;
            while (result[category_num]['time'] == result[0]['time'])
                category_num += 1;
            var index = 0;
            for (; index < category_num; index++) {
                data[index] = [result[index]['value'], result[index]['name']];
            }
            var time = result[0]['time'].replace('-', '.');
            time = time.substr(0, 7);
            const weaponColors = {
                '坦克': '#6B2B1F',
                '飞机': '#414141',
                '无人机': '#314947',
                '直升机': '#7F4723',
                '枪支': '#8C8F8D',
                '火箭炮': '#4D4732',
                '防空系统': '#20231B',
                '船只': '#224161',
                '汽车和油罐车': '#99826B',
                '巡航导弹': '#988658',
            };
            var option3 = {
                title: {
                    text: 'Number Of Weapon Losses',
                    left: '30%',
                    textStyle: {
                        fontSize: 30, //字体大小
                        color: '#221414'
                    }
                },
                xAxis: {
                    max: 'dataMax',
                },
                grid: {
                    top: 30,
                    bottom: 30,
                    left: 150,
                    right: 80
                },
                yAxis: {
                    type: 'category',
                    inverse: true,
                    animationDuration: 300,
                    animationDurationUpdate: 300,
                    max: 9, // only the largest 3 bars will be displayed
                    rich: {
                        flag: {
                            fontSize: 25,
                            padding: 5
                        }
                    }
                },
                series: [{
                    realtimeSort: true,
                    top: '10%',
                    type: 'bar',
                    data: data,
                    seriesLayoutBy: 'column',
                    itemStyle: {
                        color: function(param) {
                            return weaponColors[param.value[1]] || '#5470c6';
                        }
                    },
                    encode: {
                        x: 0,
                        y: 3,
                    },
                    label: {
                        show: true,
                        precision: 0,
                        position: 'right',
                        valueAnimation: true,
                        fontFamily: 'monospace'
                    }
                }],
                animationDuration: 3000,
                animationDurationUpdate: 3000,
                animationEasing: 'linear',
                animationEasingUpdate: 'linear',
                graphic: {
                    elements: [{
                        type: 'text',
                        right: 0,
                        bottom: 60,
                        style: {
                            text: time.toString(),
                            font: 'bolder 80px monospace',
                            fill: 'rgba(100, 100, 100, 0.25)'
                        },
                        z: 100
                    }]
                }
            };

            function update() {
                if (start == 1) {
                    var data = option3.series[0].data;
                    if (index == result.length)
                        return;
                    for (var i = 0; i < category_num; ++i) {
                        //data[i]['name']=result[index+i]['name'];
                        //data[i]['value']=result[index+i]['value'];
                        data[i] = [result[index + i]['value'], result[index + i]['name']];
                    }
                    time = result[index]['time'].replace('-', '.');
                    time = time.substr(0, 7);
                    index += category_num;
                    option3.series[0].data = data;
                    option3.graphic.elements[0].style.text = time;
                    myChart3.setOption(option3);
                }
            }
            setInterval(function() {
                update();
            }, 100);
            // 使用刚指定的配置项和数据显示图表。
            myChart3.setOption(option3);
        });
    </script>

    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart4 = echarts.init(document.getElementById('echarts4'), null, {
            devicePixelRatio: 2.5
        });
        // 指定图表的配置项和数据
        // prettier-ignore
        var data4 = [
            <?php
            $model4 = CountryNum::findBySql('select * from country_num;')->all();
            $index = 0;
            $pre = 0;
            foreach ($model4 as $item) {
                echo ('["' . $item->country_name . '", ' . $item->num . '],');
            }
            ?>
        ]

        var option4 = {
            title: {
                text: "Nationality Of Weapon Companies",
                left: '18%',
                textStyle: {
                    fontSize: 30, //字体大小
                    color: '#221414'
                }
            },
            xAxis: {
                type: 'category',
                name: 'country',
                nameTextStyle: { //x坐标轴名称的字体样式
                    color: '#221414',
                    fontSize: 16
                }
            },
            dataZoom: [{
                type: 'inside'
            }],
            yAxis: {
                type: 'value',
                name: 'Company num',
                nameTextStyle: {
                    color: '#221414',
                    fontSize: 16
                }
            },
            color: new echarts.graphic.LinearGradient(0, 1, 0, 0, [{
                    offset: 0,
                    color: '#988D80'
                },
                {
                    offset: 1,
                    color: '#7F4620'
                }
            ]),

            series: [{
                type: 'bar',
                showBackground: true,
                backgroundStyle: {
                    color: 'rgba(180, 180, 180, 0.2)'
                },
                data: data4,
                avoidLabelOverlap: false,
                selectedMode: 'single',
                label: {
                    position: 'outer',
                    fontSize: 14
                },
                emphasis: {
                    label: {
                        show: true,
                        fontSize: '30',
                        fontWeight: 'bold'
                    }
                }
            }]
        };
        myChart4.setOption(option4);
    </script>
</body>