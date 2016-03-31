function setSelectValue (id, val) {
    document.getElementById(id).value = val;
}
function getSubjects(elements1){
	var str1 = '';
	for(var i=0; i<elements1.length;i++){
		
		str1 += '<option value="'+elements1[i]['id']+'" >'+elements1[i]['subject']+'</option>';
	}
	
	return str1;
}

function getAges(elements2){
	var str2 = '';
	for(var j=0; j<elements2.length;j++){
		str2 += '<option value='+elements2[j]['id']+' >'+elements2[j]['agefrom']+' - '+elements2[j]['ageto']+'</option>';
	}
	
	return str2;
}

function getAnswers(elements3){

	var str3 = '';
	for(var k=0; k< elements3.length; k++){
					    str3 += '<div class="form-group"> ' ;
					    str3 += '<label class="col-md-4 control-label" >Answer '+(k+1)+'</label> ' ;
					    str3 += '<div class="col-md-8"> ' ;
					    str3 += '<textarea name="ans'+(k+1)+'" type="text" class="form-control input-md">'+elements3[k]['answer_text']+'</textarea>' ;
					    str3 += '<input type=hidden name="ans'+(k+1)+'_id" value="'+elements3[k]['id']+'">';
					    str3 += '<div class="form-inline"><label class="radio inline">';
					    if(elements3[k]['iscorrect'] == 1){
						str3 += '<input type="checkbox" value="1" checked name="ans'+(k+1)+'_correct">Correct Answer';
					    }else{
						str3 += '<input type="checkbox" value="1" name="ans'+(k+1)+'_correct">Correct Answer';
					    }
					    str3 += '</label></div>';
					    str3 += '</div> </div>';
	}
				    
	return str3;		
}

function submitForSaveEdits(){
	
	document.getElementById('popup-form').submit();
	
	/*$.ajax({

		type: "post",
		url: "upload_save_edit_question",	
		data: {Q_ID:clickedID}, 
		success: function(data){
			if(data == 'success'){
				bootbox.alert("Alert!", function() {
				  Example.show("Question successfully saved");
				});

			}else{
			
			}
		}
	});*/
}

function editModelPopup(clickedID){

	//alert('function called');
	$.ajax({

		type: "get",
		url: "upload_load_edit_question",	
		data: {Q_ID:clickedID}, 
		success: function(data){
		
			var mySubs = getSubjects(data['sub']);
			var myAges = getAges(data['agecat']);
			
			
         		
			bootbox.dialog({
				title: "Edit Question",
				message: '<div class="row">  ' +
				    '<div class="col-md-12"> ' +
				    '<form method="post" id="popup-form" action="upload_save_edit_question" class="form-horizontal"> ' +
				    '<div class="form-group"> ' +
				    '<label class="col-md-4 control-label" >Question ID</label> ' +
				    '<div class="col-md-4"> ' +
				    '<input value="'+data['q_id']+'" type="text" disabled="yes" class="form-control input-md"></input> ' +
				    '<input type="hidden" name="question_id" value="'+data['q_id']+'" />'+
				    //'<span class="help-block">Here goes your name</span> ' +
				    '</div></div> ' +
				    
				    
				    '<div class="form-group"> ' +
					    '<label class="col-sm-3 col-md-3 col-lg-2 control-label">Subject</label> ' +
					    '<div class="col-sm-3 col-md-3 col-lg-4"> ' +
					    '<select id="subjects" name="subject">' + 
					     mySubs +
					    '</select>'+
					    
					    '</div> ' +
					    
					    '<label class="col-sm-3 col-md-3 col-lg-4 control-label">Age category</label>'+
					    '<div class="col-sm-3 col-md-3 col-lg-2">'+
					    '<select id="agegroups" name="ageCategory">'+ 
					     myAges +
					    '</select>'+
					    '</div> ' +
				    
				    '</div> ' +
				    
				    '<div class="form-group"> ' +
				    '<label class="col-md-4 control-label" >Question</label> ' +
				    '<div class="col-md-8"> ' +
				    '<textarea name="question" type="text" class="form-control input-md"> '+data['question'][0]['question']+' </textarea>' +
				    '</div> </div>'+
				    
				    getAnswers(data['answers_data']) +
				    
				    '<div class="form-group"> ' +
				    '<div class="col-sm-3 col-md-3 col-lg-2"></div> ' +
				    '<div class="col-sm-3 col-md-3 col-lg-2"></div> ' +
				    '<div class="col-sm-3 col-md-3 col-lg-2"></div> ' +
				    '<div class="col-sm-3 col-md-3 col-lg-2">'+
				    '<a href="#" onclick="javascript:submitForSaveEdits();" data-toggle="dropdown"'+
					'class="btn btn-primary dropdown-toggle">'+
					'<i class="fa fa-upload icon-white"></i> Save </a>'+
				    
				    '</div> </div>' +
				    
				    
				    
				    '</form> </div>  </div>'
				
				
			    }
			   
			);
			
			setSelectValue('subjects', data['sel_sub'][0]['subjectid']);
			setSelectValue('agegroups', data['sel_age'][0]['agegroupid']);
         					
     	}});
	
}


