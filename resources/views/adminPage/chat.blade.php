@extends('Layouts.admin_master_page')
@section('container')

		<div id="content">
			<div id="content-header">
				<h1>Support chat</h1>
				<div class="btn-group">
					<a class="btn" title="Manage Files"><i class="fa fa-file"></i></a>
					<a class="btn" title="Manage Users"><i class="fa fa-user"></i></a>
					<a class="btn" title="Manage Comments"><i class="fa fa-comment"></i><span class="label label-danger">5</span></a>
					<a class="btn" title="Manage Orders"><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
				<a href="#">Sample pages</a>
				<a href="#" class="current">Suport chat</a>
			</div>
			<br/>
			<div class="row">
				<div class="col-xs-12">
					<div class="alert alert-success">This is an example of support chat. Feel free to write something.<a href="#" class="close" data-dismiss="alert">×</a></div>
					<div class="widget-box widget-chat">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-comment"></i>
							</span>
							<h5>Support chat</h5>
							<div class="buttons">
								<a class="btn go-full-screen"><i class="fa fa-resize-full"></i></a>
							</div>
						</div>
						<div class="widget-content nopadding">
							<div class="chat-content panel-left">
								<div class="chat-messages" id="chat-messages">
									<div id="chat-messages-inner" class="chat-messages-inner"></div>
								</div>
								<div class="chat-message well">
									<span class="input-box input-group">
										<input placeholder="Enter message here..." type="text" class="form-control input-small" name="msg-box" id="msg-box"/>
										<span class="input-group-btn">
											<button class="btn btn-success btn-small" type="button">Send</button>
										</span>
									</span>
								</div>
							</div>
							<div class="chat-users panel-right">
								<div class="panel-title"><h5>Online Users</h5></div>
								<div class="panel-content nopadding">
									<ul class="contact-list">
										<li id="user-michelle" class="online new"><a href="#"><img alt="" src="{{asset('assets/adminPage_assets/img/demo/av1.jpg')}}"/> <span>Michelle</span></a><span class="msg-count badge badge-info">3</span></li>
										<li id="user-neytiri" class="online"><a href="#"><img alt="" src="{{asset('assets/adminPage_assets/img/demo/av2.jpg')}}"/> <span>Neytiri</span></a></li>
										<li id="user-cartoon-man" class="online"><a href="#"><img alt="" src="{{asset('assets/adminPage_assets/img/demo/av3.jpg')}}"/> <span>Cartoon Man</span></a></li>
										<li id="user-rick-newton" class="online"><a href="#"><img alt="" src="{{asset('assets/adminPage_assets/img/demo/av1.jpg')}}"/> <span>Rick Newton</span></a></li>
										<li id="user-zack-renson" class="online new"><a href="#"><img alt="" src="{{asset('assets/adminPage_assets/img/demo/av2.jpg')}}"/> <span>Zack Renson</span></a><span class="msg-count badge badge-info">1</span></li>
										<li id="user-vladimir-ivanov"><a href="#"><img alt="" src="{{asset('assets/adminPage_assets/img/demo/av3.jpg')}}"/> <span>Wladimir Ivanov</span></a><span class="away label label-warning">Away</span></li>
										<li id="user-master-moda"><a href="#"><img alt="" src="{{asset('assets/adminPage_assets/img/demo/av1.jpg')}}"/> <span>Master Moda</span></a><span class="away label label-warning">Away</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		@stop
