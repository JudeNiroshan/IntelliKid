@extends('Layouts.admin_master_page')
@section('container')

		<div id="content">
			<div id="content-header">
				<h1>jQuery UI Elements</h1>
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
				<a href="#" class="current">jQuery UI elements</a>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-grid">
					<div class="widget-box">
						<div class="widget-title">
							<h5>Dialog</h5>
						</div>
						<div class="widget-content">
							<a href="#" id="open-dialog" class="btn btn-inverse">Dialog</a> <a href="#" id="open-modal" class="btn btn-primary">Modal Dialog</a>
							<div id="dialog" title="Basic dialog">
								<p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
							</div>
							<div id="modal-dialog" title="Modal Dialog">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</div>
						</div>
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<h5>Sliders</h5>
						</div>
						<div class="widget-content">
							<h4>Horizontal Slider</h4>
							<div id="h-slider"></div>
							<div id="h-slider-2" class="slider-red"></div>
							<div id="h-slider-3" class="slider-purple"></div>
							<div id="h-slider-4" class="slider-green"></div>
							<div id="h-slider-5" class="slider-yellow"></div>
							<hr/>
							<h4>Vertical Slider</h4>
							<div id="eq" style="height:120px;">
								<span>88</span>
								<span class="slider-red">77</span>
								<span class="slider-purple">55</span>
								<span class="slider-green">33</span>
								<span>40</span>
								<span class="slider-yellow">45</span>
								<span>70</span>
								<span class="slider-purple">25</span>
							</div>
						</div>
					</div>
					<div id="accordion" class="accordion">
						<div class="widget-box">
							<div class="widget-title">
								<a href="#">
									<span class="icon"><i class="fa fa-globe"></i></span><h5>Accordion, opened by default</h5>
								</a>
							</div>
							<div class="widget-content">
								This is opened by default
							</div>
						</div>
						<div class="widget-box">
							<div class="widget-title">
								<a href="#">
									<span class="icon"><i class="fa fa-magnet"></i></span><h5>Accordion, closed</h5>
								</a>
							</div>
							<div class="widget-content">
								Another is open
							</div>
						</div>
						<div class="widget-box">
							<div class="widget-title">
								<a href="#">
									<span class="icon"><i class="fa fa-plane"></i></span><h5>Accordion, closed</h5>
								</a>
							</div>
							<div class="widget-content">
								Another is open
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-grid">
					<div class="widget-box">
						<div class="widget-title">
							<h5>Autocomplete</h5>
						</div>
						<div class="widget-content">
							<input type="text" class="form-control" placeholder="Enter tag" id="tags"/>
						</div>
					</div>
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-calendar"></i>
							</span>
							<h5>Datepicker</h5>
						</div>
						<div class="widget-content">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									From: <input id="ui-datepicker" type="text" class="form-control input-sm"/>
								</div>
								<div class="col-xs-12 col-sm-6">
									To: <input id="ui-datepicker-2" type="text" class="form-control input-sm"/>
								</div>
							</div>
							<hr/>
							<h4>Inline Datepicker</h4>
							<div id="ui-datepicker-inline" class="center"></div>
						</div>
					</div>
				</div>
			</div>
			<br/>
		</div>
@stop
