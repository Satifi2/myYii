<?php

/**
 *  Team: BaoSha
 *  Coding by 李星谊 2113601  1/16
 *  NuclearPollution frontend
 */
/**
 *  Team: BaoSha
 *  Coding by 杨淇 2112893 1/14
 *  NuclearPollution frontend
 */

/** @var yii\web\View $this */

use backend\models\TeamMembers;
use yii\bootstrap5\Html;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Backend</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<link rel="stylesheet" href="font.css">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script src="assets/js/jquery-1.11.1.min.js"></script>


</head>

<body class="page-body">
	<div class="settings-pane">
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		<div class="settings-pane-inner">
			<div class="row">
				<div class="col-md-4">
					<div class="user-info">
						<div class="user-image">
							<a>
								<img src="assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>

						<div class="user-details">

							<h3>
								<a href="#">Baosha</a>

								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>

							<p class="user-title">Web Developer</p>

							<div class="user-links">
								<a class="btn btn-primary">Edit Profile</a>
								<a class="btn btn-success">Upgrade</a>
							</div>

						</div>

					</div>

				</div>

				<div class="col-md-8 link-blocks-env">

					<div class="links-block left-sep">
						<h4>
							<span>Notifications</span>
						</h4>

						<ul class="list-unstyled">
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
								<label for="sp-chk1">TeamMemberss</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
								<label for="sp-chk2">Events</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
								<label for="sp-chk3">Updates</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
								<label for="sp-chk4">Server Uptime</label>
							</li>
						</ul>
					</div>

					<div class="links-block left-sep">
						<h4>
							<a href="#">
								<span>Help Desk</span>
							</a>
						</h4>

						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Support Center
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Submit a Ticket
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Domains Protocol
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Terms of Service
								</a>
							</li>
						</ul>
					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">

			<div class="sidebar-menu-inner">

				<header class="logo-env">

					<!-- logo -->
					<div class="logo">
						<h3 style="color:white;font-size:25px;">
							Baosha
						</h3>


					</div>
				</header>



				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href=#>
							<i class="linecons-star"></i>
							<span class="title">课程作业</span>
						</a>
						<ul>
							<li>
								<a href="data/team/Baosha_需求文档(2111065_2112847_2113601_2112893).pdf">
									<span class="title">Baosha_需求文档</span>
								</a>
							</li>
							<li>
								<a href="data/team/Baosha_设计文档(2111065_2112847_2113601_2112893).pdf">
									<span class="title">Baosha_设计文档</span>
								</a>
							</li>
							<li>
								<a href="data/team/Baosha_实现文档(2111065_2112847_2113601_2112893).pdf">
									<span class="title">Baosha_实现文档</span>
								</a>
							</li>
							<li>
								<a href="data/team/Baosha_用户手册(2111065_2112847_2113601_2112893).pdf">
									<span class="title">Baosha_用户手册</span>
								</a>
							</li>
							<li>
								<a href="data/team/Baosha_部署文档(2111065_2112847_2113601_2112893).pdf">
									<span class="title">Baosha_部署文档</span>
								</a>
							</li>
							<li>
								<a href="data/team/Baosha_项目展示(2111065_2112847_2113601_2112893).pptx">
									<span class="title">Baosha_项目展示PPT</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href=#>
							<i class="linecons-star"></i>
							<span class="title">个人作业1-Web前端初探</span>
						</a>
						<ul>
							<li>
								<a href="data/personal/作业1(2112847_杜怡兴).zip">
									<span class="title">杜怡兴(2112847) </span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业1(2113601_李星谊).zip">
									<span class="title">李星谊(2113601)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业1(2111065_王健行).zip">
									<span class="title">王健行(2111065)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业1(2112893_杨淇).zip">
									<span class="title">杨淇(2112893)</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href=#>
							<i class="linecons-star"></i>
							<span class="title">个人作业2-Web前端设计</span>
						</a>
						<ul>
							<li>
								<a href="data/personal/作业2(2112847_杜怡兴).zip">
									<span class="title">杜怡兴(2112847) </span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业2(2113601_李星谊).zip">
									<span class="title">李星谊(2113601)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业2(2111065_王健行).zip">
									<span class="title">王健行(2111065)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业2(2112893_杨淇).zip">
									<span class="title">杨淇(2112893)</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href=#>
							<i class="linecons-star"></i>
							<span class="title">个人作业3开源建站工具初试文档</span>
						</a>
						<ul>
							<li>
								<a href="data/personal/作业3(2112847_杜怡兴).zip">
									<span class="title">杜怡兴(2112847) </span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业3(2113601_李星谊).zip">
									<span class="title">李星谊(2113601)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业3(2111065_王健行).zip">
									<span class="title">王健行(2111065)</span>
								</a>
							</li>
							<li>
								<a href="data/personal/作业3(2112893_杨淇).zip">
									<span class="title">杨淇(2112893)</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="index.php?r=team-members">
							<i class="linecons-star"></i>
							<span class="title">小组成员信息管理</span>
						</a>
					</li>
					<li>
						<a href="index.php?r=suggestion">
							<i class="linecons-star"></i>
							<span class="title">评论管理</span>
						</a>
					</li>
				</ul>

			</div>

		</div>

		<div class="main-content">

			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">

				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">

					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>

					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>

						<ul class="dropdown-menu TeamMemberss">
							<li>

								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">


								</ul>

							</li>

							<li class="external">
								<a href="blank-sidebar.html">
									<span>All TeamMemberss</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>

						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>

							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">

								</ul>
							</li>

							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>

				</ul>


				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">

					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->

						<form method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />

							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>

					</li>

					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								Arlind Nushi
								<i class="fa-angle-down"></i>
							</span>
						</a>

						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
									Help
								</a>
							</li>
							<li class="last">
								<?= Html::a('Logout', ['site/logout']) ?>
								</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>

				</ul>

			</nav>
			<div class="page-title">

				<div>
					<h1 style="text-align: center; color: #42b883;">Nuclear Pollution</h1>
					<p style="text-align: center; color: #CCCCCC;">Nankai University Internet Database Development Course Project for Computer Science and Technology</p>
					<p style="text-align: center; color: #CCCCCC;margin-bottom: 50px;">南开大学计算机互联网数据库开发课程项目</p>
				</div>


				<!-- <div class="breadcrumb-env">

					<ol class="breadcrumb bc-1">
						<li>
							<a href=#><i class="fa-home"></i>Home</a>
						</li>
						<li>

							<a href="index.php?r=team-members">Members</a>
						</li>
						<li>

							<a href="index.php?r=suggestion">Suggestions</a>
						</li>
					</ol>
				</div>
			</div> -->

				<!-- 引入ECharts库的JavaScript文件，确保路径正确 -->
				<script src="https://cdn.jsdelivr.net/npm/echarts@5.3.2/dist/echarts.min.js"></script>

				<!-- 创建一个具有指定ID的容器用于显示热力图 -->
				<div style="text-align: center;">
					<div id="githubHeatmap" style="width: 800px; height: 400px; display: inline-block;"></div>
				</div>


				<script>
					// 定义数据
					var data = [
						[4, 5, 8, 7, 2, 1, 2],
						[0, 1, 2, 0, 2, 1, 0],
						[0, 0, 1, 0, 0, 0, 2],
						[4, 5, 7, 8, 3, 5, 2]
					];

					// 转换数据格式
					var heatmapData = [];
					for (var week = 0; week < data.length; week++) {
						for (var day = 0; day < data[week].length; day++) {
							heatmapData.push([day, week, data[week][day]]);
						}
					}


					// 定义横轴和纵轴标签
					var weekLabels = ['12/17~12/24', '1/1~1/7', '1/7~1/14', '1/14~1/21'];
					var dayLabels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

					// 创建 ECharts 实例
					var myChart = echarts.init(document.getElementById('githubHeatmap'));

					// 配置热力图选项
					var option = {
						title: {
							text: '项目的每日提交统计',
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
							top: '20%', // 可以适当调整以获得最佳布局
							bottom: '20%', // 增加值以避免颜色条覆盖文字
							containLabel: true
						},
						xAxis: {
							type: 'category',
							data: dayLabels,
							splitArea: {
								show: true
							}
						},
						yAxis: {
							type: 'category',
							data: weekLabels,
							splitArea: {
								show: true
							}
						},
						visualMap: {
							min: 0,
							max: 8,
							calculable: true,
							orient: 'horizontal',
							left: 'center',
							bottom: '5%', // 调整位置以避免覆盖文字
							color: ['#196127', '#239a3b', '#7bc96f', '#c6e48b', '#ebedf0'] // 颜色数组反转
						},
						series: [{
							type: 'heatmap',
							data: heatmapData,
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

				<div style="text-align: center;">
					<div id="radarChart" style="width: 600px; height: 400px; display: inline-block;"></div>
				</div>


				<script>
					// 获取div元素
					var radarChart = document.getElementById('radarChart');

					// 初始化echarts
					var myChart = echarts.init(radarChart);

					// 配置雷达图的数据
					var option = {
						title: {
							text: '项目难度雷达图'
						},
						tooltip: {},
						radar: {
							indicator: [{
									name: '数据库',
									max: 10
								},
								{
									name: '静态前端',
									max: 10
								},
								{
									name: '数据库显示',
									max: 10
								},
								{
									name: '动态图片',
									max: 10
								},
								{
									name: '动态表格',
									max: 10
								},
								{
									name: '用户登录',
									max: 10
								},
								{
									name: '评论管理',
									max: 10
								},
								{
									name: '用户权限管理',
									max: 10
								},
								{
									name: '爬虫',
									max: 10
								},
								{
									name: '动态爬虫',
									max: 10
								},
								{
									name: '分页',
									max: 10
								},
								{
									name: '整合',
									max: 10
								}
							]
						},
						series: [{
							name: '项目难度',
							type: 'radar',
							data: [{
								value: [7, 4, 7, 6, 7, 10, 8, 8, 7, 8, 6, 7],
								name: '项目难度'
							}]
						}]
					};


					// 使用刚指定的配置项和数据显示图表
					myChart.setOption(option);
				</script>



				<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100vh;">
					<div id="clustered-bar-chart" style="width: 800px; height: 400px;"></div>
				</div>

				<script>
					// 初始化ECharts实例
					var myChart = echarts.init(document.getElementById('clustered-bar-chart'));

					// 定义数据
					var frontendData = [2000, 300, 400, 200, 200, 200, 1000];
					var backendData = [1000, 500, 200, 200, 200, 500];
					var databaseData = [450, 300];
					var spiderData = [300, 500];

					// 定义项目名称
					var projects = ['index', 'about', 'news', 'contact', 'login', 'signup', 'graph'];

					// 配置柱状图的颜色
					var colorPalette = ['#FFA500', '#FF7F50', '#FF6347', '#FF4500'];

					// 配置图表选项
					var option = {
						color: colorPalette,
						title: {
							text: '项目代码量统计'
						},
						legend: {
							data: ['前端', '后端', '数据库', '爬虫']
						},
						tooltip: {
							trigger: 'axis',
							axisPointer: {
								type: 'shadow'
							}
						},
						xAxis: {
							type: 'category',
							data: projects
						},
						yAxis: {
							type: 'value',
							name: '代码量'
						},
						series: [{
								name: '前端',
								type: 'bar',
								data: frontendData
							},
							{
								name: '后端',
								type: 'bar',
								data: backendData
							},
							{
								name: '数据库',
								type: 'bar',
								data: databaseData
							},
							{
								name: '爬虫',
								type: 'bar',
								data: spiderData
							}
						]
					};

					// 使用刚指定的配置项和数据显示图表
					myChart.setOption(option);
				</script>



				<style>
					.card {
						margin-top: 50px;
						max-width: 800px;
						/* 设置最大宽度 */
						margin: 0 auto;
						/* 水平居中 */
						padding: 20px;
						/* 外边框 */
						border-radius: 15px;
						/* 圆角效果 */
						box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
						/* 更明显的阴影 */
						background-color: #e0f7fa;
						/* 浅天蓝色背景 */
						font-family: 'KaiTi', sans-serif;
						/* 楷体字体 */
					}

					.card p,
					.card strong {
						margin: 0 0 10px;
						/* 添加一些底部间距 */
						font-size: 18px;
						/* 字体稍微变大 */
						font-weight: bold;
						/* 字体加粗 */
					}

					.divider {
						border-top: 1px solid #ccc;
						margin-top: 10px;
						padding-top: 10px;
					}

					.card strong {
						display: block;
						text-align: center;
						margin: 0 auto;
					}
				</style>


				<div class="card">
					<strong>项目总结</strong>
					<p>核污染是一种严重的环境问题，它产生的危害包括放射性物质的释放，对生态系统和人类健康造成长期影响。核污染导致土壤、水源和大气中的放射性污染物积累，对生态链和生物多样性造成损害。此外，核污染还引发了癌症、遗传损伤、免疫系统问题等健康风险，对受影响地区的居民产生了严重影响。除了对环境和健康的危害，核污染还导致了广泛的社会恐慌和经济损失，因此必须采取积极的措施来减轻和预防核污染。</p>
					<br>
					<p>日本排放核废水可能会带来多方面的危害：</p>
					<p>1. 海洋生态系统污染：排放核废水可能导致海洋生态系统的污染，对海洋生物造成危害。放射性物质的释放可能积累在海洋生物体内，影响食物链，可能损害渔业资源。</p>
					<p>2. 损害人类健康：海鲜是日本和周边地区的主要食品之一，污染的海产品可能对人类健康造成威胁。放射性物质摄入可能导致癌症、遗传损伤和其他健康问题。</p>
					<p>3. 海洋生态多样性减少：排放核废水可能对海洋生态多样性产生负面影响，威胁珍稀和濒危物种的生存。</p>
					<p>4. 区域声誉受损：排放核废水可能损害日本的国际声誉，引发国际社会的担忧和抗议。这可能影响日本的国际贸易和外交关系。</p>
					<p>5. 长期环境影响：放射性物质具有长寿命，其影响可能在数十年甚至更长时间内持续存在。这可能导致未来几代人面临环境和健康风险。</p>
					<br>
					<p>为了减轻和预防环境污染，我们需要采取一系列积极的努力和行动</p>
					<p>减少污染源：降低排放源的污染水平是减轻污染的首要任务。工业企业、农业和其他行业应采取技术和管理措施来减少废物和有害物质的排放，以确保环境质量不受严重影响。</p>
					<p>推广清洁能源：减少对化石燃料的依赖，转向清洁能源如太阳能、风能和水能，有助于降低空气和水污染，减少温室气体排放。</p>
					<p>采取有效的废物管理措施：实施有效的废物管理，包括垃圾分类、回收和垃圾处理，以减少垃圾填埋和焚烧对环境的影响。</p>
					<p>提高环保意识：加强公众对环保问题的认知和理解，倡导绿色生活方式，包括节能、节水、减少塑料污染等。</p>

				</div>
				<div class="divider"></div>




				<style>
					footer {
						text-align: center;
						position: absolute;
						bottom: 0;
						left: 0;
						right: 0;
						background-color: #f0f0f0;
						/* 可选：设置背景颜色 */
						padding: 10px;
						/* 可选：添加一些内边距 */
					}
				</style>

				<footer>
					<div>
						<div>
							&copy; 2023
							<strong>Baosha</strong>
							源代码GitHub链接 <a href="https://github.com/Satifi2/myYii" target="_blank" title=" ">https://github.com/Satifi2/myYii</a>
						</div>
					</div>
				</footer>

			</div>


			<!-- start: Chat Section -->
			<div id="chat" class="fixed">

				<div class="chat-inner">


					<h2 class="chat-header">
						<a href="#" class="chat-close" data-toggle="chat">
							<i class="fa-plus-circle rotate-45deg"></i>
						</a>

						Chat
						<span class="badge badge-success is-hidden">0</span>
					</h2>

					<script type="text/javascript">
						// Here is just a sample how to open chat conversation box
						jQuery(document).ready(function($) {
							var $chat_conversation = $(".chat-conversation");

							$(".chat-group a").on('click', function(ev) {
								ev.preventDefault();

								$chat_conversation.toggleClass('is-open');

								$(".chat-conversation textarea").trigger('autosize.resize').focus();
							});

							$(".conversation-close").on('click', function(ev) {
								ev.preventDefault();
								$chat_conversation.removeClass('is-open');
							});
						});
					</script>


					<div class="chat-group">
						<strong>Favorites</strong>

						<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
						<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
						<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
						<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
						<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
					</div>


					<div class="chat-group">
						<strong>Work</strong>

						<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
						<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
						<a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
					</div>


					<div class="chat-group">
						<strong>Other</strong>

						<a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
						<a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
						<a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
						<a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
						<a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
						<a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
						<a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
						<a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
						<a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
						<a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
						<a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
						<a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
						<a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
						<a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
						<a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
						<a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
					</div>

				</div>

				<!-- conversation template -->
				<div class="chat-conversation">

					<div class="conversation-header">
						<a href="#" class="conversation-close">
							&times;
						</a>

						<span class="user-status is-online"></span>
						<span class="display-name">Arlind Nushi</span>
						<small>Online</small>
					</div>

					<ul class="conversation-body">
						<li>
							<span class="user">Arlind Nushi</span>
							<span class="time">09:00</span>
							<p>Are you here?</p>
						</li>
						<li class="odd">
							<span class="user">Brandon S. Young</span>
							<span class="time">09:25</span>
							<p>This TeamMembers is pre-queued.</p>
						</li>
						<li>
							<span class="user">Brandon S. Young</span>
							<span class="time">09:26</span>
							<p>Whohoo!</p>
						</li>
						<li class="odd">
							<span class="user">Arlind Nushi</span>
							<span class="time">09:27</span>
							<p>Do you like it?</p>
						</li>
					</ul>

					<div class="chat-textarea">
						<textarea class="form-control autogrow" placeholder="Type your TeamMembers"></textarea>
					</div>

				</div>

			</div>
			<!-- end: Chat Section -->


		</div>






		<!-- Bottom Scripts -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/TweenMax.min.js"></script>
		<script src="assets/js/resizeable.js"></script>
		<script src="assets/js/joinable.js"></script>
		<script src="assets/js/xenon-api.js"></script>
		<script src="assets/js/xenon-toggles.js"></script>


		<!-- Imported scripts on this page -->
		<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>
		<script src="assets/js/jvectormap/regions/jquery-jvectormap-it-mill-en.js"></script>


		<!-- JavaScripts initializations and stuff -->
		<script src="assets/js/xenon-custom.js"></script>

</body>

</html>