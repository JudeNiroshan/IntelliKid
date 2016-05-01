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



   <style type="text/css">
.block {
      width: 25%;
      height: 3%;
      margin: 5% auto;
      text-align: center;
    }
    .loading span {
      display: inline-block;
      padding: 8px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      -o-border-radius: 50%;
      border-radius: 50%;
    }
    .ball1 {
      background: #5FC169;
      -webkit-animation: move-left 800ms ease-in-out infinite alternate;
      -moz-animation: move-left 800ms ease-in-out infinite alternate;
      -ms-animation: move-left 800ms ease-in-out infinite alternate;
      -animation: move-left 800ms ease-in-out infinite alternate;
    }
    .ball2 {
      background: #5CC3E6;
      -webkit-animation: move-right 800ms ease-in-out infinite alternate;
      -moz-animation: move-right 800ms ease-in-out infinite alternate;
      -ms-animation: move-right 800ms ease-in-out infinite alternate;
      animation: move-right 800ms ease-in-out infinite alternate;
    }
    @-webkit-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-moz-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-ms-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-o-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-webkit-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }
    @-moz-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }
    @-ms-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #0063dc;
      }
    }
    @-o-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }
    @keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
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


                    <?php 
                        
                        $path = $data->path;
                        $l = strlen($path);
                        $path = substr($path,34,$l);
                    ?>
        <input type="test" hidden value="{{$data->storyid}}" id="st_id" name="st_id"> 
            <li data-flip-title="Red">
                <img src="{{$data->path}}" height="500" width="650">

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
<p>LIKES:{{$likes[0]->likes}} <span class="glyphicon glyphicon-thumbs-up"></span></p> 
<p>VIEWS: {{$likes[0]->totalviews}} <span class="glyphicon glyphicon-eye-open"></span></p> 
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
                   ADD TO SHEDULE QUEUE   
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
			                    <h4 class="subtitle greydark" id="comentor" name="comentor">{{$c->f_name}} {{$c->l_name}}: {{$c->comment_date}}</h4>
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
  <div id="load1"><p></p></div>

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
document.getElementById("load1").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';

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
                document.getElementById("load1").innerHTML="";
                      // document.getElementById("load").innerHTML = "";
                       location.reload();
                       
                       },1000);

                        
                 return true;
             }
          
                },
                error: function (xhr, ajaxOptions, thrownError) {
                   //document.getElementById("load").innerHTML = "";
                   document.getElementById("load1").innerHTML="";
                  sweetAlert("Sorry!", "Something went wrong!", "error");
                  return false;
                }
            });



  }

</script>

<script type="text/javascript">
	
	function add_to_collector2(){
	
		
		 var id = document.getElementById("st_id").value;
		 
document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';

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

     document.getElementById("load").innerHTML = ""; 
     swal({   title: "Canceled!",   text: "",   timer: 800,   showConfirmButton: false });
 	

 	   } });




	}







function add_to_collector(){
	
var id = document.getElementById("st_id").value;
		 
document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';
      




 
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




