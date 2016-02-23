@extends('Layouts.admin_master_page')
@section('container')

		<div id="content">
			<div id="content-header">
				<h1>Form wizard</h1>
				<div class="btn-group">
					<a class="btn" title="Manage Files"><i class="fa fa-file"></i></a>
					<a class="btn" title="Manage Users"><i class="fa fa-user"></i></a>
					<a class="btn" title="Manage Comments"><i class="fa fa-comment"></i><span class="label label-danger">5</span></a>
					<a class="btn" title="Manage Orders"><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
				<a href="#">Form elements</a>
				<a href="#" class="current">Form wizard</a>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="widget-box">
						<div class="widget-title">
							<span class="icon">
								<i class="fa fa-pencil"></i>
							</span>
							<h5>Form wizard with validation</h5>
						</div>
						<div class="widget-content nopadding">
							<form id="form-wizard" class="form-horizontal" method="post">
								<div id="form-wizard-1" class="step">
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Username</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input class="form-control input-sm" id="username" type="text" name="username"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Password</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input class="form-control input-sm" id="password" type="password" name="password"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Confirm Password</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input class="form-control input-sm" id="password2" type="password" name="password2"/>
										</div>
									</div>
								</div>
								<div id="form-wizard-2" class="step">
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Email</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input class="form-control input-sm" id="email" type="text" name="email"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">EULA Acceptation</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input id="eula" type="checkbox" name="eula"/>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<input id="back" class="btn btn-primary" type="reset" value="Back"/>
									<input id="next" class="btn btn-primary" type="submit" value="Next"/>
									<div id="status"></div>
								</div>
								<div id="submitted"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		@stop
