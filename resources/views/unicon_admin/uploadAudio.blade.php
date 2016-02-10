@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')
<script src="{{ URL::asset('assets/adminPage_assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript">
	function submitOfSongs(){
		
		var uploadForm = document.getElementById('songs_upload_form');
		var fileName = document.getElementById('file_name').value;

		if(fileName !== ''){
			uploadForm.submit();
		}else{
			document.getElementById('display_error').style.display = "block";
		}

		/*$.ajax({
				url: 'refresh',
				type: 'GET',
				data: { id: 1 },
				success: function(response)
				{
					alert('123');
				}
			});*/
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
								<h5>Upload Songs...</h5>
							</div>
							<div class="widget-content nopadding">

								<form action="upload_songs123" method="post" id="songs_upload_form" enctype="multipart/form-data" class="form-horizontal">

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
												
													Please enter a name for the song
											</div>	
									</div>

									<div class="form-group">
										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Select File</label>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<input type="file" name="songFile" required="yes"/>
										</div>
										

										<label class="col-sm-3 col-md-3 col-lg-2 control-label">Select Image</label>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<input type="file" name="songImageFile" required="yes"/>
										</div>


									</div>

									<div class="form-group">
										<div class="col-sm-3 col-md-3 col-lg-2"></div>
										<div class="col-sm-3 col-md-3 col-lg-2"></div>
										<div class="col-sm-3 col-md-3 col-lg-2"></div>
										<div class="col-sm-3 col-md-3 col-lg-2">
											<a href="#" 
											onclick="javascript:submitOfSongs();"
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

				@include('unicon_admin.audioGallery');
			</div>
		</div>
@stop  