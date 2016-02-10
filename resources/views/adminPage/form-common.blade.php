@extends('Layouts.admin_master_page')
@section('container')

		<div id="content">
			<div id="content-header">
				<h1>Common Form Elements</h1>
				<div class="btn-group">
					<a class="btn btn-large" title="Manage Files"><i class="fa fa-file"></i></a>
					<a class="btn btn-large" title="Manage Users"><i class="fa fa-user"></i></a>
					<a class="btn btn-large" title="Manage Comments"><i class="fa fa-comment"></i><span class="label label-danger">5</span></a>
					<a class="btn btn-large" title="Manage Orders"><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="index-2.html" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
				<a href="#">Form elements</a>
				<a href="#" class="current">Common elements</a>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="fa fa-align-justify"></i>
								</span>
								<h5>Text inputs</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="#" method="get" class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Normal text input</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input type="text" class="form-control input-sm"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Password input</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input type="password" class="form-control input-sm"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Input with placeholder</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input type="text" class="form-control input-sm" placeholder="This is a placeholder..."/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Read-only input</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input type="text" class="form-control input-sm" placeholder="You can only read this..." readonly />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Disabled input</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input type="text" class="form-control input-sm" placeholder="This input is disabled..." disabled />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Input with description</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<div class="row">
												<div class="col-md-4">
													<input type="text" class="form-control input-sm"/>
													<span class="help-block text-left">This is a description</span>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control input-sm"/>
													<span class="help-block text-center">This is a description in center</span>
												</div>
												<div class="col-md-4">
													<input type="text" class="form-control input-sm"/>
													<span class="help-block text-right">This is a description on right</span>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">Input with tooltip</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input type='text' title="Tooltip on input field" class="tip-bottom form-control input-sm"/>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">Input with max chars</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<input type='text' maxlength="15" placeholder="Maximum 15 characters here..." class="form-control input-sm"/>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">Input with icon</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<div class="row">
												<div class="col-md-6">
													<div class="input-icon icon-sm">
														<i class="fa fa-tint"></i>
														<input type='text' class="form-control input-sm"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-icon on-right icon-sm">
														<input type='text' class="form-control input-sm"/>
														<i class="fa fa-laptop"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">Input helps</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<div class="row">
												<div class="col-md-6">
													<div class="input-group input-group-sm">
														<span class="input-group-addon"><i class="fa fa-globe"></i></span>
														<input type='text' placeholder="On left..." class="form-control"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-group input-group-sm">
														<input placeholder="There is the right one..." type='text' class="form-control"/>
														<span class="input-group-addon"><i class="fa fa-fire"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">Input helps too</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<div class="input-group input-group-sm">
												<span class="input-group-addon"><i class="fa fa-quote-left"></i></span>
												<input type='text' class="form-control input-sm"/>
												<span class="input-group-addon"><i class="fa fa-quote-right"></i></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-3 col-md-3 col-lg-2 control-label">Input with button</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<div class="row">
												<div class="col-md-6">
													<div class="input-group input-group-sm">
														<span class="input-group-btn">
															<a href="#" class="btn btn-warning">Go!</a>
														</span>
														<input type='text' class="form-control"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-group input-group-sm">
														<input type='text' class="form-control"/>
														<span class="input-group-btn">
															<a href="#" class="btn btn-inverse">Go!</a>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Input grid</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<div class="row">
												<div class="col-md-12">
													<input type="text" class="form-control" value="col-*-12"/>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6"><input type="text" class="form-control" value="col-*-6"/></div>
												<div class="col-md-6"><input type="text" class="form-control" value="col-*-6"/></div>
											</div>
											<div class="row">
												<div class="col-md-4"><input type="text" class="form-control" value="col-*-4"/></div>
												<div class="col-md-4"><input type="text" class="form-control" value="col-*-4"/></div>
												<div class="col-md-4"><input type="text" class="form-control" value="col-*-4"/></div>
											</div>
											<div class="row">
												<div class="col-md-3"><input type="text" class="form-control" value="col-*-3"/></div>
												<div class="col-md-9"><input type="text" class="form-control" value="col-*-9"/></div>
											</div>
											<div class="row">
												<div class="col-md-4"><input type="text" class="form-control" value="col-*-4"/></div>
												<div class="col-md-3"><input type="text" class="form-control" value="col-*-3"/></div>
												<div class="col-md-5"><input type="text" class="form-control" value="col-*-5"/></div>
											</div>
											<div class="row">
												<div class="col-md-3"><input type="text" class="form-control" value="col-*-3"/></div>
												<div class="col-md-3"><input type="text" class="form-control" value="col-*-3"/></div>
												<div class="col-md-3"><input type="text" class="form-control" value="col-*-3"/></div>
												<div class="col-md-3"><input type="text" class="form-control" value="col-*-3"/></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Normal textarea</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<textarea rows="5" class="form-control"></textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary btn-sm">Save</button> or <a class="text-danger" href="#">Cancel</a>
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
								<h5>Rest of elements...</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="#" method="get" class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Select input</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<select>
												<option>First option</option>
												<option>Second option</option>
												<option>Third option</option>
												<option>Fourth option</option>
												<option>Fifth option</option>
												<option>Sixth option</option>
												<option>Seventh option</option>
												<option>Eighth option</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Multiple Select input</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<select multiple>
												<option>First option</option>
												<option selected>Second option</option>
												<option>Third option</option>
												<option>Fourth option</option>
												<option>Fifth option</option>
												<option>Sixth option</option>
												<option>Seventh option</option>
												<option>Eighth option</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Color picker</label>
										<div class="col-sm-9 col-md-9 col-lg-10">
											<div class="row">
												<div class="col-md-6">
													<input type="text" data-color="#000000" value="#000000" class="colorpicker form-control input-sm"/>
												</div>
												<div class="col-md-6">
													<div class="input-group input-group-sm color colorpicker" data-color="rgba(244,202,56,0.5)" data-color-format="rgba">
														<span class="input-group-addon"><i></i></span>
														<input type="text" value="rgba(244,202,56,0.5)" class="form-control"/>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Date picker</label>
										<div class=" col-sm-9 col-md-9 col-lg-10">
											<div class="row">
												<div class="col-md-6">
													<input type="text" data-date="12-02-2012" data-date-format="dd-mm-yyyy" value="12-02-2012" class="datepicker form-control input-sm"/>
												</div>
												<div class="col-md-6">
													<div class="input-group input-group-sm date datepicker" data-date="15/09/2013" data-date-format="dd/mm/yyyy">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
														<input type="text" value="15/09/2013" class="form-control"/> </div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 col-md-3 col-lg-2 control-label">Spinner</label>
											<div class="col-sm-9 col-md-9 col-lg-10">
												<input type="text" class="form-control input-sm spinner" value="10"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 col-md-3 col-lg-2 control-label">Radio inputs</label>
											<div class="col-sm-9 col-md-9 col-lg-10">
												<label><input type="radio" name="radios" checked /> Checked</label>
												<label><input type="radio" name="radios"/> Unchecked</label>
												<label class="disabled"><input type="radio" name="radios2" checked disabled> Checked disabled</label>
												<label class="disabled"><input type="radio" name="radios2" disabled> Unchecked disabled</label>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 col-md-3 col-lg-2 control-label">Checkboxes</label>
											<div class="col-sm-9 col-md-9 col-lg-10">
												<label><input type="checkbox" name="checkboxes" checked /> Checked</label>
												<label><input type="checkbox" name="checkboxes"/> Unchcked</label>
												<label class="disabled"><input type="checkbox" name="checkboxes" checked disabled /> Checked disabled</label>
												<label class="disabled"><input type="checkbox" name="checkboxes" disabled /> Unchecked disabled</label>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 col-md-3 col-lg-2 control-label">File upload input</label>
											<div class="col-sm-9 col-md-9 col-lg-10">
												<input type="file"/>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			@stop
