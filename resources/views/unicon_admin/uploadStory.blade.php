@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')
<script src="{{ URL::asset('assets/adminPage_assets/js/jquery.min.js') }}"></script>
<script type="text/javascript">

var g_file_missing = 0;

function submitOfStory(){

	var uploadForm = document.getElementById('story_upload_form');
	var name = $(":file").val();
	var story_name = document.getElementById('file').value;
	

	if(story_name == ''){
		document.getElementById('display_error').style.display = "block";
		var delay=300; //1 seconds

		setTimeout(function(){
		  $('#display_error').effect("shake", { direction: "left", times: 2, distance: 5}, 600);
		}, delay); 
		
	}else if (!name){
		g_file_missing = 1;


		alert(document.getElementById('display_error').style.display);
		var check_above_element = document.getElementById('display_error').style.display;
		if(check_above_element == 'block'){
			alert('set the visibility to none');
			document.getElementById('display_error').style.display = "none";
		}
		
		document.getElementById('display_error_file_missing').style.display = "block";
		var delay=300; //1 seconds

		setTimeout(function(){
		  $('#display_error_file_missing').effect("shake");
		}, delay); 
		
	}else{
		alert('2222222222');
		$('#story_upload_form').submit();
	}
	
}


	var abc = 0; //Declaring and defining global increement variable

	$(document).ready(function() {
					var x = document.getElementsByClassName("close");
					$(x).click(function(){
						alert('LOLOLlll');
					});


                    //To add new input file field dynamically, on click of "Add More Files" button below function will be executed
                    $('#add_more').click(function() {
                    	$('#before_this').before($("<div/>", {id: 'filediv', class: 'form-group'}).fadeIn('slow').append(
                    		
                    		$("<div style=\"padding-left:185px;\" class=\"col-sm-3 col-md-3 col-lg-2\">"),
                    		$("<input/>", {name: 'file[]', type: 'file', id: 'file'}),        
                    		$("<div/>")
                    		));
                    });

                    //following function will executes on change event of file input to select different file	
                    $('body').on('change', '#file', function(){
                    	if (this.files && this.files[0]) {
                                     abc += 1; //increementing global variable by 1

                                     var z = abc - 1;
                                     var x = $(this).parent().find('#previewimg' + z).remove();
                                     $(this).before("<div id='abcd"+ abc +"' class='abcd'><img id='previewimg" + abc + "' src='' height=\"100\" width=\"200\"/></div>");

                                     var reader = new FileReader();
                                     reader.onload = imageIsLoaded;
                                     reader.readAsDataURL(this.files[0]);

                                     $(this).hide();
                                     $("#abcd"+ abc).append($("<img/>", {id: 'img', src: 'x.png', alt: 'delete'}).click(function() {
                                     	$(this).parent().parent().remove();
                                     }));
                                 }
                             });

                    //To preview image     
                    function imageIsLoaded(e) {
                    	$('#previewimg' + abc).attr('src', e.target.result);
                    };

                    /*$('#file').click(function(e) {
                    	var name = $(":file").val();
                    	if (!name)
                    	{
                    		alert("First Image Must Be Selected");
                    		e.preventDefault();
                    	}
                    });*/
                });

</script>


<div id="content">

	<div class="container-fluid">

		<div class="row">
			<div class="col-xs-12">
				<div class="widget-box">
					<div class="widget-title">
						<span class="icon"> <i class="fa fa-align-justify"></i>
						</span>
						<h5>Upload Story...</h5>
					</div>
					<div class="widget-content nopadding">

						<form action="upload_story123" method="post" id="story_upload_form" enctype="multipart/form-data" class="form-horizontal">

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
										<option value=<?php echo '"'.$rowAge->id.'" '; ?>>{{ $rowAge->agefrom }} - {{ $rowAge->ageto }}</option>
										@endforeach 

									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-2 control-label">Name of the Story</label>
								<div class="col-sm-3 col-md-3 col-lg-2">
									<input id="fileName" name="fileName" type="text" required="yes"/>
								</div>

								<div   class="col-sm-3 col-md-3 col-lg-2"></div>

								<div id="display_error" style="display:none;" class=" col-sm-3 col-md-3 col-lg-4 alert alert-danger alert-block">
									

									Please enter the story name
								</div>	
								<div id="display_error_file_missing" style="display:none;" class=" col-sm-3 col-md-3 col-lg-4 alert alert-danger alert-block">
									

									Please select an image file
								</div>
								<div id="display_error_file_missing" style="display:none;" class=" col-sm-3 col-md-3 col-lg-2 alert alert-danger alert-block">
									

									Please select an image file
								</div>
							</div>

							
							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-2 control-label">Select Image</label>
								<div class="col-sm-3 col-md-3 col-lg-2">
									<input type="file" name="file[]" id="file" required="yes"/>
								</div>

								<div class="col-sm-3 col-md-3 col-lg-2"></div>
								<div class="col-sm-3 col-md-3 col-lg-2">
									
									<input type="button" id="add_more" class="upload" value="Add More Files"/>

								</div>
							</div>


							
							<div id="before_this" class="form-group">
								<div class="col-sm-3 col-md-3 col-lg-2"></div>
								<div class="col-sm-3 col-md-3 col-lg-2"></div>

								<div class="col-sm-3 col-md-3 col-lg-2"></div>
								<div class="col-sm-3 col-md-3 col-lg-2">
									<a href="#" 
									onclick="javascript:submitOfStory();"
									data-toggle="dropdown"
									class="btn btn-primary dropdown-toggle"><i
									class="fa fa-upload icon-white"></i> Upload </a>
									
								</div>
							</div>


							<div class="form-group">
								<textarea name="story" form="story_upload_form">Easy (and free!) You should check out our premium features.</textarea>
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

@include('unicon_admin.storyGallery');
</div>
</div>

<script src="{{ URL::asset('assets/adminPage_assets/js/tinymce/tinymce.min.js') }}"></script>
<script>tinymce.init({ selector:'textarea' });
tinymce.activeEditor.getContent();
tinymce.triggerSave();</script> 
@stop  