@extends('parent_master')


@section('title')

@endsection



@section('content')

 <link rel="stylesheet" href="{{ URL::asset('assets/parent/profile/css/bootstrap.min.css')}}">
<style type="text/css">
    @font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: local('Montserrat-Regular'), url(http://themes.googleusercontent.com/static/fonts/montserrat/v4/zhcz-_WihjSQC0oHJ9TCYBsxEYwM7FgeyaSgU71cLG0.woff) format('woff');
}


</style>


 <br>

 <br>

 <br>

 <br>

 <br>




<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space40"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark">SCHEDULE QUEUE</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">SCHEDULE FOR YOUR KID</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div> 
        </div>


    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->




<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space10"></div>

        <div class="grid grid_4">
            <!--start badges-->

           </div>
           </div>

            
</section>
<!--end section-->


<!--start section-->
<section id="nicdark_parallax_counter" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-single-teacher-1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>


            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a style="width:50px;" href="#" class="white nicdark_btn nicdark_bg_blue nicdark_bg_bluedark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="{{$video_count}}" data-speed="1000">{{$video_count}}</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">Videos</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a style="width:50px;" href="#" class="white nicdark_btn nicdark_bg_green nicdark_bg_greendark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="{{$story_count}}" data-speed="1000">{{$story_count}}</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">Sories</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a style="width:50px;" href="#" class="white nicdark_btn nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="{{$audio_count}}" data-speed="1000">{{$audio_count}}</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">Songs</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a style="width:50px;" href="#" class="white nicdark_btn nicdark_bg_violet nicdark_bg_violetdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="{{$quiz_count}}" data-speed="1000">{{$quiz_count}}</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">Question Bundules</h4>
                </div>
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>
            

<!--end section-->



</section>




<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space10"></div>

        <div class="grid grid_6">  
            
            <!--TABLE-->
            <div class="nicdark_textevidence nicdark_bg_grey nicdark_shadow nicdark_radius left overflow_scroll">   
                <table class="nicdark_table extrabig nicdark_bg_yellow nicdark_radius ">
                    <thead class="nicdark_border_yellow">
                        <tr>
                            <td class="white"><h4 class="white">VIDEOS</h4></td>
                            <td class="nicdark_width_percentage1"></td>
                        </tr>
                    </thead>
                    <tbody class="nicdark_bg_grey nicdark_border_grey">

                    <?php 
 
                if(!empty($video_data)){
                    for($i=0;$i<$video_count;$i++) {?>
                        <tr>
                            <td><p>{{$video_data[$i][1]}}</p></td>
                            <td><button type="button" onclick="delete_v({{$video_data[$i][0]}})" class="btn btn-danger">REMOVE</button></td>
                        </tr>
                       <?php }}?>
                       
                    </tbody>
                </table>
            </div> 
            <!--TABLE-->

        </div>


        <div class="grid grid_6">  
            
            <!--TABLE-->
            <div class="nicdark_textevidence nicdark_bg_grey nicdark_shadow nicdark_radius left overflow_scroll">   
                <table class="nicdark_table extrabig nicdark_bg_yellow nicdark_radius ">
                    <thead class="nicdark_border_yellow">
                        <tr>
                            <td class="white"><h4 class="white">STORIES</h4></td>
                            <td class="nicdark_width_percentage1"></td>
                        </tr>
                    </thead>
                    <tbody class="nicdark_bg_grey nicdark_border_grey">
                       <?php

                    if(!empty($story_data)){
                        for($i=0;$i<$story_count;$i++) {?>
                        <tr>
                            <td><p>{{$story_data[$i][1]}}</p></td>
                            <td><button type="submit"  onclick="delete_s({{$story_data[$i][0]}})" class="btn btn-danger">REMOVE</button></td>

                        </tr>
                       <?php }}?>
                    </tbody>
                </table>
            </div> 
            <!--TABLE-->

        </div>



         <div class="grid grid_6">  
            
            <!--TABLE-->
            <div class="nicdark_textevidence nicdark_bg_grey nicdark_shadow nicdark_radius left overflow_scroll">   
                <table class="nicdark_table extrabig nicdark_bg_yellow nicdark_radius ">
                    <thead class="nicdark_border_yellow">
                        <tr>
                            <td class="white"><h4 class="white">SONGS</h4></td>
                            <td class="nicdark_width_percentage1"></td>
                        </tr>
                    </thead>
                    <tbody class="nicdark_bg_grey nicdark_border_grey">
                       <?php

                    if(!empty($audio_data)){
                        for($i=0;$i<$audio_count;$i++) {?>
                        <tr>
                            <td><p>{{$audio_data[$i][1]}}</p></td>
                            <td><button type="submit"  onclick="delete_s({{$audio_data[$i][0]}})" class="btn btn-danger">REMOVE</button></td>

                        </tr>
                       <?php }}?>
                    </tbody>
                </table>
            </div> 
            <!--TABLE-->




        </div>


         <div class="grid grid_6">  
            
            <!--TABLE-->
            <div class="nicdark_textevidence nicdark_bg_grey nicdark_shadow nicdark_radius left overflow_scroll">   
                <table class="nicdark_table extrabig nicdark_bg_yellow nicdark_radius ">
                    <thead class="nicdark_border_yellow">
                        <tr>
                            <td class="white"><h4 class="white">QUESTIONS</h4></td>
                            <td class="nicdark_width_percentage1"></td>
                        </tr>
                    </thead>
                    <tbody class="nicdark_bg_grey nicdark_border_grey">
                       <?php

                    if(!empty($quiz_data)){
                        for($i=0;$i<$quiz_count;$i++) {?>
                        <tr>
                            <td><p>Question bundle {{$quiz_data[$i][0]}}</p></td>
                            <td><button type="submit"  onclick="delete_q({{$quiz_data[$i][0]}})" class="btn btn-danger">REMOVE</button></td>

                        </tr>
                       <?php }}?>
                    </tbody>
                </table>
            </div> 
            <!--TABLE-->




        </div>




        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
    <div class="content" style="padding-left: 70%;padding-bottom: 1%">
    
      
     <a href="make_schedule" type = "button" class = "btn btn-success">Create Schedule</a>
    </div>    
</section>
<!--end section-->



<script type="text/javascript">



    
function delete_v(id){




   $.ajax({
                type: "get",
                url: "delete_col_v",
                data:{
                    id:id
                   
                },
           
                success: function (data) {
                  
                 if(data== 1){
                swal("successfully!", "Video Removed!", "success");
                        setTimeout(function(){
                        
                     
                       location.reload();
                       //window.location.href = "veca";
                      

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
</script>
<script type="text/javascript">

function delete_s(id){



  $.ajax({
                type: "get",
                url: "delete_col_s",
                data:{
                    id:id
                 
                },
           
                success: function (data) {
                 if(data== 1){
                swal("successfully!", "Story Removed!", "success");
                        setTimeout(function(){
                        
                       
                       location.reload();
                       //window.location.href = "veca";
                      

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


</script>

<script type="text/javascript">

function delete_s(id){



  $.ajax({
                type: "get",
                url: "delete_col_audio",
                data:{
                    id:id
                 
                },
           
                success: function (data) {
                 if(data== 1){
                swal("successfully!", "Story Removed!", "success");
                        setTimeout(function(){
                        
                       
                       location.reload();
                       //window.location.href = "veca";
                      

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


</script>



<script type="text/javascript">

function delete_q(id){



  $.ajax({
                type: "get",
                url: "delete_col_quiz",
                data:{
                    id:id
                 
                },
           
                success: function (data) {
                 if(data== 1){
                swal("successfully!", "Question bundle Removed!", "success");
                        setTimeout(function(){
                        
                       
                       location.reload();
                       //window.location.href = "veca";
                      

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


</script>








 @endsection
