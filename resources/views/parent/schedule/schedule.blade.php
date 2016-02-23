@extends('parent_master')


@section('title')

@endsection



@section('content')

 <link rel="stylesheet" href="{{ URL::asset('assets/parent/profile/css/bootstrap.min.css')}}">



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
            <h1 class="subtitle greydark">SCHEDULE</h1>
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
                    <a style="width:50px;" href="#" class="white nicdark_btn nicdark_bg_blue nicdark_bg_bluedark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="{{$video_count[0]->vcount}}" data-speed="1000">{{$video_count[0]->vcount}}</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">VIDEO</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a style="width:50px;" href="#" class="white nicdark_btn nicdark_bg_green nicdark_bg_greendark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="{{$story_count[0]->scount}}" data-speed="1000">{{$story_count[0]->scount}}</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">STORES</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a style="width:50px;" href="#" class="white nicdark_btn nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="0" data-speed="1000">0</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">LESSONS</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a style="width:50px;" href="#" class="white nicdark_btn nicdark_bg_violet nicdark_bg_violetdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="0" data-speed="1000">0</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">ACTIVITIES</h4>
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

                    @foreach($videos as $v)
                        <tr>
                            <td><p>{{$v->title}}</p></td>
                            <td><button type="button" onclick="delete_v({{$v->id}})" class="btn btn-danger">REMOVE</button></td>
                        </tr>
                        @endforeach
                       
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
                       @foreach($story as $v)
                        <tr>
                            <td><p>{{$v->title}}</p></td>
                            <td><button type="submit"  onclick="delete_s({{$v->id}})" class="btn btn-danger">REMOVE</button></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
            <!--TABLE-->




        </div>

        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->



<script type="text/javascript">
    
function delete_v(id){
alert(id);


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







 @endsection
