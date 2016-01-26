 <!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

 <title>Login | IntelliKides</title>
  <link rel="shortcut icon" href="{{URL::asset('assets/parent/images/logo1.png') }}" type="image/png" sizes="48x48"/>
  


  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/css/bootstrap-extend.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/css/site.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/bootstrap-datepicker/bootstrap-datepicker.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/animsition/animsition.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/asscrollable/asScrollable.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/switchery/switchery.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/intro-js/introjs.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/parent/vendor/slidepanel/slidePanel.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/vendor/flag-icon-css/flag-icon.css') }}">


  <!-- Page -->
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/css/pages/lockscreen.css')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/fonts/web-icons/web-icons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/parent/fonts/brand-icons/brand-icons.min.css') }}">
  <link rel='stylesheet' href="{{ URL::asset('assets/parent/vendor/bootstrap-sweetalert/sweet-alert.css')}}">
 


 


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
     background: url(./assets/photos/1.jpg) no-repeat scroll center top transparent;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

}



div.transbox {

  background-color: #ffffff;
margin: 20%;
margin-bottom: -3%;
margin-top: -4%;



border-radius: 5%;
 z-index: 1;
 
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}


div.pannel {
 z-index: 100;
 opacity: 10;
}




block {
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

  <!--Start of the page-->
</head>
<body class="page-locked layout-full">

  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
         <div class="transbox" >
 			<h1 style="color:#fff; "> <img src="{{ URL::asset('assets/parent/photos/logo.png') }}" height="150" width="150">  </h1>
 		</div>
        <br>

      
        <form role="form"  id="reg12" onsubmit="return validate()">
        <div class="form-group">
           <div class="form-group">
               <input type="text" class="form-control" name="f_name" id="f_name" placeholder="FIRST NAME" required="empty">
          </div>
          <div class="form-group">
               <input type="text" class="form-control" id="l_name" name="l_name" placeholder="LAST NAME" required>
          </div>
         
            <div class="form-group">
               <input type="email" class="form-control" id="email" name="email"placeholder="YOUR EMAIL"    required>
            </div>
             
             <div class="form-group">        
               <input type="password"  class="form-control" id="password" name="password" placeholder="PASSWORD">
             </div>
            <div class="form-group">     
                <input type="password"  class="form-control" id="con_password" name="con_password"placeholder="CONFIRM PASSWORD">
            </div>
            <div class="form-group  row">
                        <label class="col-md-3 control-label text-uppercase font-weight-400" style="color:white">  
                           GENDER

                        </label>
                        <div class="col-md-3">
                            <div class="radio-custom radio-primary">
                                <input type="radio" id="gender" name="gender" value="male">
                                <label for="male">MALE</label>
                            </div></div>
                        <div class="col-md-3">
                            <div class="radio-custom radio-primary">
                                <input type="radio" id="gender" name="gender" value="female"  >
                                <label for="female">FEMALE</label>
                            </div>
                        </div>

                    </div>

                    <div class="form-group row" style="padding-right:20%" >
                     <label class="col-md-6 control-label text-uppercase font-weight-400" style="color:white;">  
                           DATE OF BIRTH

                        </label>
                <div class="input-daterange" name="dateR"  id="dateR" data-plugin="datepicker">
              
                    <div class="input-group">

                         <span class="input-group-addon">
                             <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control" id="start"  name="start" required placeholder="DATE" readonly="readonly">
                    </div>                    
                </div>
             </div>


       
         
          <div class="form-group">
           <button type="submit"  class="btn btn-warning btn-block" >Register</button>
          </div>
 			</div>
      </form>
      <p>Have account already? Please go to <a href="login">Login</a></p>

      <div id="error" name="error" class="alert-link" style="color:red" ></div>
      <div id="load"></div>
<!--footer-->
        <footer class="page-copyright">
        
        <p> INTELLIKID <?php echo date('Y'); ?></p>
       
        </footer>
<!--end of footer-->
    </div>
  </div>

				<!-----//end-copyright---->
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
  <script src="{{ URL::asset('assets/parent/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
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
  <script src="{{ URL::asset('assets/parent/vendor/bootstrap-sweetalert/sweet-alert.js') }}"></script>
   


        <script>
$(document).ready(function() {
 
 $('#dateR').datepicker({
 clearBtn : true,
    
     endDate: "0d"
 
 
 
 });
  
    
    
    
    
});
 </script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
      
      
      
     
      
      
      function validate(){
      
        var password = document.getElementById("password").value;
  		  var confirm_password = document.getElementById("con_password").value;
  		  var l_name = document.getElementById("l_name").value;
  		  var f_name = document.getElementById("f_name").value;
  		  var email = document.getElementById("email").value;
  		  var date_of_b = document.getElementById("start").value;
  		  var gender = $('input[name="gender"]:checked').val();
    

  		  var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  		   
  		if(password=="" || confirm_password =="" || l_name=="" || f_name=="" || email=="" || date_of_b=="" || document.getElementById("gender").checked==false){

  			document.getElementById("error").setAttribute("class", "alert alert-danger"); 
  			document.getElementById("error").innerHTML = "You cant have empty fileds!";
          $("#error").fadeIn("slow");
         
  			return false;
  		}
  		if(/^[a-zA-Z]*$/.test(f_name) == false) {
   			document.getElementById("error").setAttribute("class", "alert alert-danger"); 
    		document.getElementById("error").innerHTML = "Your first name contains illegal characters.";
       
    		return false;}
  		if(/^[a-zA-Z]*$/.test(l_name) == false) {
   			document.getElementById("error").setAttribute("class", "alert alert-danger"); 
    		document.getElementById("error").innerHTML = "Your last name contains illegal characters.";
    		return false;}
  
  		if(!(re.test(email))){
  			document.getElementById("error").setAttribute("class", "alert alert-danger"); 
    		document.getElementById("error").innerHTML = "Email is not valid.<br>e.g:IntelliKide@gmail.com";
    		return false;

  		}

  			if(password.length <7){
  			document.getElementById("error").setAttribute("class", "alert alert-danger"); 
    		document.getElementById("error").innerHTML = "Password is too short";
    		return false;

  		}


 		if(password != confirm_password) {
  			document.getElementById("error").setAttribute("class", "alert alert-danger"); 
    		document.getElementById("error").innerHTML = "Passwords Don't Match";
    		return false;

  		} 


      document.getElementById("error").innerHTML = "";
      document.getElementById("error").setAttribute("class", ""); 
       document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> <br>Loading....</div></div>';

          
     
           var form1 = $('#reg12').serialize();
             console.log("reg1?"+form1);
          
            $.ajax({
                type: "get",
                url: "reg?"+form1,
                
                success: function (data) {

               
                    if(data.message == 0){
                      swal("Sorry!", "This email is already used! use another email to create your account!", "warning")
                      document.getElementById("load").innerHTML="";
                    }
                    else if(data.message == 2){
                      
                      swal("Sorry!", "Your age is not enough to create an acoount!(Age should above 18)", "warning")
                      document.getElementById("load").innerHTML="";
                    }
                    else{
                       
                        swal("Success!", "You have successfully registered!", "success");
                        setTimeout(function(){
                        
                         document.getElementById("load").innerHTML="";
                        window.location.href = "session?id="+data.list[0].user_id;
                        
                        },3000);
                    }

                },
                error: function (xhr, ajaxOptions, thrownError) {
                  console.log(thrownError);
                  sweetAlert("Sorry!", "Something went wrong!", "error");
                   document.getElementById("load").innerHTML="";
                


                }
            });
      
      return false;
      }
  </script>

</body>

</html>
