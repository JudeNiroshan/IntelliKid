@extends('Layouts.admin_master_page')
@section('container')

		<div id="content">
			<div id="content-header">
				<h1>Buttons &amp; icons</h1>
				<div class="btn-group">
					<a class="btn" title="Manage Files"><i class="fa fa-file"></i></a>
					<a class="btn" title="Manage Users"><i class="fa fa-user"></i></a>
					<a class="btn" title="Manage Comments"><i class="fa fa-comment"></i><span class="label label-danger">5</span></a>
					<a class="btn" title="Manage Orders"><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
				<a href="#">UI Lab</a>
				<a href="#" class="current">Buttons &amp; icons</a>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="fa fa-bookmark"></i>
								</span>
								<h5>Buttons</h5>
							</div>
							<div class="widget-content">
								<h5>Button Colors</h5>
								<button class="btn btn-default">Default</button>
								<button class="btn btn-primary">Primary</button>
								<button class="btn btn-info">Info</button>
								<button class="btn btn-success">Success</button>
								<button class="btn btn-warning">Warning</button>
								<button class="btn btn-danger">Danger</button>
								<button class="btn btn-inverse">Inverse</button>
								<button class="btn btn-pink">Pink</button>
								<button class="btn btn-purple">Purple</button>
								<button class="btn btn-dark-red">Dark Red</button>
								<button class="btn btn-dark-blue">Dark Blue</button>
								<button class="btn btn-dark-green">Dark Green</button>
								<button class="btn btn-yellow">Yellow</button>
								<hr/>
								<h5>Button sizes</h5>
								<button class="btn btn-warning btn-lg">Large Size</button>
								<button class="btn btn-purple">Default Size</button>
								<button class="btn btn-success btn-sm">Small Size</button>
								<button class="btn btn-default btn-xs">Mini Size</button>
								<hr/>
								<h5>Disabled State</h5>
								<button class="btn btn-dark-green btn-xs" disabled>Mini Size</button>
								<button class="btn btn-danger btn-sm" disabled>Small Size</button>
								<button class="btn btn-dark-blue" disabled>Default Size</button>
								<button class="btn btn-pink btn-lg" disabled>Large Size</button>
								<hr/>
								<h5>Single Button Group</h5>
								<div class="btn-group">
									<button class="btn btn-default">Left</button>
									<button class="btn btn-default">Center</button>
									<button class="btn btn-default">Right</button>
								</div>
								<hr/>
								<h5>Mutliple Button Groups</h5>
								<div class="btn-group">
									<button class="btn btn-inverse">1</button>
									<button class="btn btn-inverse">2</button>
									<button class="btn btn-inverse">3</button>
								</div>
								<div class="btn-group">
									<button class="btn btn-inverse">4</button>
									<button class="btn btn-inverse">5</button>
								</div>
								<div class="btn-group">
									<button class="btn btn-inverse">6</button>
									<button class="btn btn-inverse">7</button>
									<button class="btn btn-inverse">8</button>
									<button class="btn btn-inverse">9</button>
								</div>
							</div>
						</div>
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="fa fa-align-justify"></i>
								</span>
								<h5>Dropdowns</h5>
							</div>
							<div class="widget-content">
								<h5>Dropdown buttons</h5>
								<div class="btn-toolbar">
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-success dropdown-toggle">Success <span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-success">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">Inverse <span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-inverse">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
								<div style="margin: 0;" class="btn-toolbar">
									<div class="btn-group">
										<button class="btn btn-purple">Action</button>
										<button data-toggle="dropdown" class="btn btn-purple dropdown-toggle"><span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-purple">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
									<div class="btn-group">
										<button class="btn btn-dark-green">Action</button>
										<button data-toggle="dropdown" class="btn btn-dark-green dropdown-toggle"><span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-dark-green">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
								<hr/>
								<h5>Dropdown buttons with icons</h5>
								<div class="btn-toolbar">
									<div class="btn-group">
										<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-user icon-white"></i> User <span class="caret"></span></a>
										<ul class="dropdown-menu dropdown-primary">
											<li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
											<li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
											<li><a href="#"><i class="fa fa-ban-circle"></i> Ban</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="i"></i> Make admin</a></li>
										</ul>
									</div>
									<div class="btn-group">
										<a href="#" class="btn btn-danger"><i class="fa fa-user icon-white"></i> User</a>
										<a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span></a>
										<ul class="dropdown-menu dropdown-danger">
											<li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
											<li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
											<li><a href="#"><i class="fa fa-ban-circle"></i> Ban</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="i"></i> Make admin</a></li>
										</ul>
									</div>
								</div>
								<hr/>
								<h5>Some button sizes</h5>
								<div style="margin: 0;" class="btn-toolbar">
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-lg btn-danger dropdown-toggle">Large button <span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-danger">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-sm btn-warning dropdown-toggle">Small button <span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-warning">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-xs btn-yellow dropdown-toggle">Mini button <span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-yellow">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
								<div class="btn-toolbar">
									<div class="btn-group">
										<button class="btn btn-lg btn-info">Large action</button>
										<button data-toggle="dropdown" class="btn btn-lg btn-info dropdown-toggle"><span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-info">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
									<div class="btn-group">
										<button class="btn btn-sm btn-pink">Small action</button>
										<button data-toggle="dropdown" class="btn btn-sm btn-pink dropdown-toggle"><span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-pink">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
									<div class="btn-group">
										<button class="btn btn-xs btn-dark-red">Mini action</button>
										<button data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-dark-red"><span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-dark-red">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
								<hr/>
								<h5>DropUp Buttons</h5>
								<div style="margin: 0;" class="btn-toolbar">
									<div class="btn-group dropup">
										<button class="btn btn-warning">Dropup</button>
										<button data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-warning">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
									<div class="btn-group dropup">
										<button class="btn btn-dark-blue">Right dropup</button>
										<button data-toggle="dropdown" class="btn btn-dark-blue dropdown-toggle"><span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-dark-blue pull-right">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="fa fa-bookmark"></i>
								</span>
								<h5>Button With Icons</h5>
							</div>
							<div class="widget-content">
								<h5>Text Editor Toolbar</h5>
								<div class="btn-group">
									<button class="btn btn-default"><i class="fa fa-bold"></i></button>
									<button class="btn btn-default"><i class="fa fa-italic"></i></button>
									<button class="btn btn-default"><i class="fa fa-underline"></i></button>
								</div>
								<div class="btn-group">
									<button class="btn btn-default"><i class="fa fa-align-left"></i></button>
									<button class="btn btn-default"><i class="fa fa-align-center"></i></button>
									<button class="btn btn-default"><i class="fa fa-align-right"></i></button>
									<button class="btn btn-default"><i class="fa fa-align-justify"></i></button>
								</div>
								<div class="btn-group">
									<button class="btn btn-default"><i class="fa fa-link"></i></button>
									<button class="btn btn-default"><i class="fa fa-picture-o"></i></button>
								</div>
								<div class="btn-group">
									<button class="btn btn-default"><i class="fa fa-check"></i></button>
									<button class="btn btn-default"><i class="fa fa-trash-o"></i></button>
								</div>
								<hr/>
								<h5>Media Controls</h5>
								<div class="btn-group">
									<button class="btn btn-inverse"><i class="fa fa-fast-backward"></i></button>
									<button class="btn btn-inverse"><i class="fa fa-backward"></i></button>
									<button class="btn btn-inverse"><i class="fa fa-stop"></i></button>
									<button class="btn btn-inverse"><i class="fa fa-play"></i></button>
									<button class="btn btn-inverse"><i class="fa fa-pause"></i></button>
									<button class="btn btn-inverse"><i class="fa fa-forward"></i></button>
									<button class="btn btn-inverse"><i class="fa fa-fast-forward"></i></button>
								</div>
								<button class="btn btn-inverse"><i class="fa fa-resize-full"></i></button>
								<hr/>
								<h5>Settings</h5>
								<button class="btn btn-default btn-sm"><i class="fa fa-eye"></i> View</button>
								<button class="btn btn-default btn-sm"><i class="fa fa-edit"></i> Edit</button>
								<button class="btn btn-default btn-sm"><i class="fa fa-th-list"></i> Change Category</button>
								<button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i> Delete</button>
								<hr/>
								<h5>Button colors with icons</h5>
								<button class="btn btn-primary"><i class="fa fa-thumbs-up-alt"></i> Like</button>
								<button class="btn btn-danger"><i class="fa fa-heart-empty"></i> Love</button>
								<button class="btn btn-info"><i class="fa fa-twitter"></i> Tweet</button>
								<button class="btn btn-dark-red"><i class="fa fa-pushpin"></i> Pin it!</button>
								<button class="btn btn-purple"><i class="fa fa-dribbble"></i> Visit Dribbble</button>
							</div>
						</div>
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="fa fa-bookmark"></i>
								</span>
								<h5>Block level buttons</h5>
							</div>
							<div class="widget-content">
								<button class="btn btn-danger btn-block btn-lg">Button</button>
								<button class="btn btn-inverse btn-block">Button</button>
								<button class="btn btn-dark-green btn-block">Button</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="fa fa-play-circle"></i>
								</span>
								<h5>Available icons</h5>
								<span class="label label-success">140+</span>
							</div>
							<div class="widget-content">
								<h2 class="page-header">Web Application Icons</h2>
								<div class="row the-icons">
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/adjust"><i class="fa fa-adjust"></i> icon-adjust</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/anchor"><i class="fa fa-anchor"></i> icon-anchor</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/archive"><i class="fa fa-archive"></i> icon-archive</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/asterisk"><i class="fa fa-asterisk"></i> icon-asterisk</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/ban-circle"><i class="fa fa-ban-circle"></i> icon-ban-circle</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bar-chart"><i class="fa fa-bar-chart-o"></i> icon-bar-chart</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/barcode"><i class="fa fa-barcode"></i> icon-barcode</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/beaker"><i class="fa fa-flask"></i> icon-beaker</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/beer"><i class="fa fa-beer"></i> icon-beer</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bell"><i class="fa fa-bell"></i> icon-bell</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bell-alt"><i class="fa fa-bell-alt"></i> icon-bell-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bolt"><i class="fa fa-bolt"></i> icon-bolt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/book"><i class="fa fa-book"></i> icon-book</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bookmark"><i class="fa fa-bookmark"></i> icon-bookmark</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bookmark-empty"><i class="fa fa-bookmark-empty"></i> icon-bookmark-empty</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/briefcase"><i class="fa fa-briefcase"></i> icon-briefcase</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bug"><i class="fa fa-bug"></i> icon-bug</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/building"><i class="fa fa-building"></i> icon-building</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bullhorn"><i class="fa fa-bullhorn"></i> icon-bullhorn</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bullseye"><i class="fa fa-bullseye"></i> icon-bullseye</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/calendar"><i class="fa fa-calendar"></i> icon-calendar</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/calendar-empty"><i class="fa fa-calendar-empty"></i> icon-calendar-empty</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/camera"><i class="fa fa-camera"></i> icon-camera</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/camera-retro"><i class="fa fa-camera-retro"></i> icon-camera-retro</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/certificate"><i class="fa fa-certificate"></i> icon-certificate</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/check"><i class="fa fa-check"></i> icon-check</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/check-empty"><i class="fa fa-check-empty"></i> icon-check-empty</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/check-minus"><i class="fa fa-check-minus"></i> icon-check-minus</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/check-sign"><i class="fa fa-check-sign"></i> icon-check-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/circle"><i class="fa fa-circle"></i> icon-circle</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/circle-blank"><i class="fa fa-circle-blank"></i> icon-circle-blank</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/cloud"><i class="fa fa-cloud"></i> icon-cloud</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/cloud-download"><i class="fa fa-cloud-download"></i> icon-cloud-download</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/cloud-upload"><i class="fa fa-cloud-upload"></i> icon-cloud-upload</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/code"><i class="fa fa-code"></i> icon-code</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/code-fork"><i class="fa fa-code-fork"></i> icon-code-fork</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/coffee"><i class="fa fa-coffee"></i> icon-coffee</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/cog"><i class="fa fa-cog"></i> icon-cog</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/cogs"><i class="fa fa-cogs"></i> icon-cogs</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/collapse"><i class="fa fa-collapse"></i> icon-collapse</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/collapse-alt"><i class="fa fa-collapse-alt"></i> icon-collapse-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/collapse-top"><i class="fa fa-collapse-top"></i> icon-collapse-top</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/comment"><i class="fa fa-comment"></i> icon-comment</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/comment-alt"><i class="fa fa-comment-alt"></i> icon-comment-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/comments"><i class="fa fa-comments"></i> icon-comments</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/comments-alt"><i class="fa fa-comments-alt"></i> icon-comments-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/compass"><i class="fa fa-compass"></i> icon-compass</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/credit-card"><i class="fa fa-credit-card"></i> icon-credit-card</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/crop"><i class="fa fa-crop"></i> icon-crop</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/dashboard"><i class="fa fa-dashboard"></i> icon-dashboard</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/desktop"><i class="fa fa-desktop"></i> icon-desktop</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/download"><i class="fa fa-download"></i> icon-download</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/download-alt"><i class="fa fa-download-alt"></i> icon-download-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/edit"><i class="fa fa-edit"></i> icon-edit</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/edit-sign"><i class="fa fa-edit-sign"></i> icon-edit-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/ellipsis-horizontal"><i class="fa fa-ellipsis-h"></i> icon-ellipsis-horizontal</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/ellipsis-vertical"><i class="fa fa-ellipsis-vertical"></i> icon-ellipsis-vertical</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/envelope"><i class="fa fa-envelope"></i> icon-envelope</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/envelope-alt"><i class="fa fa-envelope-alt"></i> icon-envelope-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/eraser"><i class="fa fa-eraser"></i> icon-eraser</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/exchange"><i class="fa fa-exchange"></i> icon-exchange</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/exclamation"><i class="fa fa-exclamation"></i> icon-exclamation</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/exclamation-sign"><i class="fa fa-exclamation-circle"></i> icon-exclamation-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/expand"><i class="fa fa-expand"></i> icon-expand</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/expand-alt"><i class="fa fa-expand-alt"></i> icon-expand-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/external-link"><i class="fa fa-external-link"></i> icon-external-link</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/external-link-sign"><i class="fa fa-external-link-sign"></i> icon-external-link-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/eye-close"><i class="fa fa-eye-close"></i> icon-eye-close</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/eye-open"><i class="fa fa-eye"></i> icon-eye-open</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/facetime-video"><i class="fa fa-facetime-video"></i> icon-facetime-video</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/female"><i class="fa fa-female"></i> icon-female</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/fighter-jet"><i class="fa fa-fighter-jet"></i> icon-fighter-jet</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/film"><i class="fa fa-film"></i> icon-film</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/filter"><i class="fa fa-filter"></i> icon-filter</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/fire"><i class="fa fa-fire"></i> icon-fire</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/fire-extinguisher"><i class="fa fa-fire-extinguisher"></i> icon-fire-extinguisher</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/flag"><i class="fa fa-flag"></i> icon-flag</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/flag-alt"><i class="fa fa-flag-alt"></i> icon-flag-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/flag-checkered"><i class="fa fa-flag-checkered"></i> icon-flag-checkered</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/folder-close"><i class="fa fa-folder-close"></i> icon-folder-close</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/folder-close-alt"><i class="fa fa-folder-close-alt"></i> icon-folder-close-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/folder-open"><i class="fa fa-folder-open"></i> icon-folder-open</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/folder-open-alt"><i class="fa fa-folder-open-alt"></i> icon-folder-open-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/food"><i class="fa fa-food"></i> icon-food</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/frown"><i class="fa fa-frown"></i> icon-frown</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/gamepad"><i class="fa fa-gamepad"></i> icon-gamepad</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/cog"><i class="fa fa-gear"></i> icon-gear <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/cogs"><i class="fa fa-gears"></i> icon-gears <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/gift"><i class="fa fa-gift"></i> icon-gift</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/glass"><i class="fa fa-glass"></i> icon-glass</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/globe"><i class="fa fa-globe"></i> icon-globe</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/group"><i class="fa fa-group"></i> icon-group</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/hdd"><i class="fa fa-hdd"></i> icon-hdd</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/headphones"><i class="fa fa-headphones"></i> icon-headphones</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/heart"><i class="fa fa-heart"></i> icon-heart</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/heart-empty"><i class="fa fa-heart-empty"></i> icon-heart-empty</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/home"><i class="fa fa-home"></i> icon-home</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/inbox"><i class="fa fa-inbox"></i> icon-inbox</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/info"><i class="fa fa-info"></i> icon-info</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/info-sign"><i class="fa fa-info-circle"></i> icon-info-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/key"><i class="fa fa-key"></i> icon-key</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/keyboard"><i class="fa fa-keyboard"></i> icon-keyboard</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/laptop"><i class="fa fa-laptop"></i> icon-laptop</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/leaf"><i class="fa fa-leaf"></i> icon-leaf</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/legal"><i class="fa fa-legal"></i> icon-legal</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/lemon"><i class="fa fa-lemon"></i> icon-lemon</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/level-down"><i class="fa fa-level-down"></i> icon-level-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/level-up"><i class="fa fa-level-up"></i> icon-level-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/lightbulb"><i class="fa fa-lightbulb"></i> icon-lightbulb</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/location-arrow"><i class="fa fa-location-arrow"></i> icon-location-arrow</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/lock"><i class="fa fa-lock"></i> icon-lock</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/magic"><i class="fa fa-magic"></i> icon-magic</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/magnet"><i class="fa fa-magnet"></i> icon-magnet</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/share-alt"><i class="fa fa-mail-forward"></i> icon-mail-forward <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/reply"><i class="fa fa-mail-reply"></i> icon-mail-reply <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/mail-reply-all"><i class="fa fa-mail-reply-all"></i> icon-mail-reply-all</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/male"><i class="fa fa-male"></i> icon-male</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/map-marker"><i class="fa fa-map-marker"></i> icon-map-marker</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/meh"><i class="fa fa-meh"></i> icon-meh</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/microphone"><i class="fa fa-microphone"></i> icon-microphone</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/microphone-off"><i class="fa fa-microphone-off"></i> icon-microphone-off</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/minus"><i class="fa fa-minus"></i> icon-minus</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/minus-sign"><i class="fa fa-minus-sign"></i> icon-minus-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/minus-sign-alt"><i class="fa fa-minus-sign-alt"></i> icon-minus-sign-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/mobile-phone"><i class="fa fa-mobile-phone"></i> icon-mobile-phone</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/money"><i class="fa fa-money"></i> icon-money</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/moon"><i class="fa fa-moon"></i> icon-moon</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/move"><i class="fa fa-move"></i> icon-move</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/music"><i class="fa fa-music"></i> icon-music</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/off"><i class="fa fa-off"></i> icon-off</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/ok"><i class="fa fa-check"></i> icon-ok</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/ok-circle"><i class="fa fa-ok-circle"></i> icon-ok-circle</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/ok-sign"><i class="fa fa-check-circle"></i> icon-ok-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/pencil"><i class="fa fa-pencil"></i> icon-pencil</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/phone"><i class="fa fa-phone"></i> icon-phone</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/phone-sign"><i class="fa fa-phone-sign"></i> icon-phone-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/picture"><i class="fa fa-picture-o"></i> icon-picture</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/plane"><i class="fa fa-plane"></i> icon-plane</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/plus"><i class="fa fa-plus"></i> icon-plus</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/plus-sign"><i class="fa fa-plus-circle"></i> icon-plus-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/plus-sign-alt"><i class="fa fa-plus-sign-alt"></i> icon-plus-sign-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/off"><i class="fa fa-power-off"></i> icon-power-off <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/print"><i class="fa fa-print"></i> icon-print</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/pushpin"><i class="fa fa-pushpin"></i> icon-pushpin</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/puzzle-piece"><i class="fa fa-puzzle-piece"></i> icon-puzzle-piece</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/qrcode"><i class="fa fa-qrcode"></i> icon-qrcode</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/question"><i class="fa fa-question"></i> icon-question</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/question-sign"><i class="fa fa-question-circle"></i> icon-question-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/quote-left"><i class="fa fa-quote-left"></i> icon-quote-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/quote-right"><i class="fa fa-quote-right"></i> icon-quote-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/random"><i class="fa fa-random"></i> icon-random</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/refresh"><i class="fa fa-refresh"></i> icon-refresh</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/remove"><i class="fa fa-times"></i> icon-remove</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/remove-circle"><i class="fa fa-times-circle"></i> icon-remove-circle</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/remove-sign"><i class="fa fa-times-sign"></i> icon-remove-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/reorder"><i class="fa fa-bars"></i> icon-reorder</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/reply"><i class="fa fa-reply"></i> icon-reply</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/reply-all"><i class="fa fa-reply-all"></i> icon-reply-all</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/resize-horizontal"><i class="fa fa-resize-horizontal"></i> icon-resize-horizontal</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/resize-vertical"><i class="fa fa-resize-vertical"></i> icon-resize-vertical</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/retweet"><i class="fa fa-retweet"></i> icon-retweet</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/road"><i class="fa fa-road"></i> icon-road</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/rocket"><i class="fa fa-rocket"></i> icon-rocket</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/rss"><i class="fa fa-rss"></i> icon-rss</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/rss-sign"><i class="fa fa-rss-sign"></i> icon-rss-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/screenshot"><i class="fa fa-screenshot"></i> icon-screenshot</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/search"><i class="fa fa-search"></i> icon-search</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/share"><i class="fa fa-share"></i> icon-share</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/share-alt"><i class="fa fa-share"></i> icon-share-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/share-sign"><i class="fa fa-share-sign"></i> icon-share-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/shield"><i class="fa fa-shield"></i> icon-shield</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/shopping-cart"><i class="fa fa-shopping-cart"></i> icon-shopping-cart</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sign-blank"><i class="fa fa-sign-blank"></i> icon-sign-blank</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/signal"><i class="fa fa-signal"></i> icon-signal</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/signin"><i class="fa fa-signin"></i> icon-signin</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/signout"><i class="fa fa-signout"></i> icon-signout</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sitemap"><i class="fa fa-sitemap"></i> icon-sitemap</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/smile"><i class="fa fa-smile"></i> icon-smile</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sort"><i class="fa fa-sort"></i> icon-sort</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sort-by-alphabet"><i class="fa fa-sort-by-alphabet"></i> icon-sort-by-alphabet</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sort-by-alphabet-alt"><i class="fa fa-sort-by-alphabet-alt"></i> icon-sort-by-alphabet-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sort-by-attributes"><i class="fa fa-sort-by-attributes"></i> icon-sort-by-attributes</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sort-by-attributes-alt"><i class="fa fa-sort-by-attributes-alt"></i> icon-sort-by-attributes-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sort-by-order"><i class="fa fa-sort-by-order"></i> icon-sort-by-order</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sort-by-order-alt"><i class="fa fa-sort-by-order-alt"></i> icon-sort-by-order-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sort-down"><i class="fa fa-sort-down"></i> icon-sort-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sort-up"><i class="fa fa-sort-up"></i> icon-sort-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/spinner"><i class="fa fa-spinner"></i> icon-spinner</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/star"><i class="fa fa-star"></i> icon-star</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/star-empty"><i class="fa fa-star-empty"></i> icon-star-empty</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/star-half"><i class="fa fa-star-half"></i> icon-star-half</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/star-half-empty"><i class="fa fa-star-half-empty"></i> icon-star-half-empty</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/star-half-empty"><i class="fa fa-star-half-full"></i> icon-star-half-full <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/subscript"><i class="fa fa-subscript"></i> icon-subscript</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/suitcase"><i class="fa fa-suitcase"></i> icon-suitcase</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/sun"><i class="fa fa-sun"></i> icon-sun</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/superscript"><i class="fa fa-superscript"></i> icon-superscript</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/tablet"><i class="fa fa-tablet"></i> icon-tablet</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/tag"><i class="fa fa-tag"></i> icon-tag</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/tags"><i class="fa fa-tags"></i> icon-tags</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/tasks"><i class="fa fa-tasks"></i> icon-tasks</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/terminal"><i class="fa fa-terminal"></i> icon-terminal</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/thumbs-down"><i class="fa fa-thumbs-down"></i> icon-thumbs-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/thumbs-down-alt"><i class="fa fa-thumbs-down-alt"></i> icon-thumbs-down-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/thumbs-up"><i class="fa fa-thumbs-up"></i> icon-thumbs-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/thumbs-up-alt"><i class="fa fa-thumbs-up-alt"></i> icon-thumbs-up-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/ticket"><i class="fa fa-ticket"></i> icon-ticket</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/time"><i class="fa fa-clock-o"></i> icon-time</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/tint"><i class="fa fa-tint"></i> icon-tint</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/trash"><i class="fa fa-trash-o"></i> icon-trash</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/trophy"><i class="fa fa-trophy"></i> icon-trophy</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/truck"><i class="fa fa-truck"></i> icon-truck</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/umbrella"><i class="fa fa-umbrella"></i> icon-umbrella</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/check-empty"><i class="fa fa-unchecked"></i> icon-unchecked <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/unlock"><i class="fa fa-unlock"></i> icon-unlock</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/unlock-alt"><i class="fa fa-unlock-alt"></i> icon-unlock-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/upload"><i class="fa fa-upload"></i> icon-upload</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/upload-alt"><i class="fa fa-upload-alt"></i> icon-upload-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/user"><i class="fa fa-user"></i> icon-user</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/volume-down"><i class="fa fa-volume-down"></i> icon-volume-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/volume-off"><i class="fa fa-volume-off"></i> icon-volume-off</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/volume-up"><i class="fa fa-volume-up"></i> icon-volume-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/warning-sign"><i class="fa fa-warning-sign"></i> icon-warning-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/wrench"><i class="fa fa-wrench"></i> icon-wrench</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/zoom-in"><i class="fa fa-zoom-in"></i> icon-zoom-in</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/zoom-out"><i class="fa fa-zoom-out"></i> icon-zoom-out</a></div>
								</div>
								<h2 class="page-header">Currency Icons</h2>
								<div class="row the-icons">
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/btc"><i class="fa fa-bitcoin"></i> icon-bitcoin <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/btc"><i class="fa fa-btc"></i> icon-btc</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/cny"><i class="fa fa-cny"></i> icon-cny</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/usd"><i class="fa fa-dollar"></i> icon-dollar <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/eur"><i class="fa fa-eur"></i> icon-eur</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/eur"><i class="fa fa-euro"></i> icon-euro <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/gbp"><i class="fa fa-gbp"></i> icon-gbp</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/inr"><i class="fa fa-inr"></i> icon-inr</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/jpy"><i class="fa fa-jpy"></i> icon-jpy</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/krw"><i class="fa fa-krw"></i> icon-krw</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/cny"><i class="fa fa-renminbi"></i> icon-renminbi <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/inr"><i class="fa fa-rupee"></i> icon-rupee <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/usd"><i class="fa fa-usd"></i> icon-usd</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/krw"><i class="fa fa-won"></i> icon-won <span class="text-muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/jpy"><i class="fa fa-yen"></i> icon-yen <span class="text-muted">(alias)</span></a></div>
								</div>
								<h2 class="page-header">Text Editor Icons</h2>
								<div class="row the-icons">
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/align-center"><i class="fa fa-align-center"></i> icon-align-center</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/align-justify"><i class="fa fa-align-justify"></i> icon-align-justify</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/align-left"><i class="fa fa-align-left"></i> icon-align-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/align-right"><i class="fa fa-align-right"></i> icon-align-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bold"><i class="fa fa-bold"></i> icon-bold</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/columns"><i class="fa fa-columns"></i> icon-columns</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/copy"><i class="fa fa-copy"></i> icon-copy</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/cut"><i class="fa fa-cut"></i> icon-cut</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/eraser"><i class="fa fa-eraser"></i> icon-eraser</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/file"><i class="fa fa-file"></i> icon-file</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/file-alt"><i class="fa fa-file-alt"></i> icon-file-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/file-text"><i class="fa fa-file-text"></i> icon-file-text</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/file-text-alt"><i class="fa fa-file-text-alt"></i> icon-file-text-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/font"><i class="fa fa-font"></i> icon-font</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/indent-left"><i class="fa fa-indent-left"></i> icon-indent-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/indent-right"><i class="fa fa-indent-right"></i> icon-indent-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/italic"><i class="fa fa-italic"></i> icon-italic</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/link"><i class="fa fa-link"></i> icon-link</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/list"><i class="fa fa-bars"></i> icon-list</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/list-alt"><i class="fa fa-bars-alt"></i> icon-list-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/list-ol"><i class="fa fa-bars-ol"></i> icon-list-ol</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/list-ul"><i class="fa fa-bars-ul"></i> icon-list-ul</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/paper-clip"><i class="fa fa-paperclip"></i> icon-paper-clip</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/paper-clip"><i class="fa fa-paperclip"></i> icon-paperclip <span class="muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/paste"><i class="fa fa-paste"></i> icon-paste</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/repeat"><i class="fa fa-repeat"></i> icon-repeat</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/undo"><i class="fa fa-rotate-left"></i> icon-rotate-left <span class="muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/repeat"><i class="fa fa-rotate-right"></i> icon-rotate-right <span class="muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/save"><i class="fa fa-save"></i> icon-save</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/strikethrough"><i class="fa fa-strikethrough"></i> icon-strikethrough</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/table"><i class="fa fa-table"></i> icon-table</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/text-height"><i class="fa fa-text-height"></i> icon-text-height</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/text-width"><i class="fa fa-text-width"></i> icon-text-width</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/th"><i class="fa fa-th"></i> icon-th</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/th-large"><i class="fa fa-th-large"></i> icon-th-large</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/th-list"><i class="fa fa-th-list"></i> icon-th-list</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/underline"><i class="fa fa-underline"></i> icon-underline</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/undo"><i class="fa fa-undo"></i> icon-undo</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/unlink"><i class="fa fa-unlink"></i> icon-unlink</a></div>
								</div>
								<h2 class="page-header">Directional Icons</h2>
								<div class="row the-icons">
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/angle-down"><i class="fa fa-angle-down"></i> icon-angle-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/angle-left"><i class="fa fa-angle-left"></i> icon-angle-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/angle-right"><i class="fa fa-angle-right"></i> icon-angle-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/angle-up"><i class="fa fa-angle-up"></i> icon-angle-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/arrow-down"><i class="fa fa-arrow-down"></i> icon-arrow-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/arrow-left"><i class="fa fa-arrow-left"></i> icon-arrow-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/arrow-right"><i class="fa fa-arrow-right"></i> icon-arrow-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/arrow-up"><i class="fa fa-arrow-up"></i> icon-arrow-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/caret-down"><i class="fa fa-caret-down"></i> icon-caret-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/caret-left"><i class="fa fa-caret-left"></i> icon-caret-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/caret-right"><i class="fa fa-caret-right"></i> icon-caret-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/caret-up"><i class="fa fa-caret-up"></i> icon-caret-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/chevron-down"><i class="fa fa-chevron-down"></i> icon-chevron-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/chevron-left"><i class="fa fa-chevron-left"></i> icon-chevron-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/chevron-right"><i class="fa fa-chevron-right"></i> icon-chevron-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/chevron-sign-down"><i class="fa fa-chevron-sign-down"></i> icon-chevron-sign-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/chevron-sign-left"><i class="fa fa-chevron-sign-left"></i> icon-chevron-sign-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/chevron-sign-right"><i class="fa fa-chevron-sign-right"></i> icon-chevron-sign-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/chevron-sign-up"><i class="fa fa-chevron-sign-up"></i> icon-chevron-sign-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/chevron-up"><i class="fa fa-chevron-up"></i> icon-chevron-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/circle-arrow-down"><i class="fa fa-circle-arrow-down"></i> icon-circle-arrow-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/circle-arrow-left"><i class="fa fa-circle-arrow-left"></i> icon-circle-arrow-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/circle-arrow-right"><i class="fa fa-circle-arrow-right"></i> icon-circle-arrow-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/circle-arrow-up"><i class="fa fa-circle-arrow-up"></i> icon-circle-arrow-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/double-angle-down"><i class="fa fa-double-angle-down"></i> icon-double-angle-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/double-angle-left"><i class="fa fa-double-angle-left"></i> icon-double-angle-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/double-angle-right"><i class="fa fa-double-angle-right"></i> icon-double-angle-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/double-angle-up"><i class="fa fa-double-angle-up"></i> icon-double-angle-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/hand-down"><i class="fa fa-hand-down"></i> icon-hand-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/hand-left"><i class="fa fa-hand-left"></i> icon-hand-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/hand-right"><i class="fa fa-hand-right"></i> icon-hand-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/hand-up"><i class="fa fa-hand-up"></i> icon-hand-up</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/long-arrow-down"><i class="fa fa-long-arrow-down"></i> icon-long-arrow-down</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/long-arrow-left"><i class="fa fa-long-arrow-left"></i> icon-long-arrow-left</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/long-arrow-right"><i class="fa fa-long-arrow-right"></i> icon-long-arrow-right</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/long-arrow-up"><i class="fa fa-long-arrow-up"></i> icon-long-arrow-up</a></div>
								</div>
								<h2 class="page-header">Video Player Icons</h2>
								<div class="row the-icons">
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/backward"><i class="fa fa-backward"></i> icon-backward</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/eject"><i class="fa fa-eject"></i> icon-eject</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/fast-backward"><i class="fa fa-fast-backward"></i> icon-fast-backward</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/fast-forward"><i class="fa fa-fast-forward"></i> icon-fast-forward</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/forward"><i class="fa fa-forward"></i> icon-forward</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/fullscreen"><i class="fa fa-fullscreen"></i> icon-fullscreen</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/pause"><i class="fa fa-pause"></i> icon-pause</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/play"><i class="fa fa-play"></i> icon-play</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/play-circle"><i class="fa fa-play-circle"></i> icon-play-circle</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/play-sign"><i class="fa fa-play-sign"></i> icon-play-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/resize-full"><i class="fa fa-resize-full"></i> icon-resize-full</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/resize-small"><i class="fa fa-resize-small"></i> icon-resize-small</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/step-backward"><i class="fa fa-step-backward"></i> icon-step-backward</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/step-forward"><i class="fa fa-step-forward"></i> icon-step-forward</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/stop"><i class="fa fa-stop"></i> icon-stop</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/youtube-play"><i class="fa fa-youtube-play"></i> icon-youtube-play</a></div>
								</div>
								<h2 class="page-header">Brand Icons</h2>
								<div class="alert alert-info">
									<ul class="margin-bottom-none">
										<li>All brand icons are trademarks of their respective owners.</li>
										<li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
									</ul>
								</div>
								<div class="row the-icons">
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/adn"><i class="fa fa-adn"></i> icon-adn</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/android"><i class="fa fa-android"></i> icon-android</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/apple"><i class="fa fa-apple"></i> icon-apple</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bitbucket"><i class="fa fa-bitbucket"></i> icon-bitbucket</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/bitbucket-sign"><i class="fa fa-bitbucket-sign"></i> icon-bitbucket-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/btc"><i class="fa fa-bitcoin"></i> icon-bitcoin <span class="muted">(alias)</span></a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/btc"><i class="fa fa-btc"></i> icon-btc</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/css3"><i class="fa fa-css3"></i> icon-css3</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/dribbble"><i class="fa fa-dribbble"></i> icon-dribbble</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/dropbox"><i class="fa fa-dropbox"></i> icon-dropbox</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/facebook"><i class="fa fa-facebook"></i> icon-facebook</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/facebook-sign"><i class="fa fa-facebook-sign"></i> icon-facebook-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/flickr"><i class="fa fa-flickr"></i> icon-flickr</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/foursquare"><i class="fa fa-foursquare"></i> icon-foursquare</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/github"><i class="fa fa-github"></i> icon-github</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/github-alt"><i class="fa fa-github-alt"></i> icon-github-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/github-sign"><i class="fa fa-github-sign"></i> icon-github-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/gittip"><i class="fa fa-gittip"></i> icon-gittip</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/google-plus"><i class="fa fa-google-plus"></i> icon-google-plus</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/google-plus-sign"><i class="fa fa-google-plus-sign"></i> icon-google-plus-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/html5"><i class="fa fa-html5"></i> icon-html5</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/instagram"><i class="fa fa-instagram"></i> icon-instagram</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/linkedin"><i class="fa fa-linkedin"></i> icon-linkedin</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/linkedin-sign"><i class="fa fa-linkedin-sign"></i> icon-linkedin-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/linux"><i class="fa fa-linux"></i> icon-linux</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/maxcdn"><i class="fa fa-maxcdn"></i> icon-maxcdn</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/pinterest"><i class="fa fa-pinterest"></i> icon-pinterest</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/pinterest-sign"><i class="fa fa-pinterest-sign"></i> icon-pinterest-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/renren"><i class="fa fa-renren"></i> icon-renren</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/skype"><i class="fa fa-skype"></i> icon-skype</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/stackexchange"><i class="fa fa-stackexchange"></i> icon-stackexchange</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/trello"><i class="fa fa-trello"></i> icon-trello</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/tumblr"><i class="fa fa-tumblr"></i> icon-tumblr</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/tumblr-sign"><i class="fa fa-tumblr-sign"></i> icon-tumblr-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/twitter"><i class="fa fa-twitter"></i> icon-twitter</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/twitter-sign"><i class="fa fa-twitter-sign"></i> icon-twitter-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/vk"><i class="fa fa-vk"></i> icon-vk</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/weibo"><i class="fa fa-weibo"></i> icon-weibo</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/windows"><i class="fa fa-windows"></i> icon-windows</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/xing"><i class="fa fa-xing"></i> icon-xing</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/xing-sign"><i class="fa fa-xing-sign"></i> icon-xing-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/youtube"><i class="fa fa-youtube"></i> icon-youtube</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/youtube-play"><i class="fa fa-youtube-play"></i> icon-youtube-play</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/youtube-sign"><i class="fa fa-youtube-sign"></i> icon-youtube-sign</a></div>
								</div>
								<h2 class="page-header">Medical Icons</h2>
								<div class="row the-icons">
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/ambulance"><i class="fa fa-ambulance"></i> icon-ambulance</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/h-sign"><i class="fa fa-h-sign"></i> icon-h-sign</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/hospital"><i class="fa fa-hospital"></i> icon-hospital</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/medkit"><i class="fa fa-medkit"></i> icon-medkit</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/plus-sign-alt"><i class="fa fa-plus-sign-alt"></i> icon-plus-sign-alt</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/stethoscope"><i class="fa fa-stethoscope"></i> icon-stethoscope</a></div>
									<div class="col-xs-6 col-sm-6 col-md-4"><a href="http://demo.bootstrap-hunter.com/icon/user-md"><i class="fa fa-user-md"></i> icon-user-md</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@stop