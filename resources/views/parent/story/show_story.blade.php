@extends('parent_master')


@section('title')

@endsection



@section('content')
 <link rel="stylesheet" href="{{ URL::asset('assets/parent/profile/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-extend.min.css')}}">
  <style type="text/css">

div.scroll {
   
    width: 370px;
    height: 600px;
    overflow: scroll;
   
    margin-right: 15%;
   margin-left: 70%;
    margin-top: -33.5%;
    border-style: solid;
    border-color: gray;

}

div.container{
    width: 58%;
    margin-left: 3.5%;
     margin-top: -4%;
 

}
div.container1{
    width: 58%;
    margin-left: 3.5%;
     margin-top: 1%;
 

}
div.container2{
    width: 58%;
    margin-left: 3.5%;
     margin-top: 2%;
 

}
.form-group input[type="checkbox"] {
    display: none;
}

.form-group input[type="checkbox"] + .btn-group > label span {
    width: 20px;
}

.form-group input[type="checkbox"] + .btn-group > label span:first-child {
    display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
    display: inline-block;   
}

.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
    display: none;   
}

  </style>  

    <link rel="stylesheet" href="assets/parent/dist/jquery.flipster.min.css">

    <script src="assets/parent/jquery.min.js"></script>
    <script src="assets/parent/dist/jquery.flipster.min.js"></script>


<br>
<br>
<br>
<br>
<br>
<br>
<br>


<article id="demo-default" class="demo">

  

    <div id="coverflow">
        <ul class="flip-items">

        @foreach($story as $data)

        <input type="test" hidden value="{{$data->st_id}}" id="st_id" name="st_id"> 
            <li data-flip-title="Red">
                <img src="{{$data->img_path}}">
            </li>
            @endforeach
        </ul>
    </div>

<script>
    var coverflow = $("#coverflow").flipster();
</script>






<br>

<br>
<br>
<br>


<br>
<br>
<br>

<div class="container">

  <div class="panel panel-default" >


  @if($msg == "has")
   <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-danger-custom-icons" id="fancy-checkbox-danger-custom-icons" autocomplete="off" id="add" name="add" onclick="add_to_collector2()"  checked="" />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-danger-custom-icons" class="[ btn btn-danger ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-danger-custom-icons" class="[ btn btn-default active ]"  >
                   REMOVE FROM SHEDULE COLLECTOR   
                </label>
<div id="load"><p></p></div>
            </div>    
        </div>
        @else
         <div class="[ form-group ]">
            <input type="checkbox" name="fancy-checkbox-primary-custom-icons" id="fancy-checkbox-primary-custom-icons" autocomplete="off" id="add" name="add" onclick="add_to_collector()"  />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-primary-custom-icons" class="[ btn btn-primary ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-primary-custom-icons" class="[ btn btn-default active ]"  >
                   ADD TO SHEDULE COLLECTOR   
                </label>
<div id="load"><p></p></div>
            </div>    
        </div>

        @endif



         <div class="[ form-group ]" id="redbtn" name="redbtn" style="visibility: hidden">
            <input type="checkbox" name="fancy-checkbox-danger-custom-icons" id="fancy-checkbox-danger-custom-icons" autocomplete="off" id="fush" name="fush"  onclick="remove_to_collector()"  />
            <div class="[ btn-group ]">
                <label for="fancy-checkbox-danger-custom-icons" class="[ btn btn-danger ]">
                    <span class="[ glyphicon glyphicon-ok ]"></span>
                    <span> </span>
                </label>
                <label for="fancy-checkbox-danger-custom-icons" class="[ btn btn-default active ]"  >
                   REMOVE FROM SHEDULE COLLECTOR
                </label>
            </div>
        </div>

<br>
<br>
  </div>
</div>



 <!-- Palnne for display Comments-->
<div class="container1">
 <h3>Comments</h3>
  <div class="panel panel-default" >
   <ul class="nicdark_list border">

@foreach($comment as $c)
                <li class="nicdark_border_grey">
                	<!--comment-->
		            <div class="nicdark_archive1 nicdark_relative">
		                <div class="nicdark_margin100 nicdark_relative">
			    			<img alt="" class="nicdark_displaynone_ipadpotr nicdark_radius_circle nicdark_absolute" style="width:50px; height: 45px;" src="{{$c->img_path}}">
			                <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
			                    <div class="nicdark_space20"></div>
			                    <h4 class="subtitle greydark" id="comentor" name="comentor">{{$c->f_name}} {{$c->l_name}}: {{$c->date}}</h4>
			                    <div class="nicdark_space20"></div>                       
			                </div>
		                </div>
		                <p id="comment_text" name="comment_text">{{$c->text}}</p>
		                <div class="nicdark_space20"></div>
		                
		            	<div class="nicdark_space20"></div>
		            </div>
		            <!--comment-->
                </li>

            @endforeach    

                </ul>


  </div>
</div>


<!-- Palnne for add a comment-->
<div class="container2">
 <h3>Your Comment</h3>
  <div class="panel panel-default" >
    <div class="nicdark_space20"></div>
            <textarea class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle" placeholder="COMMENTS" id="comments" rows="9"></textarea>
<div class="nicdark_space20"></div>
            <input class="nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white left" type="submit" value="POST COMMENT" onclick="return comment()">

  </div>

</div>


<div class="row">
	

</div>

 		  <br/>
<br/>
<br/>	
@endsection
<script type="text/javascript">
  function  comment(){

var comment = document.getElementById("comments").value;
var id      = document.getElementById("st_id").value;
if(comment==""){
      sweetAlert("Warning!", "Please add a comment!!", "warning");
         return false;

}
$.ajax({
                type: "get",
                url: "story_comment",
                data:{
                    id:id,
                    comment:comment
                },
           
                success: function (data) {
                 if(data== 1){
        
            
              setTimeout(function(){
                      // document.getElementById("load").innerHTML = "";
                       location.reload();
                       
                       },1000);

                        
                 return true;
             }
          
                },
                error: function (xhr, ajaxOptions, thrownError) {
                   //document.getElementById("load").innerHTML = "";
                  sweetAlert("Sorry!", "Something went wrong!", "error");
                  return false;
                }
            });



  }

</script>

<script type="text/javascript">
	
	function add_to_collector2(){
	
		
		 var id = document.getElementById("st_id").value;
		 
document.getElementById("load").innerHTML = "Loading.........";

 swal({   title: "Are you sure?",   text: "Your are going to remove this from collector!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Yes, remove it!",   cancelButtonText: "No, cancel plx!",   closeOnConfirm: false,   closeOnCancel: false }, function(isConfirm){   
 	if (isConfirm) {   


 		$.ajax({
                type: "get",
                url: "delete_from_collector",
                data:{
                    id:id,
                    type:"story"
                },
           
                success: function (data) {
                 if(data== 1){
				
                       
						swal("successfully!", "Story Removed!", "success");
						  setTimeout(function(){
                       document.getElementById("load").innerHTML = "";
                       location.reload();
                       
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
 	else {    
 	 swal("Cancelled", "Your imaginary file is safe :)", "error"); 
 	 location.reload();
 	 document.getElementById("load").innerHTML = "";
 	   } });




	}







function add_to_collector(){
	
var id = document.getElementById("st_id").value;
		 
document.getElementById("load").innerHTML = "Loading.........";




 
 		$.ajax({
                type: "get",
                url: "add_to_collector",
                data:{
                    id:id,
                    type:"story"
                },
           
                success: function (data) {
                 if(data== 1){
				swal("successfully!", "Story Added!", "success");
                        setTimeout(function(){
						
                       document.getElementById("load").innerHTML = "";
                       location.reload();
                       //window.location.href = "veca";
                      

                        },2000);
                        
                 return true;
             }
              if(data== 0){
				swal( 'Warning',   'This is already in the Collector' );
                        setTimeout(function(){

						
                       document.getElementById("load").innerHTML = "";
                      location.reload();
                       
                       //window.location.href = "veca";
                      

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



</script>




