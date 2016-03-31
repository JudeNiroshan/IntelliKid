@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')
<script src="{{ URL::asset('assets/adminPage_assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/adminPage_assets/js/upload.question.js') }}"></script>
<script type="text/javascript">

var g_file_missing = 0;

function submitOfQuestion(){

	var uploadForm = document.getElementById('story_upload_form');
	//var name = $(":file").val();
	var question = document.getElementById('question').value;
	var ans1 = document.getElementById('ans1').value;
	var ans2 = document.getElementById('ans2').value;
	var ans3 = document.getElementById('ans3').value;
	var ans4 = document.getElementById('ans4').value;

	

	if(question == ''){

		document.getElementById('display_error').style.display = "block";
		var delay=300; //1 seconds

		setTimeout(function(){
			$('#display_error').effect("shake", { direction: "left", times: 2, distance: 5}, 600);
		}, delay); 
		
	}else if (ans1 =='' || ans2 == '' || ans3 == '' || ans4 == ''){
		document.getElementById('display_error_ans_missing').style.display = "block";
		var delay=300; //1 seconds

		setTimeout(function(){
			$('#display_error_ans_missing').effect("shake", { direction: "left", times: 2, distance: 5}, 600);
		}, delay); 
	}else{
		
		$('#story_upload_form').submit();
	}
	
}

function removeOfQuestion(clickedRow){


		bootbox.confirm("Do you want to remove this Question?",
			function(result){
				var msg='';
				if(result==true){

					$.ajax({

						type: "get",
						url: "upload_remove_question",
						
						data: {Q_ID:clickedRow}, 
						success: function(resultData){
         					alert(resultData);
         					$('#question_row_'+clickedRow).hide(500);
     				}});

					
					msg='You deleted the question from the database.';
				}else{
					msg='Not confirmed. Don\'t worry.';
				}
		});


}


	var abc = 0; //Declaring and defining global increement variable

	$(document).ready(function() {
		var x = document.getElementsByClassName("close");
		$(x).click(function(){
			
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
						<h5>Upload Question...</h5>
					</div>
					<div class="widget-content nopadding">

						<form action="upload_question123" method="post" id="story_upload_form" enctype="multipart/form-data" class="form-horizontal">

							
								@if(isset($edit_Q_Status))
								<div id="great" class="form-group">
								<div class="col-sm-3 col-md-3 col-lg-2"></div>

								<div class=" col-sm-3 col-md-3 col-lg-5 alert alert-success alert-block">
									<a class="close" data-dismiss="alert" href="#">×</a>
									<h4 class="alert-heading">Success!</h4>
									{{ $edit_Q_Status }}
								</div>										
								</div>
								@elseif(isset($edit_Q_fail))
									<div id="great" class="form-group">
									<div class="col-sm-3 col-md-3 col-lg-2"></div>

									<div class=" col-sm-3 col-md-3 col-lg-5 alert alert-danger alert-block">
										<a class="close" data-dismiss="alert" href="#">×</a>
										<h4 class="alert-heading">Error!</h4>
										{{ $edit_Q_fail }}
									</div>										
									</div>

								@endif

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
								<label class="col-sm-3 col-md-3 col-lg-2 control-label">Question</label>
								<div class="col-sm-3 col-md-3 col-lg-8">
									<textarea name="question" id="question" class="col-sm-3 col-md-3 col-lg-10" placeholder="Enter the question here"></textarea>
								</div>

								<div   class="col-sm-3 col-md-3 col-lg-2"></div>

							</div>

							<div class="form-group">
								<div   class="col-sm-3 col-md-3 col-lg-2"></div>
								<div id="display_error" style="display:none;" class=" col-sm-3 col-md-3 col-lg-4 alert alert-danger alert-block">
									Question cannot be empty
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
								<label class="col-sm-3 col-md-3 col-lg-2 control-label">Answer 1</label>
								<div class="col-sm-3 col-md-3 col-lg-4">
									<textarea class="col-sm-3 col-md-3 col-lg-12" id="ans1" name="ans1"></textarea>
								</div>
								
								<div>
									<div class="form-inline">
										<label class="radio inline">
											<input type="checkbox" name="ans1_correct">
											Correct Answer
										</label>
										
									</div>
								</div>

							</div>

							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-2 control-label">Answer 2</label>
								<div class="col-sm-3 col-md-3 col-lg-4">
									<textarea class="col-sm-3 col-md-3 col-lg-12" id="ans2" name="ans2"></textarea>
								</div>
								
								<div>
									<div class="form-inline">
										<label class="radio inline">
											<input type="checkbox" name="ans2_correct">
											Correct Answer
										</label>
										
									</div>
								</div>

							</div>

							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-2 control-label">Answer 3</label>
								<div class="col-sm-3 col-md-3 col-lg-4">
									<textarea class="col-sm-3 col-md-3 col-lg-12" id="ans3" name="ans3"></textarea>
								</div>
								
								<div>
									<div class="form-inline">
										<label class="radio inline">
											<input type="checkbox" name="ans3_correct">
											Correct Answer
										</label>
										
									</div>
								</div>

							</div>

							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-2 control-label">Answer 4</label>
								<div class="col-sm-3 col-md-3 col-lg-4">
									<textarea class="col-sm-3 col-md-3 col-lg-12" id="ans4" name="ans4"></textarea>
								</div>
								
								<div>
									<div class="form-inline">
										<label class="radio inline">
											<input type="checkbox" name="ans4_correct">
											Correct Answer
										</label>
										
									</div>
								</div>

							</div>

							<div class="form-group">
								<div   class="col-sm-3 col-md-3 col-lg-2"></div>
								<div id="display_error_ans_missing" style="display:none;" class=" col-sm-3 col-md-3 col-lg-4 alert alert-danger alert-block">
									Answers cannot be empty
								</div>
							</div>
							
							<div  class="form-group">
								<div class="col-sm-3 col-md-3 col-lg-2"></div>
								<div class="col-sm-3 col-md-3 col-lg-2"></div>

								<div class="col-sm-3 col-md-3 col-lg-2"></div>
								<div class="col-sm-3 col-md-3 col-lg-2">
									<a href="#" 
									onclick="javascript:submitOfQuestion();"
									data-toggle="dropdown"
									class="btn btn-primary dropdown-toggle"><i
									class="fa fa-upload icon-white"></i> Upload </a>
									<input type="submit" value="login"/> 
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

		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="fa fa-th"></i>
				</span>
				<h5>Question Bank</h5>
			</div>
			<div class="widget-content nopadding">
				<table class="table table-bordered table-striped table-hover data-table">
					<thead>
						<tr>
							<th style="width:4%;">Question ID</th>
							<th>Question</th>
							<th style="width:20%;">Subject</th>
							<th style="width:4%;">Age Category</th>
							<th style="width:4%;">Likes</th>
							<th style="width:4%;">Views</th>
							<th style="width:18%;">Actions</th>
						</tr>
					</thead>
					<tbody>

						@foreach($table_data as $question)
						
						<tr id="question_row_<?php echo $question['question_id']; ?>"class="gradeA">
							<td>{{ $question['question_id'] }}</td>
							<td>{{ $question['question'] }}</td>
							<td>{{ $question['subject'] }}</td>
							<td>{{ $question['agegroup'] }}</td>
							<td>{{ $question['likes'] }}</td>
							<td>{{ $question['views'] }}</td>

							<td>
								<a href="#" onclick="javascript:editModelPopup(<?php echo $question['question_id']; ?>);" class="btn btn-dark-blue"><i class="fa fa-pencil"></i> Edit</a>
								<a href="#" onclick="javascript:removeOfQuestion(<?php echo $question['question_id']; ?>);" class="btn btn-dark-red"><i class="fa fa-trash-o"></i> Remove</a>
							</td>
						</tr>
						@endforeach 


						

					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>


<script type="text/javascript">
	$('#great').fadeOut(4000);
</script>


</div>
</div>


@stop  