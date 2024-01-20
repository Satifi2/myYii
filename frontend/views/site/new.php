<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'new';
$this->params['breadcrumbs'][] = $this->title;
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Region</th>
            <th>Radiation Dose Rate</th>
            <th>Radiation Source</th>
            <th>Monitoring Time</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($radiationData as $radiationItem): ?>
            <tr>
                <td><?= Html::encode($radiationItem->region) ?></td>
                <td><?= Html::encode($radiationItem->radiation_dose_rate) ?></td>
                <td><?= Html::encode($radiationItem->radiation_source) ?></td>
                <td><?= Html::encode($radiationItem->monitoring_time) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>


<!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

<!-- 创建一个具有指定ID的容器用于显示图表 -->
<div id="radiationChart" style="width: 800px; height: 400px;"></div>

<script>
// 获取包含数据的 JavaScript 对象
var data = [
    { Region: 'Tokyo, Japan', 'Radiation Dose Rate': 0.12 },
    { Region: 'Chernobyl, Ukraine', 'Radiation Dose Rate': 1.78 },
    { Region: 'Los Angeles, USA', 'Radiation Dose Rate': 0.10 },
    { Region: 'Sellafield, UK', 'Radiation Dose Rate': 0.25 },
    { Region: 'Savannah River, USA', 'Radiation Dose Rate': 0.18 },
    { Region: 'Seversk, Russia', 'Radiation Dose Rate': 0.15 },
    { Region: 'Fukushima, Japan', 'Radiation Dose Rate': 0.30 },
    { Region: 'Paris, France', 'Radiation Dose Rate': 0.08 },
    { Region: 'Beijing, China', 'Radiation Dose Rate': 0.09 },
    { Region: 'Sydney, Australia', 'Radiation Dose Rate': 0.11 }
];

// 获取图表容器
var chartContainer = document.getElementById('radiationChart');

// 创建 ECharts 实例
var myChart = echarts.init(chartContainer);

// 配置图表选项
var option = {
    title: {
        text: 'Radiation Dose Rate by Region',
        left: 'center',
        textStyle: {
            fontSize: 16
        }
    },
    xAxis: {
        type: 'category',
        data: data.map(item => item.Region),
        axisLabel: {
            rotate: 45, // 旋转横轴标签，使其更易阅读
            interval: 0 // 强制显示所有标签
        }
    },
    yAxis: {
        type: 'value',
        name: 'Radiation Dose Rate'
    },
    series: [{
        data: data.map(item => item['Radiation Dose Rate']),
        type: 'bar'
    }]
};

// 使用配置项设置图表
myChart.setOption(option);
</script>



<!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

<!-- 创建一个具有指定ID的容器用于显示饼图 -->
<div id="pieChart" style="width: 800px; height: 400px;"></div>

<script>
// 获取包含数据的 JavaScript 对象
var data = [
    { Region: 'Tokyo, Japan', 'Radiation Dose Rate': 0.12 },
    { Region: 'Chernobyl, Ukraine', 'Radiation Dose Rate': 1.78 },
    { Region: 'Los Angeles, USA', 'Radiation Dose Rate': 0.10 },
    { Region: 'Sellafield, UK', 'Radiation Dose Rate': 0.25 },
    { Region: 'Savannah River, USA', 'Radiation Dose Rate': 0.18 },
    { Region: 'Seversk, Russia', 'Radiation Dose Rate': 0.15 },
    { Region: 'Fukushima, Japan', 'Radiation Dose Rate': 0.30 },
    { Region: 'Paris, France', 'Radiation Dose Rate': 0.08 },
    { Region: 'Beijing, China', 'Radiation Dose Rate': 0.09 },
    { Region: 'Sydney, Australia', 'Radiation Dose Rate': 0.11 }
];

// 获取图表容器
var chartContainer = document.getElementById('pieChart');

// 创建 ECharts 实例
var myChart = echarts.init(chartContainer);

// 提取Region作为饼图的标签，Radiation Dose Rate 作为值
var pieData = data.map(item => ({
    name: item.Region,
    value: item['Radiation Dose Rate']
}));

// 配置饼图选项
var option = {
    title: {
        text: 'Radiation Dose Rate by Region (Pie Chart)',
        left: 'center',
        textStyle: {
            fontSize: 16
        }
    },
    tooltip: {
        trigger: 'item',
        formatter: '{b}: {c} ({d}%)'
    },
    series: [
        {
            type: 'pie',
            radius: '50%',
            center: ['50%', '50%'],
            data: pieData,
            emphasis: {
                itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
};

// 使用配置项设置饼图
myChart.setOption(option);
</script>


<!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

<!-- 创建一个具有指定ID的容器用于显示折线图 -->
<div id="lineChart" style="width: 800px; height: 400px;"></div>

<script>
// 获取包含数据的 JavaScript 对象
var data = [
    { Region: 'Tokyo, Japan', 'Radiation Dose Rate': 0.12 },
    { Region: 'Chernobyl, Ukraine', 'Radiation Dose Rate': 125.78 },
    { Region: 'Los Angeles, USA', 'Radiation Dose Rate': 0.10 },
    { Region: 'Sellafield, UK', 'Radiation Dose Rate': 0.25 },
    { Region: 'Savannah River, USA', 'Radiation Dose Rate': 0.18 },
    { Region: 'Seversk, Russia', 'Radiation Dose Rate': 0.15 },
    { Region: 'Fukushima, Japan', 'Radiation Dose Rate': 0.30 },
    { Region: 'Paris, France', 'Radiation Dose Rate': 0.08 },
    { Region: 'Beijing, China', 'Radiation Dose Rate': 0.09 },
    { Region: 'Sydney, Australia', 'Radiation Dose Rate': 0.11 }
];

// 获取图表容器
var chartContainer = document.getElementById('lineChart');

// 创建 ECharts 实例
var myChart = echarts.init(chartContainer);

// 提取Region作为横轴数据，Radiation Dose Rate 作为纵轴数据
var xAxisData = data.map(item => item.Region);
var yAxisData = data.map(item => item['Radiation Dose Rate']);

// 配置折线图选项
var option = {
    title: {
        text: 'Radiation Dose Rate by Region (Line Chart)',
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
    series: [
        {
            data: yAxisData,
            type: 'line',
            smooth: true
        }
    ]
};

// 使用配置项设置折线图
myChart.setOption(option);
</script>


<!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

<!-- 创建一个具有指定ID的容器用于显示散点图 -->
<div id="scatterChart" style="width: 800px; height: 400px;"></div>

<script>
// 获取包含数据的 JavaScript 对象
var data = [
    { Region: 'Tokyo, Japan', 'Radiation Dose Rate': 0.12, 'Monitoring Time': '2022-01-15 08:00:00' },
    { Region: 'Chernobyl, Ukraine', 'Radiation Dose Rate': 0.78, 'Monitoring Time': '2022-01-15 12:30:00' },
    { Region: 'Los Angeles, USA', 'Radiation Dose Rate': 0.10, 'Monitoring Time': '2022-01-15 14:15:00' },
    { Region: 'Sellafield, UK', 'Radiation Dose Rate': 0.25, 'Monitoring Time': '2022-01-15 10:45:00' },
    { Region: 'Savannah River, USA', 'Radiation Dose Rate': 0.18, 'Monitoring Time': '2022-01-15 16:20:00' },
    { Region: 'Seversk, Russia', 'Radiation Dose Rate': 0.15, 'Monitoring Time': '2022-01-15 11:10:00' },
    { Region: 'Fukushima, Japan', 'Radiation Dose Rate': 0.30, 'Monitoring Time': '2022-01-15 09:55:00' },
    { Region: 'Paris, France', 'Radiation Dose Rate': 0.08, 'Monitoring Time': '2022-01-15 13:40:00' },
    { Region: 'Beijing, China', 'Radiation Dose Rate': 0.09, 'Monitoring Time': '2022-01-15 15:05:00' },
    { Region: 'Sydney, Australia', 'Radiation Dose Rate': 0.11, 'Monitoring Time': '2022-01-15 17:30:00' }
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
    series: [
        {
            data: yAxisData,
            type: 'scatter'
        }
    ]
};

// 使用配置项设置散点图
myChart.setOption(option);
</script>


<!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

<!-- 创建一个具有指定ID的容器用于显示热力图 -->
<div id="heatmapChart" style="width: 800px; height: 400px;"></div>

<script>
// 获取包含数据的 JavaScript 对象
var data = [
    { Region: 'Tokyo, Japan', 'Radiation Dose Rate': 0.12 },
    { Region: 'Chernobyl, Ukraine', 'Radiation Dose Rate': 0.78 },
    { Region: 'Los Angeles, USA', 'Radiation Dose Rate': 0.10 },
    { Region: 'Sellafield, UK', 'Radiation Dose Rate': 0.25 },
    { Region: 'Savannah River, USA', 'Radiation Dose Rate': 0.18 },
    { Region: 'Seversk, Russia', 'Radiation Dose Rate': 0.15 },
    { Region: 'Fukushima, Japan', 'Radiation Dose Rate': 0.30 },
    { Region: 'Paris, France', 'Radiation Dose Rate': 0.08 },
    { Region: 'Beijing, China', 'Radiation Dose Rate': 0.09 },
    { Region: 'Sydney, Australia', 'Radiation Dose Rate': 0.11 }
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


<!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

<!-- 创建一个具有指定ID的容器用于显示热力图 -->
<div id="heatmapChart" style="width: 800px; height: 400px;"></div>

<script>
// 获取包含数据的 JavaScript 对象
var data = [
    { Region: 'Tokyo, Japan', 'Radiation Dose Rate': 0.12 },
    { Region: 'Chernobyl, Ukraine', 'Radiation Dose Rate': 125.78 },
    { Region: 'Los Angeles, USA', 'Radiation Dose Rate': 0.10 },
    { Region: 'Sellafield, UK', 'Radiation Dose Rate': 0.25 },
    { Region: 'Savannah River, USA', 'Radiation Dose Rate': 0.18 },
    { Region: 'Seversk, Russia', 'Radiation Dose Rate': 0.15 },
    { Region: 'Fukushima, Japan', 'Radiation Dose Rate': 0.30 },
    { Region: 'Paris, France', 'Radiation Dose Rate': 0.08 },
    { Region: 'Beijing, China', 'Radiation Dose Rate': 0.09 },
    { Region: 'Sydney, Australia', 'Radiation Dose Rate': 0.11 }
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


<!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

<!-- 创建一个具有指定ID的容器用于显示雷达图 -->
<div id="radarChart" style="width: 800px; height: 400px;"></div>

<script>
// 获取包含数据的 JavaScript 对象
var data = [
    { Region: 'Tokyo, Japan', 'Radiation Dose Rate': 0.12 },
    { Region: 'Chernobyl, Ukraine', 'Radiation Dose Rate': 0.78 },
    { Region: 'Los Angeles, USA', 'Radiation Dose Rate': 0.10 },
    { Region: 'Sellafield, UK', 'Radiation Dose Rate': 0.25 },
    { Region: 'Savannah River, USA', 'Radiation Dose Rate': 0.18 },
    { Region: 'Seversk, Russia', 'Radiation Dose Rate': 0.15 },
    { Region: 'Fukushima, Japan', 'Radiation Dose Rate': 0.30 },
    { Region: 'Paris, France', 'Radiation Dose Rate': 0.08 },
    { Region: 'Beijing, China', 'Radiation Dose Rate': 0.09 },
    { Region: 'Sydney, Australia', 'Radiation Dose Rate': 0.11 }
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
        indicator: regions.map(region => ({ name: region, max: Math.max(...doseRates) })),
        radius: '65%',
        center: ['50%', '50%'],
    },
    series: [{
        type: 'radar',
        data: [
            {
                value: doseRates,
                name: 'Radiation Dose Rate',
                areaStyle: {
                    color: 'rgba(255, 0, 0, 0.5)' // 雷达图区域填充颜色
                },
                lineStyle: {
                    color: 'red' // 雷达图边框线颜色
                },
            },
        ],
    }],
};

// 使用配置项设置雷达图
myChart.setOption(option);
</script>



<iframe src="https://jciv.iidj.net/map/" name="ifd" height="700px" width="100%" scrolling="no" frameborder="0"></iframe>
    <iframe src="https://data.rmtc.org.cn/gis/PubIndex.html#" name="ifd" height="700px" width="100%" scrolling="no" frameborder="0"></iframe>
