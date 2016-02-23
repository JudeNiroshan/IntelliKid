@extends('parent_master')


@section('title')

@endsection



@section('content')


@if(empty($data[0]->c_id))

<script type="text/javascript">
	
 window.location.href = "veca";

</script>
@endif
<?php 
$date = $data[0]->dat_of_birth;

$date = explode("/",$date)

?>

								<div class="container large">
								<div class="row">
								<form  method="get" class="apply_from" id="form">
									<h4>CREATE NEW ACCOUNT</h4>
									<div class="form-group">
										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<div class="label">USER NAME <span class="error" >*</span></div>
											</div>
											<div class="col-xs-12 col-sm-8">
												<div class="text-field">
													<input type="text" class="form-control" name="nik_name" id="nik_name" value="{{$data[0]->nik_name}}">
												</div>
											</div>
										</div>
									</div><!--end form group-->
									
									<div class="form-group">
										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<div class="label">FIRST NAME</div>
											</div>
											<div class="col-xs-12 col-sm-8">
												<div class="text-field">
													<input type="text" class="form-control" name="f_name" id="f_name" value="{{$data[0]->f_name}}">
												</div>
											</div>
										</div>
									</div><!--end form group-->
									
									<div class="form-group">
										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<div class="label">LAST NAME <span class="error">*</span></div>
											</div>
											<div class="col-xs-12 col-sm-8">
												<div class="text-field">
													<input type="text" class="form-control" name="l_name" id="l_name" value="{{$data[0]->l_name}}">
												</div>
											</div>
										</div>
									</div><!--end form group-->
									<div class="form-group">
										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<div class="label">Age <span class="error">*</span></div>
											</div>
											<div class="col-xs-12 col-sm-8">
												<div class="text-field">
													<input type="number" class="form-control" name="age" id="age" value="{{$data[0]->age}}">
												</div>
											</div>
										</div>
									</div><!--end form group-->
									
									
								
									
									<div class="form-group">
										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<div class="label">Gender <span class="error">*</span></div>
											</div>
											<div class="col-xs-12 col-sm-8">
												<div class="text-field">
													  <select class="option-select" id="gender" name="gender">
														  <option value="" disabled="" selected="" value="{{$data[0]->gender}}" disabled="">{{$data[0]->gender}}</option>
														  <option value="boy">boy</option>
														  <option value="girl">girl</option>
														  
													  </select>
												</div>
											</div>
										</div>
									</div><!--end form group-->
									
									<div class="form-group">
										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<div class="label">Date of Birth  <span class="error">*</span></div>
											</div>
											<div class="col-xs-12 col-sm-8">
												<div class="text-field">
													<div class="row">
														<div class="col-xs-6 col-sm-4">
															  <select name="month" class="option-select" id="month">
																	<option  value-"{{$date[1]}}"  disabled="">{{$date[1]}}</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																  
															  </select>
														</div>
														
														<div class="col-xs-6 col-sm-4">
															  <select name="day" class="option-select" id="day">
																	<option selected="selected" value-"{{$date[0]}}"  disabled="">{{$date[0]}}</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																  
															  </select>
														</div>
														
														<div class="col-xs-12 col-sm-4 custom">
															  <select name="year" class="option-select" id="year">
																	<option selected="selected" value="" disabled="" value-"{{$date[2]}}">{{$date[2]}}</option>
																	<option value="1997">1997</option>
																	<option value="1998">1998</option>
																	<option value="1999">1999</option>
																	<option value="2000">2000</option>
																	<option value="2001">2001</option>
																	<option value="2002">2002</option>
																	<option value="2003">2003</option>
																	<option value="2004">2004</option>
																	<option value="2005">2005</option>
																	<option value="2006">2006</option>
																	<option value="2007">2007</option>
																	<option value="2008">2008</option>
																	<option value="2009">2009</option>
																	<option value="2010">2010</option>
																	<option value="2011">2011</option>
																	<option value="2012">2012</option>
																	<option value="2013">2013</option>
																	<option value="2014">2014</option>
																	<option value="2015">2015</option>
															  </select>
														</div>
														
													</div>
													
												</div>
											</div>
										</div>
									</div><!--end form group-->

										<div class="form-group">
										<div class="row">
											<div class="col-xs-12 col-sm-4">
												<div class="label">BIO DATA :</div>
											</div>
											<div class="col-xs-12 col-sm-8">
												<div class="text-field">
													<textarea type="text" class="form-control" name="bio" id="bio">{{$data[0]->bio_data}}</textarea>
												</div>
											</div>
										</div>
									</div><!--end form group-->
									

			<div class="form-group">
          
          <div id="load"></div>
          </div>
									
									<input type="submit" value="SAVE" class="btn btn-success"  onclick="return save()">
									<input type="submit" value="DELETE" class="btn btn-danger"  onclick="return delete_ac()">
									 
          
          <br>
          <br>
									
								</form>
								</div>
								</div>

								<BR>
								<BR>
								<br>
@endsection


@section('js')


 <script type="text/javascript">




function save(){


	var nik_name = document.getElementById("nik_name").value;
	var fname    = document.getElementById("f_name").value;
	var lname    = document.getElementById("l_name").value;
	var bio      = document.getElementById("bio").value;
	var age      = document.getElementById("age").value;
	var gender   = $( "#gender option:selected" ).text();
	var month    = $( "#month option:selected" ).text();
	var day      = $( "#day option:selected" ).text();
	var year     = $( "#year option:selected" ).text();


	year = year.substring(4, 8);
	age = age.substring(6, 7);

	if(gender=="Selectgirl"){
	gender = gender.substring(6, 10);
}
else{
	gender = gender.substring(6, 9);

}
if(day.length == 4){
	day = day.substring(3, 5);
}
else{
	day = day.substring(3, 6);

}
if(month.length == 6){
	month = month.substring(5, 7);
}
else{
	month = month.substring(5, 8);

}




	//alert(nik_name+"/"+fname+"/"+lname+"/"+age+"/"+gender+"/"+month+"/"+day+"/"+year);

	if(nik_name=="" || fname=="" || lname == "" ){
 		 swal("ERROR!", "You have empty input fields!", "error");
 		 return false;
 				}
else{
	

           document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';
      
           
      

 		$.ajax({
                type: "get",
                url: "child_data_save",
                data:{
                    nik_name:nik_name,
                    fname:fname,
                    lname:lname,
                    age:age,
                    gender:gender,
                    month:month,
                    day:day,
                    year:year,
                    bio:bio,
                    id:{{$data[0]->c_id}}
                },
           
                success: function (data) {

                	alert(data);
                 if(data== 1){

                        setTimeout(function(){

                       document.getElementById("load").innerHTML = "";
                       swal("successfully!", "Saved successfully!", "success");
                       return true;
                      

                        },2000);

                       document.getElementById("load").innerHTML = "";
                 return false;
             }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                	 document.getElementById("load").innerHTML = "";
                  sweetAlert("Sorry!", "Something went wrong!", "error");
                  return false;
                }
            });

}

return false;
 }


 
 </script>


 <script type="text/javascript">


function delete_ac(){


	
	

           document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';
      
           
      

 		$.ajax({
                type: "get",
                url: "child_data_delete",
                data:{
                    id:{{$data[0]->c_id}}
                },
           
                success: function (data) {
                 if(data== 1){
swal("successfully!", "Account deleted!", "success");
                        setTimeout(function(){

                       document.getElementById("load").innerHTML = "";
                       
                       window.location.href = "veca";
                      

                        },2000);
                 return true;
             }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                	 document.getElementById("load").innerHTML = "";
                  sweetAlert("Sorry!", "Something went wrong!", "error");
                  return false;
                }
            });



return false;
 }

 </script>

@endsection