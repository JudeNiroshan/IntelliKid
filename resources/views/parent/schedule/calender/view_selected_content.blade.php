@extends('parent_master')


@section('title')

@endsection


<?php

$c = array("nicdark_bg_blue","nicdark_bg_green","nicdark_bg_violet","nicdark_bg_orange","nicdark_bg_red","nicdark_bg_yellow");

$cs = array("nicdark_bg_green","nicdark_bg_orange","nicdark_bg_blue","nicdark_bg_red","nicdark_bg_yellow","nicdark_bg_violet");
?>
@section('content')
<br><br><br><br>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark"></h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">CONTENT</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        
        <div class="nicdark_masonry_btns">
            <div class="nicdark_margin10">
                <a data-filter="*" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">ALL</a>
            </div>
            <div class="nicdark_margin10">
                <a data-filter=".video" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">VIDEOS</a>
            </div>
            <div class="nicdark_margin10">
                <a data-filter=".story" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">STORIES</a>
            </div>
            <div class="nicdark_margin10">
                <a data-filter=".audio" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">Songs</a>
            </div>
             <div class="nicdark_margin10">
                <a data-filter=".quiz" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_shadow nicdark_radius grey">Question bundles</a>
            </div>
            <div class="nicdark_space10"></div>
        </div>


        <!--start nicdark_masonry_container-->
        <div class="nicdark_masonry_container">




<?php 
$index =0;
for($i=0;$i<sizeof($content_v);$i++) {?>

            <div class="grid grid_2 nicdark_masonry_item video">
                <div class="nicdark_archive1 {{$c[$index]}} nicdark_radius nicdark_shadow">
                    
                    <!--<a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>
					-->                 
                    <div class="nicdark_margin20">
                        <h4 class="white"> <img alt=""  src="{{$content_v[$i][2]}}"></h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">{{$content_v[$i][1]}}</p>
                        <div class="nicdark_space20"></div>
                        <a href="view_videos?id={{$content_v[$i][0]}}&cat={{$content_v[$i][3]}}" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> View</a>                        
                    </div>

                   
                

                </div>
            </div>
           


<?php 
$index++;
	if($index==7){
		$index=0;
	}

}?>


<?php 
$indexs =0;
for($i=0;$i<sizeof($content_s);$i++) {?>

            <div class="grid grid_2 nicdark_masonry_item story">
                <div class="nicdark_archive1 {{$cs[$indexs]}} nicdark_radius nicdark_shadow">
                    
                    <!--<a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>
					-->                 
                    <div class="nicdark_margin20">
                        <h4 class="white"> <img alt=""  src="{{$content_s[$i][2]}}"></h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">{{$content_s[$i][1]}}</p>
                        <div class="nicdark_space20"></div>
                        <a href="show_story?id={{$content_s[$i][0]}}" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> View</a>                        
                    </div>

                   
                    

                </div>
            </div>


<?php 
$indexs++;
	if($indexs==7){
		$indexs=0;
	}

}?>




<?php 
$indexs =0;
for($i=0;$i<sizeof($content_a);$i++) {?>

            <div class="grid grid_2 nicdark_masonry_item audio">
                <div class="nicdark_archive1 {{$cs[$indexs]}} nicdark_radius nicdark_shadow">
                    
                    <!--<a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>
                    -->                 
                    <div class="nicdark_margin20">
                        <h4 class="white"> <img alt=""  src="{{$content_a[$i][2]}}" style="width:90px;height: 100px"> </h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">{{$content_a[$i][1]}}</p>
                        <div class="nicdark_space20"></div>
                        <a href="single_view_song?id={{$content_a[$i][0]}}" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> View</a>                        
                    </div>

                   
                    

                </div>
            </div>


<?php 
$indexs++;
    if($indexs==7){
        $indexs=0;
    }

}?>



<?php 
$indexs =0;
for($i=0;$i<sizeof($content_q);$i++) {?>

            <div class="grid grid_2 nicdark_masonry_item quiz">
                <div class="nicdark_archive1 {{$cs[$indexs]}} nicdark_radius nicdark_shadow">
                    
                    <!--<a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>
                    -->                 
                    <div class="nicdark_margin20">
                        <h4 class="white">Question bundle {{$content_q[$i][1]}}</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Bundle Number : {{$content_q[$i][1]}}</p>
                        <div class="nicdark_space20"></div>
                        <a href="show_question?id={{$content_q[$i][1]}}" class="white nicdark_btn"><i class="icon-doc-text-1 "></i> View</a>                        
                    </div>

                   
                    

                </div>
            </div>


<?php 
$indexs++;
    if($indexs==7){
        $indexs=0;
    }

}?>




           

<input type="text" value="{{$selected_date}}" id="Sdate" hidden>



        </div>
        <!--end nicdark_masonry_container-->

    </div>
    <!--end nicdark_container-->
  <br><br><br>         
</section>
<!--end section-->


   <div class="content" style="padding-left: 70%;padding-bottom: 1%">
     <button  type = "button" onclick="confirm()" class = "btn btn-success">Create Schedule</button>
    </div>  

     <div class="content" style="padding-left: 70%;padding-bottom: 1%">
     <button  type = "button" onclick="deleteS()" class = "btn btn-danger">Delete Schedule</button>
    </div>      
</section>

<script type="text/javascript">
	
function confirm(){


 swal({   title: "Are you sure?",   text: "This content wil set as your new schedule queue!",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Yes",   cancelButtonText: "No, cancel ",   closeOnConfirm: false,   closeOnCancel: false }, function(isConfirm){   
    if (isConfirm) {   


       window.location = "set_past_content_as_new";

      } 
    else {  
 
    swal({   title: "Canceled!",   text: "",   timer: 1000,   showConfirmButton: false });
    
    
       } 


   });


}


</script>
<script type="text/javascript">
    


    
function deleteS(){

    var date = document.getElementById('Sdate').value;


 swal({   title: "Are you sure?",   text: "",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Yes",   cancelButtonText: "No, cancel ",   closeOnConfirm: false,   closeOnCancel: false }, function(isConfirm){   
    if (isConfirm) {   

        $.ajax({
                type: "get",
                url: "delete_schedule",
                data:{
                    date:date
                },
           
                success: function (data) {
               
                 if(data== 1){

                        swal("successfully!", "Schedule deleted!", "success");
                        setTimeout(function(){
  
                             window.location.href = "past_schedule";
                      

                        },2000);
                 return true;
             }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    
                  sweetAlert("Sorry!", "Something went wrong!", "error");
                  return false;
                }
            });




      

      } 
    else {  
 
    swal({   title: "Canceled!",   text: "",   timer: 1000,   showConfirmButton: false });
    
    
       } 


   });


}
</script>

@endsection
