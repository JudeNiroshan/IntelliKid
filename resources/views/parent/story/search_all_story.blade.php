@extends('parent_master')


@section('title')

@endsection


@section('content')





<br><br><br><br><br><br>



    <div class="grid grid_8" style="margin-left:20%">



<br>
          <form action="search_all_story_box" method="get">
        <input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" id="search" name="search"  type="text"  placeholder="SEARCH"  >
        
            <div style="padding-left:100%;padding-top:-10%;margin-bottom:20%">

                <button type="submit" class="btn btn-info">SEARCH</button>
                
</div>
</form>

              </div> 
                  
                    </div>
                  

 @if(!empty($stories)) 
    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

@foreach($stories as $data)
<a href="show_story?id={{$data->storyid}}">
        <div class="grid grid_6">
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">

                <div class="nicdark_textevidence nicdark_bg_blue nicdark_radius nicdark_width_percentage50 center nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <div class="nicdark_space30"></div>
                    
                      
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <h4 class="white subtitle"></h4>

                        <div class="nicdark_space30"></div>                        
                
                    </div>
                    <?php 
                        
                        $path = $data->path;
                        $l = strlen($path);
                        $path = substr($path,34,$l);
                    ?>

                 
                    <i class=" nicdark_iconbg left big blue"><img alt=""  class="nicdark_radius_left nicdark_opacity" src="{{$data->path}}"></i>
                </div>
                
                <div class="nicdark_textevidence nicdark_width_percentage50 nicdark_width100_responsive">
                    <div class="nicdark_margin20">
                    
                        <div class="nicdark_space20"></div>
                        <h2 class="grey">{{$data->name}}</h2>                        
                        <div class="nicdark_space20"></div>
                        <p>Lorem ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet, ipsum dolor sit amet.
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