<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title> @yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link rel="icon" href ="{{ asset ('assets/img/logo.png')}}">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset ('assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{ asset ('assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset ('assets/css/main1.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="{{ asset ('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700')}}" rel="stylesheet">
	<!-- TABLE CDN -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
				<a href=/dashboard><img src="{{ asset ('assets/img/logo.png')}}" alt="Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('images/user/bem.png')}}" class="img-circle" alt="Avatar"> <span>{{Auth::user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<form action="{{route('logout')}}" method="POST" id="logout-form">
								@csrf
								<button class="btn btn-default" type="submit" value="Logout"><span>Logout</span></button>
								</form>
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
                        <li><a href="/dashboardbem" class=""><span>Dashboard</span></a></li>
                        <li><a href="/dashboardbemukm" class=""><span>UKM</span></a></li>
						<li><a href="/dashboardbemberita" class=""><span>Berita</span></a></li>
                        <li><a href="/dashboardbemagenda" class=""><span>Agenda</span></a></li>
						<li><a href="/dashboardbemuser" class=""><span>User</span></a></li>
					</ul>
				</nav>
			</div>
        </div>
        @yield('content')
    </div>
    
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('assets/scripts/klorofil-common.js')}}"></script>
	<script src="{{asset('https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js')}}"></script>
	

	
	<script type="text/javascript">
		$(document).ready(function () {
			var table = $('#datatable').DataTable();
		});
	</script>
	

</body>

</html>
