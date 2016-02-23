@extends('parent_master')


@section('title')

@endsection



@section('content')

<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-single-teacher-1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle"></h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white"></h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"></div>
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>
     
</section>
<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        <div class="grid grid_4">
        @if(!empty($data))
            <img alt="" class="nicdark_radius nicdark_opacity" style="float:left;width:100%;" src="{{$data[0]->img_path}}">
        @else
        <script type="text/javascript">
         window.location.href = "home";
        </script>
        @endif
            <div class="nicdark_space10"></div>

            <div class="nicdark_focus center">
                <div class="nicdark_margin10">
                    <a title="YOUTUBE" href="#" class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_red nicdark_shadow small nicdark_radius white"><i class="icon-youtube-play"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a title="DRIBBBLE" href="#" class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_violet nicdark_shadow small nicdark_radius white"><i class="icon-dribbble-1"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a title="TWITTER" href="#" class="nicdark_press nicdark_tooltip right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white"><i class="icon-twitter-1"></i></a>
                </div>
            </div>
        </div>

        <div class="grid grid_4">
            <h3 class="subtitle greydark">ABOUT ME</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et quam blandit, vehicula leo id, varius mi. Duis ultricies lectus ut pellentesque hendrerit. Duis consequat euismod leo, ac aliquam eros vitae.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et quam blandit, vehicula leo id, varius mi. Duis ultricies lectus ut pellentesque hendrerit. Duis consequat euismod leo, ac aliquam eros vitae.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et quam blandit, vehicula leo id, varius mi. Duis ultricies lectus ut pellentesque hendrerit. Duis consequat euismod leo, ac aliquam eros vitae.</p>
        </div>


        <div class="grid grid_4">
            <h3 class="subtitle greydark">MY SKILLS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>
            
            <div class="nicdark_progressbar nicdark_bg_grey nicdark_radius nicdark_shadow">
                <h5 class="nicdark_progressbar_title nicdark_bg_yellow nicdark_bg_yellowdark_hover nicdark_radius nicdark_shadow fade-left animate1 animated fadeInLeft" style="width:95%">
                    <span class="white nicdark_size_big"><i class="icon-brush"></i>&nbsp;&nbsp;&nbsp;PAINT · 95%</span>
                </h5>
            </div>

            <div class="nicdark_space20"></div>

            <div class="nicdark_progressbar nicdark_bg_grey nicdark_radius nicdark_shadow">
                <h5 class="nicdark_progressbar_title nicdark_bg_blue nicdark_bg_bluedark_hover nicdark_radius nicdark_shadow fade-left animate2 animated fadeInLeft" style="width:85%">
                    <span class="white nicdark_size_big"><i class="icon-pencil-1"></i>&nbsp;&nbsp;&nbsp;DRAWING · 85%</span>
                </h5>
            </div>

            <div class="nicdark_space20"></div>

            <div class="nicdark_progressbar nicdark_bg_grey nicdark_radius nicdark_shadow">
                <h5 class="nicdark_progressbar_title nicdark_bg_green nicdark_bg_greendark_hover nicdark_radius nicdark_shadow fade-left animate3 animated fadeInLeft" style="width:75%">
                    <span class="white nicdark_size_big"><i class="icon-puzzle"></i>&nbsp;&nbsp;&nbsp;GRAPHIC · 75%</span>
                </h5>
            </div>
            
            <div class="nicdark_space20"></div>

            <div class="nicdark_progressbar nicdark_bg_grey nicdark_radius nicdark_shadow">
                <h5 class="nicdark_progressbar_title nicdark_bg_orange nicdark_radius nicdark_bg_orangedark_hover nicdark_shadow fade-left animate4 animated fadeInLeft" style="width:65%">
                    <span class="white nicdark_size_big"><i class="icon-dribbble"></i>&nbsp;&nbsp;&nbsp;QUIZ · 65%</span>
                </h5>
            </div>

            <div class="nicdark_space20"></div>

            <div class="nicdark_progressbar nicdark_bg_grey nicdark_radius nicdark_shadow">
                <h5 class="nicdark_progressbar_title nicdark_bg_red nicdark_bg_reddark_hover nicdark_radius nicdark_shadow fade-left animate4 animated fadeInLeft" style="width:55%">
                    <span class="white nicdark_size_big"><i class="icon-music-outline"></i>&nbsp;&nbsp;&nbsp;MUSIC · 55%</span>
                </h5>
            </div>    

        </div>

        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->


<!--start section-->
<section id="nicdark_parallax_text" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img-single-teacher-2">

    <div class="nicdark_filter blue">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
                <h2 class="white subtitle center">Art is not a handicraft, it is the transmission of feeling the artist has experienced.</h2>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider big center"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space20"></div>
                <h1 class="signature white center">Nikolaevich Tolstoy</h1>                
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->

    </div>
     
</section>
<!--end section-->


<!--start section-->
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        <div class="grid grid_4">
            <h3 class="subtitle greydark">MY VIDEOS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>
            <!--start section-->
<section class="nicdark_section">

	<div class="tp-banner-container">
		<div class="nicdark_slide1" >
			
			<ul>

				<!-- SLIDE  -->
				<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7">
							<!-- MAIN IMAGE -->
							<img src="{{ URL::asset('assets/baby/img/slide/img3.jpg')}}"  alt="video_forest"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-fade fadeout fullscreenvideo"
								data-x="0"
								data-y="0"
								data-speed="1000"
								data-start="1100"
								data-easing="Power4.easeOut"
								data-endspeed="1500"
								data-endeasing="Power4.easeIn"
								data-autoplay="false"
								data-autoplayonlyfirsttime="false"
								data-nextslideatend="true"
								data-forceCover="1"
								data-aspectratio="16:9"
								data-forcerewind="on"
								style="z-index: 2">


								 <video class="video-js vjs-default-skin" preload="none" width="100%" height="100%"
								poster="{{ URL::asset('assets/baby/img/slide/img10.jpg')}}" data-setup="{}">
								<source src="{{ URL::asset('assets/baby/img/videos/video1.mp4')}}" type='video/mp4' />

								</video>

							</div>
				</li>

			</ul>
			
		</div>
	</div>

</section>
<!--end section-->        </div>

        <div class="grid grid_4">
            <h3 class="subtitle greydark">MY LESSONS</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space20"></div>
            
            <ul class="nicdark_list border">    
                <li class="nicdark_border_grey">
                    <p>DRAWING LESSON IN ALL CLASSES <a href="#" class="nicdark_btn nicdark_bg_blue extrasmall nicdark_radius nicdark_shadow white right">9:00</a></p> 
                    <div class="nicdark_space15"></div>
                </li>

                <li class="nicdark_border_grey">
                    <div class="nicdark_space15"></div>
                    <p>BASIC NICE ART VIDEOS <a href="#" class="nicdark_btn nicdark_bg_violet extrasmall nicdark_radius nicdark_shadow white right">11:00</a></p>   
                    <div class="nicdark_space15"></div>
                </li>
                    
                <li class="nicdark_border_grey">
                    <div class="nicdark_space15"></div>
                    <p>SOME WATER COLOR PRACTICE <a href="#" class="nicdark_btn nicdark_bg_blue extrasmall nicdark_radius nicdark_shadow white right">14:00</a></p>   
                    <div class="nicdark_space15"></div>
                </li>

                <li class="nicdark_border_grey">
                    <div class="nicdark_space15"></div>
                    <p>WONDERFUL STENCIL TEST PAINTING <a href="#" class="nicdark_btn nicdark_bg_violet extrasmall nicdark_radius nicdark_shadow white right">15:00</a></p>    
                    <div class="nicdark_space15"></div>
                </li>

                <li class="nicdark_border_grey">
                    <div class="nicdark_space15"></div>
                    <p>COLOR WITH FRUIT AND VEGETABLES <a href="#" class="nicdark_btn nicdark_bg_blue extrasmall nicdark_radius nicdark_shadow white right">17:00</a></p>    
                </li> 

            </ul>

        </div>


        
        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->

<!--start section-->
<div id="nicdark_parallax_2_btns" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

            
            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->
            
</div>
<!--end section-->
 @endsection