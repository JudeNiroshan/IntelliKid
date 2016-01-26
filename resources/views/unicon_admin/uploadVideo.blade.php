@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')


		<div id="content">
			
			<div class="container-fluid">
			
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="fa fa-align-justify"></i>
								</span>
								<h5>Upload Videos...</h5>
							</div>
							<div class="widget-content nopadding">

								<form action="upload_videos123" method="post" id="video_upload_form" enctype="multipart/form-data" class="form-horizontal">

									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Subject</label>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<select name="subject">
												@foreach($sub as $rowSub)
													<option>{{ $rowSub->subject }}</option>
							                    @endforeach  
												
											</select>
										</div>

										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Age category</label>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<select name="ageCategory">
												@foreach($agecat as $rowAge)
													<option>{{ $rowAge->agefrom }} - {{ $rowAge->ageto }}</option>
							                    @endforeach 
												
											</select>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Select File</label>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<input type="file" name="videoFile" required="yes"/>
										</div>
										<div class="col-sm-3 col-md-3 col-lg-2"></div>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<a href="javascript:{}" 
											onclick="document.getElementById('video_upload_form').submit();"
											data-toggle="dropdown"
											class="btn btn-primary dropdown-toggle"><i
											class="fa fa-upload icon-white"></i> Upload </a>

											
										</div>
									</div>

									<div class="form-group">
										@if(isset($error))
											<div class="col-sm-3 col-md-3 col-lg-2"></div>

											<div class=" col-sm-3 col-md-3 col-lg-5 alert alert-danger alert-block">
												<a class="close" data-dismiss="alert" href="#">×</a>
												<h4 class="alert-heading">Error!</h4>
													{{ $error }}
											</div>										
										</div>
										@elseif(isset($msg))
											<div class="col-sm-3 col-md-3 col-lg-2"></div>

											<div class=" col-sm-3 col-md-3 col-lg-5 alert alert-success alert-block">
												<a class="close" data-dismiss="alert" href="#">×</a>
												<h4 class="alert-heading">Success!</h4>
													{{ $msg }}
											</div>										
										</div>
										@endif
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
								<span class="icon"> <i class="fa fa-picture-o"></i>
								</span>
								<h5>Uploaded Videos</h5>
							</div>
							<div class="widget-content">
								<div class="gallery-masonry">
									<div class="item">
										<a href="#" class="thumbnail"> <img src="{{ URL::asset('assets/adminPage_assets/img/demo/sample.jpg') }}"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="{{ URL::asset('assets/adminPage_assets/img/demo/sample.jpg') }}"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="{{ URL::asset('assets/adminPage_assets/img/demo/sample.jpg') }}"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									<div class="item">
										<a href="#" class="thumbnail"> <img src="{{ URL::asset('assets/adminPage_assets/img/demo/sample.jpg') }}"
											alt="">
										</a>
										<div class="actions">
											<div class="actions-inner">
												<a title="Edit" href="#" class="tip-top"><i
													class="fa fa-pencil"></i></a> <a title="Remove" href="#"
													class="tip-top"><i class="fa fa-trash-o"></i></a>
											</div>
										</div>
									</div>
									
								</div>
								<span style="font-size: 10px; color: #888888;">All Images
									licensed under <a
									href="http://creativecommons.org/licenses/by-nd/2.0/deed.en">Creative
										Commons BY-ND 2.0</a>, <a
									href="http://www.flickr.com/photos/sbl83/">stilettobootlover_83's</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop  