<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="{{asset('images/admin/favicon-32x32.png')}}" type="image/png" />
	<!-- Vector CSS -->
	<link href="{{asset('plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
	<!--plugins-->
    <link href="{{asset('plugins/input-tags/css/tagsinput.css')}}" rel="stylesheet" />
	<link href="{{asset('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('css/admin/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('js/admin/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/admin/bootstrap.min.css')}}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{asset('css/admin/icons.css')}}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{asset('css/admin/app.css')}}" />
	<link rel="stylesheet" href="{{asset('css/admin/dark-sidebar.css')}}" />
	<link rel="stylesheet" href="{{asset('css/admin/dark-theme.css')}}" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Roal</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
                <li>
					<a href="" class="">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>

				</li>

				<li class="menu-label">Web Apps</li>
                <li>
					<a href="#">
						<div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
						</div>
						<div class="menu-title">Mannage Order</div>
					</a>
				</li>
                <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon icon-color-1"> <i class="fadeIn animated bx bx-sitemap"></i>
						</div>
						<div class="menu-title"> Mannage Category</div>
					</a>
					<ul>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add Category </a>
						</li>
						<li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add Sub Category</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
						</div>
						<div class="menu-title">Mannage Product's</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="parent-icon icon-color-3"><i class="bx bx-group"></i>
						</div>
						<div class="menu-title">All Rider</div>
					</a>
				</li>
                <li>
					<a href="file-manager.html">
						<div class="parent-icon icon-color-3"><i class="bx bx-message"></i>
						</div>
						<div class="menu-title">Mannage Customer's</div>
					</a>
				</li>
                <li>
					<a href="#">
						<div class="parent-icon icon-color-3"><i class="bx bx-message"></i>
						</div>
						<div class="menu-title">Reservation</div>
					</a>
				</li>
                <li>
					<a href="#">
						<div class="parent-icon icon-color-3"><i class="bx bx-message"></i>
						</div>
						<div class="menu-title">Caterer</div>
					</a>
				</li>
                <li>
					<a href="#">
						<div class="parent-icon icon-color-3"><i class="bx bx-message"></i>
						</div>
						<div class="menu-title">Reports</div>
					</a>
				</li>

                <li>
					<a href="#">
						<div class="parent-icon icon-color-3"><i class="bx bx-message"></i>
						</div>
						<div class="menu-title">Mannage website Setting</div>
					</a>
				</li>

			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->
		<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
				{{-- <div class="flex-grow-1 search-bar">
					<div class="input-group">
						<div class="input-group-prepend search-arrow-back">
							<button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
							</button>
						</div>
						<input type="text" class="form-control" placeholder="search" />
						<div class="input-group-append">
							<button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
							</button>
						</div>
					</div>
				</div> --}}
				<div class="right-topbar ml-auto">
					<ul class="navbar-nav">
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-toggle="dropdown">	<span class="msg-count">6</span>
								<i class="bx bx-comment-detail vertical-align-middle"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">6 New</h6>
										<p class="msg-header-subtitle">Application Messages</p>
									</div>
								</a>
								<div class="header-message-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Daisy Anderson <span class="msg-time float-right">5 sec
													ago</span></h6>
												<p class="msg-info">The standard chunk of lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Althea Cabardo <span class="msg-time float-right">14
													sec ago</span></h6>
												<p class="msg-info">Many desktop publishing packages</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Oscar Garner <span class="msg-time float-right">8 min
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Katherine Pechon <span class="msg-time float-right">15
													min ago</span></h6>
												<p class="msg-info">Making this the first true generator</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Amelia Doe <span class="msg-time float-right">22 min
													ago</span></h6>
												<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Cristina Jhons <span class="msg-time float-right">2 hrs
													ago</span></h6>
												<p class="msg-info">The passage is attributed to an unknown</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">James Caviness <span class="msg-time float-right">4 hrs
													ago</span></h6>
												<p class="msg-info">The point of using Lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Peter Costanzo <span class="msg-time float-right">6 hrs
													ago</span></h6>
												<p class="msg-info">It was popularised in the 1960s</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">David Buckley <span class="msg-time float-right">2 hrs
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-right">2 days
													ago</span></h6>
												<p class="msg-info">If you are going to use a passage</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Johnny Seitz <span class="msg-time float-right">5 days
													ago</span></h6>
												<p class="msg-info">All the Lorem Ipsum generators</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Messages</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-toggle="dropdown">	<i class="bx bx-bell vertical-align-middle"></i>
								<span class="msg-count">8</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">8 New</h6>
										<p class="msg-header-subtitle">Application Notifications</p>
									</div>
								</a>
								<div class="header-notifications-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Customers<span class="msg-time float-right">14 Sec
													ago</span></h6>
												<p class="msg-info">5 new user registered</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Orders <span class="msg-time float-right">2 min
													ago</span></h6>
												<p class="msg-info">You have recived new orders</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-shineblue text-shineblue"><i class="bx bx-file"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">24 PDF File<span class="msg-time float-right">19 min
													ago</span></h6>
												<p class="msg-info">The pdf files generated</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-cyne text-cyne"><i class="bx bx-send"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Time Response <span class="msg-time float-right">28 min
													ago</span></h6>
												<p class="msg-info">5.1 min avarage time response</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-purple text-purple"><i class="bx bx-home-circle"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Product Approved <span
													class="msg-time float-right">2 hrs ago</span></h6>
												<p class="msg-info">Your new product has approved</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-warning text-warning"><i class="bx bx-message-detail"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Comments <span class="msg-time float-right">4 hrs
													ago</span></h6>
												<p class="msg-info">New customer comments recived</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Your item is shipped <span class="msg-time float-right">5 hrs
													ago</span></h6>
												<p class="msg-info">Successfully shipped your item</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-sinata text-sinata"><i class='bx bx-user-pin'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New 24 authors<span class="msg-time float-right">1 day
													ago</span></h6>
												<p class="msg-info">24 new authors joined last week</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-mehandi text-mehandi"><i class='bx bx-door-open'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Defense Alerts <span class="msg-time float-right">2 weeks
													ago</span></h6>
												<p class="msg-info">45% less alerts last 4 weeks</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Notifications</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
								<div class="media user-box align-items-center">
									<div class="media-body user-info">
										<p class="user-name mb-0"></p></p>
										<p class="designattion mb-0">Available</p>
									</div>
									<img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cog"></i><span>Settings</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-tachometer"></i><span>Dashboard</span></a>
								{{-- <a class="dropdown-item" href="javascript:;"><i
										class="bx bx-wallet"></i><span>Earnings</span></a> --}}
								{{-- <a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cloud-download"></i><span>Downloads</span></a> --}}
								<div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-power-off"></i><span>Logout</span></a>
							</div>
						</li>

					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->
		<!--page-wrapper-->
        @yield('content')
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
			<p class="mb-0">Syndash @2020 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">codervent</a>
			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="custom-control custom-radio">
					<input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="darkmode">Dark Mode</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
					<label class="custom-control-label" for="lightmode">Light Mode</label>
				</div>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkSidebar">
				<label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="ColorLessIcons">
				<label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('js/admin/jquery.min.js')}}"></script>
	<script src="{{asset('js/admin/popper.min.js')}}"></script>
	<script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	<!--plugins-->
        @yield('jqueryscript')
	<script src="{{asset('plugins/input-tags/js/tagsinput.js')}}"></script>
	<script src="{{asset('plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!-- Vector map JavaScript -->

	<script src="{{asset('js/admin/index.js')}}"></script>
	<!-- App JS -->
	<script src="{{asset('js/admin/app.js')}}"></script>
	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</body>

</html>
