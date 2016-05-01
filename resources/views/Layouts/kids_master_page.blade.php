<html><head>
 <title>{{$title}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Your description">
  <meta name="keywords" content="Your keywords">
  <meta name="author" content="Your name">


  <link rel="icon" href="{{ URL::asset('assets/kids_assets/images/favicon.html') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ URL::asset('assets/kids_assets/images/favicon.html') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/bootstrap-responsive.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/camera.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/style.css') }}">

  <!-- Date picker -->
  
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 
  <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
  <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: #450606}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

  
  <!-- bootstrap table for achievment -->
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   -->

  <!-- sweet alert -->
   
  <script src="{{ URL::asset('assets/kids_assets/js/sweetalert.min.js') }}"></script>
  <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/sweetalert.css') }}">




  <script src="{{ URL::asset('assets/kids_assets/js/jquery.js') }}"></script>
  <script src="{{ URL::asset('assets/kids_assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ URL::asset('assets/kids_assets/js/superfish.js') }}"></script>
  <script src="{{ URL::asset('assets/kids_assets/js/jquery.ui.totop.js') }}"></script>
  <script src="{{ URL::asset('assets/kids_assets/js/jquery.mobile.customized.min.js') }}"></script>
  <script src="{{ URL::asset('assets/kids_assets/js/jquery.spritely-0.6.1.js') }}"></script>
  <script src="{{ URL::asset('assets/kids_assets/js/script.js') }}"></script>
  <script src="{{ URL::asset('assets/kids_assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('assets/kids_assets/js/bootstrap_todo.js') }}"></script>
  <script src="{{ URL::asset('assets/kids_assets/js/script_todo.js') }}"></script>




  <script>
    $(document).ready(function() {
                    // 
                    // camera
                    $('#camera_wrap').camera({
                        //thumbnails: true
                        autoAdvance         : true,     
                        mobileAutoAdvance   : true,
                        fx                  : 'simpleFade',
                        height: '47%',
                        hover: false,
                        loader: 'none',
                        navigation: true,
                        navigationHover: false,
                        mobileNavHover: false,
                        playPause: false,
                        pauseOnClick: false,
                        pagination          : false,
                        time: 7000,
                        transPeriod: 1000,
                        minHeight: '200px'
                    });
                  
                  }); //
                  $(window).load(function() {
                    //
                  
                  }); //
  </script>

  
  <!--[if lt IE 8]>
    <div style='text-align:center'>
      <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a>
    </div>
  <![endif]-->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <![endif]-->
</head>
<body class="main">
  <div id="main">
    <div class="bg1">
      <div id="sun1"></div>
      <div id="clouds1"></div>
      <div id="bird1"></div>
      <div id="bird2"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="span12">
          <header class="clearfix">
            <div class="logo_wrapper">
              <a href="playground" class="logo"><img src="{{asset('assets/kids_assets/images/intelliKid logo.png')}}"  alt="" class="img-circle" width="100" height="100"></a>
            </div>
            <div class="top1 clearfix">
              <div class="social_wrapper">
                <div class="col-md-4">
                  <img src="{{asset('assets/kids_assets/images/gallery07.jpg')}}"  class="center-block img-circle img-responsive" height="160" width="160">
                  <h4 class="text-center">
                    <ul style="list-style-type:none">
                      <li class="dropdown sub-menu ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{$child->lastname}} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                          </li>
                          <li>
                            <a href="child_logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </h4>
                </div>
              </div>
            </div>
          </header>
        </div>
      </div>
    </div>
    




    @yield('body')





    <div class="bot1">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="bot1_inner clearfix">
              <div class="menu_bot">
                <ul id="menu_bot" class="clearfix">
                  <li>
                    <a href="playground">Home</a>
                  </li>
                  <li>
                    <a href="profile">My Profile</a>
                  </li>
                  <li>
                    <a href="events">Events</a>
                  </li>
                  <li>
                    <a href="index-4.html">Achievments</a>
                  </li>
                  <li>
                    <a href="todoList">To Do List</a>
                  </li>
                </ul>
              </div>
              <img  src="{{asset('assets/kids_assets/images/flowers1.png')}}"  alt="" class="flowers1">
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="footer_inner clearfix">
              <div class="copyright">Copyright © 2016. All rights reserved. &nbsp;</div>
              <div class="search-form-wrapper clearfix">
                <form id="search-form" action="http://www.template-preview.com/bootstrap-templates/300111700/shapebootstrap/search.php" method="GET" accept-charset="utf-8" class="navbar-form">
                  <input type="text" name="s" value="Search" onblur="if(this.value=='') this.value='Search'" onfocus="if(this.value =='Search' ) this.value=''">
                  <a href="#" onclick="document.getElementById('search-form').submit()"></a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  
  <script src="{{ URL::asset('assets/kids_assets/js/bootstrap.js') }}"></script>
  <!-- Mirrored from www.template-preview.com/bootstrap-templates/300111700/shapebootstrap/
  by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2016 15:28:54 GMT
  -->

  <!-- date picker -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!-- Include Date Range Picker -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,


      })
    })
  </script>



</body>



</html>