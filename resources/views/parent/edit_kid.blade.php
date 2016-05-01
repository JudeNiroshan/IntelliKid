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
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <script src="assets/baby/upload/js/jquery-pack.js"></script>
     <script src="assets/baby/upload/js/jquery.imgareaselect.min.js"></script>




    <!-- profile js/css -->
     <link rel="stylesheet" href="assets/parent/profile/css/animate.min.css">
     <link rel="stylesheet" href="assets/parent/profile/css/custom.css">
     <link rel="stylesheet" href="assets/parent/profile/css/icheck/flat/green.css">
     <link rel="stylesheet" href="assets/parent/profile/css/bootstrap.min.css">

     <script src="assets/parent/profile/js/jquery.min.js"></script>
 <!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img5">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">EDIT ACCOUNT</h1>
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

@if(!empty($data))
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
                                                    <img src="{{ $data[0]->img_path}}" alt="Avatar" id="img123"   >

                                                  
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
                    <h4 class="white nicdark_margin20">EDIT ACCOUNT </h4>
                    <i class="icon-mail nicdark_iconbg right medium orange"></i>
                </div>
                <div class="nicdark_margin20">
                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="{{$data[0]->nik_name}}" id="nik_name" name="nik_name" value="{{$data[0]->nik_name}}">
                    <div class="nicdark_space20"></div>
                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="{{$data[0]->f_name}}" id="f_name" name="f_name" value="{{$data[0]->f_name}}">
                    <div class="nicdark_space20"></div>

                    <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="{{$data[0]->l_name}}" id="l_name" name="l_name" value="{{$data[0]->l_name}}">
                    <div class="nicdark_space20"></div>

                     <select class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="LAST NAME" id="age" name="" ="age" >
                    	<option value="{{$data[0]->age}}">{{$data[0]->age}}</option>
                    	<option value="2013">3</option>
                    	<option value="2012">4</option>
                    	<option value="2011">5</option>
                    	<option value="2012">6</option>
                    	<option value="2011">7</option>
                    	<option value="2010">8</option>
                    

                    </select>
                    <div class="nicdark_space20"></div>


                    <select class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="YEAR" id="year" name="year">
                    	<option value="{{$date[2]}}">{{$date[2]}}</option>
                    	<option value="2013">2013</option>
                    	<option value="2012">2012</option>
                    	<option value="2011">2011</option>
                    	<option value="2010">2010</option>
                    	<option value="2009">2009</option>
                    	<option value="2008">2008</option>

                    </select>        

                    <select class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="MONTH" id="month" name="month" onchange="datedis()">
                    	<option value="{{$date[1]}}">{{$date[1]}}</option>
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
                    	<option value="{{$date[0]}}">{{$date[0]}}</option>
                    	<option value="2013">1</option>
                    	<option value="2012">2</option>
                    	<option value="2011">3</option>
                    	<option value="2012">4</option>
                    	<option value="2011">5</option>
                    	<option value="2010">6</option>
                    	<option value="2009">7</option>
                    	<option value="2008">8</option>
                    	<option value="2013">9</option>
                    	<option value="2012">10</option>
                    	<option value="2011">11</option>
                    	<option value="2012">12</option>
                    	<option value="2011">13</option>
                    	<option value="2010">14</option>
                    	<option value="2009">15</option>
                    	<option value="2008">16</option>
                    	<option value="2013">17</option>
                    	<option value="2012">18</option>
                    	<option value="2011">19</option>
                    	<option value="2012">20</option>
                    	<option value="2011">21</option>
                    	<option value="2010">22</option>
                    	<option value="2009">23</option>
                    	<option value="2008">24</option>
                    	<option value="2013">25</option>
                    	<option value="2012">26</option>
                    	<option value="2011">27</option>
                    	<option value="2012">28</option>
                    	<option value="2011">29</option>
                    	<option value="2010">30</option>
                    	<option value="2009">31</option>
                    

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
 




                    <textarea class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" placeholder="BIO" rows="7" id="bio" name="bio">{{$data[0]->bio_data}}</textarea>
                    <div class="nicdark_space20"></div>
                    <!--<input class="nicdark_btn nicdark_bg_orange medium nicdark_shadow nicdark_radius white" type="submit" value="SEND">-->
                   
            </div>
	                <input type="submit" value="SAVE" class="btn btn-success"  onclick="return save()">
					<input type="submit" value="DELETE" class="btn btn-danger"  onclick="return delete_ac()">
        </div>


       

        <div class="form-group">
           
          <div id="load"></div>
          </div>
          


    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->
 @else
  <script type="text/javascript">
         window.location.href = "home";
        </script>
        @endif

  <!-- Core  -->





@endsection


@section('js')
 



 <script type="text/javascript">




function save(){
















/*
	var nik_name = document.getElementById("nik_name").value;
	var fname    = document.getElementById("f_name").value;
	var lname    = document.getElementById("l_name").value;
	var bio      = document.getElementById("bio").value;
	var age      = document.getElementById("age").value;
	var gender   = $( "#gender option:selected" ).text();
	var month    = $( "#month option:selected" ).text();
	var day      = $( "#day option:selected" ).text();
	var year     = $( "#year option:selected" ).text();





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
*/
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