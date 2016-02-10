<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{$title}}</title>  


        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/bootstrap.min.css') }}">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/unicorn.css') }}">

        <!-- Calendar CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/fullcalendar.css') }}">

        <!-- Custom Fonts -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/font-awesome.css') }}">

        <!-- Jquery Jscrollpane -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/jquery.jscrollpane.css') }}">


        <!-- Jquery Gritter -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/jquery.gritter.css') }}">

        <!-- Color Picker -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/colorpicker.css') }}">

        <!-- Date Picker -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/datepicker.css') }}">

        <!-- Ichek flat blue -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/icheck/flat/blue.css') }}">

        <!-- Jquery Ui Picker -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/jquery-ui.css') }}">

        <!-- Select -->
        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/select2.css') }}">

        <link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/unicorn-login.css') }}">

        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
       
        <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>

        



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

       <!-- <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-44987299-1', 'bootstrap-hunter.com');
            ga('send', 'pageview');

        </script> -->   

    </head>
    <body>

        <body data-color="grey" class="flat">
        <div id="wrapper">

                   <div id="header">
          <h1>
            <a href="index-2.html">Unicorn Admin</a>
          </h1>
          <a id="menu-trigger" href="#"><i class="fa fa-bars"></i></a>
        </div>
        <div id="user-nav">
          <ul class="btn-group">
            <li class="btn">
              <a title="" href="#"><i class="fa fa-user"></i> <span class="text">Profile</span></a>
            </li>
            <li class="btn dropdown" id="menu-messages">
              <a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="fa fa-envelope"></i> <span class="text">Messages</span> <span class="label label-danger">5</span> <b class="caret"></b></a>
              <ul class="dropdown-menu messages-menu">
                <li class="title">
                  <i class="fa fa-envelope-alt"></i>Messages
                  <a class="title-btn" href="#" title="Write new message"><i class="fa fa-share"></i></a>
                </li>
                <li class="message-item">
                  <a href="#">
                    <img alt="User Icon" src="img/demo/av1.jpg">
                    <div class="message-content">
                      <span class="message-time">
                        3 mins ago
                      </span>
                      <span class="message-sender">
                        Nunc Cenenatis
                      </span>
                      <span class="message">
                        Hi, can you meet me at the office tomorrow morning?
                      </span>
                    </div>
                  </a>
                </li>
                <li class="message-item">
                  <a href="#">
                    <img alt="User Icon" src="img/demo/av1.jpg">
                    <div class="message-content">
                      <span class="message-time">
                        3 mins ago
                      </span>
                      <span class="message-sender">
                        Nunc Cenenatis
                      </span>
                      <span class="message">
                        Hi, can you meet me at the office tomorrow morning?
                      </span>
                    </div>
                  </a>
                </li>
                <li class="message-item">
                  <a href="#">
                    <img alt="User Icon" src="img/demo/av1.jpg">
                    <div class="message-content">
                      <span class="message-time">
                        3 mins ago
                      </span>
                      <span class="message-sender">
                        Nunc Cenenatis
                      </span>
                      <span class="message">
                        Hi, can you meet me at the office tomorrow morning?
                      </span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="btn">
              <a title="" href="#"><i class="fa fa-cog"></i> <span class="text">Settings</span></a>
            </li>
            <li class="btn">
              <a title="" href="login.html"><i class="fa fa-share"></i> <span class="text">Logout</span></a>
            </li>
          </ul>
        </div>
        <div id="switcher">
          <div id="switcher-inner">
            <h3>Theme Options</h3>
            <h4>Colors</h4>
            <p id="color-style">
              <a data-color="orange" title="Orange" class="button-square orange-switcher" href="#"></a>
              <a data-color="turquoise" title="Turquoise" class="button-square turquoise-switcher" href="#"></a>
              <a data-color="blue" title="Blue" class="button-square blue-switcher" href="#"></a>
              <a data-color="green" title="Green" class="button-square green-switcher" href="#"></a>
              <a data-color="red" title="Red" class="button-square red-switcher" href="#"></a>
              <a data-color="purple" title="Purple" class="button-square purple-switcher" href="#"></a>
              <a href="#" data-color="grey" title="Grey" class="button-square grey-switcher"></a>
            </p>
            <h4 class="visible-lg">Layout Type</h4>
            <p id="layout-type">
              <a data-option="flat" class="button" href="#">Flat</a>
              <a data-option="old" class="button" href="#">Old</a>
            </p>
          </div>
          <div id="switcher-button">
            <i class="fa fa-cogs"></i>
          </div>
        </div>
        <div id="sidebar">
          <div id="search">
            <input type="text" placeholder="Search here...">
            <button type="submit" class="tip-right" title="Search">
              <i class="fa fa-search"></i>
            </button>
          </div>
          <ul>
            <li class="active">
              <a href="unicon_admin_index"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>
            <li class="submenu">
              <a href="#"><i class="fa fa-arrow-circle-up"></i> <span>Upload</span> <i class="arrow fa fa-chevron-right"></i></a>
              <ul>
                <li>
                  <a href="upload_videos">Videos</a>
                </li>
                <li>
                  <a href="upload_songs">Songs</a>
                </li>
                <li>
                  <a href="upload_story">Story</a>
                </li>
                <li>
                  <a href="jquery-ui.html">Quiz</a>
                </li>
                <li>
                  <a href="buttons.html">Buttons &amp; icons</a>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><i class="fa -list fa-file-text-o"></i> <span>Reports</span> <i class="arrow fa fa-chevron-right"></i></a>
              <ul>
                <li>
                  <a href="form-common.html">Common elements</a>
                </li>
                <li>
                  <a href="form-validation.html">Validation</a>
                </li>
                <li>
                  <a href="form-wizard.html">Wizard</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="tables.html"><i class="fa fa-bar-chart-o"></i> <span>Statistics</span></a>
            </li>
            <li>
              <a href="unicon_admin_view_users"><i class="fa -list fa-eye"></i> <span>View users</span></a>
            </li>
            <li class="submenu">
              <a href="#"><i class="fa fa-files-o"></i> <span>Create Exams</span> <i class="arrow fa fa-chevron-right"></i></a>
              <ul>
                <li>
                  <a href="invoice.html">Invoice</a>
                </li>
                <li>
                  <a href="chat.html">Support chat</a>
                </li>
                <li>
                  <a href="calendar.html">Calendar</a>
                </li>
                <li>
                  <a href="gallery.html">Gallery</a>
                </li>
                <li>
                  <a href="messages.html">Messages</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
            <!-- #page-wrapper -->
                @yield('body_of_unicon_admin')
            <!-- /#page-wrapper -->
            <div class="row">
                <div id="footer" class="col-xs-12">
                    2016 &copy; IntelliKid. All right reserved</a>
                </div>
            </div>

        </div>


    <!-- JacvaScripts-->





        <!-- index page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.dashboard.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/excanvas.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.min.js') }}"></script>


 
        <script src="{{ URL::asset('assets/adminPage_assets/audioplayerengine/amazingaudioplayer.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/adminPage_assets/audioplayerengine/initaudioplayer-1.css') }}">
        <script src="{{ URL::asset('assets/adminPage_assets/audioplayerengine/initaudioplayer-1.js') }}"></script>



        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery-ui.custom.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.flot.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.sparkline.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/fullcalendar.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.js') }}"></script>
        

        <!-- interface page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/bootbox.min.js') }}"></script>       
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.interface.js') }}"></script>

        <!-- tables page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.icheck.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/select2.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.tables.js') }}"></script>

        <!-- message page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/wysihtml5.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/bootstrap-wysihtml5.js') }}"></script>

        <!-- login page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.login.js') }}"></script>

        <!-- jquery-ui page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.jui.js') }}"></script>

        <!-- gallery page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.masonry.min.js') }}"></script>

        <!-- form-wizard page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.validate.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.wizard.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.wizard.js') }}"></script>

        <!-- form-validation page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.form_validation.js') }}"></script>


        <!-- form-common page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/bootstrap-colorpicker.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.form_common.js') }}"></script>

        <!-- chat page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.chat.js') }}"></script>
        

        <!-- chart page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.flot.pie.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.charts.js') }}"></script>


        <!-- calendar page-->
        <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.calendar.js') }}"></script>

        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.gritter.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/jquery-ui.custom.min.js') }}"></script>
        <script src="{{ URL::asset('assets/adminPage_assets/js/respond.min.js') }}"></script>

        <script src="{{ URL::asset('assets/adminPage_assets/js/morris.min.js') }}"></script>


        <!-- JacvaScripts are placed here-->
    <!-- /JacvaScripts-->    


    </body>
</html>
