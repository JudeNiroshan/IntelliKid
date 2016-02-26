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
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;}body{line-height:1;}ol,ul{list-style:none;}blockquote,q{quotes:none;}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}table{border-collapse:collapse;border-spacing:0;}body,html{height:100%;}body{color:#fff;margin:0 auto;font:1em/1.3em Montserrat,Helvetica,sans-serif;}.clearfix{clear:both;}.container{ background: url(https://pcbx.us/bexy.jpg);padding-top:20px;height:100%;width:100%;text-align:center;background-color:#ddd;}h1{margin:40px 0;font-size:40px;line-height:40px;font-weight:bold;text-shadow:0px 1px 1px #888;}a{text-decoration:none;color:#fff;margin:0 10px;}.btn{box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;position:relative;display:inline-block;overflow:hidden;height:53px;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;line-height:30px;font-size:16px;font-weight:bold;text-shadow:0px 1px 1px #888;}.btn span.icon,.btn span.title{display:block;position:relative;line-height:50px;padding:0 30px;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;}.btn span.left{float:left;border-radius:6px 0 0 6px;-moz-border-radius:6px 0 0 6px;-webkit-border-radius:6px 0 0 6px;}.btn span.right{float:right;border-radius:0 6px 6px 0;-moz-border-radius:0 6px 6px 0;-webkit-border-radius:0 6px 6px 0;}.btn span.icon{font-size:23px;background-color:#00967f;-webkit-box-shadow:0 3px 0 0 #007261;box-shadow:0 3px 0 0 #007261;text-shadow:0px 1px 1px #888;}.btn span.title{-webkit-box-shadow:0 3px 0 0 #00ae94;box-shadow:0 3px 0 0 #00ae94;background-color:#00cdae;}.btn span.arrow-left,.btn span.arrow-right{position:absolute;width:0;height:0;border-top:25px solid transparent;border-bottom:25px solid transparent;-webkit-transition:all .15s;-transition:all .15s;-webkit-transition-property:left,right;transition-property:left,right;}.btn.left span.arrow-left{right:0;-webkit-box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;border-right:10px solid #00cdae;}.btn.right span.arrow-left{right:0;-webkit-box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;border-right:10px solid #00967f;}.btn.left span.arrow-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;border-left:10px solid #00967f;}.btn.right span.arrow-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;border-left:10px solid #00cdae;}.btn span.slant-left,.btn span.slant-right{position:absolute;width:0;height:0;border-top:0 solid transparent;border-bottom:50px solid transparent;-webkit-transition:all .15s;-transition:all .15s;-webkit-transition-property:left,right;transition-property:left,right;}.btn.left span.slant-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;border-left:10px solid #00967f;}.btn.right span.slant-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;border-left:10px solid #00cdae;}.btn.left span.slant-left{right:0;-webkit-box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;border-right:10px solid #00cdae;}.btn.right span.slant-left{right:0;-webkit-box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;border-right:10px solid #00967f;}.btn:active,.btn.active{height:51px;}.btn:hover{}.btn:hover span.arrow-left{right:10px;}.btn:hover span.arrow-right{left:10px;}.btn:hover span.slant-left{right:10px;}.btn:hover span.slant-right{left:10px;}.btn-small{height:30px;font-size:12px;line-height:10px;}a.btn-small span.btn{height:30px;}



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
                    <a style="width:50px;" href="#" class="white nicdark_btn nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="0" data-speed="1000">0</a>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">Songs</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a style="width:50px;" href="#" class="white nicdark_btn nicdark_bg_violet nicdark_bg_violetdark_hover nicdark_transition nicdark_shadow extrasize nicdark_radius_circle subtitle nicdark_counter" data-to="0" data-speed="1000">0</a>
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

        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
    <div class="content" style="padding-left: 70%;padding-bottom: 1%">
    
      
      <button  class="btn right">
        <span class="left title"><span class="arrow-left"></span>Make a Schedule</span>
        <span class="right icon icon-gear"></span>
      </button>
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







 @endsection
