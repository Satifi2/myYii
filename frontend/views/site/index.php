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

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\grid\GridView;

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
                    <li><a class="page-scroll" href="#news">News</a></li>
                    <li><a class="page-scroll" href="#map">Map</a></li>
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



    <section class="divider-wrapper-a section-wrapper opaqued" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
        <div class="section-inner">
            <div class="container">
                <div class="col-lg-12 wow fadeInDown">
                    <h2 class="section-heading">
                        View All
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <div class="row" style="margin: 5%;">
        <?php foreach ($MyNews as $newsItem) : ?>
            <div class="col-md-4">
                <a href="<?= $newsItem->link ?>" target="_blank">
                    <div class="card mb-4" style="border-radius: 10px; margin: 10px;">
                        <img src="<?= $newsItem->imgLink ?>" class="card-img-top" alt="<?= $newsItem->title ?>" style="width: 200px; height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $newsItem->title ?></h5>

                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <div style="margin: 7%; text-align: center;">
        <h2>爬虫数据中的十条辐射量信息</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>incident_id</th>
                    <th>location</th>
                    <th>date</th>
                    <th>number</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Radiantdata as $dataItem) : ?>
                    <tr>
                        <td><?= $dataItem->incident_id ?></td>
                        <td><?= $dataItem->location ?></td>
                        <td><?= $dataItem->date ?></td>
                        <td><?= $dataItem->number ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php
    // 数据提取，这里是示例数据
    $data = [
        // 数据项格式：[经度, 纬度, 辐射强度]
        [116.391, 39.904, 73.7],
        [116.331, 39.975, 89.7],
        // ... 其他数据
    ];

    // 将数据格式化为ECharts的热力图数据格式
    $heatmapData = [];
    foreach ($data as $item) {
        $heatmapData[] = [
            'lng' => $item[0],   // 经度
            'lat' => $item[1],   // 纬度
            'value' => $item[2], // 辐射强度
        ];
    }
    $heatmapData = json_encode($heatmapData);
    ?>




    <section id="map" class="white section-wrapper">
        <iframe src="https://jciv.iidj.net/map/" name="ifd" height="700px" width="100%" scrolling="no" frameborder="0"></iframe>
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
                            <h2><span class="countup">11</span></h2>
                            <h6>Hours Saved</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="text-center">
                            <span class="stat-icon"><i class="pe-7s-cloud-upload fa-4x"></i></span>
                            <h2><span class="countup">43</span></h2>
                            <h6>Files Uploaded</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="text-center">
                            <span class="stat-icon"><i class="pe-7s-tools fa-4x"></i></span>
                            <h2><span class="countup">56</span></h2>
                            <h6>Hours Of Support</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="text-center">
                            <span class="stat-icon"><i class="pe-7s-like fa-4x"></i></span>
                            <h2><span class="countup">9</span></h2>
                            <h6>Social Shares</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="white section-wrapper">
        <div style="text-align: center;">
            <h2 style="font-weight: bold;">radiation levels</h2>
            <p style="color: gray; font-size: 15px;">此数据来自于数据库表 "radiation levels"</p>
        </div>
        <table class="table table-bordered" style="width: 70%; margin: 0 auto; margin-top: 40px; margin-bottom: 20px;">
            <thead>
                <tr>
                    <th>Region</th>
                    <th>Radiation Dose Rate</th>
                    <th>Radiation Source</th>
                    <th>Monitoring Time</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($radiationData as $radiationItem) : ?>
                    <tr>
                        <td><?= Html::encode($radiationItem->region) ?></td>
                        <td><?= Html::encode($radiationItem->radiation_dose_rate) ?></td>
                        <td><?= Html::encode($radiationItem->radiation_source) ?></td>
                        <td><?= Html::encode($radiationItem->monitoring_time) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <style>
            /* 父元素样式 */
            .chart-container {
                display: flex;
                flex-wrap: wrap;
                /* 换行 */
                justify-content: space-evenly;
                /* 每行两个元素，平均分布 */
                text-align: center;
                /* 文字居中 */
                margin-top: 20px;
                /* 顶部边距 */
            }

            /* 图表样式 */
            .chart {
                margin: 10px 0;
                /* 图表之间的垂直间距 */
            }
        </style>

        <!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
        <script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

        <div class="chart-container">
            <!-- 创建一个具有指定ID的容器用于显示散点图 -->
            <div id="scatterChart" style="width: 800px; height: 400px;"></div>
            <!-- 创建一个具有指定ID的容器用于显示雷达图 -->
            <div id="radarChart" style="width: 800px; height: 400px;"></div>
            <!-- 创建一个具有指定ID的容器用于显示条形图 -->
            <div id="barChart" style="width: 800px; height: 400px;"></div>
            <!-- 创建一个具有指定ID的容器用于显示环形饼图 -->
            <div id="ringPieChart" style="width: 800px; height: 400px;"></div>
        </div>

        <script>
            // 获取包含数据的 JavaScript 对象
            var data = [{
                    Region: 'Tokyo, Japan',
                    'Radiation Dose Rate': 0.12,
                    'Monitoring Time': '2022-01-15 08:00:00'
                },
                {
                    Region: 'Chernobyl, Ukraine',
                    'Radiation Dose Rate': 0.78,
                    'Monitoring Time': '2022-01-15 12:30:00'
                },
                {
                    Region: 'Los Angeles, USA',
                    'Radiation Dose Rate': 0.10,
                    'Monitoring Time': '2022-01-15 14:15:00'
                },
                {
                    Region: 'Sellafield, UK',
                    'Radiation Dose Rate': 0.25,
                    'Monitoring Time': '2022-01-15 10:45:00'
                },
                {
                    Region: 'Savannah River, USA',
                    'Radiation Dose Rate': 0.18,
                    'Monitoring Time': '2022-01-15 16:20:00'
                },
                {
                    Region: 'Seversk, Russia',
                    'Radiation Dose Rate': 0.15,
                    'Monitoring Time': '2022-01-15 11:10:00'
                },
                {
                    Region: 'Fukushima, Japan',
                    'Radiation Dose Rate': 0.30,
                    'Monitoring Time': '2022-01-15 09:55:00'
                },
                {
                    Region: 'Paris, France',
                    'Radiation Dose Rate': 0.08,
                    'Monitoring Time': '2022-01-15 13:40:00'
                },
                {
                    Region: 'Beijing, China',
                    'Radiation Dose Rate': 0.09,
                    'Monitoring Time': '2022-01-15 15:05:00'
                },
                {
                    Region: 'Sydney, Australia',
                    'Radiation Dose Rate': 0.11,
                    'Monitoring Time': '2022-01-15 17:30:00'
                }
            ];

            // 获取图表容器
            var chartContainer = document.getElementById('scatterChart');

            // 创建 ECharts 实例
            var myChart = echarts.init(chartContainer);

            // 提取Radiation Dose Rate 作为纵轴数据，Monitoring Time 作为横轴数据
            var xAxisData = data.map(item => item['Monitoring Time']);
            var yAxisData = data.map(item => item['Radiation Dose Rate']);

            // 配置散点图选项
            var option = {
                title: {
                    text: 'Radiation Dose Rate vs. Monitoring Time (Scatter Plot)',
                    left: 'center',
                    textStyle: {
                        fontSize: 16
                    }
                },
                tooltip: {
                    trigger: 'axis',
                    formatter: '{b}: {c}',
                    axisPointer: {
                        type: 'cross'
                    }
                },
                xAxis: {
                    type: 'category',
                    data: xAxisData,
                    axisLabel: {
                        interval: 0,
                        rotate: 45
                    }
                },
                yAxis: {
                    type: 'value',
                    name: 'Radiation Dose Rate',
                    axisLabel: {
                        formatter: '{value}'
                    }
                },
                series: [{
                    data: yAxisData,
                    type: 'scatter'
                }]
            };

            // 使用配置项设置散点图
            myChart.setOption(option);
        </script>


        <!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
        <script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>



        <script>
            // 获取包含数据的 JavaScript 对象
            var data = [{
                    Region: 'Tokyo, Japan',
                    'Radiation Dose Rate': 0.12
                },
                {
                    Region: 'Chernobyl, Ukraine',
                    'Radiation Dose Rate': 0.78
                },
                {
                    Region: 'Los Angeles, USA',
                    'Radiation Dose Rate': 0.10
                },
                {
                    Region: 'Sellafield, UK',
                    'Radiation Dose Rate': 0.25
                },
                {
                    Region: 'Savannah River, USA',
                    'Radiation Dose Rate': 0.18
                },
                {
                    Region: 'Seversk, Russia',
                    'Radiation Dose Rate': 0.15
                },
                {
                    Region: 'Fukushima, Japan',
                    'Radiation Dose Rate': 0.30
                },
                {
                    Region: 'Paris, France',
                    'Radiation Dose Rate': 0.08
                },
                {
                    Region: 'Beijing, China',
                    'Radiation Dose Rate': 0.09
                },
                {
                    Region: 'Sydney, Australia',
                    'Radiation Dose Rate': 0.11
                }
            ];

            // 获取图表容器
            var chartContainer = document.getElementById('radarChart');

            // 创建 ECharts 实例
            var myChart = echarts.init(chartContainer);

            // 提取不同地区的数据
            var regions = data.map(item => item.Region);
            var doseRates = data.map(item => item['Radiation Dose Rate']);

            // 配置雷达图选项
            var option = {
                title: {
                    text: 'Radar Chart - Radiation Dose Rate by Region',
                    left: 'center',
                    textStyle: {
                        fontSize: 16
                    }
                },
                tooltip: {},
                radar: {
                    indicator: regions.map(region => ({
                        name: region,
                        max: Math.max(...doseRates)
                    })),
                    radius: '65%',
                    center: ['50%', '50%'],
                },
                series: [{
                    type: 'radar',
                    data: [{
                        value: doseRates,
                        name: 'Radiation Dose Rate',
                        areaStyle: {
                            color: 'rgba(255, 0, 0, 0.5)' // 雷达图区域填充颜色
                        },
                        lineStyle: {
                            color: 'red' // 雷达图边框线颜色
                        },
                    }, ],
                }],
            };

            // 使用配置项设置雷达图
            myChart.setOption(option);
        </script>

        <!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
        <script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>



        <script>
            // 获取包含数据的 JavaScript 对象
            var data = [{
                    Region: 'Tokyo, Japan',
                    'Radiation Dose Rate': 0.12
                },
                {
                    Region: 'Chernobyl, Ukraine',
                    'Radiation Dose Rate': 0.78
                },
                {
                    Region: 'Los Angeles, USA',
                    'Radiation Dose Rate': 0.10
                },
                {
                    Region: 'Sellafield, UK',
                    'Radiation Dose Rate': 0.25
                },
                {
                    Region: 'Savannah River, USA',
                    'Radiation Dose Rate': 0.18
                },
                {
                    Region: 'Seversk, Russia',
                    'Radiation Dose Rate': 0.15
                },
                {
                    Region: 'Fukushima, Japan',
                    'Radiation Dose Rate': 0.30
                },
                {
                    Region: 'Paris, France',
                    'Radiation Dose Rate': 0.08
                },
                {
                    Region: 'Beijing, China',
                    'Radiation Dose Rate': 0.09
                },
                {
                    Region: 'Sydney, Australia',
                    'Radiation Dose Rate': 0.11
                }
            ];

            // 获取图表容器
            var chartContainer = document.getElementById('barChart');

            // 创建 ECharts 实例
            var myChart = echarts.init(chartContainer);

            // 提取Radiation Dose Rate 作为柱形图的数据
            var yAxisData = data.map(item => item['Radiation Dose Rate']);
            var xAxisData = data.map(item => item.Region);

            // 配置条形图选项
            var option = {
                title: {
                    text: 'Radiation Dose Rate by Region (Bar Chart)',
                    left: 'center',
                    textStyle: {
                        fontSize: 16
                    }
                },
                tooltip: {
                    trigger: 'axis',
                    formatter: '{b}: {c}',
                    axisPointer: {
                        type: 'shadow'
                    }
                },
                xAxis: {
                    type: 'category',
                    data: xAxisData,
                    axisLabel: {
                        interval: 0,
                        rotate: 45
                    }
                },
                yAxis: {
                    type: 'value',
                    name: 'Radiation Dose Rate',
                    axisLabel: {
                        formatter: '{value}'
                    }
                },
                series: [{
                    data: yAxisData,
                    type: 'bar',
                    itemStyle: {
                        color: function(params) {
                            // 根据数值不同设置不同深浅的绿色
                            var colorValue = params.data;
                            if (colorValue >= 0.7) {
                                return '#003300'; // 最深墨绿色
                            } else if (colorValue >= 0.5) {
                                return '#006600'; // 深墨绿色
                            } else if (colorValue >= 0.3) {
                                return '#009900'; // 中墨绿色
                            } else {
                                return '#00CC00'; // 浅墨绿色
                            }

                        }
                    }
                }]
            };

            // 使用配置项设置条形图
            myChart.setOption(option);
        </script>

        <!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
        <script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

        <script>
            // 获取包含数据的 JavaScript 对象
            var data = [{
                    Region: 'Tokyo, Japan',
                    'Radiation Dose Rate': 0.12
                },
                {
                    Region: 'Chernobyl, Ukraine',
                    'Radiation Dose Rate': 0.78
                },
                {
                    Region: 'Los Angeles, USA',
                    'Radiation Dose Rate': 0.10
                },
                {
                    Region: 'Sellafield, UK',
                    'Radiation Dose Rate': 0.25
                },
                {
                    Region: 'Savannah River, USA',
                    'Radiation Dose Rate': 0.18
                },
                {
                    Region: 'Seversk, Russia',
                    'Radiation Dose Rate': 0.15
                },
                {
                    Region: 'Fukushima, Japan',
                    'Radiation Dose Rate': 0.30
                },
                {
                    Region: 'Paris, France',
                    'Radiation Dose Rate': 0.08
                },
                {
                    Region: 'Beijing, China',
                    'Radiation Dose Rate': 0.09
                },
                {
                    Region: 'Sydney, Australia',
                    'Radiation Dose Rate': 0.11
                }
            ];

            // 获取图表容器
            var chartContainer = document.getElementById('ringPieChart');

            // 创建 ECharts 实例
            var myChart = echarts.init(chartContainer);

            // 提取地区和辐射剂量率数据
            var regionData = data.map(item => item.Region);
            var doseRateData = data.map(item => item['Radiation Dose Rate']);

            // 配置环形饼图选项
            var option = {
                title: {
                    text: 'Radiation Dose Rate by Region (Ring Pie Chart)',
                    left: 'center',
                    textStyle: {
                        fontSize: 16
                    }
                },
                tooltip: {
                    trigger: 'item',
                    formatter: '{b}: {c} ({d}%)'
                },
                series: [{
                    name: 'Radiation Dose Rate',
                    type: 'pie',
                    radius: ['40%', '70%'], // 控制内外圈的半径
                    avoidLabelOverlap: false,
                    label: {
                        show: true,
                        position: 'outside', // 标签位置在外部
                        formatter: '{b}: {c}',
                        fontSize: 12
                    },
                    emphasis: {
                        label: {
                            show: true,
                            fontSize: '16',
                            fontWeight: 'bold'
                        }
                    },
                    labelLine: {
                        show: true,
                        length2: 10,
                        lineStyle: {
                            width: 1,
                            type: 'solid'
                        }
                    },
                    data: doseRateData.map(function(value, index) {
                        return {
                            name: regionData[index],
                            value: value
                        };
                    }),
                    itemStyle: {
                        color: function(params) {
                            // 根据数据索引选择不同的颜色
                            var colorList = ['#FF5733', '#FF8C00', '#FFA500', '#FFD700', '#FFC0CB', '#FF69B4', '#9370DB', '#8A2BE2', '#4B0082', '#2E8B57'];
                            return colorList[params.dataIndex];
                        }
                    }
                }]
            };

            // 使用配置项设置环形饼图
            myChart.setOption(option);
        </script>


    </section>



    <section class="divider-wrapper-a section-wrapper opaqued" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
        <div class="section-inner">
            <div class="container">
                <div class="col-lg-12 wow fadeInDown">
                    <h2 class="section-heading">
                        View All
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" style="margin: 10%;">
        <table class="table table-bordered table-rounded">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Event Date</th>
                    <th>Location</th>
                    <th>Headline</th>
                    <th>News Content</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($JapanNuclearNews as $newsItem) : ?>
                    <tr>
                        <td><?= $newsItem->news_id ?></td>
                        <td><?= $newsItem->event_date ?></td>
                        <td><?= $newsItem->location ?></td>
                        <td><?= $newsItem->headline ?></td>
                        <td style="white-space: pre-wrap;"><?= $newsItem->news_content ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <style>
            .card {
                border: none;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                transition: transform 0.2s;
            }

            .card:hover {
                transform: scale(1.02);
            }

            .card-title {
                font-size: 1.25rem;
                font-weight: bold;
            }

            .card-text {
                font-size: 1rem;
            }

            .list-group-item {
                border: none;
            }

            .card-image {
                width: 200px;
                height: 200px;
                object-fit: cover;
                /* 保持图片比例并填充容器 */
            }
        </style>

        <div class="row">
            <?php foreach ($JapanNuclearNews as $newsItem) : ?>
                <div class="col-md-4">
                    <a href="<?= $newsItem->url ?>" target="_blank"> <!-- 使用target="_blank"在新标签页中打开链接 -->
                        <div class="card mb-4">
                            <img src="<?= $newsItem->url ?>" class="card-img-top card-image" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title"><?= $newsItem->headline ?></h5>
                                <p class="card-text"><?= $newsItem->news_content ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Event Date: <?= $newsItem->event_date ?></li>
                                <li class="list-group-item">Location: <?= $newsItem->location ?></li>
                            </ul>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
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

    <section style="margin:7%">
        <?php
        // 数据提取，这里是示例数据
        $data = [
            ['Thyroid Cancer', 0.15],
            ['Leukemia', 0.25],
            ['Lung Cancer', 0.10],
            ['Birth Defects', 0.30],
            ['Genetic Disorders', 0.20],
            ['Thyroid Abnormalities', 0.12],
            ['Skin Diseases', 0.18],
            ['Respiratory Issues', 0.08],
            ['Cataracts', 0.10],
            ['Cardiovascular Diseases', 0.14],
        ];

        // 将数据格式化为ECharts折线图所需的格式
        $categories = [];
        $values = [];
        foreach ($data as $item) {
            $categories[] = $item[0]; // 健康状况
            $values[] = $item[1];     // 辐射剂量
        }
        $categories = json_encode($categories);
        $values = json_encode($values);
        ?>

        <script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>
        <div id="lineChart" style="width: 100%; height: 500px;"></div>

        <script>
            // 初始化ECharts实例
            var myChart = echarts.init(document.getElementById('lineChart'));

            // 配置项
            var option = {
                title: {
                    text: '辐射的危害',
                    subtext: '单位：辐射剂量（mSv）',
                    x: 'center'
                },
                tooltip: {
                    trigger: 'axis'
                },
                xAxis: {
                    type: 'category',
                    data: <?= $categories ?>,
                    axisLabel: {
                        interval: 0, // 使x轴标签全部显示
                        rotate: 45, // 旋转45度，防止标签重叠
                    }
                },
                yAxis: {
                    type: 'value'
                },
                series: [{
                    name: '辐射剂量',
                    type: 'line',
                    data: <?= $values ?>,
                    markPoint: {
                        data: [{
                                type: 'max',
                                name: '最大值'
                            },
                            {
                                type: 'min',
                                name: '最小值'
                            }
                        ]
                    }
                }]
            };

            // 使用配置项显示折线图
            myChart.setOption(option);
        </script>

        <style>
            .text-box {
                border: 2px solid #666;
                padding: 10px;
                display: flex;
                justify-content: space-between;
                font-family: '楷体', cursive;
                color: grey;
                margin: 7%;
                /* 添加外边距 */
            }
        </style>
        <div class="text-box">
            <div>
                <p>
                    可见，辐射是一种潜在的危险，对人体健康产生严重的影响。研究表明，暴露在高辐射水平下会导致一系列健康问题，其中包括甲状腺癌、白血病、肺癌等。辐射暴露还可能导致遗传突变和出生缺陷。这些健康问题的严重性取决于辐射剂量和暴露时间。因此，保护自己免受辐射的危害至关重要，特别是在核事故或放射性污染的区域。
                </p>
            </div>
            <div>
                <p>
                    为减少核污染的风险，采取一系列措施是至关重要的。首先，核能发电站和核设施必须采取高度严格的安全措施，以防止事故和泄漏的发生。其次，需要制定严格的法规和监管机制，确保核设施的运营符合最高的安全标准。此外，核废料的储存和处理也需要特别小心，以避免对环境和人类健康造成潜在风险。最后，提高公众对核能和辐射的认知是非常重要的，以便人们能够更好地理解潜在的危险，并采取适当的预防措施。通过这些措施，我们可以最大程度地减少核污染的风险，确保人类和环境的安全。
                </p>
            </div>
        </div>
    </section>


    <section id="contact" class="white section-wrapper opaqued" data-parallax="scroll" data-image-src="assets/img/bg/bg-bw.jpg" data-speed="0.7" style="margin-top: 50px;">
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
                <div class="col-md-6" style="border: 1px solid #ccc; background-color: #e0e0e0; border-radius: 20px;">
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Username') ?>

                    <?= $form->field($model, 'email')->label('Email') ?>

                    <?= $form->field($model, 'suggestion')->textarea(['rows' => '6'])->label('Suggestion') ?>

                    <div class="form-group">
                        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-theme pull-left']) ?>
                        <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-theme pull-right']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

                <div class="col-md-6" style="margin-top:20px;">
                    <!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
                    <script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

                    <!-- 创建一个具有指定ID的容器用于显示热力图 -->
                    <div id="heatmapChart" style="width: 800px; height: 400px;"></div>

                    <script>
                        // 获取包含数据的 JavaScript 对象
                        var data = [{
                                Region: 'Tokyo, Japan',
                                'Radiation Dose Rate': 0.12
                            },
                            {
                                Region: 'Chernobyl, Ukraine',
                                'Radiation Dose Rate': 0.78
                            },
                            {
                                Region: 'Los Angeles, USA',
                                'Radiation Dose Rate': 0.10
                            },
                            {
                                Region: 'Sellafield, UK',
                                'Radiation Dose Rate': 0.25
                            },
                            {
                                Region: 'Savannah River, USA',
                                'Radiation Dose Rate': 0.18
                            },
                            {
                                Region: 'Seversk, Russia',
                                'Radiation Dose Rate': 0.15
                            },
                            {
                                Region: 'Fukushima, Japan',
                                'Radiation Dose Rate': 0.30
                            },
                            {
                                Region: 'Paris, France',
                                'Radiation Dose Rate': 0.08
                            },
                            {
                                Region: 'Beijing, China',
                                'Radiation Dose Rate': 0.09
                            },
                            {
                                Region: 'Sydney, Australia',
                                'Radiation Dose Rate': 0.11
                            }
                        ];

                        // 获取图表容器
                        var chartContainer = document.getElementById('heatmapChart');

                        // 创建 ECharts 实例
                        var myChart = echarts.init(chartContainer);

                        // 提取不同地区的数据
                        var regions = data.map(item => item.Region);
                        var doseRates = data.map(item => item['Radiation Dose Rate']);

                        // 配置热力图选项
                        var option = {
                            title: {
                                text: 'Heatmap - Radiation Dose Rate by Region',
                                left: 'center',
                                textStyle: {
                                    fontSize: 16
                                }
                            },
                            tooltip: {
                                position: 'top'
                            },
                            grid: {
                                height: '50%',
                                top: '30%',
                                containLabel: true
                            },
                            xAxis: {
                                type: 'category',
                                data: regions,
                                splitArea: {
                                    show: true
                                },
                                axisLabel: {
                                    rotate: 45, // 45度角度标签以避免重叠
                                    interval: 0 // 强制显示所有标签
                                }
                            },
                            yAxis: {
                                type: 'category',
                                data: ['Radiation Dose Rate'],
                                splitArea: {
                                    show: true
                                }
                            },
                            visualMap: {
                                min: Math.min(...doseRates),
                                max: Math.max(...doseRates),
                                calculable: true,
                                orient: 'horizontal',
                                left: 'center',
                                bottom: '15%'
                            },
                            series: [{
                                name: 'Radiation Dose Rate',
                                type: 'heatmap',
                                data: data.map(item => [item.Region, 'Radiation Dose Rate', item['Radiation Dose Rate']]),
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

                        // 使用配置项设置热力图
                        myChart.setOption(option);
                    </script>
                </div>
            </div>
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
                            <p>We are a team of students from Nankai University's School of Computer Science, working on an "Internet Database Development" course project. Our website offers comprehensive information on nuclear pollution, including its consequences, global responses, environmental impacts, and health effects. Through visualizations like charts and graphs, we aim to provide clear insights into nuclear pollution data.</p>
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
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Pollution</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Environmental contamination</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Air quality</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Water pollution</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Soil contamination</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Industrial emissions</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Greenhouse gases</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Chemical pollutants</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Waste disposal</a>
                                <a href="#" class="tag-link btn btn-theme btn-white btn-xs" title="3 topics">Environmental degradation</a>
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
                        <p>Copyright 2023 | Designed By and Team Baosha.</p>
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


</body>