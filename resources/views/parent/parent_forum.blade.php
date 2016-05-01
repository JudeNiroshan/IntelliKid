<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
 
    <meta charset="utf-8">  
    
    <title>Forum</title> <!--insert your title here-->  
    <meta name="description" content="nicdark Framework"> <!--insert your description here-->  
    <meta name="author" content="nicdark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
    
    <!--START CSS--> 

    <!-- sweetalert CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/adminPage_assets/css/sweetalert.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/forum_style/css/nicdark_style.css') }}"> 
    <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/forum_style/css/nicdark_responsive.css') }}"> 

    <!--revslider-->
    <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/forum_style/css/revslider/settings.css') }}"> 

    <!--END CSS-->
    
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> <!-- font-family: 'Montserrat', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> <!-- font-family: 'Raleway', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'> <!-- font-family: 'Montez', cursive; -->

    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  
    
    <!--FAVICONS-->
    <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/forum_style/css/revslider/settings.css') }}"> 
    <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/forum_style/css/revslider/settings.css') }}"> 
    <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/forum_style/css/revslider/settings.css') }}"> 
    <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/forum_style/css/revslider/settings.css') }}"> 


    <link rel="shortcut icon" href="{{ URL::asset('assets/adminPage_assets/forum_style/img/favicon/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ URL::asset('assets/adminPage_assets/forum_style/img/favicon/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('assets/adminPage_assets/forum_style/img/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('assets/adminPage_assets/forum_style/img/favicon/apple-touch-icon-114x114.png') }}">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--END FAVICONS-->
    
    
</head>  
<body id="start_nicdark_framework">

<?php $path=URL::asset(''); ?>

<div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_clearfix"><div class="nicdark_overlay"></div>



<!--START SIDEBAR-->
<div class="nicdark_right_sidebar nicdark_bg_greydark nicdark_nicescrool">

    <a class="nicdark_right_sidebar_btn_close nicdark_btn_icon small nicdark_bg_red nicdark_radius white nicdark_absolute_right10 nicdark_shadow"><i class="icon-power"></i></a>
    
    <!--start CART-->
    <div class="nicdark_margin020">
        <div class="nicdark_space20"></div>
        <h4 class="white">YOUR CART</h4>
        <div class="nicdark_space20"></div>
        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
    </div>
    <div class="nicdark_textevidence">
        <div class="nicdark_margin20">
            <ul class="nicdark_list nicdark_relative">
                <li>
                    <img alt=""  class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width60" 
                                src="{{ URL::asset('assets/adminPage_assets/forum_style/img/woocommerce/small/img1.jpg') }}">
                    <div class="nicdark_activity nicdark_marginleft80">
                        <h5 class="grey subtitle">BOOK CHILDREN</h5>                        
                        <div class="nicdark_space10"></div>
                        <p>1 x $ 254,00</p>
                    </div>
                    <div class="nicdark_space30"></div>
                </li>
                <li>
                    <img alt=""  class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width60" 
                                 src="{{ URL::asset('assets/adminPage_assets/forum_style/img/woocommerce/small/img3.jpg') }}">
                    <div class="nicdark_activity nicdark_marginleft80">
                        <h5 class="grey subtitle">BOOK FOR KIDS</h5>                        
                        <div class="nicdark_space10"></div>
                        <p>1 x $ 254,00</p>
                    </div>
                    <div class="nicdark_space10"></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="nicdark_margin020">
        <h5 class="grey">SUBTOTAL: <span class="white subtitle">$ 754,00</span></h5>
        <div class="nicdark_space20"></div>
        <div class="nicdark_focus">
            <a href="#" class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white"><i class="icon-basket-1"></i>&nbsp;&nbsp;VIEW CART</a>
        </div>
    </div>
    <!--end CART-->

    <!--start FILTER-->
    <div class="nicdark_margin020">
        <div class="nicdark_space60"></div>
        <h4 class="white">FILTER PRICE</h4>
        <div class="nicdark_space20"></div>
        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
    </div>
    <div class="nicdark_margin020 nicdark_block">
        <div class="nicdark_space20"></div>
        <div class="nicdark_radius nicdark_bg_greydark2 nicdark_slider_range"></div>
        <div class="nicdark_space20"></div>
    </div>
    <div class="nicdark_margin020">
        <input class="nicdark_bg_greydark white subtitle small nicdark_padding0 nicdark_slider_amount" type="text">
        <div class="nicdark_space20"></div>
        <a href="#" class="nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white"><i class="icon-money-1"></i>&nbsp;&nbsp;FILTER</a>
    </div>
    <!--END FILTER-->

    <!--start PRODUCTS-->
    <div class="nicdark_margin020">
        <div class="nicdark_space60"></div>
        <h4 class="white">BEST BOOKS</h4>
        <div class="nicdark_space20"></div>
        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
    </div>
    <div class="nicdark_textevidence">
        <div class="nicdark_margin20">
            <ul class="nicdark_list nicdark_relative">
                <li>
                    <img alt=""  class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width60" 
                                    src="{{ URL::asset('assets/adminPage_assets/forum_style/img/woocommerce/small/img2.jpg') }}">
                    <div class="nicdark_activity nicdark_marginleft80">
                        <h5 class="grey subtitle">BOOK STUDENT</h5>                        
                        <div class="nicdark_space10"></div>
                        <p><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i class="icon-star-half-alt yellow"></i></p>
                    </div>
                    <div class="nicdark_space30"></div>
                </li>
                <li>
                    <img alt=""  class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width60" 
                                    src="{{ URL::asset('assets/adminPage_assets/forum_style/img/woocommerce/small/img4.jpg') }}">
                    <div class="nicdark_activity nicdark_marginleft80">
                        <h5 class="grey subtitle">BOOK EDUCATION</h5>                        
                        <div class="nicdark_space10"></div>
                        <p><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i class="icon-star-half-alt yellow"></i></p>
                    </div>
                    <div class="nicdark_space30"></div>
                </li>
                <li>
                    <img alt=""  class="nicdark_absolute nicdark_radius nicdark_opacity nicdark_width60" 
                                    src="{{ URL::asset('assets/adminPage_assets/forum_style/img/woocommerce/small/img1.jpg') }}">
                    <div class="nicdark_activity nicdark_marginleft80">
                        <h5 class="grey subtitle">BOOK PRIMARY</h5>                        
                        <div class="nicdark_space10"></div>
                        <p><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i class="icon-star yellow"></i><i class="icon-star-half-alt yellow"></i></p>
                    </div>
                    <div class="nicdark_space10"></div>
                </li>
            </ul>
        </div>
    </div>
    <!--end PRODUCTS-->

    <!--start SEARCH-->
    <div class="nicdark_margin020">
        <div class="nicdark_space40"></div>
        <h4 class="white">SEARCH YOUR BOOKS</h4>
        <div class="nicdark_space20"></div>
        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
    </div>
    <div class="nicdark_margin20">
        <input class="nicdark_bg_greydark2 nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="KEYWORD">
        <div class="nicdark_space20"></div>
        <a href="#" class="nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white"><i class="icon-search-outline"></i>&nbsp;&nbsp;SEARCH</a>
    </div>
    <!--end SEARCH-->

    <!--start TAGS-->
    <div class="nicdark_margin020">
        <div class="nicdark_space40"></div>
        <h4 class="white">PRODUCTS TAGS</h4>
        <div class="nicdark_space20"></div>
        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
    </div>
    <div class="nicdark_margin10">
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Baby</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Kids</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Baby</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Kids</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Baby</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Kids</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Baby</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Kids</a>
        <a href="#" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Teacher</a>
    </div>
    <!--end TAGS-->

</div>
<!--END SIDEBAR--><div class="nicdark_section nicdark_navigation fade-down">
    
    <div class="nicdark_menu_boxed">

        <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_6">
                    <div class="nicdark_focus">
                     <h6 class="white">
                      
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

                     <!--    <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right"><i class="icon-mic-outline"></i></a>
                         -->
                         
                        <nav>
                            <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                                <li class="orange">
                                    <a href="default_home">HOME</a>
                                    
                                </li>
                                <li class="red">
                                    <a href="">ACCOUNTS</a>
                                    <ul class="sub-menu">
                                    <!-- <li><a href="profile">My Account</a></li> -->
                                     <li><a href="new_child">Create Child Accounts</a></li>
                                        <li><a href="veca">Created Child Accounts</a></li>
                                      
                                     
                                    </ul>
                                </li>
                                <li class="blue">
                                    <a href="">CONTENT</a>
                                    <ul class="sub-menu">
                                        <li> <a href="videos">Videos</a></li>
                                        <li> <a href="stories">Story</a></li>
                                        <li> <a href="audio">Songs</a></li>
                                        <li> <a href="quiz">Quiz</a></li>

                                        
                                    </ul>
                                </li>
                                <li class="yellow nicdark_megamenu">
                                    <a href="#">SCHEDULE</a>
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
                                                <li><a href="past_schedule">View and Delete</a></li>
                                              
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
                                 <li class="blue">
                                    <a href="">FORUM</a>
                                    <ul class="sub-menu">
                                        <li> <a href="parent_forum">Forum</a></li>
                                       
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
<!--start-->
<!--start section-->
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">FORUM | ARTICLES</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white">RIGHT PLACE TO DISCUSS YOUR THOUGHTS</h3>
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
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        

        <!--sidebar-->
        <div class="grid grid_4">
            
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_yellow nicdark_radius_top">
                    <h4 class="white nicdark_margin20">Articles</h4>
                    <i class="icon-search-outline nicdark_iconbg right medium yellow"></i>
                </div>
                <div class="nicdark_margin20">
                    <ul class="nicdark_list border">
                    
                     <?php
                        $article_count = 1;
                      
                     ?>   
                     @foreach($article_details as $row) 
                   
                        <li class="nicdark_border_grey">
                                 <h5 class="subtitle greydark">{{$article_count.". "}}<a href="#"   
                                 onclick=<?php echo '"articleOnclick('.$row->id.')"';?>  style="text-decoration: none;">{{$row->title}}</a></h5>
                                 
                             <!-- <h5 class="subtitle greydark">{{$article_count.". "}}<a href="#"  data-toggle="modal" data-target="#pdfModal" style="text-decoration: none;">{{$row->title}}</a></h5>
                              -->
                        </li>
                        <?php $article_count++;?>
                    @endforeach

                </ul>
                </div>
            </div>

            <div class="nicdark_space20"></div>

            <!-- <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_orange nicdark_radius_top">
                    <h4 class="white nicdark_margin20">TAG</h4>
                    <i class="icon-tags-1 nicdark_iconbg right medium orange"></i>
                </div>
                <div class="nicdark_margin10">
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Baby</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Kids</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Baby</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Kids</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Baby</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Kids</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Baby</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Kids</a>
                    <a href="#" class="nicdark_btn nicdark_bg_grey2 small nicdark_shadow nicdark_radius grey subtitle nicdark_margin10">Teacher</a>
                </div>
            </div> -->

            <div class="nicdark_space20"></div>
            <!--LATEST POST-->            
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_violet nicdark_radius_top">
                    <h4 class="white nicdark_margin20">LATEST POSTS</h4>
                    <i class="icon-doc-1 nicdark_iconbg right medium violet"></i>
                </div>
                <?php $userID=104; ?>
                
                <ul class="nicdark_list border">
                

                @foreach($forumDetails as $row) 
                    <li class="nicdark_border_grey">
                        <div class="nicdark_margin20 nicdark_relative">
                            <img alt="" class="nicdark_absolute nicdark_radius" style="width:60px;" 
                                <?php echo 'src="'.$path.''.$row->img_path.'"';?> >
                                    
                            <div class="nicdark_activity nicdark_marginleft80">
                                <h5 class="grey">{{$row->title}}</h5>                        
                                <div class="nicdark_space10"></div>
                                <p><a href={{'parent_forum?id='.$row->fid.'&userid='.$userID}}>{{substr($row->description,0,35)}}...</a></p>
                            </div>
                        </div>
                    </li>
                @endforeach
                </ul>
            </div>
            <!-- END LATEST POST-->
            <div class="nicdark_space20"></div>
            <!--
                <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                    <div class="nicdark_textevidence nicdark_bg_blue nicdark_radius_top">
                        <h4 class="white nicdark_margin20">NEXT EVENTS</h4>
                        <i class="icon-calendar-1 nicdark_iconbg right medium blue"></i>
                    </div>
                    <ul class="nicdark_list border">
                            
                        <li class="nicdark_border_grey">
                            <div class="nicdark_margin20 nicdark_relative">
                                <div style="width:60px;" class="nicdark_absolute nicdark_activity center">    
                                    <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                                        <h2 class="white nicdark_margin5">21</h2>
                                    </div>
                                    <div class="nicdark_textevidence nicdark_bg_blue nicdark_radius_bottom">
                                        <h6 class="white nicdark_margin5">DEC</h6>
                                    </div>
                                </div>
                                <div class="nicdark_activity nicdark_marginleft80">
                                    <h5 class="grey">LOREM IPSUM</h5>                        
                                    <div class="nicdark_space10"></div>
                                    <p>Lorem ipsum dolor sit amet conse adip elit. Pellentesque tinci dolor sit.</p>
                                </div>
                            </div>
                        </li>

                        <li class="nicdark_border_grey">
                            <div class="nicdark_margin20 nicdark_relative">
                                <div style="width:60px;" class="nicdark_absolute nicdark_activity center">    
                                    <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                                        <h2 class="white nicdark_margin5">21</h2>
                                    </div>
                                    <div class="nicdark_textevidence nicdark_bg_blue nicdark_radius_bottom">
                                        <h6 class="white nicdark_margin5">DEC</h6>
                                    </div>
                                </div>
                                <div class="nicdark_activity nicdark_marginleft80">
                                    <h5 class="grey">LOREM IPSUM</h5>                        
                                    <div class="nicdark_space10"></div>
                                    <p>Lorem ipsum dolor sit amet conse adip elit. Pellentesque tinci dolor sit.</p>
                                </div>
                            </div>
                        </li>

                        <li class="nicdark_border_grey">
                            <div class="nicdark_margin20 nicdark_relative">
                                <div style="width:60px;" class="nicdark_absolute nicdark_activity center">    
                                    <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                                        <h2 class="white nicdark_margin5">21</h2>
                                    </div>
                                    <div class="nicdark_textevidence nicdark_bg_blue nicdark_radius_bottom">
                                        <h6 class="white nicdark_margin5">DEC</h6>
                                    </div>
                                </div>
                                <div class="nicdark_activity nicdark_marginleft80">
                                    <h5 class="grey">LOREM IPSUM</h5>                        
                                    <div class="nicdark_space10"></div>
                                    <p>Lorem ipsum dolor sit amet conse adip elit. Pellentesque tinci dolor sit.</p>
                                </div>
                            </div>
                        </li>
                            
                    </ul>
                </div>
            -->

            

            <!--
                <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_red nicdark_radius_top">
                    <h4 class="white nicdark_margin20">DOCUMENTS</h4>
                    <i class="icon-file-pdf nicdark_iconbg right medium red"></i>
                </div>
                <ul class="nicdark_list border">
                        
                    <li class="nicdark_border_grey">
                        <div class="nicdark_margin20 nicdark_relative">
                        <a href="#" class="nicdark_btn_icon small nicdark_radius_circle red nicdark_absolute nicdark_border_red"><i class="icon-file-pdf"></i></a>
                        <div class="nicdark_activity nicdark_marginleft60">
                            <h5 class="grey">LOREM IPSUM</h5>                        
                            <div class="nicdark_space10"></div>
                            <p>Lorem ipsum dolor sit amet conse adip elit. Pellentesque tinci dolor sit amet.</p>
                        </div></div>
                    </li>

                    <li class="nicdark_border_grey">
                        <div class="nicdark_margin20 nicdark_relative">
                        <a href="#" class="nicdark_btn_icon small nicdark_radius_circle red nicdark_absolute nicdark_border_red"><i class="icon-file-pdf"></i></a>
                        <div class="nicdark_activity nicdark_marginleft60">
                            <h5 class="grey">LOREM IPSUM</h5>                        
                            <div class="nicdark_space10"></div>
                            <p>Lorem ipsum dolor sit amet conse adip elit. Pellentesque tinci dolor sit amet.</p>
                        </div></div>
                    </li>
                        


                    <li class="nicdark_border_grey">
                        <div class="nicdark_margin20 nicdark_relative">
                        <a href="#" class="nicdark_btn_icon small nicdark_radius_circle red nicdark_absolute nicdark_border_red"><i class="icon-file-pdf"></i></a>
                        <div class="nicdark_activity nicdark_marginleft60">
                            <h5 class="grey">LOREM IPSUM</h5>                        
                            <div class="nicdark_space10"></div>
                            <p>Lorem ipsum dolor sit amet conse adip elit. Pellentesque tinci dolor sit amet.</p>
                        </div>
                        </div>
                    </li>
                        
                </ul>
            </div>
            -->


        </div>
        <!--sidebar-->


        <div class="grid grid_8">
            <img alt="" class="nicdark_radius nicdark_opacity" style="float:left;width:100%;" 
                        src="{{ URL::asset('assets/adminPage_assets/forum_style/img/blog/single-post.jpg') }}">
            <div class="nicdark_space20"></div>
                    
                    <a href="#" data-toggle="modal" data-target="#myModal" class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white nicdark_press">Add a POST</a>
            <div class="nicdark_space20"></div>
                <div class="nicdark_textevidence nicdark_bg_orange nicdark_radius nicdark_shadow">
                  <div class="nicdark_size_big">
                    <p class="white">
                      <i class="icon-calendar-1 nicdark_marginright10"></i>{{$forumPost->posted_date}} &nbsp; {{$forumPost->posted_time}}
                      <span class="nicdark_margin010">·</span>
                      <i class="icon-user-1 nicdark_marginright10"></i>{{$forumPost->lastname}}
                      <span class="nicdark_margin010">·</span>
                      <i class="icon-chat nicdark_marginright10"></i>@if(@countOfComments > 1 ) {{$countOfComments}} COMMENT @else {{$countOfComments}} COMMENTS @endif </p>
                  </div>
                  <i class="icon-info-outline nicdark_iconbg right medium orange"></i>
                </div>
                
                <div class="nicdark_space20"></div>
                <!--author-->
                <div class="nicdark_archive1 nicdark_bg_yellow nicdark_radius nicdark_shadow">
                  <div class="nicdark_margin20 nicdark_relative">
                    <img alt="" class="nicdark_displaynone_ipadpotr nicdark_radius_circle nicdark_absolute"
                    style="width:100px;"  <?php echo 'src="'.$path.''.$forumPost->img_path.'"';?>>
                    <div class="nicdark_activity nicdark_marginleft120 nicdark_disable_marginleft_ipadpotr">
                      <h4 class="white">{{$forumPost->firstname}} {{$forumPost->lastname}}</h4>
                      <div class="nicdark_space20"></div>
                      <div class="nicdark_divider left small">
                        <span class="nicdark_bg_white nicdark_radius"></span>
                      </div>
                      <div class="nicdark_space20"></div>
                      <h3 class="subtitle greydark">{{$forumPost->title}}</h3>
                      <div class="nicdark_space20"></div>
                      <p class="white"> {{$forumPost->description}}</p>
                      <div class="nicdark_space20"></div>
                      <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                      <div class="nicdark_space20"></div>
                      <p class="white">
                      

                          @if($forum_result[0]->islike==true)
                            <a href="#" onclick=<?php echo '"isParentLike('.$userID.','.$forumPost->fid.')"';?> id="islikePID">
                              <i class="icon-thumbs-up nicdark_zoom red" ></i>
                            </a>
                            <span id="isPlikecount">{{$likes}}</span>
                          @elseif($forum_result[0]->islike==false || !isset($forum_result[0]))
                            <a href="#" onclick=<?php echo '"isParentLike('.$userID.','.$forumPost->fid.')"';?> id="islikePID">
                              <i class="icon-thumbs-up small nicdark_zoom" ></i>
                            </a>
                            <span id="isPlikecount">{{$likes}}</span>
                          @endif  

                          <span class="nicdark_margin010">·</span>

                          @if($forum_result[0]->isdislike==true)
                            <a href="#" onclick=<?php echo '"isParentDisLike('.$userID.','.$forumPost->fid.')"';?> id="isdislikePID">
                                <i class="icon-thumbs-down nicdark_marginright10 red" ></i>
                                </a>
                            <span id="isPdislikecount">{{$disLikes}}</span>
                          @elseif($forum_result[0]->isdislike==false || !isset($forum_result[0]))
                            <a href="#" onclick=<?php echo '"isParentDisLike('.$userID.','.$forumPost->fid.')"';?> id="isdislikePID">
                                <i class="icon-thumbs-down small nicdark_marginright10" ></i>
                                </a>
                            <span id="isPdislikecount">{{$disLikes}}</span>
                          @endif 
                      <span class="nicdark_margin010">·</span>
                      <a href="#"><i class="icon-eye-outline nicdark_marginright10"></i></a>{{$totalViews}}
                      </p>
                   
                    </div>
                  </div>
                </div>
                <!--author-->
                <div class="nicdark_space50"></div>
                <h3 class="subtitle greydark">@if(@countOfComments > 1 ) {{$countOfComments}} COMMENT @else {{$countOfComments}} COMMENTS @endif</h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small">
                  <span class="nicdark_bg_orange nicdark_radius"></span>
                </div>
                <div class="nicdark_space20"></div>
                <ul class="nicdark_list border" id="forumUL">
                  @foreach($forum_comments as $row)
                      <li class="nicdark_border_grey">
                        <!--comment-->
                        <div class="nicdark_archive1 nicdark_relative">
                          <div class="nicdark_margin100 nicdark_relative">
                            <img alt="" class="nicdark_displaynone_ipadpotr nicdark_radius_circle nicdark_absolute"
                            style="width:50px;" <?php echo 'src="'.$path.''.$row->img_path.'"';?> >
                            <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                              <div class="nicdark_space20"></div>
                              <h4 class="subtitle greydark">{{strtoupper($row->lastname)}} SAYS: {{$row->comment_date}} AT {{$row->comment_time}}</h4>
                              <div class="nicdark_space20"></div>
                            </div>
                          </div>
                          <p>{{$row->comments}}</p>
                          <div class="nicdark_space20"></div>
                          <div class="nicdark_space20"></div>
                        </div>
                        <!--comment-->
                      </li>
                  @endforeach
                </ul>
                <form method="post" action="add_comment_parent" onsubmit="return validateCommentForm()">
                  <div class="nicdark_space50"></div>
                  <h3 class="subtitle greydark">LEAVE A REPLY</h3>
                  <div class="nicdark_space20"></div>
                  <div class="nicdark_divider left small">
                    <span class="nicdark_bg_red nicdark_radius"></span>
                  </div>
                  <div class="nicdark_space20"></div>
                  <textarea class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle"
                  placeholder="COMMENTS" rows="9" id="comment_textArea" name="comment_textArea"></textarea>
                  <div class="nicdark_space20"></div>
                  <input type="hidden" id="fid" name="fid" <?php echo 'value="'.$forumPost->fid.'"';?>>
                  <input type="hidden" id="userID" name="userID" <?php echo 'value="'.$userID.'"';?>>
                  <input class="nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white left"
                  type="submit" value="POST COMMENT"  id="postBtn" onclick="sweetCallFunc()">
                </form>
        </div>
        
        

        <div class="nicdark_space50"></div>

    </div>
    <!--end nicdark_container-->
            
</section>
<!--end section-->

<!--end-->

<div class="nicdark_space3 nicdark_bg_gradient"></div>




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form  method="post" action="add_post_parent" onsubmit="return validatePostForm()">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Your Post</h4>
      </div>
      <div class="modal-body">
       
          <div class="form-group">
            <label for="email">Title:</label>
            <input type="text" class="form-control" id="fTitle" name="fTitle" placeholder="Enter Title" >
            <input type="hidden" id="userID" name="userID" value=<?php echo '"'.$userID.'"';?>>
          </div>
          <div class="form-group">
            <label for="pwd">POST:</label>
            <textarea class="form-control" rows="5" id="fTextareaComment" name="fTextareaComment" placeholder="Enter Post"></textarea>
          </div>
          <label ></label>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-danger" value="Submit">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
    </form>
  </div>
</div>

<!-- PDF Modal -->
<div id="pdfModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form  method="post" action="add_post_parent" onsubmit="return validatePostForm()">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="reLoadFunction()" data-dismiss="modal">&times;</button>

        <h4 class="modal-title" ><div id="modal-title-name"></div></h4>
      </div>
      <div class="modal-body">
       
        <div id="desc"></div>
        <br/>
        <div id = "modal-body-pdf"></div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="reLoadFunction()" data-dismiss="modal">Close</button>
      </div>
    </div>
    </form>
  </div>
</div>


<!--start section-->
<div class="nicdark_section nicdark_bg_greydark2 nicdark_copyrightlogo">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
            <div class="nicdark_space20"></div>
            <p class="white">© Copyright 2014 by <span class="grey">NicDark</span>Themes.com - Made With <i class="icon-heart-filled red nicdark_zoom"></i> In Venice</p>
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
<!--end section-->        </div>
    </div>

    <!--main-->
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/main/jquery.min.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/main/jquery-ui.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/main/excanvas.js') }}"></script> 

    <!--plugins-->
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/revslider/jquery.themepunch.revolution.min.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/revslider/jquery.themepunch.tools.min.js') }}"></script> 

    <!--menu-->
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/menu/superfish.min.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/menu/tinynav.min.js') }}"></script> 

    <!--other-->
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/isotope/isotope.pkgd.min.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/mpopup/jquery.magnific-popup.min.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/scroolto/scroolto.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/nicescrool/jquery.nicescroll.min.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/inview/jquery.inview.min.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/countto/jquery.countTo.js') }}"></script> 
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/plugins/countdown/jquery.countdown.js') }}"></script> 


    <!--settings-->
    <script src="{{ URL::asset('assets/adminPage_assets/forum_style/js/settings.js') }}"></script> 

    <!-- sweetalert JS -->
        <script src="{{ URL::asset('assets/adminPage_assets/js/sweetalert.min.js') }}"></script> 


<!--custom js-->
<script type="text/javascript">
    jQuery(document).ready(function() {


        //START PARALLAX SECTIONS
        $('#nicdark_parallax_title').parallax("50%", 0.3);
        //END PARALLAX SECTIONS


    });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49425562-7', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
    function validateCommentForm() {
    var x = document.getElementById('comment_textArea').value;
    if (x == null || x == "") {
        sweetAlert("Oops...", "Comment Field is Required..!", "error");
        return false;
    }
}

</script>
<script type="text/javascript">
          function validatePostForm() {
              var x = document.getElementById('fTitle').value;
              var y = document.getElementById('fTextareaComment').value;
              if (x == null || x == "") {
                  sweetAlert("Oops...", "Title Field is Required..!", "error");
                  return false;
              }else if(y == null || y == ""){
                  sweetAlert("Oops...", "Comment Field is Required..!", "error");
                  return false;
              }
          }
</script>

<script>
      
      function isParentLike(user_id,forum_id){
        

            $.ajax({
                type: "get",
                url: "isUserLikePost",
                data: { 
                    user_id:user_id,
                    forum_id:forum_id 
                },
                success: function (data)
                {
                  
                  if(data.likeStatus){
                    document.getElementById("islikePID").innerHTML ='<i class="icon-thumbs-up nicdark_zoom red " ></i>';
                    document.getElementById("isPlikecount").innerHTML = data.totalLikes;
                  }
                    

                  if(!data.dislikeStatus){
                    document.getElementById("isdislikePID").innerHTML ='<i class="icon-thumbs-down small nicdark_marginright10"></i>';  
                    document.getElementById("isPdislikecount").innerHTML = data.totalDisLikes;
                  }

                     

                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                
                }
            });
      
      return false;
      
      
      }
  </script>



  <script>
      
      function isParentDisLike(user_id,forum_id){
        

            $.ajax({
                type: "get",
                url: "isUserDisLikePost",
                data: { 
                    user_id:user_id,
                    forum_id:forum_id 
                },
                success: function (data)
                {
                  
                  
                  if(!data.likeStatus){
                    document.getElementById("islikePID").innerHTML ='<i class="icon-thumbs-up small nicdark_zoom" ></i>';
                    document.getElementById("isPlikecount").innerHTML = data.totalLikes;
                  }
                    

                  if(data.dislikeStatus){
                    document.getElementById("isdislikePID").innerHTML ='<i class="icon-thumbs-down nicdark_marginright10 red"></i>';   
                    document.getElementById("isPdislikecount").innerHTML = data.totalDisLikes;
                  }

                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                
                }
            });
      
      return false;
      
      
      }
  </script>


  <script>
      
      function articleOnclick(article_id){
            
            $.ajax({
                type: "get",
                url: "getArticleParent",
                data: { 
                    article_id:article_id

                },
                success: function (data)
                {
                
                  
                 // alert(data.pdf_path);
                //document.getElementById("modal-body-pdf").innerHTML = '<embed  src="{{ URL::asset('+data.pdf_path+') }}" width="100%" height="500px">';
                 jQuery.noConflict();                                   
                 $('#pdfModal').modal('show');
                 $('#pdfModal').on('shown.bs.modal', function() {
                    $('#pdfModal').find('#modal-title-name').append(data.title);
                    $('#pdfModal').find('#desc').append(data.description);
                    $('#pdfModal').find('#modal-body-pdf').append(data.embedPath);
                
                 });

                 $(document).ready(function() {
                    $(".modal").on("hidden.bs.modal", function() {
                      $("#modal-title-name").html("");
                      $("#desc").html("");
                      $("#modal-body-pdf").html("");
                    });
                  });

                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                
                }
            });
      
      return false;
      
      
      }
  </script>
  <script>
    function reLoadFunction() {
        location.reload();
    }
  </script>  
</body>  
</html>