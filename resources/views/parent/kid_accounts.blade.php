@extends('parent_master')


@section('title')

@endsection



@section('content')
 


<!--start section-->

<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-teachers-1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">KIDS ACCOUNTS</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white"></h3>
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
<?php 

$orange = "nicdark_bg_orange ";
$blue   = "nicdark_bg_blue";
$yellow = "nicdark_bg_yellow";
$violet = "nicdark_bg_violet";

$colors = array("nicdark_bg_orange", "nicdark_bg_blue", "nicdark_bg_yellow","nicdark_bg_violet");
$i=0;

?>



<!--end section--><!--start section-->
<section class="nicdark_section">
  <br>
  <br>

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>
@if(!empty($data))

        @foreach($data as $dat)

        <div class="grid grid_6">
                    
            <div class="nicdark_archive1 {{$colors[$i++]}} nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_width_percentage40 nicdark_width150_responsive">
                    <a href=""><img alt=""  class="nicdark_radius_left nicdark_opacity" src="{{ $dat->img_path}}"></a>
                </div>

                
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <h4 class="white"><a class="white" href="single-teacher.html"> NICK-NAME:{{$dat->nik_name}}</a></h4>                        
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">NAME:{{$dat->f_name}}{{$dat->l_name}}</p>
                         <p class="white">AGE:{{$dat->age}}</p>
                         <p class="white">BIO:{{$dat->bio_data}}</p>
                        <div class="nicdark_space20"></div>
                   

                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_width_percentage10 nicdark_displaynone_responsive">
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_space5"></div>
                    <a title="EDIT" href="child_edit?id={{$dat->c_id}}" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-download-outline"></i></a>
                    <div class="nicdark_space20"></div>
                   
                    <a title="PROFILE" href="kid_profile?id={{$dat->c_id}}" class="nicdark_rotate nicdark_tooltip nicdark_btn_icon small nicdark_bg_orangedark nicdark_radius_circle white"><i class="icon-attach-outline"></i></a>
                    <div class="nicdark_space20"></div>
                </div>

            </div>

        </div>

        <?php 
        if($i==4){
            $i=0;
        }
        ?>
        @endforeach

       @else

      
         <h1 >NO ACCOUNTS</h1>

       @endif
     


        <div class="nicdark_space50"></div>


    </div>
    <!--end nicdark_container-->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

            
</section>



@endsection