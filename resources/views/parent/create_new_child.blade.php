@extends('parent_master')


@section('title')

@endsection



@section('content')
     
     <script src="{{ URL::asset('assets/baby/upload/js/jquery-pack.js') }}"></script>
     <script src="{{ URL::asset('assets/baby/upload/js/jquery.imgareaselect.min.js') }}"></script>

    <!-- profile js/css -->
     <link rel="stylesheet" href="{{ URL::asset('assets/parent/profile/css/animate.min.css')}}">
     <link rel="stylesheet" href="{{ URL::asset('assets/parent/profile/css/custom.css')}}">
     <link rel="stylesheet" href="{{ URL::asset('assets/parent/profile/css/icheck/flat/green.css')}}">
     

     <script src="{{ URL::asset('assets/parent/profile/js/jquery.min.js') }}"></script>
     



 <!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img5">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">CREATE NEW ACCOUNT</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">BEST WAY TO CONTROL YOUR CHILD</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>
     
</section>
<!--end section-->


<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space40"></div>




<!--profile pic -->
        <div class="grid grid_4">
    <div class="x_content">

                                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                                        <div class="profile_img">

                                            <!-- end of image cropping -->
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <div class="avatar-view" title="Change Profile Image" style="overflow: hidden; width: 200px; height: 200px;">
                                                    <img src="{{URL::asset('assets/parent/profile/img/baby.png')}}" alt="Avatar" id="img123"   >

                                                  
                                                </div>


                                                <!-- Cropping modal -->
                                                <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <form class="avatar-form" onsubmit="upload()" enctype="multipart/form-data" method="post" id="formID" name="formID">
                                                                <div class="modal-header">
                                                                    <button class="close" data-dismiss="modal" type="button">&times;</button>
                                                                    <h4 class="modal-title" id="avatar-modal-label">Profile Image</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="avatar-body">

                                                                        <!-- Upload image and data -->
                                                                        <div class="avatar-upload">
                                                                            <input class="avatar-src"  name="avatar_src"   id="avatar_src" type="hidden">
                                                                            <input class="avatar-data" name="avatar_data"  id="avatar_data"  type="hidden">
                                                                            <label for="avatarInput">Upload</label>
                                                                            <input class="avatar-input btn btn-success"  id="avatarInput" name="avatarInput" type="file">
                                                                        </div>

                                                                        <!-- Crop and preview -->
                                                                        <div class="row">
                                                                            <div class="col-md-9">
                                                                                <div class="avatar-wrapper"></div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="avatar-preview preview-lg"></div>
                                                                                <div class="avatar-preview preview-md"></div>
                                                                                <div class="avatar-preview preview-sm"></div>
                                                                            </div>
                                                                        </div>
                                                                 <div class="row avatar-btns">
                                                                            <div class="col-md-9">
                                                                            <!--
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                                                                    <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                                                                    <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                                                                    <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                                                                </div>

                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                                                                    <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                                                                    <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                                                                    <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                                                                </div>
                                                                                -->
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                                <!-- <div class="modal-footer">
                                                  <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                </div> -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal -->

                                                <!-- Loading state -->
                                                <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                            </div>
                                            <!-- end of image cropping -->

                                        </div>
                                        
                                        
                      
<form id="upload_form" enctype="multipart/form-data" method="post">
  <br>

        <div class="form-group">
           
          <div id="load"></div>
          </div>
          


 





   <div class="nicdark_progressbar nicdark_bg_grey nicdark_radius nicdark_shadow">
  <progress class="icdark_progressbar_title nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_radius nicdark_shadow fade-left animate1 animated fadeInLeft" id="progressBar" value="0" max="100" style="width:250px;"></progress>
  </div>



  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>                 

        
        </div>
</div>



</div>


		<div class="grid grid_8">
            
           <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_orange nicdark_radius_top">
                    <h4 class="white nicdark_margin20">NEW ACCOUNT </h4>
                    <i class="icon-mail nicdark_iconbg right medium orange"></i>
                </div>
                <div class="nicdark_margin20">
                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text"  placeholder="NIK NAME" id="nik_name" name="nik_name">
                    <div class="nicdark_space20"></div>
                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text"  placeholder="FFIRST NAME" id="f_name" name="f_name">
                    <div class="nicdark_space20"></div>

                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text"  placeholder="LAST NAME" id="l_name" name="l_name">
                    <div class="nicdark_space20"></div>

                     <select class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" placeholder="LAST NAME" id="age" name="" ="age">
                    	<option value="">AGE</option>
                    	<option value="3">3</option>
                    	<option value="4">4</option>
                    	<option value="5">5</option>
                    	<option value="6">6</option>
                    	<option value="7">7</option>
                    	<option value="8">8</option>
                    

                    </select>
                    <div class="nicdark_space20"></div>


                    <select class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="YEAR" id="year" name="year" onchange="datedis()">
                    	<option value="">YEAR</option>
                    	<option value="2013">2013</option>
                    	<option value="2012">2012</option>
                    	<option value="2011">2011</option>                  
                    	<option value="2010">2010</option>
                    	<option value="2009">2009</option>
                    	<option value="2008">2008</option>

                    </select>        

                    <select class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="MONTH" id="month" name="month" onchange="datedis()">
                    	<option value="">MONTH</option>
                    	<option value="1">JAN</option>
                    	<option value="2">FEB</option>
                    	<option value="3">MAR</option>
                    	<option value="4">APR</option>
                    	<option value="5">MAY</option>
                    	<option value="6">JUN</option>
                    	<option value="7">JUL</option>
                    	<option value="8">AUG</option>
                    	<option value="9">SEP</option>
                    	<option value="10">OCT</option>
                    	<option value="11">NOV</option>
                    	<option value="12">DEC</option>

                    </select>          

                    <select class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="DATE" id="day" name="day">
                    	<option value="">DAY</option>
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
                    <div class="nicdark_space20"></div>



                     <div class="form-group  row">
                        <label class="col-md-3 control-label text-uppercase font-weight-400" -=>  
                           GENDER

                        </label>
                        <div class="col-md-3">
                            <div class="radio-custom radio-primary">
                                <input type="radio" id="gender" name="gender" value="male">
                                <label for="male">MALE</label>
                            </div></div>
                        <div class="col-md-3">
                            <div class="radio-custom radio-primary">
                                <input type="radio" id="gender" name="gender" value="female"  >
                                <label for="female">FEMALE</label>
                            </div>
                        </div>

                    </div>

                     <div class="form-group">  
                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="password"  placeholder="PASSWORD" id="password" name="password" style="width:50%">
                    <div class="nicdark_space20"></div>
                    </div>
                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="password"  placeholder="CONFIRM PASSWORD" id="con_password" name="con_password"  style="width:50%">
                    <div class="nicdark_space20"></div>
 <div class="nicdark_space20"></div>




                    <textarea class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" placeholder="BIO" rows="7" id="bio" name="bio"></textarea>
                    <div class="nicdark_space20"></div>
                    <!--<input class="nicdark_btn nicdark_bg_orange medium nicdark_shadow nicdark_radius white" type="submit" value="SEND">-->
                    <input type="submit"  class="btn btn-warning btn-block"  onclick="return uploadFile()" />
                     <input type="submit"  class="btn btn-info btn-block"  onclick="Clear()" value="Clear All"/>
            </div>

        </div>


       

    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->

                              
                            

<script>

function _(el){
    return document.getElementById(el);
}
function uploadFile(){
   
/*
   if(document.getElementById('avatarInput').value == "" || document.getElementById('avatarInput').value == null ){

 sweetAlert("Sorry!", "No image found to upload!", "error");
return false;
   }
*/

    var nik_name = document.getElementById("nik_name").value;
    var fname    = document.getElementById("f_name").value;
    var lname    = document.getElementById("l_name").value;
    var bio      = document.getElementById("bio").value;
    var age      = document.getElementById("age").value;
    var gender   = document.getElementById("gender").value;;
    var month    = document.getElementById("month").value;
    var day      = document.getElementById("day").value;
    var year     = document.getElementById("year").value;
    var password = document.getElementById("password").value;
    var con_password = document.getElementById("con_password").value;
    var file = _("avatarInput").files[0];
    var img_data = document.getElementById('avatar_data').value;

    //var file     = document.getElementById("avatarInput").value;
    
 var currentTime = new Date();
    var Cyear = currentTime.getFullYear();

    var diff_age = Cyear-year;


   if(nik_name=="" || fname=="" || lname == "" || age == "Select" || gender == "Select" || month == "Month" || day == "Day" || password== ""|| con_password=="" ){
         swal("ERROR!", "You have empty input fields!", "error");
         return false;
                }
     if(password.length <7){
       
         sweetAlert("Sorry!", "Password length is not enough!", "error");
         return false;
          

        }

    if(con_password != password ){     
   
         sweetAlert("Sorry!", "Password is not matched!!", "error");
         return false;
    }            
    

      if(file=="" || img_data=="" ){      
         sweetAlert("Sorry!", "Please Select a Image for profile!!", "error");
         return false;
    }


    if(diff_age != parseInt(age) ){      
         sweetAlert("Sorry!", "Age is not match with birthday", "error");
         return false;
    }


else{

           document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';
      




_("progressBar").value = 0;
  
   
    var formdata = new FormData();
    formdata.append("file1", file);
    formdata.append("img_data", img_data);

     formdata.append("nik_name", nik_name);
     formdata.append("fname", fname);
     formdata.append("lname", lname);
     formdata.append("bio", bio);
     formdata.append("age", age);
     formdata.append("gender", gender);
     formdata.append("month", month);
     formdata.append("day", day);
     formdata.append("year", year);
     formdata.append("password", password);
   

    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "file_upload_parser");
    ajax.send(formdata);
   } 
}
function progressHandler(event){
    _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
    var percent = (event.loaded / event.total) * 100;
    _("progressBar").value = Math.round(percent);
    _("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){

           
    document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';
              setTimeout(function(){

                       document.getElementById("load").innerHTML = "";
                       _("status").innerHTML = event.target.responseText;
                      

                        },2000);   
    
    //_("progressBar").value = 0;
}
function errorHandler(event){
    _("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
    _("status").innerHTML = "Upload Aborted";
}



</script>




  <!-- Core  -->
<script src="{{ URL::asset('assets/parent/profile/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/parent/profile/js/cropping/cropper.min.js') }}"></script>
<script src="{{ URL::asset('assets/parent/profile/js/cropping/main.js') }}"></script>



@endsection


@section('js')
<script type="text/javascript">
  
$('#myFile').bind('change', function() {

  //this.files[0].size gets the size of your file.



  if((this.files[0].size/(1024*1024))>10){
    alert("file is too large");
  }

  else{
   alert("file is file");

  }

});
    


</script>
 <script type="text/javascript">
  function daysInMonth(month,year) {
    return new Date(year, month, 0).getDate();
}

function datedis(){

    //var currentTime = new Date();
    //var year = currentTime.getFullYear();

    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
   

     var days = daysInMonth(month,year);
     var dif = 31-days;
    //alert(dif);

 

    document.getElementById("day").options[31].disabled = false;
    document.getElementById("day").options[30].disabled = false;
    document.getElementById("day").options[29].disabled = false;
    document.getElementById("day").options[28].disabled = false;
    document.getElementById("day").options[27].disabled = false;
    

if(dif>0){
    for(var i=31;i>(31-dif);i--){
    	document.getElementById("day").options[i].disabled = true;
    }
}


	


}

function Clear(){


    document.getElementById("nik_name").value="";
    document.getElementById("f_name").value="";
    document.getElementById("l_name").value="";
    document.getElementById("bio").value="";
    document.getElementById("age").value="";
    document.getElementById("gender").value="";
    document.getElementById("month").value="";
    document.getElementById("day").value="";
    document.getElementById("year").value="";
    document.getElementById("password").value="";
    document.getElementById("con_password").value="";
    document.getElementById("status").innerHTML="";

}




/*function sumbit(){


	var nik_name = document.getElementById("nik_name").value;
	var fname    = document.getElementById("f_name").value;
	var lname    = document.getElementById("l_name").value;
	var bio      = document.getElementById("bio").value;
	var age      = document.getElementById("age").value;
	var gender   = document.getElementById("gender").value;;
	var month    = document.getElementById("month").value;
	var day      = document.getElementById("day").value;
	var year     = document.getElementById("year").value;

    var file     = document.getElementById("avatarInput").value;
    

	//alert(nik_name+fname+lname+bio+age+gender+month+day+year);

	//alert(nik_name+"/"+fname+"/"+lname+"/"+age+"/"+gender+"/"+month+"/"+day+"/"+year);

	if(nik_name=="" || fname=="" || lname == "" || age == "Select" || gender == "Select" || month == "Month" || day == "Day" || year == "Year" || file == "" || filedata==""){
 		 swal("ERROR!", "You have empty input fields!", "error");
 		 return false;
 				}
else{
	

           document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';
      
           
      

 		$.ajax({
                type: "get",
                url: "new_child_register",
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
                    file:file,
                    filedata:filedata
                },
           
                success: function (data) {

                 if(data== 1){

                        setTimeout(function(){

                       document.getElementById("load").innerHTML = "";
                       swal("successfully!", "Account created successfully!", "success");
                      

                        },2000);
                 return true;
             }
  				if(data== 2){

                        setTimeout(function(){

                       document.getElementById("load").innerHTML = "";
                       swal("Warning!", "This User name is already used,try a another!", "Warning");
                      

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

}

return false;

 }*/
 </script>

@endsection