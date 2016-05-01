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

function submitForSaveEdits(){
	
	document.getElementById('popup-form').submit();
}

function editModelPopup(clickedID){

	$.ajax({

		type: "get",
		url: "upload_load_edit_story",	
		data: {Story_ID:clickedID}, 
		success: function(data){
		
			var mySubs = getSubjects(data['sub']);
			var myAges = getAges(data['agecat']);
			
			
         		
			bootbox.dialog({
				title: "Edit Story Details",
				message: '<div class="row">  ' +
				    '<div class="col-md-12"> ' +
				    '<form method="post" id="popup-form" action="upload_save_edit_story" class="form-horizontal"> ' +
				    '<div class="form-group"> ' +
				    '<label class="col-md-4 control-label" >Story ID</label> ' +
				    '<div class="col-md-4"> ' +
				    '<input value="'+data['story_id']+'" type="text" disabled="yes" class="form-control input-md"></input> ' +
				    '<input type="hidden" name="story_id" value="'+data['story_id']+'" />'+
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
				    '<label class="col-md-4 control-label" >Story Name</label> ' +
				    '<div class="col-md-8"> ' +
				    '<input name="story_name" maxlength="20" value="'+data['story_name'][0]['name']+'" type="text" class="form-control input-md"/>' +
				    '</div> </div>'+
				    
				    '<div class="form-group"> ' +
				    '<label class="col-md-4 control-label" >Story</label> ' +
				    '<div class="col-md-8"> ' +
				    '<textarea name="story_text" class="form-control input-md">'+data['story_text']+'</textarea>' +
				    '</div> </div>'+
				  
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


