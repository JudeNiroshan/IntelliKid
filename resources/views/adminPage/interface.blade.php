@extends('Layouts.admin_master_page')
@section('container')

		<div id="content">
			<div id="content-header">
				<h1>Interface elements</h1>
				<div class="btn-group">
					<a class="btn btn-large" title="Manage Files"><i class="fa fa-file"></i></a>
					<a class="btn btn-large" title="Manage Users"><i class="fa fa-user"></i></a>
					<a class="btn btn-large" title="Manage Comments"><i class="fa fa-comment"></i><span class="label label-danger">5</span></a>
					<a class="btn btn-large" title="Manage Orders"><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
				<a href="#">UI Lab</a>
				<a href="#" class="current">Interface elements</a>
			</div>
			<div class="row">
				<div class="col-xs-12 center" style="text-align: center;">
					<ul class="stat-boxes">
						<li class="popover-visits">
							<div class="left sparkline_bar_good"><span>2,4,9,7,12,10,12</span><i class="fa fa-double-angle-up"></i> +10%</div>
							<div class="right">
								<strong>36094</strong>
								Visits
							</div>
						</li>
						<li class="popover-users">
							<div class="left sparkline_bar_neutral"><span>20,15,18,14,10,9,9,9</span><i class="fa fa-minus"></i> 0%</div>
							<div class="right">
								<strong>1433</strong>
								Users
							</div>
						</li>
						<li class="popover-orders">
							<div class="left sparkline_bar_bad"><span>3,5,9,7,12,20,10</span><i class="fa fa-double-angle-down"></i> -50%</div>
							<div class="right">
								<strong>8650</strong>
								Orders
							</div>
						</li>
						<li class="popover-tickets">
							<div class="left sparkline_line_good"><span>12,6,9,23,14,10,17</span><i class="fa fa-double-angle-up"></i> +70%</div>
							<div class="right">
								<strong>2968</strong>
								Tickets
							</div>
						</li>
					</ul>
				</div>
			</div>
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
			<div class="row">
				<div class="col-xs-12 center" style="text-align: center;">
					<ul class="quick-actions-horizontal">
						<li>
							<a href="#">
								<i class="icon-cal"></i>
								<span>Manage Events</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-shopping-bag"></i>
								<span>Manage Orders</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-database"></i>
								<span>Manage DB</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-people"></i>
								<span>Manage Users</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-lock"></i>
								<span>Security</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-piechart"></i>
								<span>Statistics</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="alert alert-warning">
						<button class="close" data-dismiss="alert">×</button>
						<strong>Warning!</strong> Your monthly traffic is reaching limit.
					</div>
					<div class="alert alert-success">
						<button class="close" data-dismiss="alert">×</button>
						<strong>Success!</strong> The page has been added.
					</div>
					<div class="alert alert-info">
						<button class="close" data-dismiss="alert">×</button>
						<strong>Info!</strong> You have 198 unread messages.
					</div>
					<div class="alert alert-danger">
						<button class="close" data-dismiss="alert">×</button>
						<strong>Error!</strong> The daily cronjob has failed.
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="row">
						<div class="col-xs-12 nopadding">
							<div class="input-group nopadding">
								<input type="text" class="form-control">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button"><i class="fa fa-search"></i> Search</button>
								</span>
							</div>
						</div>
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<h5>Modal dialogs</h5>
						</div>
						<div class="widget-content">
							<a href="#myModal" data-toggle="modal" class="btn btn-dark-green">Modal dialog</a>
							<a href="#myAlert" data-toggle="modal" class="btn btn-dark-red">Alert</a>
							<hr/>
							<h5>Modals provided by Bootbox.js</h5>
							<a href="#" id="bootbox-confirm" class="btn btn-success">Confirm Dialog</a>
							<a href="#" id="bootbox-prompt" class="btn btn-inverse">Prompt Dialog</a>
							<a href="#" id="bootbox-alert" class="btn btn-danger">Alert Dialog</a>
							<div id="myModal" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button data-dismiss="modal" class="close" type="button">×</button>
											<h3>Modal header</h3>
										</div>
										<div class="modal-body">
											<p>One fine body…</p>
										</div>
									</div>
								</div>
							</div>
							<div id="myAlert" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button data-dismiss="modal" class="close" type="button">×</button>
											<h3>Alert modal</h3>
										</div>
										<div class="modal-body">
											<p>Lorem ipsum dolor sit amet...</p>
										</div>
										<div class="modal-footer">
											<a data-dismiss="modal" class="btn btn-primary btn-small" href="#">Confirm</a>
											<a data-dismiss="modal" class="btn btn-default btn-small" href="#">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-th-list"></i>
							</span>
							<h5>Progress bars</h5>
						</div>
						<div class="widget-content">
							<h5>Basic progress bars</h5>
							<code>class="progress progress-xs"</code><br/><br/>
							<div class="progress progress-xs">
								<div style="width: 60%;" class="progress-bar progress-bar-success"></div>
							</div>
							<code>class="progress progress-sm"</code><br/><br/>
							<div class="progress progress-sm">
								<div style="width: 60%;" class="progress-bar"></div>
							</div>
							<code>class="progress"</code><br/><br/>
							<div class="progress">
								<div style="width: 60%;" class="progress-bar progress-bar-info"></div>
							</div>
							<hr/>
							<h5>Striped progress bars</h5>
							<div class="alert alert-info">
								Internet Explorer doesn't support striped progress bars!
							</div>
							<div class="progress progress-striped">
								<div style="width: 20%;" class="progress-bar"></div>
							</div>
							<div class="progress progress-striped progress-xs">
								<div style="width: 30%;" class="progress-bar progress-bar-info"></div>
							</div>
							<div class="progress progress-striped">
								<div style="width: 40%;" class="progress-bar progress-bar-success"></div>
							</div>
							<div class="progress progress-striped progress-xs">
								<div style="width: 50%;" class="progress-bar progress-bar-warning"></div>
							</div>
							<div class="progress progress-striped">
								<div style="width: 60%;" class="progress-bar progress-bar-danger"></div>
							</div>
							<hr/>
							<h5>Animated progress bars</h5>
							<div class="alert alert-info">
								Internet Explorer doesn't support animated progress bars!
							</div>
							<div class="progress progress-striped active">
								<div style="width: 60%;" class="progress-bar"></div>
							</div>
							<div class="progress progress-striped active progress-xs">
								<div style="width: 50%;" class="progress-bar progress-bar-info"></div>
							</div>
							<div class="progress progress-striped active">
								<div style="width: 40%;" class="progress-bar progress-bar-success"></div>
							</div>
							<div class="progress progress-striped active progress-sm">
								<div style="width: 30%;" class="progress-bar progress-bar-warning"></div>
							</div>
							<div class="progress progress-striped active">
								<div style="width: 20%;" class="progress-bar progress-bar-danger"></div>
							</div>
							<hr/>
							<h5>Stacked progress bars</h5>
							<div class="progress progress-striped">
								<div class="progress-bar progress-bar-success" style="width: 35%"></div>
								<div class="progress-bar progress-bar-warning" style="width: 25%"></div>
								<div class="progress-bar progress-bar-danger" style="width: 15%"></div>
							</div>
							<hr/>
							<h5>More Colors</h5>
							<div class="progress progress-striped active">
								<div style="width: 60%;" class="progress-bar progress-bar-dark-green"></div>
							</div>
							<div class="progress progress-striped active progress-xs">
								<div style="width: 50%;" class="progress-bar progress-bar-pink"></div>
							</div>
							<div class="progress progress-striped active">
								<div style="width: 40%;" class="progress-bar progress-bar-purple"></div>
							</div>
							<div class="progress progress-striped active progress-sm">
								<div style="width: 30%;" class="progress-bar progress-bar-dark-blue"></div>
							</div>
							<div class="progress progress-striped active">
								<div style="width: 20%;" class="progress-bar progress-bar-dark-red"></div>
							</div>
							<div class="progress progress-striped active">
								<div style="width: 20%;" class="progress-bar progress-bar-yellow"></div>
							</div>
							<div class="progress progress-striped active">
								<div style="width: 20%;" class="progress-bar progress-bar-inverse"></div>
							</div>
						</div>
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-comment"></i>
							</span>
							<h5>Tooltip directions</h5>
						</div>
						<div class="widget-content">
							<p>Four directions of the tooltips, just add a class: <code>tip-top</code>, <code>tip-bottom</code>, <code>tip-left</code> or <code>tip-right</code> to the element you want to have tooltip.</p>
							<p>
								<button class="btn btn-default tip-top" data-original-title="Tooltip in top">Top</button>
								<button class="btn btn-default tip-left" data-original-title="Tooltip in left">Left</button>
								<button class="btn btn-default tip-right" data-original-title="Tooltip in right">Right</button>
								<button class="btn btn-default tip-bottom" data-original-title="Tooltip in bottom">Bottom</button>
							</p>
						</div>
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-comment"></i>
							</span>
							<h5>Growl-like notifications</h5>
						</div>
						<div class="widget-content" id="gritter-notify">
							<a class="normal btn btn-block btn-dark-red">Standard notification</a>
							<a class="sticky btn btn-block btn-dark-green">Sticky notification</a>
							<a class="image btn btn-block btn-primary" data-image="{{asset('assets/adminPage_assets/img/demo/envelope.png')}}">Notification with image</a>
							<a class="light btn btn-block btn-default">Light-colored Notification</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<input type="button" class="btn btn-success btn-block" value="Button block">
						</div>
						<div class="col-xs-12 col-sm-6">
							<input type="button" class="btn btn-danger btn-block" value="Button block">
						</div>
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-bell"></i>
							</span>
							<h5>Notifications</h5>
						</div>
						<div class="widget-content">
							<div class="alert alert-block alert-warning">
								<a class="close" data-dismiss="alert" href="#">×</a>
								<h4 class="alert-heading">Warning!</h4>
								Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
							</div>
							<div class="alert alert-success alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
								<h4 class="alert-heading">Success!</h4>
								Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
							</div>
							<div class="alert alert-info alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
								<h4 class="alert-heading">Info!</h4>
								Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
							</div>
							<div class="alert alert-danger alert-block">
								<a class="close" data-dismiss="alert" href="#">×</a>
								<h4 class="alert-heading">Error!</h4>
								Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
							</div>
						</div>
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-tag"></i>
							</span>
							<h5>Labels and badges</h5>
						</div>
						<div class="widget-content">
							<h3>Available labels</h3>
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Labels</th>
										<th>Class</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<span class="label label-default">Default</span>
										</td>
										<td>
											<code>label label-default</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="label label-success">Success</span>
										</td>
										<td>
											<code>label label-success</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="label label-warning">Warning</span>
										</td>
										<td>
											<code>label label-warning;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="label label-danger">Danger</span>
										</td>
										<td>
											<code>label label-danger</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="label label-info">Info</span>
										</td>
										<td>
											<code>label label-info</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="label label-inverse">Inverse</span>
										</td>
										<td>
											<code>label label-inverse</code>
										</td>
									</tr>
								</tbody>
							</table>
							<h3>Available badges</h3>
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Name</th>
										<th>Example</th>
										<th>Class</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											Default
										</td>
										<td>
											<span class="badge">1</span>
										</td>
										<td>
											<code>badge badge-default</code>
										</td>
									</tr>
									<tr>
										<td>
											Success
										</td>
										<td>
											<span class="badge badge-success">2</span>
										</td>
										<td>
											<code>badge badge-success</code>
										</td>
									</tr>
									<tr>
										<td>
											Warning
										</td>
										<td>
											<span class="badge badge-warning">4</span>
										</td>
										<td>
											<code>badge badge-warning</code>
										</td>
									</tr>
									<tr>
										<td>
											Danger
										</td>
										<td>
											<span class="badge badge-danger">6</span>
										</td>
										<td>
											<code>badge badge-danger</code>
										</td>
									</tr>
									<tr>
										<td>
											Info
										</td>
										<td>
											<span class="badge badge-info">8</span>
										</td>
										<td>
											<code>badge badge-info</code>
										</td>
									</tr>
									<tr>
										<td>
											Inverse
										</td>
										<td>
											<span class="badge badge-inverse">10</span>
										</td>
										<td>
											<code>badge badge-inverse</code>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-exclamation-circle"></i>
							</span>
							<h5>Pagination</h5>
						</div>
						<div class="widget-content">
							<h5>Default pagination</h5>
							<code>&lt;ul class="pagination"&gt;</code>
							<br/>
							<ul class="pagination">
								<li><a href="#">Prev</a></li>
								<li class="active">
									<a href="#">1</a>
								</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
							<hr/>
							<h5>Alternate pagination</h5>
							<code>&lt;ul class="pagination alternate"&gt;</code>
							<ul class="pagination alternate">
								<li class="disabled"><a href="#">Prev</a></li>
								<li class="active">
									<a href="#">1</a>
								</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
							<hr/>
							<h5>Pager</h5>
							<ul class="pager">
								<li><a href="#">Previous</a></li>
								<li><a href="#">Next</a></li>
							</ul>
							<h5>Aligned</h5>
							<ul class="pager">
								<li class="previous"><a href="#">Previous</a></li>
								<li class="next"><a href="#">Next</a></li>
							</ul>
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
	
	@stop
