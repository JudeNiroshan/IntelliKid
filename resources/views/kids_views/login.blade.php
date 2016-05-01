<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Child | Login</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/bootstrap.min1.css') }}">    

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/metisMenu.min.css') }}">   

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/sb-admin-2.css') }}">   

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/font-awesome.min.css') }}">   

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



     


<!-- new theme -->




	<style>
		body {
			background: url("{{asset('assets/kids_assets/images/img4.jpg')}}");
			background-size: 1400px 900px;
			background-repeat: no-repeat;
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

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 pull-left">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" onsubmit="return login()">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" id="usermame" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>

                         <div class="form-group">
                            <div id="error" name="error" class="alert-link" style="color:red" ></div>
                            <div id="load"></div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
        <script src="{{ URL::asset('assets/vendor/jquery/jquery.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/main/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('assets/baby/js/main/jquery-ui.js') }}"></script>
        






<!-- new theme -->
    <!-- jQuery -->
    <script src="{{ URL::asset('assets/kids_assets/js/jquery.min1.js') }}"></script>  

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('assets/kids_assets/js/bootstrap.min.js') }}"></script>  

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL::asset('assets/kids_assets/js/metisMenu.min.js') }}"></script> 

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('assets/kids_assets/js/sb-admin-2.js.js') }}"></script>
  
  <script>
    
      function login(){


          var un = document.getElementById("usermame").value;
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
                url: "login_child",
                data: { 
                    un:un,
                    pw:pw  
                },
                success: function (data)
                {
                  
                    if(data== 1){

                        setTimeout(function(){
                    
                       document.getElementById("load").innerHTML = "";
                       window.location.href = "playground";

                        },2000);
                    }
                    else{

                      setTimeout(function(){
                  
                     document.getElementById("load").innerHTML = "";
                     document.getElementById("error").setAttribute("class", "alert alert-danger"); 
                     document.getElementById("error").innerHTML ="Your username or password is incorrect<br> try  again.";

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


