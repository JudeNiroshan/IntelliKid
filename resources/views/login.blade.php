<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" >
  <meta name="author" content="">

  <title>Login | IntelliKides</title>
  <link rel="shortcut icon" href="{{URL::asset('assets/images/logo1.png') }}" type="image/png" sizes="48x48"/>
  

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/css/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/css/site.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/animsition/animsition.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/asscrollable/asScrollable.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/switchery/switchery.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/intro-js/introjs.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/slidepanel/slidePanel.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/flag-icon-css/flag-icon.css') }}">


  <!-- Page -->
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/css/pages/lockscreen.css')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/fonts/web-icons/web-icons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/fonts/brand-icons/brand-icons.min.css') }}">
  


  <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{ URL::asset('assets/parent/vendor/modernizr/modernizr.js') }}"></script>
  <script src="{{ URL::asset('assets/parent/vendor/breakpoints/breakpoints.js') }}"></script>
  <script>
    Breakpoints();
  </script>
<style>
body { 
   
    background-attachment: fixed;
     background-position: center;
     background-repeat: no-repeat;  
     background: url(./assets/parent/photos/1.jpg) no-repeat scroll center top transparent;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}



div.transbox {
  margin: 30px;
  background-color: #ffffff;
width: 30%;

border-radius: 5%;


 z-index: 1;
 
  opacity: 0.7;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}


div.pannel {
 z-index: 100;
 opacity: 10;
}







.block {
      width: 25%;
      height: 3%;
      margin: 5% auto;
      text-align: center;
    }
    .loading span {
      display: inline-block;
      padding: 8px;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      -o-border-radius: 50%;
      border-radius: 50%;
    }
    .ball1 {
      background: #5FC169;
      -webkit-animation: move-left 800ms ease-in-out infinite alternate;
      -moz-animation: move-left 800ms ease-in-out infinite alternate;
      -ms-animation: move-left 800ms ease-in-out infinite alternate;
      -animation: move-left 800ms ease-in-out infinite alternate;
    }
    .ball2 {
      background: #5CC3E6;
      -webkit-animation: move-right 800ms ease-in-out infinite alternate;
      -moz-animation: move-right 800ms ease-in-out infinite alternate;
      -ms-animation: move-right 800ms ease-in-out infinite alternate;
      animation: move-right 800ms ease-in-out infinite alternate;
    }
    @-webkit-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-moz-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-ms-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-o-keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @keyframes move-left {
      to {
        -webkit-transform: translate(20px, 0);
        -ms-transform: translate(20px, 0);
        -moz-transform: translate(20px, 0);
        transform: translate(20px, 0);
        background: #5CC3E6;
      }
    }
    @-webkit-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }
    @-moz-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }
    @-ms-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #0063dc;
      }
    }
    @-o-keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }
    @keyframes move-right {
      to {
        -webkit-transform: translate(-20px, 0);
        -ms-transform: translate(-20px, 0);
        -moz-transform: translate(-20px, 0);
        transform: translate(-20px, 0);
        background: #5FC169;
      }
    }



</style>

</head>
<body class="  layout-full" >
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
<div style="padding-left:5%">
  <div class="transbox" >
  <div class="pannel" >
  <div class="container" > 
 
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
          <h1 style="color:#fff; "> <img src="{{ URL::asset('assets/parent/photos/logo.png') }}">  </h1>
        <br>
         
    <!--  <h1 style="color:#fff;text-align:center;margin-top:0cm" >Login</h1> -->
      <form method="post" role="form" onsubmit="return login()">
             <div class="form-group" style="padding-bottom:5%">
          <input type="text" class="form-control round col-md-12 "  id="username" name="username"
          placeholder="Enter Email" required>
        
        </div>
          <br>
        <div class="form-group">
          <input type="password" class="form-control  round" id="password" name="password"
          placeholder="Enter password" required>
        
        </div>
         
           <div class="form-group">
         <button  type="submit" class="btn btn-primary btn-block "  style=" z-index: 2;">Login</button>
        
        </div>
          
          <div class="form-group">
           <div id="error" name="error" class="alert-link" style="color:red" ></div>
          <div id="load"></div>
          </div>
          
           <div class="form-group">
         <a href="register" class="btn btn-success btn-block ">Register</a>
        
            </div>
      </form>
       <p><a href="reset_password">fogot password?</a></p>
        <p><a href="WelcomeIntellikid">Welcome Screen</a></p>
    </div>
  </div>
  </div>
  </div>
  </div>
</div>
    <!-- End Page -->


  <!-- Core  -->
  <script src="{{ URL::asset('assets/parent/vendor/jquery/jquery.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/vendor/bootstrap/bootstrap.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/vendor/animsition/jquery.animsition.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/vendor/asscroll/jquery-asScroll.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/vendor/mousewheel/jquery.mousewheel.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/vendor/asscrollable/jquery.asScrollable.all.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/vendor/ashoverscroll/jquery-asHoverScroll.js ')}}"></script>

  <!-- Plugins -->
  <script src="{{ URL::asset('assets/parent/vendor/switchery/switchery.min.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/vendor/intro-js/intro.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/vendor/screenfull/screenfull.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/vendor/slidepanel/jquery-slidePanel.js ')}}"></script>

  <script src="{{ URL::asset('assets/parent/vendor/jquery-placeholder/jquery.placeholder.js ')}}"></script>

  <!-- Scripts -->
  <script src="{{ URL::asset('assets/parent/js/core.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/js/site.js ')}}"></script>

  <script src="{{ URL::asset('assets/parent/js/sections/menu.js ')}}"></script> 
  <script src="{{ URL::asset('assets/parent/js/sections/menubar.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/js/sections/sidebar.js ')}}"></script>

  <script src="{{ URL::asset('assets/parent/js/configs/config-colors.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/js/configs/config-tour.js ')}}"></script>

  <script src="{{ URL::asset('assets/parent/js/components/asscrollable.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/js/components/animsition.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/js/components/slidepanel.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/js/components/switchery.js ')}}"></script>
  <script src="{{ URL::asset('assets/parent/js/components/jquery-placeholder.js ')}}"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
      
      
      
      function login(){


          var un = document.getElementById("username").value;
          var pw = document.getElementById("password").value;

          if(un=="" && pw==""){
       
            document.getElementById("error").setAttribute("class", "alert alert-danger"); 
            document.getElementById("error").innerHTML ="Password and Username is empty";
            return false;

          }

          if(un=="" ){
             document.getElementById("error").innerHTML ="";
            document.getElementById("error").setAttribute("class", "alert alert-danger"); 
            document.getElementById("error").innerHTML ="Username feild is empty";
            return false;

          }

          if(pw=="" ){
             document.getElementById("error").innerHTML ="";
            document.getElementById("error").setAttribute("class", "alert alert-danger"); 
            document.getElementById("error").innerHTML ="Password feild is empty";
            return false;

          }


          
            document.getElementById("error").setAttribute("class", ""); 
            document.getElementById("error").innerHTML ="";
            document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';
      
           
      
         
          
            $.ajax({
                type: "get",
                url: "login_confirm",
                data: { 
                    un:un,
                    pw:pw  
                },
                success: function (data)
                {
                  
                    if(data.list[0].id== 1){

                        setTimeout(function(){

                       document.getElementById("load").innerHTML = "";
                       window.location.href = "session?id="+data.list[0].user_id;

                        },2000);
                    }
                    else{

                      setTimeout(function(){
                  
                     document.getElementById("load").innerHTML = "";
                     document.getElementById("error").setAttribute("class", "alert alert-danger"); 
                     document.getElementById("error").innerHTML ="Your username or password is incorrect<br> try again.";

                       },1000);
                    
                    }

                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                   console.log(thrownError);
                   document.getElementById("load").innerHTML = "";
                   document.getElementById("error").setAttribute("class", "alert alert-danger"); 
                   document.getElementById("error").innerHTML ="You cann't login.internal server error";
                
                }
            });
    
          
      
      
      return false;
      
      
      }
  </script>

</body>

</html>