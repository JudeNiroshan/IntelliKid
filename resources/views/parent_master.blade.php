
@if ((isset( $_SESSION['USERID']))==false   ) 

<script> 
    location.href = "login";
</script>


@endif






@if(isset($_SESSION['STATUS']) )
    @if($_SESSION['STATUS']== "PENDING")

<script> 
    location.href = "email_verification_notiece";
</script>
@endif
@endif



<!DOCTYPE html>
<html class="no-js before-run" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="HNBGI Sales Force Backend Application">
        <meta name="author" content="Nilesh Jayanandana">
        <meta name="robots" content="noindex, nofollow">

        <title>Intellikid</title>

        <link rel="shortcut icon" href="{{URL::asset('assets/parent/images/logo1.png') }}" type="image/png" sizes="48x48"/>

        <link rel='stylesheet' href="{{ URL::asset('assets/baby/css/nicdark_style.css')}}">
        <link rel='stylesheet' href="{{ URL::asset('assets/baby/css/nicdark_responsive.css')}}">
        <link rel='stylesheet' href="{{ URL::asset('assets/baby/css/revslider/settings.css')}}">


         <link rel='stylesheet' href="{{ URL::asset('assets/baby/css/animate.css')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/baby/css/fontello.css')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/baby/css/magnific-popup.css')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/baby/css/nicdark_menu.css')}}">
        
         <link rel='stylesheet' href="{{ URL::asset('assets/baby/css/nicdark_shortcodes.css')}}">
       
      
         <link rel='stylesheet' href="{{ URL::asset('assets/baby/font/fontello/fontello.svg')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/baby/font/fontello/fontello.ttf')}}">





        <!-- Stylesheets -->

    

        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/animsition/animsition.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/asscrollable/asScrollable.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/switchery/switchery.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/intro-js/introjs.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/slidepanel/slidePanel.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/flag-icon-css/flag-icon.css')}}">
        
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/datatables-bootstrap/dataTables.bootstrap.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/profile/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/datatables-fixedheader/dataTables.fixedHeader.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/datatables-responsive/dataTables.responsive.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/asspinner/asSpinner.css')}}">

        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/footable/footable.core.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/select2/select2.css')}}">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/fonts/web-icons/web-icons.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/fonts/brand-icons/brand-icons.min.css')}}">
        <link rel='stylesheet' href="{{ URL::asset('assets/parent/css.css')}}">

     
        <link rel='stylesheet' href="{{ URL::asset('assets/parent/vendor/c3/c3.css')}}">
        <link rel='stylesheet' href="{{ URL::asset('assets/parent/vendor/sparkline/sparkline.css')}}">
        <link rel='stylesheet' href="{{ URL::asset('assets/parent/vendor/morris-js/morris.css')}}">

        <link rel='stylesheet' href="{{ URL::asset('assets/parent/css/../fonts/font-awesome/font-awesome.css')}}">
        <link rel='stylesheet' href="{{ URL::asset('assets/parent/vendor/typeahead-js/typeahead.css')}}">

        <link rel='stylesheet' href="{{ URL::asset('assets/parent/vendor/toastr/toastr.css')}}">
        <link rel='stylesheet' href="{{ URL::asset('assets/parent/vendor/bootstrap-treeview/bootstrap-treeview.css')}}">
        <link rel='stylesheet' href="{{ URL::asset('assets/parent/vendor/bootstrap-sweetalert/sweet-alert.css')}}">
        <link rel='stylesheet' href="{{ URL::asset('assets/parent/vendor/chartist-js/chartist.css')}}">
        <link rel='stylesheet' href="{{ URL::asset('assets/parent/css/widgets/chart.css')}}">


<!-- new theme -->



       


</head>

<body id="start_nicdark_framework">

<div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_clearfix"><div class="nicdark_overlay"></div>


<!--START SIDEBAR-->
<div class="nicdark_right_sidebar nicdark_bg_greydark nicdark_nicescrool">

    <a class="nicdark_right_sidebar_btn_close nicdark_btn_icon small nicdark_bg_red nicdark_radius white nicdark_absolute_right10 nicdark_shadow"><i class="icon-power"></i></a>
    
    <!--start CART-->
    <div class="nicdark_margin020">
        <div class="nicdark_space20"></div>
        <h4 class="white">YOUR CHAT ROOM</h4>
        <div class="nicdark_space20"></div>
        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
    </div>
  











</div>
<!--END SIDEBAR-->
<div class="nicdark_section nicdark_navigation fade-down">
   








    <div class="nicdark_menu_boxed">


        <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_6">
                    <div class="nicdark_focus">
                     <h6 class="white">
                       <i class="icon-plus-outline"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax" href="#">COLLECTOR</a>
                       </h6>
                    </div>
                </div>
                  <div class="grid grid_6 right">
                    <div class="nicdark_focus right">
                        <h6 class="white">

                      
                           
                    @if ((isset( $_SESSION['USERID']))==true   ) 

                           </i>&nbsp;&nbsp;<?php echo $_SESSION['NAME'];?>
                    @endif
                          
                        </h6>
                    </div>
                </div>

                <!--info window for languages-->
                <div id="nicdark_window" class="nicdark_bg_white nicdark_radius zoom-anim-dialog mfp-hide">
                    

                   
                </div>
                <!--end window-->

            </div>
        </div>

        <div class="nicdark_space3 nicdark_bg_gradient"></div>
                    
        <div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom">
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_12 percentage">
                        
                        <div class="nicdark_space20"></div>

                        <div class="nicdark_logo nicdark_marginleft10" style="margin-top:-2%">
                            <a href=""><img alt="" src="{{ URL::asset('assets/images/logoto.png')}}" height="60" width="0"></a>
                        </div>

                        <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"><i class="icon-mic-outline"></i></a>
                        
                        <nav>
                            <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                                <li class="orange">
                                    <a href="default_home">HOME</a>
                                    
                                </li>
                                <li class="red">
                                    <a href="#">ACCOUNTS</a>
                                    <ul class="sub-menu">
                                    <li><a href="profile">My Account</a></li>
                                     <li><a href="new_child">Create Child Accounts</a></li>
                                        <li><a href="veca">Created Child Accounts</a></li>
                                      
                                     
                                    </ul>
                                </li>
                                <li class="blue">
                                    <a >CONTENT</a>
                                    <ul class="sub-menu">
                                        <li> <a href="videos">Videos</a></li>
                                        <li> <a href="stories">Story</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="yellow nicdark_megamenu">
                                    <a href="schedule">SCHEDULE</a>
                                    <ul class="sub-menu">
                                        <li class="mm_grid mm_grid_3">
                                            <a >Schedule content</a>
                                            <ul class="sub-menu">
                                                <li><a href="schedule">View and edit Content</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        <li class="mm_grid mm_grid_3">
                                            <a href="#">Delete Created Schedules</a>
                                            <ul class="sub-menu">
                                                <li><a href="delete_schedule">View and Delete</a></li>
                                              
                                            </ul>
                                        </li>
                                        <li class="mm_grid mm_grid_3">
                                            <a>Create Schedule</a>
                                            <ul class="sub-menu">
                                                <li><a href="make_schedule">New Schedule</a></li>
                                                <li><a href="past_schedule">Create from past records</a></li>
                                               
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <!--<li class="green">
                                    <a href="blog-masonry.html">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-masonry.html">Masonry Layout</a></li>
                                        <li>
                                            <a href="single-post-right-sidebar.html">Single Post</a>
                                            <ul class="sub-menu">
                                                <li><a href="single-post-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="single-post-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="single-post-full-width.html">Full Width</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="orange">
                                    <a href="events.html">SCHEDULER</a>
                                    <ul class="sub-menu">
                                        <li><a href="schedule">Schedule</a></li>
                                        <li><a href="make_schedule">Make Schedules</a></li>
                                    </ul>
                                </li>-->
                                <li class="grey">

                                    <a href=" logout">LOGOUT</a>
                                </li>
                            </ul>
                        </nav>
    
                        <div class="nicdark_space20"></div>

                </div>

            </div>
            <!--end container-->

        </div>
        <!--end header-->

    </div>

</div>

      
            @yield('title')

           
            @yield('content')

            @yield('js')




<!--start section-->
<div class="nicdark_section nicdark_bg_greydark2 nicdark_copyrightlogo">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
            <div class="nicdark_space20"></div>
            <p class="white"> 2016 <span class="grey">IntelliKid</span> <i class="icon-heart-filled red nicdark_zoom"></i></p>
        </div>


        <div class="grid grid_6">
            <div class="nicdark_focus right nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                <div class="nicdark_margin10">
                    <a href="#" class="nicdark_facebook nicdark_press right nicdark_btn_icon small nicdark_radius white"><i class="icon-facebook-1"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="#" class="nicdark_press right nicdark_btn_icon nicdark_bg_red nicdark_shadow small nicdark_radius white"><i class="icon-gplus"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="#" class="nicdark_press right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white"><i class="icon-twitter-1"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="#start_nicdark_framework" class="nicdark_zoom nicdark_internal_link right nicdark_btn_icon nicdark_bg_greydark2 small nicdark_radius white"><i class="icon-up-outline"></i></a>
                </div>
            </div>
        </div>

    </div>
    <!--end nicdark_container-->
            
</div>
<!--end section--> 





        <script src="{{ URL::asset('assets/baby/js/plugins/nicescrool/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/jquery/jquery.js') }}"></script>
        <!--<script src="{{ URL::asset('assets/vendor/bootstrap/bootstrap.js') }}"></script> -->
        <script src="{{ URL::asset('assets/vendor/animsition/jquery.animsition.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/asscroll/jquery-asScroll.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/asscrollable/jquery.asScrollable.all.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/ashoverscroll/jquery-asHoverScroll.js') }}"></script>

        <!-- Plugins -->
        <script src="{{ URL::asset('assets/vendor/switchery/switchery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/vendor/intro-js/intro.js') }}"></script> 


        <!-- Scripts -->
        <script src="{{ URL::asset('assets/js/core.js') }}"></script>
        <script src="{{ URL::asset('assets/js/site.js') }}"></script>

        <script src="{{ URL::asset('assets/js/sections/menu.js') }}"></script>
        <script src="{{ URL::asset('assets/js/sections/menubar.js') }}"></script>  
        <script src="{{ URL::asset('assets/js/sections/sidebar.js') }}"></script>

        <script src="{{ URL::asset('assets/js/configs/config-colors.js') }}"></script>
        <script src="{{ URL::asset('assets/js/configs/config-tour.js') }}"></script>



<!-- baby theme js-->
        <script src="{{ URL::asset('assets/baby/js/main/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/main/jquery-ui.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/main/excanvas.js') }}"></script>

        <script src="{{ URL::asset('assets/baby/js/plugins/inview/jquery.inview.min.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/plugins/revslider/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/plugins/revslider/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/plugins/menu/superfish.min.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/plugins/menu/tinynav.min.js') }}"></script>

        <script src="{{ URL::asset('assets/baby/js/plugins/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/plugins/mpopup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/plugins/scroolto/scroolto.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/plugins/nicescrool/jquery.nicescroll.min.js') }}"></script>

        <script src="{{ URL::asset('assets/baby/js/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/plugins/countto/jquery.countTo.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/plugins/countdown/jquery.countdown.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/settings.js') }}"></script>
      
       <!-- end of baby theme js-->




        <script src="{{ URL::asset('assets/parent/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/datatables-fixedheader/dataTables.fixedHeader.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/datatables-bootstrap/dataTables.bootstrap.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/datatables-tabletools/dataTables.tableTools.js') }}"></script>

        <script src="{{ URL::asset('assets/parent/js/components/asscrollable.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/components/animsition.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/components/slidepanel.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/components/switchery.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/components/material.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/select2/select2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/asspinner/jquery-asSpinner.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/components/asspinner.js') }}"></script> 
        <script src="{{ URL::asset('assets/parent/vendor/footable/footable.all.min.js') }}"></script>

        <script src="{{ URL::asset('assets/parent/vendor/d3/d3.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/c3/c3.min.js') }}"></script>

        <script src="{{ URL::asset('assets/parent/vendor/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/raphael/raphael-min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/morris-js/morris.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/screenfull/screenfull.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/typeahead-js/bloodhound.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/typeahead-js/typeahead.jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/chart-js/Chart.js') }}"></script>
    

        <script src="{{ URL::asset('assets/parent/vendor/toastr/toastr.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/bootstrap-treeview/bootstrap-treeview.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/bootstrap-sweetalert/sweet-alert.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/chartist-js/chartist.min.js') }}"></script>

    


<!-- new theme -->

<!--
        <script src="{{ URL::asset('assets/parent/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/plugins/jquery.flexslider.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/plugins/jquery.selectbox-0.1.3.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/plugins/jquery.magnific-popup.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/options/optionswitcher.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/custom.js') }}"></script>
        <script src="{{ URL::asset('assets/js/modernizr.custom.79639.js') }}"></script>

        <script src="{{ URL::asset('assets/dropdown/js/classie.js') }}"></script>
        <script src="{{ URL::asset('assets/dropdown/js/selectFx.js') }}"></script>
        <script src="{{ URL::asset('assets/js/modernizr.custom.79639.js') }}"></script>
        <script src="{{ URL::asset('assets/crop/dist/jquery.cropit.js') }}"></script>

           
           -->


     
       
       
       
     
       




        
       
      
       

        <script type="text/javascript">
  jQuery(document).ready(function() {


    //START SLIDE
    jQuery('.nicdark_slide1').show().revolution(
    {
      dottedOverlay:"none",
      delay:16000,
      startwidth:1170,
      startheight:650,
      hideThumbs:200,
      
      thumbWidth:100,
      thumbHeight:50,
      thumbAmount:5,
      
      navigationType:"none",
      navigationArrows:"solo",
      navigationStyle:"preview2",
      
      touchenabled:"on",
      onHoverStop:"on",
      
      swipe_velocity: 0.7,
      swipe_min_touches: 1,
      swipe_max_touches: 1,
      drag_block_vertical: false,
                  
      parallax:"mouse",
      parallaxBgFreeze:"on",
      parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                  
      keyboardNavigation:"off",
      
      navigationHAlign:"center",
      navigationVAlign:"bottom",
      navigationHOffset:0,
      navigationVOffset:20,

      soloArrowLeftHalign:"left",
      soloArrowLeftValign:"center",
      soloArrowLeftHOffset:20,
      soloArrowLeftVOffset:0,

      soloArrowRightHalign:"right",
      soloArrowRightValign:"center",
      soloArrowRightHOffset:20,
      soloArrowRightVOffset:0,
          
      shadow:0,
      fullWidth:"on",
      fullScreen:"off",

      spinner:"spinner4",
      
      stopLoop:"off",
      stopAfterLoops:-1,
      stopAtSlide:-1,

      shuffle:"off",
      
      autoHeight:"off",           
      forceFullWidth:"off",           
                  
      hideTimerBar: "on",         
                  
      hideThumbsOnMobile:"off",
      hideNavDelayOnMobile:1500,            
      hideBulletsOnMobile:"off",
      hideArrowsOnMobile:"off",
      hideThumbsUnderResolution:0,
      
      hideSliderAtLimit:0,
      hideCaptionAtLimit:0,
      hideAllCaptionAtLilmit:0,
      startWithSlide:0,
      videoJsPath:"rs-plugin/videojs/",
      fullScreenOffsetContainer: "" 
    });
    //END SLIDE
    
    

    //START PARALLAX SECTIONS
    $('#nicdark_parallax_big_image').parallax("50%", 0.3);
    $('#nicdark_parallax_2_btns').parallax("50%", 0.3);
    $('#nicdark_parallax_countdown').parallax("50%", 0.3);
    $('#nicdark_parallax_counter').parallax("50%", 0.3);
    //END PARALLAX SECTIONS

    

    //START COUNTDOWN GRID SECTION
    //variables
    var endDate = "June 06, 2015 10:30:00";
    var grid = "grid_3";
    //insert the class nicdark_displaynone in the var if you wnat to hide the visualization
    var display_years = "nicdark_displaynone";
    var display_days = "";
    var display_hours = "";
    var display_minutes = "";
    var display_seconds = "";
    //call
    $(".nicdark_countdown").countdown({
      date: endDate,
      render: function(data) {
        $(this.el).html("<div class=\"grid "+ grid +" "+ display_years +" \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.years, 4) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">YEARS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_days +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.days, 3) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">DAYS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_hours +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.hours, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white\">HOURS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_minutes +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.min, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white\">MINUTES</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_seconds +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.sec, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_violet small nicdark_shadow nicdark_radius white\">SECONDS</a><div class=\"nicdark_space5\"></div></div></div>");
      }
    });
    //END COUNTDOWN GRID SECTION

  });
</script>
<!--custom js-->



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49425562-7', 'auto');
  ga('send', 'pageview');

</script>
 
</body>

</html>