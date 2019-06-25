<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title> @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset ('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset ('assets/vendor/linearicons/style.css')}}">
	<!-- <link rel="stylesheet" href="{{ asset ('assets/vendor/chartist/css/chartist-custom.css')}}"> -->
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset ('assets/css/main1.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset ('assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="{{ asset ('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700')}}" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('assets/img/apple-icon.png')}}">
	  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset ('assets/img/favicon.png')}}">
</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href=/dashboard"><img src="{{ asset ('assets/img/logo.png')}}" alt="Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<!-- <div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div> -->
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class="active"><span>Dashboard</span> </a></li>
						<li><a href="/dashboardukm" class=""> <span>UKM</span> </a></li>
						<li><a href="/charts" class=""> <span>Charts</span> </a></li>
						<li><a href="/panels" class=""> <span>Panels</span> </a></li>
						<li><a href="/notifications" class=""> <span>Notifications</span> </a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="page-login.html" class="">Login</a></li>
									<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		
		<div class="main">
		
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard</h3>
							<p class="panel-subtitle">Unit Kegiatan Mahasiswa UNPAD</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<!-- <span class="icon"><i class="fa fa-eye"></i></span> -->
										<p style="text-align:center">
											<span class="number">20</span>
											<span class="title">Jumlah UKM</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<!-- <span class="icon"><i class="fa fa-eye"></i></span> -->
										<p style="text-align:center">
											<span class="number">20</span>
											<span class="title">Jumlah UKM</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<!-- <span class="icon"><i class="fa fa-eye"></i></span> -->
										<p style="text-align:center">
											<span class="number">20</span>
											<span class="title">Jumlah UKM</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<!-- <span class="icon"><i class="fa fa-eye"></i></span> -->
										<p style="text-align:center">
											<span class="number">20</span>
											<span class="title">Jumlah UKM</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Lalalala</h3>
								</div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>No.</th>
												<th>Kategori</th>
												<th>Judul</th>
												<th>Lampiran</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Berita</td>
												<td>ABC</td>
												<td>-</td>
												<td>
													<button type="button" class="btn btn-primary btn-toastr" data-context="detail" data-message="This is general theme info" data-position="top-right">Detail</button>
													<button type="button" class="btn btn-warning btn-toastr" data-context="edit" data-message="This is general theme info" data-position="top-right">Edit</button>
													<button type="button" class="btn btn-danger btn-toastr" data-context="delete" data-message="This is general theme info" data-position="top-right">Delete</button>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Agenda</td>
												<td>DEF</td>
												<td>file.pdf</td>
												<td>
													<button type="button" class="btn btn-primary btn-toastr" data-context="detail" data-message="This is general theme info" data-position="top-right">Detail</button>
													<button type="button" class="btn btn-warning btn-toastr" data-context="edit" data-message="This is general theme info" data-position="top-right">Edit</button>
													<button type="button" class="btn btn-danger btn-toastr" data-context="delete" data-message="This is general theme info" data-position="top-right">Delete</button>
												</td>
											</tr>
										</tbody>
									</table>

									<br>

									<table class="table table-bordered">
										<thead>
											<tr>
												<th>No.</th>
												<th>Kategori</th>
												<th>Judul</th>
												<th>Lampiran</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Berita</td>
												<td>ABCABCABCABCABCABCABCABCABCABCABCABCABCABCABCABCABCABCABCABCABC</td>
												<td>-</td>
												<td>
													<button type="button" class="btn btn-primary btn-toastr" data-context="detail" data-message="This is general theme info" data-position="top-right">Detail</button>
													<button type="button" class="btn btn-warning btn-toastr" data-context="edit" data-message="This is general theme info" data-position="top-right">Edit</button>
													<button type="button" class="btn btn-danger btn-toastr" data-context="delete" data-message="This is general theme info" data-position="top-right">Delete</button>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Agenda</td>
												<td>DEF</td>
												<td>file.pdf</td>
												<td>
													<button type="button" class="btn btn-primary btn-toastr" data-context="detail" data-message="This is general theme info" data-position="top-right">Detail</button>
													<button type="button" class="btn btn-warning btn-toastr" data-context="edit" data-message="This is general theme info" data-position="top-right">Edit</button>
													<button type="button" class="btn btn-danger btn-toastr" data-context="delete" data-message="This is general theme info" data-position="top-right">Delete</button>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">To-Do List</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<ul class="list-unstyled todo-list">
										<li>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											<p>
												<span class="title">Restart Server</span>
												<span class="short-description">Dynamically integrate client-centric technologies without cooperative resources.</span>
												<span class="date">Oct 9, 2016</span>
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
										<li>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											<p>
												<span class="title">Retest Upload Scenario</span>
												<span class="short-description">Compellingly implement clicks-and-mortar relationships without highly efficient metrics.</span>
												<span class="date">Oct 23, 2016</span>
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
										<li>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											<p>
												<strong>Functional Spec Meeting</strong>
												<span class="short-description">Monotonectally formulate client-focused core competencies after parallel web-readiness.</span>
												<span class="date">Oct 11, 2016</span>
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
						<div class="col-md-5">
							
							<div class="panel panel-scrolling">
								<div class="panel-heading">
									<h3 class="panel-title">Recent User Activity</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<ul class="list-unstyled activity-list">
										<li>
											<img src="assets/img/user1.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Michael</a> has achieved 80% of his completed tasks <span class="timestamp">20 minutes ago</span></p>
										</li>
										<li>
											<img src="assets/img/user2.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Daniel</a> has been added as a team member to project <a href="#">System Update</a> <span class="timestamp">Yesterday</span></p>
										</li>
										<li>
											<img src="assets/img/user3.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Martha</a> created a new heatmap view <a href="#">Landing Page</a> <span class="timestamp">2 days ago</span></p>
										</li>
										<li>
											<img src="assets/img/user4.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Jane</a> has completed all of the tasks <span class="timestamp">2 days ago</span></p>
										</li>
										<li>
											<img src="assets/img/user5.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Jason</a> started a discussion about <a href="#">Weekly Meeting</a> <span class="timestamp">3 days ago</span></p>
										</li>
									</ul>
									<button type="button" class="btn btn-primary btn-bottom center-block">Load More</button>
								</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">My Tasks</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<ul class="list-unstyled task-list">
										<li>
											<p>Updating Users Settings <span class="label-percent">23%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%">
													<span class="sr-only">23% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<p>Load &amp; Stress Test <span class="label-percent">80%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
													<span class="sr-only">80% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<p>Data Duplication Check <span class="label-percent">100%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
													<span class="sr-only">Success</span>
												</div>
											</div>
										</li>
										<li>
											<p>Server Check <span class="label-percent">45%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
													<span class="sr-only">45% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<p>Mobile App Development <span class="label-percent">10%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
													<span class="sr-only">10% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
						<div class="col-md-4">
							
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Website Visits</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<div id="visits-chart" class="ct-chart"></div>
								</div>
							</div>
							
						</div>
						<div class="col-md-4">
							
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">System Load</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<div id="system-load" class="easy-pie-chart" data-percent="70">
										<span class="percent">70</span>
									</div>
									<h4>CPU Load</h4>
									<ul class="list-unstyled list-justify">
										<li>High: <span>95%</span></li>
										<li>Average: <span>87%</span></li>
										<li>Low: <span>20%</span></li>
										<li>Threads: <span>996</span></li>
										<li>Processes: <span>259</span></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		@yield('content')

		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
</p>
			</div>
		</footer>
	</div>
	
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script> -->
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	// $(function() {
	// 	var data, options;

	// 	data = {
	// 		labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
	// 		series: [
	// 			[23, 29, 24, 40, 25, 24, 35],
	// 			[14, 25, 18, 34, 29, 38, 44],
	// 		]
	// 	};

	// 	options = {
	// 		height: 300,
	// 		showArea: true,
	// 		showLine: false,
	// 		showPoint: false,
	// 		fullWidth: true,
	// 		axisX: {
	// 			showGrid: false
	// 		},
	// 		lineSmooth: false,
	// 	};

	// 	new Chartist.Line('#headline-chart', data, options);


	// 	data = {
	// 		labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	// 		series: [{
	// 			name: 'series-real',
	// 			data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
	// 		}, {
	// 			name: 'series-projection',
	// 			data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
	// 		}]
	// 	};

	// 	options = {
	// 		fullWidth: true,
	// 		lineSmooth: false,
	// 		height: "270px",
	// 		low: 0,
	// 		high: 'auto',
	// 		series: {
	// 			'series-projection': {
	// 				showArea: true,
	// 				showPoint: false,
	// 				showLine: false
	// 			},
	// 		},
	// 		axisX: {
	// 			showGrid: false,

	// 		},
	// 		axisY: {
	// 			showGrid: false,
	// 			onlyInteger: true,
	// 			offset: 0,
	// 		},
	// 		chartPadding: {
	// 			left: 20,
	// 			right: 20
	// 		}
	// 	};

	// 	new Chartist.Line('#visits-trends-chart', data, options);


	// 	data = {
	// 		labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
	// 		series: [
	// 			[6384, 6342, 5437, 2764, 3958, 5068, 7654]
	// 		]
	// 	};

	// 	options = {
	// 		height: 300,
	// 		axisX: {
	// 			showGrid: false
	// 		},
	// 	};

	// 	new Chartist.Bar('#visits-chart', data, options);


	// 	var sysLoad = $('#system-load').easyPieChart({
	// 		size: 130,
	// 		barColor: function(percent) {
	// 			return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
	// 		},
	// 		trackColor: 'rgba(245, 245, 245, 0.8)',
	// 		scaleColor: false,
	// 		lineWidth: 5,
	// 		lineCap: "square",
	// 		animate: 800
	// 	});

	// 	var updateInterval = 3000; // in milliseconds

	// 	setInterval(function() {
	// 		var randomVal;
	// 		randomVal = getRandomInt(0, 100);

	// 		sysLoad.data('easyPieChart').update(randomVal);
	// 		sysLoad.find('.percent').text(randomVal);
	// 	}, updateInterval);

	// 	function getRandomInt(min, max) {
	// 		return Math.floor(Math.random() * (max - min + 1)) + min;
	// 	}

	// });
	// </script>
	</body>
