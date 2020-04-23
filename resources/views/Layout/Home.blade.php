<html lang="en"><head>
	<title>MAIKUM</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/linearicons/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/chartist/css/chartist-custom.css')}}" rel="stylesheet">
	<!-- MAIN CSS -->
	<link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link href="{{asset('assets/css/demo.css')}}" rel="stylesheet">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link href="assets/img/apple-icon.png" rel="apple-touch-icon" sizes="76x76">
	<link href="assets/img/favicon.png" rel="icon" type="image/png" sizes="96x96">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img class="img-responsive logo" alt="Klorofil Logo" src="assets/img/logo-dark.png"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button class="btn-toggle-fullwidth" type="button"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input class="form-control" type="text" placeholder="Search dashboard..." value="">
						<span class="input-group-btn"><button class="btn btn-primary" type="button">Go</button></span>
					</div>
				</form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
					<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" data-toggle="dropdown"><img class="img-circle" alt="Avatar" src="assets/img/user.png"> <span>Ancahnhaga_</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div class="sidebar" id="sidebar-nav">
			<div class="slimScrollDiv" style="width: auto; height: 95%; overflow: hidden; position: relative;"><div class="sidebar-scroll" style="width: auto; height: 95%; overflow: hidden;">
				<nav>
					<ul class="nav">
						<li><a href="index.html"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="{{route('Barang.create')}}"><i class="lnr lnr-code"></i> <span>Tambah Barang</span></a></li>
						<li><a class="active" href="{{route('Barang.index')}}"><i class="lnr lnr-chart-bars"></i> <span>Stock</span></a></li>
						<li><a href="panels.html"><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
						<li><a href="notifications.html"><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						<li>
							<a class="collapsed" href="#subPages" data-toggle="collapse"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div class="collapse " id="subPages">
								<ul class="nav">
									<li><a href="page-profile.html">Profile</a></li>
									<li><a href="page-login.html">Login</a></li>
									<li><a href="page-lockscreen.html">Lockscreen</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html"><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html"><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html"><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
					</ul>
				</nav>
			</div><div class="slimScrollBar" style="background: rgb(0, 0, 0); border-radius: 7px; top: 0px; width: 7px; height: 511.12px; right: 1px; display: block; position: absolute; z-index: 99; opacity: 0.4;"></div><div class="slimScrollRail" style="background: rgb(51, 51, 51); border-radius: 7px; top: 0px; width: 7px; height: 100%; right: 1px; display: none; position: absolute; z-index: 90; opacity: 0.2;"></div></div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main" style="min-height: 575px;">
			<!-- MAIN CONTENT -->
			@yield('content');
			
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var options;

		var data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [
				[200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			]
		};

		// line chart
		options = {
			height: "300px",
			showPoint: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#demo-line-chart', data, options);

		// bar chart
		options = {
			height: "300px",
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#demo-bar-chart', data, options);


		// area chart
		options = {
			height: "270px",
			showArea: true,
			showLine: false,
			showPoint: false,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#demo-area-chart', data, options);


		// multiple chart
		var data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		var options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#multiple-chart', data, options);

	});
	</script>



</body></html>