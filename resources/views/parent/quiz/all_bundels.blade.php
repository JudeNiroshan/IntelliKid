@extends('parent_master')


@section('title')

@endsection


@section('content')



<?php 



$colors = ["","nicdark_bg_blue","nicdark_bg_yellow","nicdark_bg_green","nicdark_bg_red"];
$i=1;
?>

<br><br><br><br><br><br>



    <div class="grid grid_8" style="margin-left:20%">



<br>
 <form action="search_all_quetion_box" method="get">
      <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" id="search" name="search"  type="text"  placeholder="SEARCH"  >
        
        <div style="padding-left:100%;padding-top:-10%;margin-bottom:20%">

              <button type="submit" class="btn btn-info">SEARCH</button>
                
        </div>
  </form>

     </div> 
                  
     </div>
                  
<?php
$k=1;

?>
 @if(!empty($quiz)) 
    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

@foreach($quiz as $data)


<a href="show_question?id={{$data->exam_id}}">
       
        <div class="grid grid_3">
                    
            <div class="nicdark_archive1 center {{$colors[$i]}} nicdark_shadow nicdark_radius">
                
                
                <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                    <h4 class="white nicdark_margin20">Question Bundle  {{$data->exam_id}}</h4>
                </div>


                <div style="background:url(assets/parent/img/prices/img{{$i}}.jpg); background-size:cover;" class="nicdark_archive1">
                    <div class="nicdark_filter blue">

                        <div class="nicdark_space40"></div>
                        
                        <h3 class="white subtitle"></h3>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <h4 class="white subtitle">Questions</h4>

                        <div class="nicdark_space40"></div>

                    </div>
                </div>

                <div class="nicdark_textevidence nicdark_bg_grey">
                    <div class="nicdark_margin20">
                        <ul class="nicdark_list border">


                           
                            <li class="nicdark_border_grey">
                                <p>Questions count : {{$data->count}}</p>
                                <div class="nicdark_space10"></div>
                            </li>
                          
                        </ul>
                    </div>
                </div>

                <a href="show_question?id={{$data->exam_id}}" class="white nicdark_btn {{$colors[$i]}}  medium nicdark_radius_bottom">BUTTON</a>

            </div>
        
        </div>

        </a>

        <?php

        $i++;
        $k++;
        if($i==4){

            $i=1;
        }
        ?>


@endforeach


        </div>




        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
            @else
<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space10"></div>

        <div class="grid grid_12 nicdark_bg_grey nicdark_shadow nicdark_radius" style="padding-left:25%">     
            <div class="nicdark_margin10">
           

                <div class="grid grid_0 percentage">
                    <div class="nicdark_margin12 nicdark_relative">
                        <a href="#" class="nicdark_btn_icon nicdark_bg_orange extrabig nicdark_shadow nicdark_radius_circle white nicdark_absolute nicdark_displaynone_ipadpotr"><i class="icon-download-outline"></i></a>
                        
                        <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                            <h4>NO MACHING SEARCH RESULTS FOUND</h4>                        
                            <div class="nicdark_space20"></div>
                            <p>Content not avilable</p>
                        </div>    
                    </div>
                </div>


            </div>
        </div>

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
                     <br>
                    
                    
</section>
<!--end section-->

    @endif
 
                  
   
<br>
<br>
<br> 
</section>
<!--end section-->
@endsection