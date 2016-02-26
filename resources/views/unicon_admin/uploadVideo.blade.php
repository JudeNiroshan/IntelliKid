@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')

<script src="{{ URL::asset('assets/adminPage_assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript">
	function submitOfVideos(){
		
		var uploadForm = document.getElementById('video_upload_form');
		var fileName = document.getElementById('file_name').value;
		var video = document.getElementById('videoFileID').value;
		var img = document.getElementById('imgFileID').value;

		if(fileName == ''){
			var error_message = "Please enter a name";
			document.getElementById('display_error').innerHTML = error_message;
			document.getElementById('display_error').style.display = "block";
			var delay=100; //1 seconds

			setTimeout(function(){
				$('#display_error').effect("shake");
			}, delay); 
		}else if(video.length == 0){
			var error_message = "Please select a video file";
			document.getElementById('display_error').innerHTML = error_message;
			document.getElementById('display_error').style.display = "block";
			var delay=100; //1 seconds

			setTimeout(function(){
				$('#display_error').effect("shake");
			}, delay); 
		}else if(img.length == 0){
			var error_message = "Please select an image file";
			document.getElementById('display_error').innerHTML = error_message;
			document.getElementById('display_error').style.display = "block";
			var delay=100; //1 seconds

			setTimeout(function(){
				$('#display_error').effect("shake");
			}, delay); 
		}else{
			//alert('going to submit');
			uploadForm.submit();
		}
	}

	</script>


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
													<option value=<?php echo '"'.$rowSub->id.'" '; ?> >{{ $rowSub->subject }}</option>
							                    @endforeach  
												
											</select>
										</div>

										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Age category</label>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<select name="ageCategory">
												@foreach($agecat as $rowAge)
													<option value=<?php echo '"'.$rowAge->id.'" '; ?> >{{ $rowAge->agefrom }} - {{ $rowAge->ageto }}</option>
							                    @endforeach 
												
											</select>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Name</label>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<input id="file_name" type="text" name="filename" required="yes"/>
										</div>
										
										<div   class="col-sm-3 col-md-3 col-lg-2"></div>

											<div id="display_error" style="display:none;" class=" col-sm-3 col-md-3 col-lg-4 alert alert-danger alert-block">
												<a class="close" data-dismiss="alert" href="#">×</a>
												
											</div>	
									</div>
									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Select File</label>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<input id="videoFileID" type="file" name="videoFile" required="yes"/>
										</div>
										

										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Select Image</label>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<input id="imgFileID" type="file" name="videoImageFile" required="yes"/>
										</div>


									</div>
									<div class="form-group">
										<div class="col-sm-3 col-md-3 col-lg-2"></div>
										<div class="col-sm-3 col-md-3 col-lg-2"></div>
										<div class="col-sm-3 col-md-3 col-lg-2"></div>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<a href="#" 
											onclick="javascript:submitOfVideos();"
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

				@include('unicon_admin.videoGallary');
			</div>
		</div>
@stop  