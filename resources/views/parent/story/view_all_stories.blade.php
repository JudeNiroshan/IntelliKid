@extends('parent_master')


@section('title')

@endsection


@section('content')


<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img1">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">STORIES</h1>
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

<br>

<br>

<br>

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

@foreach($stories as $data)
<a href="show_story?id={{$data->st_id}}">
        <div class="grid grid_6">
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_bg_blue nicdark_radius nicdark_width_percentage50 center nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <div class="nicdark_space30"></div>
                    
                        <h1 class="white subtitle">{{$data->title}}</h1>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <h4 class="white subtitle"></h4>

                        <div class="nicdark_space30"></div>                        
                
                    </div>

                    <i class="icon-money-1 nicdark_iconbg left big blue"><img alt=""  class="nicdark_radius_left nicdark_opacity" src="{{ $data->img_path}}"></i>
                </div>
                
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <div class="nicdark_space20"></div>
                        <h2 class="grey">{{$data->title}}</h2>                        
                        <div class="nicdark_space20"></div>
                        <p>Lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>

                    </div>
                </div>

                <a href="#" class="nicdark_btn_icon small nicdark_bg_white nicdark_radius_circle nicdark_absolute_right nicdark_border_grey"></a>

            </div>
        </div>
        </a>

@endforeach


        </div>




        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
           
<br>
<br>
<br> 
</section>
<!--end section-->
@endsection