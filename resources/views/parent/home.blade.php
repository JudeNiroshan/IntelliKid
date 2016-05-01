@extends('parent_master')


@section('title')

@endsection



@section('content')
<section class="nicdark_section">

	<div class="tp-banner-container">
		<div class="nicdark_slide1" >
			
			<ul>
				
				
				<!--start first-->
				<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="">
					<img src="{{ URL::asset('assets/baby/img/slide/img3.jpg')}}"  alt="" data-lazyload="{{ URL::asset('assets/baby/img/slide/img3.jpg')}}" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
				</li>
				<!--end first-->


				<!--start second-->
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on"  data-title="">
					<img src="{{ URL::asset('assets/baby/img/slide/img8.jpg')}}"  alt="" data-lazyload="{{ URL::asset('assets/baby/img/slide/img8.jpg')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
				</li>
				<!--end second-->

			</ul>
			
		</div>
	</div>

</section>
<!--end section--><!--start section-->
<section class="nicdark_section nicdark_margintop45_negative">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">
		
		<div class="grid grid_12 percentage nomargin">    
			<div class="nicdark_textevidence center">
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_blue nicdark_shadow nicdark_radius_left">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="veca">ACCOUNTS</a></h2>
			           </div>
			            <i class="nicdark_zoom  nicdark_iconbg left extrabig blue nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_yellow nicdark_shadow">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="schedule">CONTENT</a></h2>
			           </div>
			            <i class="nicdark_zoom  nicdark_iconbg left extrabig yellow nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_orange nicdark_shadow">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="make_schedule">NEW PROCESS</a></h2>
			           </div>
			            <i class="nicdark_zoom  nicdark_iconbg left extrabig orange nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_green nicdark_shadow nicdark_radius_right">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="past_schedule">CALENDER</a></h2>
			           </div>
			            <i class="nicdark_zoom nicdark_iconbg left extrabig green nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_space5"></div>
			</div>
		</div>

	</div>
    <!--end nicdark_container-->
     
</section>


<!--end section--><!--start section-->
<!--
<section class="nicdark_section">

    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">OUR ACTIVITIES</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">OUR BEST SERVICES FOR YOUR KIDS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <div class="grid grid_4 nicdark_relative">

            <div class="nicdark_btn_iconbg nicdark_bg_yellow nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-leaf-1 nicdark_iconbg left big white"></i> 
                </div>
            </div>
            
            <div class="nicdark_activity nicdark_marginleft100">
                <h4>CUSTOM FOOD</h4>                        
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
                <div class="nicdark_space20"></div>
            </div>
        
        </div>

        <div class="grid grid_4 nicdark_relative">
            
            <div class="nicdark_btn_iconbg nicdark_bg_orange nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-stopwatch nicdark_iconbg left big white"></i> 
                </div>
            </div>
            
            <div class="nicdark_activity nicdark_marginleft100">
                <h4>MANY SPORTS</h4>                        
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
                <div class="nicdark_space20"></div>
            </div>   
        
        </div>

        <div class="grid grid_4 nicdark_relative">
            
            <div class="nicdark_btn_iconbg nicdark_bg_green nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-cab nicdark_iconbg left big white"></i> 
                </div>
            </div>
            
            <div class="nicdark_activity nicdark_marginleft100">
                <h4>BUS SERVICE</h4>                        
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
                <div class="nicdark_space20"></div>
            </div>    
        
        </div>


        <div class="grid grid_4 nicdark_relative">

            <div class="nicdark_btn_iconbg nicdark_bg_blue nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-headphones-1 nicdark_iconbg left big white"></i> 
                </div>
            </div>
            
            <div class="nicdark_activity nicdark_marginleft100">
                <h4>MUSIC LESSON</h4>                        
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
            </div>
        
        </div>

        <div class="grid grid_4 nicdark_relative">
            
            <div class="nicdark_btn_iconbg nicdark_bg_violet nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-map nicdark_iconbg left big white"></i> 
                </div>
            </div>
            
            <div class="nicdark_activity nicdark_marginleft100">
                <h4>EXCURSIONS</h4>                        
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
            </div>   
        
        </div>

        <div class="grid grid_4 nicdark_relative">
            
            <div class="nicdark_btn_iconbg nicdark_bg_red nicdark_absolute extrabig nicdark_shadow nicdark_radius">
                <div>
                    <i class="icon-globe-2 nicdark_iconbg left big white"></i> 
                </div>
            </div>
            
            <div class="nicdark_activity nicdark_marginleft100">
                <h4>LANGUAGES</h4>                        
                <div class="nicdark_space20"></div>
                <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam.</p>
                <div class="nicdark_space20"></div>
                <a href="#" class="nicdark_btn grey"><i class="icon-right-open-outline"></i> More</a>
            </div>    
        
        </div>

        <div class="nicdark_space50"></div>

    </div>
  
</section>
-->







<!--end section--><!--start section-->
<!--
<div id="nicdark_parallax_2_btns" class="nicdark_section nicdark_imgparallax nicdark_parallax_img2">


  
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space40"></div>
        <div class="nicdark_space50"></div>

        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
        
        </div>
        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
           
        </div>

        <div class="nicdark_space40"></div>
        <div class="nicdark_space50"></div>

    </div>
  

            
</div>

<section class="nicdark_section">




-->




<?php 
    $color = array("nicdark_bg_green","nicdark_bg_blue","nicdark_bg_yellow","nicdark_bg_orange");
    $img = array("assets/baby/img/events/img1.jpg","assets/baby/img/events/img2.jpg","assets/baby/img/events/img3.jpg","assets/baby/img/events/img4.jpg");
    $i=0;
?>


    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 class="subtitle greydark">SHEDULE</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">SHEDULE ORDER</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>


       
@if(!empty($dates))
    @foreach($dates as $d)

       
        <div class="grid grid_3">
                    
            <!--archive1-->
            <div class="nicdark_archive1 {{$color[$i]}} nicdark_radius nicdark_shadow">

                <a href="single-event.html" class="nicdark_btn nicdark_bg_greydark white medium nicdark_radius nicdark_absolute_left">{{$d->s_date}}<br/><small></small></a>

                <img alt=""  src="{{$img[$i]}}">
                
                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20"></h4>
                </div>
                
                <div class="nicdark_margin20">
                   <!-- <h5 class="white"><i class="icon-pin-outline"></i> Central Park (NY)</h5>
                    <div class="nicdark_space10"></div>
                    <h5 class="white"><i class="icon-clock-1"></i> 9:00 To 14:00</h5>
                    <div class="nicdark_space20"></div>
                    <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    <div class="nicdark_space20"></div>
                    <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt rutrum.</p>
                    <div class="nicdark_space20"></div>
                    -->
                    <a href="edit_clander_data?pid={{$d->fk_parent_id}}&date={{$d->dueTime}}" class="nicdark_press nicdark_btn {{$color[$i]}}dark white nicdark_radius nicdark_shadow medium">CHECK IT</a>
                </div>

            </div>
            <!--archive1-->

        </div>

        <?php $i++;
        if($i==4){
            $i=0;
        }
        ?>

    @endforeach

    @else

   <div class="grid grid_12">
            
            <h3 class="subtitle grey">NO CREATED SHEDULE </h3>
            <div class="nicdark_space20"></div>
           
        </div>


@endif





        <div class="nicdark_space50"></div>

   </div>
   <!--end nicdark_container-->
            
</section>
<!--end section--><!--start section-->


<!--end section--><!--start section-->
<section id="nicdark_parallax_counter" class="nicdark_section nicdark_imgparallax nicdark_parallax_img1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>


            <div class="grid grid_3">
                
            </div>
            <div class="grid grid_3">
               
            </div>
            <div class="grid grid_3">
               
            </div>
            <div class="grid grid_3">
                
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>
            
</section>

<?php

$c = array("nicdark_bg_blue","nicdark_bg_green","nicdark_bg_violet","nicdark_bg_orange","nicdark_bg_red","nicdark_bg_yellow");

$cs = array("nicdark_bg_green","nicdark_bg_orange","nicdark_bg_blue","nicdark_bg_red","nicdark_bg_yellow","nicdark_bg_violet");
?>
<!--end section--><!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>

        <div class="grid grid_12">
            <h1 class="subtitle greydark">YOUR ALL SCHEDULED CONTENT</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">FOLLOW YOUR MOST IMPORTANT ITEMS</h3>
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

@if(empty($content_q) && empty($content_a) && empty($content_s) && empty($content_v))

   <div class="grid grid_2 nicdark_masonry_item quiz">
                <div class="nicdark_archive1 {{$cs[$indexs]}} nicdark_radius nicdark_shadow">
                    
                    <!--<a href="single-post-right-sidebar.html" class="nicdark_zoom nicdark_btn_icon nicdark_bg_blue nicdark_border_bluedark white medium nicdark_radius_circle nicdark_absolute_left"><i class="icon-link-outline"></i></a>
                    -->                 
                    <div class="nicdark_margin20">
                        <h4 class="white">NO ANY SCHEDULED CONTENT </h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white">Content not set</p>
                        <div class="nicdark_space20"></div>
                                              
                    </div>


                   
                    

                </div>
            </div>


@endif


           


        </div>
    
        <!--end nicdark_masonry_container-->

    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->






<!--start section-->
<section class="nicdark_section">


   
            
</section>
<!--end section--><!--end-->

<div class="nicdark_space3 nicdark_bg_gradient"></div>

<!--start section-->
<section class="nicdark_section nicdark_bg_greydark">

    <!--start nicdark_container-->
  
    <!--end nicdark_container-->
            
</section>
<!--end section-->




      


 </div>
    </div>
		
		
		
		

@endsection