@extends('Layouts.admin_master_page')
@section('container')

		<div id="content">
			<div id="content-header">
				<h1>Form validation</h1>
				<div class="btn-group">
					<a class="btn" title="Manage Files"><i class="fa fa-file"></i></a>
					<a class="btn" title="Manage Users"><i class="fa fa-user"></i></a>
					<a class="btn" title="Manage Comments"><i class="fa fa-comment"></i><span class="label label-danger">5</span></a>
					<a class="btn" title="Manage Orders"><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="index-2.html" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
				<a href="#">Form elements</a>
				<a href="#" class="current">Validation</a>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-align-justify"></i>
							</span>
							<h5>Basic validation</h5>
							<span class="label label-danger">48 notices</span>
						</div>
						<div class="widget-content nopadding">
							<form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
								<div class="form-group">
									<label class="col-sm-3 col-md-3 col-lg-2 control-label">Required Field</label>
									<div class="col-sm-9 col-md-9 col-lg-10">
										<input type="text" class="form-control input-sm" name="required" id="required">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-md-3 col-lg-2 control-label">Email</label>
									<div class="col-sm-9 col-md-9 col-lg-10">
										<input type="text" class="form-control input-sm" name="email" id="email">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-md-3 col-lg-2 control-label">Date</label>
									<div class="col-sm-9 col-md-9 col-lg-10">
										<input type="text" class="form-control input-sm" name="date" id="date">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-md-3 col-lg-2 control-label">URL</label>
									<div class="col-sm-9 col-md-9 col-lg-10">
										<input type="text" class="form-control input-sm" name="url" id="url">
									</div>
								</div>
								<div class="form-actions">
									<input type="submit" value="Validate" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-align-justify"></i>
							</span>
							<h5>Number validation</h5>
						</div>
						<div class="widget-content nopadding">
							<form class="form-horizontal" method="post" action="#" name="number_validate" id="number_validate" novalidate="novalidate">
								<div class="form-group">
									<label class="col-sm-3 col-md-3 col-lg-2 control-label">Minimal value</label>
									<div class="col-sm-9 col-md-9 col-lg-10">
										<input type="text" class="form-control input-sm" name="min" id="min"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-md-3 col-lg-2 control-label">Maximum value</label>
									<div class="col-sm-9 col-md-9 col-lg-10">
										<input type="text" class="form-control input-sm" name="max" id="max"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-md-3 col-lg-2 control-label">Only number</label>
									<div class="col-sm-9 col-md-9 col-lg-10">
										<input type="text" class="form-control input-sm" name="number" id="number"/>
									</div>
								</div>
								<div class="form-actions">
									<input type="submit" value="Validate" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-align-justify"></i>
							</span>
							<h5>Password validation</h5>
						</div>
						<div class="widget-content nopadding">
							<form class="form-horizontal" method="post" action="#" name="password_validate" id="password_validate" novalidate="novalidate">
								<div class="form-group">
									<label class="col-sm-3 col-md-3 col-lg-2 control-label">Password</label>
									<div class="col-sm-9 col-md-9 col-lg-10">
										<input type="password" class="form-control input-sm" name="pwd" id="pwd"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 col-md-3 col-lg-2 control-label">Confirm password</label>
									<div class="col-sm-9 col-md-9 col-lg-10">
										<input type="password" class="form-control input-sm" name="pwd2" id="pwd2"/>
									</div>
								</div>
								<div class="form-actions">
									<input type="submit" value="Validate" class="btn btn-primary">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		@stop
