<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.bootstrap-hunter.com/unicorn/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2016 15:59:19 GMT -->
<head>
	<title>Unicorn Admin</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/fullcalendar.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/jquery.jscrollpane.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/unicorn.css') }}">

	
<!--[if lt IE 9]>
		<script type="text/javascript" src="js/respond.min.js"></script>
		<![endif]-->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-44987299-1', 'bootstrap-hunter.com');
			ga('send', 'pageview');

		</script></head>
		<body data-color="grey" class="flat">
			<div id="wrapper">
				<div id="header">
					<h1><a href="index-2.html">Unicorn Admin</a></h1>
					<a id="menu-trigger" href="#"><i class="fa fa-bars"></i></a>
				</div>
				<div id="user-nav">
					<ul class="btn-group">
						<li class="btn"><a title="" href="#"><i class="fa fa-user"></i> <span class="text">Profile</span></a></li>
						<li class="btn dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="fa fa-envelope"></i> <span class="text">Messages</span> <span class="label label-danger">5</span> <b class="caret"></b></a>
							<ul class="dropdown-menu messages-menu">
								<li class="title"><i class="fa fa-envelope-alt"></i>Messages<a class="title-btn" href="#" title="Write new message"><i class="fa fa-share"></i></a></li>
								<li class="message-item">
									<a href="#">
										<img alt="User Icon" src="img/demo/av1.jpg"/>
										<div class="message-content">
											<span class="message-time">
												3 mins ago
											</span>
											<span class="message-sender">
												Nunc Cenenatis
											</span>
											<span class="message">
												Hi, can you meet me at the office tomorrow morning?
											</span>
										</div>
									</a>
								</li>
								<li class="message-item">
									<a href="#">
										<img alt="User Icon" src="img/demo/av1.jpg"/>
										<div class="message-content">
											<span class="message-time">
												3 mins ago
											</span>
											<span class="message-sender">
												Nunc Cenenatis
											</span>
											<span class="message">
												Hi, can you meet me at the office tomorrow morning?
											</span>
										</div>
									</a>
								</li>
								<li class="message-item">
									<a href="#">
										<img alt="User Icon" src="img/demo/av1.jpg"/>
										<div class="message-content">
											<span class="message-time">
												3 mins ago
											</span>
											<span class="message-sender">
												Nunc Cenenatis
											</span>
											<span class="message">
												Hi, can you meet me at the office tomorrow morning?
											</span>
										</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="btn"><a title="" href="#"><i class="fa fa-cog"></i> <span class="text">Settings</span></a></li>
						<li class="btn"><a title="" href="login.html"><i class="fa fa-share"></i> <span class="text">Logout</span></a></li>
					</ul>
				</div>
				<div id="switcher">
					<div id="switcher-inner">
						<h3>Theme Options</h3>
						<h4>Colors</h4>
						<p id="color-style">
							<a data-color="orange" title="Orange" class="button-square orange-switcher" href="#"></a>
							<a data-color="turquoise" title="Turquoise" class="button-square turquoise-switcher" href="#"></a>
							<a data-color="blue" title="Blue" class="button-square blue-switcher" href="#"></a>
							<a data-color="green" title="Green" class="button-square green-switcher" href="#"></a>
							<a data-color="red" title="Red" class="button-square red-switcher" href="#"></a>
							<a data-color="purple" title="Purple" class="button-square purple-switcher" href="#"></a>
							<a href="#" data-color="grey" title="Grey" class="button-square grey-switcher"></a>
						</p>
						
						<h4 class="visible-lg">Layout Type</h4>
						<p id="layout-type">
							<a data-option="flat" class="button" href="#">Flat</a>
							<a data-option="old" class="button" href="#">Old</a>
						</p>
					</div>
					<div id="switcher-button">
						<i class="fa fa-cogs"></i>
					</div>
				</div>
				<div id="sidebar">
					<div id="search">
						<input type="text" placeholder="Search here..."/><button type="submit" class="tip-right" title="Search"><i class="fa fa-search"></i></button>
					</div>
					<ul>
						<li class="active"><a href="index-2.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
						<li class="submenu">
							<a href="#"><i class="fa fa-flask"></i> <span>UI Lab</span> <i class="arrow fa fa-chevron-right"></i></a>
							<ul>
								<li><a href="interface.html">Interface Elements</a></li>
								<li><a href="jquery-ui.html">jQuery UI</a></li>
								<li><a href="buttons.html">Buttons &amp; icons</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-th-list"></i> <span>Form elements</span> <i class="arrow fa fa-chevron-right"></i></a>
							<ul>
								<li><a href="form-common.html">Common elements</a></li>
								<li><a href="form-validation.html">Validation</a></li>
								<li><a href="form-wizard.html">Wizard</a></li>
							</ul>
						</li>
						<li><a href="tables.html"><i class="fa fa-th"></i> <span>Tables</span></a></li>
						<li><a href="grid.html"><i class="fa fa-th-list"></i> <span>Grid Layout</span></a></li>
						<li class="submenu">
							<a href="#"><i class="fa fa-file"></i> <span>Sample pages</span> <i class="arrow fa fa-chevron-right"></i></a>
							<ul>
								<li><a href="invoice.html">Invoice</a></li>
								<li><a href="chat.html">Support chat</a></li>
								<li><a href="calendar.html">Calendar</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="messages.html">Messages</a></li>
							</ul>
						</li>
						<li>
							<a href="charts.html"><i class="fa fa-signal"></i> <span>Charts &amp; graphs</span></a>
						</li>
						<li>
							<a href="widgets.html"><i class="fa fa-inbox"></i> <span>Widgets</span></a>
						</li>
					</ul>
				</div>
				<div id="content">
					<div id="content-header" class="mini">
						<h1>Dashboard</h1>
						<ul class="mini-stats box-3">
							<li>
								<div class="left sparkline_bar_good"><span>2,4,9,7,12,10,12</span>+10%</div>
								<div class="right">
									<strong>36094</strong>
									Visits
								</div>
							</li>
							<li>
								<div class="left sparkline_bar_neutral"><span>20,15,18,14,10,9,9,9</span>0%</div>
								<div class="right">
									<strong>1433</strong>
									Users
								</div>
							</li>
							<li>
								<div class="left sparkline_bar_bad"><span>3,5,9,7,12,20,10</span>+50%</div>
								<div class="right">
									<strong>8650</strong>
									Orders
								</div>
							</li>
						</ul>
					</div>
					<div id="breadcrumb">
						<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
						<a href="#" class="current">Dashboard</a>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 center" style="text-align: center;">
								<ul class="quick-actions">
									<li>
										<a href="#">
											<i class="icon-cal"></i>
											Manage Events
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon-shopping-bag"></i>
											Manage Orders
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon-database"></i>
											Manage DB
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon-people"></i>
											Manage Users
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon-lock"></i>
											Security
										</a>
									</li>
									<li>
										<a href="#">
											<i class="icon-piechart"></i>
											Statistics
										</a>
									</li>
								</ul>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-xs-12">
								<div class="alert alert-info">
									Welcome in the <strong>Unicorn Admin Theme</strong>. Don't forget to check all the pages!
									<a href="#" data-dismiss="alert" class="close">×</a>
								</div>
								<div class="widget-box">
									<div class="widget-title">
										<span class="icon"><i class="fa fa-signal"></i></span>
										<h5>Site Statistics</h5>
										<div class="buttons">
											<a href="#" class="btn"><i class="fa fa-refresh"></i> <span class="text">Update stats</span></a>
										</div>
									</div>
									<div class="widget-content">
										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<ul class="site-stats">
													<li><div class="cc"><i class="fa fa-user"></i> <strong>1433</strong> <small>Total Users</small></div></li>
													<li><div class="cc"><i class="fa fa-arrow-right"></i> <strong>16</strong> <small>New Users (last week)</small></div></li>
													<li class="divider"></li>
													<li><div class="cc"><i class="fa fa-shopping-cart"></i> <strong>259</strong> <small>Total Shop Items</small></div></li>
													<li><div class="cc"><i class="fa fa-tag"></i> <strong>8650</strong> <small>Total Orders</small></div></li>
													<li><div class="cc"><i class="fa fa-repeat"></i> <strong>29</strong> <small>Pending Orders</small></div></li>
												</ul>
											</div>
											<div class="col-xs-12 col-sm-8">
												<div class="chart"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="widget-box">
									<div class="widget-title"><span class="icon"><i class="fa fa-file"></i></span><h5>Recent Posts</h5><span title="54 total posts" class="label label-info tip-left">54</span></div>
									<div class="widget-content nopadding">
										<ul class="recent-posts">
											<li>
												<div class="user-thumb">
													<img width="40" height="40" alt="User" src="img/demo/av2.jpg">
												</div>
												<div class="article-post">
													<span class="user-info"> By: neytiri on 2 Aug 2012, 09:27 AM, IP: 186.56.45.7 </span>
													<p>
														<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
													</p>
													<a href="#" class="btn btn-primary btn-xs">Edit</a> <a href="#" class="btn btn-success btn-xs">Publish</a> <a href="#" class="btn btn-danger btn-xs">Delete</a>
												</div>
											</li>
											<li>
												<div class="user-thumb">
													<img width="40" height="40" alt="User" src="img/demo/av3.jpg">
												</div>
												<div class="article-post">
													<span class="user-info"> By: john on on 24 Jun 2012, 04:12 PM, IP: 192.168.24.3 </span>
													<p>
														<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
													</p>
													<a href="#" class="btn btn-primary btn-xs">Edit</a> <a href="#" class="btn btn-success btn-xs">Publish</a> <a href="#" class="btn btn-danger btn-xs">Delete</a>
												</div>
											</li>
											<li>
												<div class="user-thumb">
													<img width="40" height="40" alt="User" src="img/demo/av1.jpg">
												</div>
												<div class="article-post">
													<span class="user-info"> By: michelle on 22 Jun 2012, 02:44 PM, IP: 172.10.56.3 </span>
													<p>
														<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
													</p>
													<a href="#" class="btn btn-primary btn-xs">Edit</a> <a href="#" class="btn btn-success btn-xs">Publish</a> <a href="#" class="btn btn-danger btn-xs">Delete</a>
												</div>
											</li>
											<li class="viewall">
												<a title="View all posts" class="tip-top" href="#"> + View all + </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="widget-box">
									<div class="widget-title"><span class="icon"><i class="fa fa-comment"></i></span><h5>Recent Comments</h5><span title="88 total comments" class="label label-info tip-left">88</span></div>
									<div class="widget-content nopadding">
										<ul class="recent-comments">
											<li>
												<div class="user-thumb">
													<img width="40" height="40" alt="User" src="img/demo/av1.jpg">
												</div>
												<div class="comments">
													<span class="user-info"> User: michelle on IP: 172.10.56.3 </span>
													<p>
														<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
													</p>
													<a href="#" class="btn btn-primary btn-xs">Edit</a> <a href="#" class="btn btn-success btn-xs">Approve</a> <a href="#" class="btn btn-warning btn-xs">Mark as spam</a> <a href="#" class="btn btn-danger btn-xs">Delete</a>
												</div>
											</li>
											<li>
												<div class="user-thumb">
													<img width="40" height="40" alt="User" src="img/demo/av3.jpg">
												</div>
												<div class="comments">
													<span class="user-info"> User: john on IP: 192.168.24.3 </span>
													<p>
														<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
													</p>
													<a href="#" class="btn btn-primary btn-xs">Edit</a> <a href="#" class="btn btn-success btn-xs">Approve</a> <a href="#" class="btn btn-warning btn-xs">Mark as spam</a> <a href="#" class="btn btn-danger btn-xs">Delete</a>
												</div>
											</li>
											<li>
												<div class="user-thumb">
													<img width="40" height="40" alt="User" src="img/demo/av2.jpg">
												</div>
												<div class="comments">
													<span class="user-info"> User: neytiri on IP: 186.56.45.7 </span>
													<p>
														<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a>
													</p>
													<a href="#" class="btn btn-primary btn-xs">Edit</a> <a href="#" class="btn btn-success btn-xs">Approve</a> <a href="#" class="btn btn-warning btn-xs">Mark as spam</a> <a href="#" class="btn btn-danger btn-xs">Delete</a>
												</div>
											</li>
											<li class="viewall">
												<a title="View all comments" class="tip-top" href="#"> + View all + </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="widget-box widget-calendar">
									<div class="widget-title"><span class="icon"><i class="fa fa-calendar"></i></span><h5>Calendar</h5></div>
									<div class="widget-content nopadding">
										<div class="calendar"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="footer" class="col-xs-12">
						2012 - 2013 &copy; Unicorn Admin. Brought to you by <a href="https://wrapbootstrap.com/user/diablo9983">diablo9983</a>
					</div>
				</div>
			</div>
			


			<script src="{{ URL::asset('assets/adminPage_assets/js/excanvas.min.js') }}"></script>
	        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.min.js') }}"></script>
	        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery-ui.custom.js') }}"></script>
	        <script src="{{ URL::asset('assets/adminPage_assets/js/bootstrap.min.js') }}"></script>
	        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.flot.min.js') }}"></script>
	        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.flot.resize.min.js') }}"></script>
	        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.sparkline.min.js') }}"></script>
	        <script src="{{ URL::asset('assets/adminPage_assets/js/fullcalendar.min.js') }}"></script>
	        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.nicescroll.min.js') }}"></script>
	        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.js') }}"></script>
	        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.dashboard.js') }}"></script>
	        
		</body>

		<!-- Mirrored from demo.bootstrap-hunter.com/unicorn/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2016 16:00:07 GMT -->
		</html>
