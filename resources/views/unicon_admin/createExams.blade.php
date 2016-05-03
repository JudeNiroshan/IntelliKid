@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')
<script src="{{ URL::asset('assets/adminPage_assets/js/jquery.min.js') }}"></script>
<script type="text/javascript">

function loadQuestions(){

	var selected_subject = document.getElementById("subjectDrop").value;
	var selected_ageCat = document.getElementById("ageCatDrop").value;

	$.ajax({

						type: "get",
						url: "load_questions",
						
						data: {sub_id:selected_subject, age_id:selected_ageCat}, 
						success: function(resultData){

         					for(var k=0; k<resultData.length; k++){

         						var myElement = document.getElementById("question_table_body");
         						var str = '<tr class="gradeA"> <td id="question_row_'+ resultData[k].id +'" onclick="addToSession('+resultData[k].id +')">'+ resultData[k].question +'</td></tr>';

								myElement.innerHTML = myElement.innerHTML + str;
         						
         					}
         					
     				}});
}

function addToSession(question_id){

	$.ajax({

						type: "get",
						url: "put_to_session",
						
						data: {q_id:question_id}, 
						success: function(resp){

         					if(resp == 'OK'){
         						var question_row = document.getElementById('question_row_'+question_id);
         						question_row.style.backgroundColor = "#9fdf9f";	
         					}else if(resp == 'REMOVED'){
         						var question_row = document.getElementById('question_row_'+question_id);
         						question_row.style.backgroundColor = "transparent";	
         					}else if (resp == 'EXCEED'){
         						alert('You have already selected 15 questions.');
         					}else{
         						alert('Question is not selected!. Please contant administrator');
         					}
         					
     }});
}

function submitOfCreateExam(){
		
		var uploadForm = document.getElementById('create_exam_form');

		alert(document.getElementById('examNameID').value);
		if(document.getElementById('examNameID').value != ""){
			uploadForm.submit();
		}else{
			var error_message = "Please enter a name";
			document.getElementById('display_error').innerHTML = error_message;
			document.getElementById('display_error').style.display = "block";
			var delay=100; //1 seconds

			setTimeout(function(){
				$('#display_error').effect("shake");
			}, delay); 
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
						<h5>Create Exams...</h5>
					</div>
					<div class="widget-content nopadding">

						<form action="put_to_session" method="post" id="create_exam_form" class="form-horizontal">

								@if(isset($upload_status_success))
								<div id="great" class="form-group">
								<div class="col-sm-3 col-md-3 col-lg-2"></div>

								<div class=" col-sm-3 col-md-3 col-lg-5 alert alert-success alert-block">
									<a class="close" data-dismiss="alert" href="#">×</a>
									<h4 class="alert-heading">Success!</h4>
									Successfully Saved!
								</div>										
								</div>
								@elseif(isset($upload_status_fail))
									<div id="great" class="form-group">
									<div class="col-sm-3 col-md-3 col-lg-2"></div>

									<div class=" col-sm-3 col-md-3 col-lg-5 alert alert-danger alert-block">
										<a class="close" data-dismiss="alert" href="#">×</a>
										<h4 class="alert-heading">Error!</h4>
										Error occured while saving. Please try again.
									</div>										
									</div>

								@endif
								
							
				

							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-2 control-label">Subject</label>
								<div class="col-sm-3 col-md-3 col-lg-2">
									<select name="subject" id="subjectDrop">
										@foreach($sub as $rowSub)
										<option value=<?php echo '"'.$rowSub->id.'" '; ?> >{{ $rowSub->subject }}</option>
										@endforeach 

									</select>
								</div>

								<label class="col-sm-3 col-md-3 col-lg-2 control-label">Age category</label>
								<div class="col-sm-3 col-md-3 col-lg-2">
									<select name="ageCategory" id="ageCatDrop">
										@foreach($agecat as $rowAge)
										<option value=<?php echo '"'.$rowAge->id.'" '; ?>>{{ $rowAge->agefrom }} - {{ $rowAge->ageto }}</option>
										@endforeach 

									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 col-md-3 col-lg-2 control-label">Exam Name</label>
								<div class="col-sm-3 col-md-3 col-lg-8">
									<input type="text" required="yes" name="examName" id="examNameID" class="col-sm-3 col-md-3 col-lg-10" placeholder="Enter the name for the exam here"></input>
								</div>

								<div   class="col-sm-3 col-md-3 col-lg-2"></div>

							</div>
							<div class="form-group">
								<div   class="col-sm-3 col-md-3 col-lg-2"></div>
								<div id="display_error" style="display:none;" class=" col-sm-3 col-md-3 col-lg-4 alert alert-danger alert-block">
									
								</div>
							</div>
						
							<div class="form-group">
								<table class="table table-bordered table-striped table-hover data-table">
									<thead>
										<tr>
											<th>Select 15 Questions per exam</th>
										</tr>
									</thead>
									<tbody id="question_table_body">
										<tr id="question_row_"class="gradeA">
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<div  class="form-group">
								<div class="col-sm-3 col-md-3 col-lg-2"></div>
								<div class="col-sm-3 col-md-3 col-lg-2"></div>

								<div class="col-sm-3 col-md-3 col-lg-2"></div>
								<div class="col-sm-3 col-md-3 col-lg-2">
									<a href="#" 
									onclick="javascript:submitOfCreateExam();"
									data-toggle="dropdown"
									class="btn btn-primary dropdown-toggle"><i
									class="fa fa-upload icon-white"></i> Upload </a>
									<input type="submit" value="login"/> 
								</div>
							</div>




							
					</div>


				</form>
			</div>
		</div>

	</div>
</div>


<script type="text/javascript">
	$('#great').fadeOut(4000);

	loadQuestions();

</script>


</div>
</div>


@stop  