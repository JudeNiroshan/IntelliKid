
@if (!(isset( $_SESSION['USERID']))   ) 

<script> 
    location.href = "login";
</script>

@endif

@if($_SESSION['STATUS'] == "PENDING")


<script> 
    location.href = "email_verification_notiece";
</script>

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

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">
       <!-- <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-extend.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/site.min.css')}}">-->

        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/animsition/animsition.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/asscrollable/asScrollable.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/switchery/switchery.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/intro-js/introjs.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/slidepanel/slidePanel.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/flag-icon-css/flag-icon.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/datatables-bootstrap/dataTables.bootstrap.css')}}">
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


         <link rel='stylesheet' href="{{ URL::asset('assets/parent/css/bootstrap/bootstrap.min.css')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/parent/css/plugins/select_option1.css')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/parent/fonts/font-awesome/css/font-awesome.min.css')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/parent/css/plugins/fullcalendar.min.css')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/parent/options/optionswitch.css')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/parent/css/plugins/animate.css')}}">

         <link rel='stylesheet' href="{{ URL::asset('assets/parent/css/style.css')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/parent/css/plugins/animate.css')}}">
         <link rel='stylesheet' href="{{ URL::asset('assets/parent/css/colors/default.css')}}"  id="option_color">



</head>
<body>

<!--=== option Switcher ===-->
<i class="option-switcher-btn fa fa-gear hidden-xs"></i>
        <div class="option-switcher animated fadeInRight">
            <div class="option-swticher-header">
                <div class="option-switcher-heading">Template Options</div>            
                <div class="theme-close"><i class="fa fa-close"></i></div>
                 </div>
                   <div class="option-swticher-body">
                     <!-- Theme Colors -->
                      <ul class="list-unstyled">
                      <li class="theme-default theme-active" data-color="default" data-logo="default-logo"></li>
                      <li class="theme-grayGreen" data-color="gray-green" data-logo="grayGreen"></li>
                      <li class="theme-blueOrange" data-color="blue-orange" data-logo="blueOrange"></li>
                      <li class="theme-grayBlue last" data-color="gray-blue" data-logo="grayBlue"></li>
                      </ul>
                     <!-- Layout Styles -->
                     <div class="row no-col-space layoutStyle">
                     <div class="col-xs-6">
                        <a href="javascript:void(0);" class="btn-u  btn-block active-switcher-btn wide-layout-btn">Wide</a>                
                      </div>
                     <div class="col-xs-6">
                    <a href="javascript:void(0);" class="btn-u btn-block boxed-layout-btn">Boxed</a>                
                </div>
            </div>
            <!-- Header Styles -->
            <div class="row no-col-space headerStyle">
                <div class="col-xs-6">
                     <a href="javascript:void(0);" class="btn-u btn-block active-switcher-btn fixed-header-btn">Fixed Top</a>               
                     </div>
                     <div class="col-xs-6">
                     <a href="javascript:void(0);" class="btn-u  btn-block static-header-btn">Static Top</a>               
                </div>
            </div>            
        </div>
    </div>
    <!--/option-switcher-->

    <div class="main_wrapper">
        <div class="header fixed-top">
            <nav class="navbar navbar-default">
              <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header_inner">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand logo clearfix"><img style="width:66%" src="" alt="" class="img-responsive" /></a>
                            
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">##**###<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="about.html">#</a></li>
                                    <li><a href="campus.html">#</a></li>
                                    <li><a href="stuff.html">#</a></li>
                                    <li><a href="photo_gallery.html">Photo Gallery</a></li>
                                  </ul>
                                <li><a href="news.html">News</a></li>
                                <li><a href="events_calendar.html">Events</a></li>
                                <li><a href="logout">Log out</a></li>
                               
                                
                              </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </div>
                </div>
              </div><!-- /.container -->
            </nav><!-- navbar -->
        </div>
        
        <div class="inlineMenu margin-top">
          <div class="container">
            <div class="row clearfix">
              <div class="col-xs-12">
                <ul class="list-inline">
                  <li class="dropdown">
                        <a href="courses.html" class="dropdown-toggle">######</a>
                        <ul class="dropdown-menu">
                            <li>
                                <h3>Search Courses:</h3>
                            </li>
                            <li>
                                <form action="http://themes.iamabdus.com/royal/1.1/courses.html" method="post">
                                    <input type="text" placeholder="Course Name" id="exampleInputEmail1" class="form-control">
                                    <button class="btn btn-default btn-block commonBtn" type="submit">Search</button>
                                </form>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="courses.html">View all programs (A - Z)</a></li>
                            <li><a href="courses.html">Full Time Programs</a></li>
                            <li><a href="courses.html">Part-Time Studies</a></li>
                            <li role="separator" class="divider second"></li>
                            <li>
                                <h3>Areas of Study:</h3>
                            </li>
                            
                            <li><a href="single-courses.html">#</a></li>
                            <li><a href="single-courses.html">A#</a></li>
                            <li><a href="single-courses.html">B#</a></li>
                            <li><a href="single-courses.html">C#</a></li>
                            <li><a href="single-courses.html">#</a></li>
                            <li><a href="single-courses.html">E#</a></li>
                            <li><a href="single-courses.html">#</a></li>
                            <li><a href="single-courses.html">#</a></li>
                            <li><a href="single-courses.html">#</a></li>
                            <li><a href="single-courses.html">#</a></li>
                            <li><a href="single-courses.html">#</a></li>
                            <li><a href="single-courses.html">S#</a></li>
                            <li><a href="single-courses.html">#</a></li>
                            <li><a href="single-courses.html">#</a></li>
                            
                            
                            
                      </ul>
                    </li>
                  <li><a href="admission.html">#</a></li>
                  <li><a href="accommodation.html">#</a></li>
                  <li><a href="international_students.html">I#</a></li>
                  <li><a href="about.html">W#</a></li>
                </ul>
              </div><!-- col-xs-12 -->
            </div><!-- row clearfix-->
          </div><!-- container  -->
        </div><!-- inlineMenu -->


      
            @yield('title')

           
            @yield('content')




    <div class="footer">
          <div class="container">
            <div class="row clearfix">
              <div class="col-sm-5 col-xs-12">
                <p class="copyRight">&copy; 2016 Intellikid</p>
              </div><!-- col-sm-6 col-xs-12 -->
              <div class="col-sm-7 col-xs-12">
                <ul class="list-inline footerMenu">
                  <li><a href="privacy_policy.html">Privacy Policy</a></li>
                </ul>
              </div><!-- col-sm-6 col-xs-12 -->
            </div><!-- row clearfix -->
          </div><!-- container -->
        </div><!-- footer -->

</div>











    
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






        <script src="{{ URL::asset('assets/parent/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/vendor/datatables-fixedheader/dataTables.fixedHeader.js') }}">     </script>
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


        <script src="{{ URL::asset('assets/parent/js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/plugins/jquery.flexslider.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/plugins/jquery.selectbox-0.1.3.min.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/plugins/jquery.magnific-popup.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/options/optionswitcher.js') }}"></script>
        <script src="{{ URL::asset('assets/parent/js/custom.js') }}"></script>
 
</body>

</html>