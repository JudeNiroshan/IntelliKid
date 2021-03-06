<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.bootstrap-hunter.com/unicorn/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jan 2016 16:00:18 GMT -->
<head>
	<title>Unicorn Admin</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/bootstrap.min.css') }}"> 
	<link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/font-awesome.css') }}"> 
	<link rel="stylesheet" href="{{ URL::asset('assets/adminPage_assets/css/unicorn-login.css') }}">
	<!-- sweetalert CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/adminPage_assets/css/sweetalert.css') }}"> 
	
    <script src="{{ URL::asset('assets/adminPage_assets/js/respond.min.js') }}"></script>


    <style>
		
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

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-44987299-1', 'bootstrap-hunter.com');
		ga('send', 'pageview');

	</script>
</head> 
<body>

	<?php $path=URL::asset(''); ?> 
	<div id="container">
		<div id="logo">
            <img src="{{ URL::asset('assets/images/logo5.png') }}" width="160" height="90">
		</div>
		<div id="user">
			<div class="avatar">
				<div class="inner"></div>
				<img  style="width:80px;" <?php echo 'src="'.$path.'assets/adminPage_assets/forum_style/img/team/img7.jpg"';?>>
			</div>

			<div class="text">
				<h4>Hello,<span class="user_name"></span></h4>
			</div>
		</div>
		<div id="loginbox">

			<form id="loginform" action="admin_login_auth" method="post" onsubmit="return loginValidateForm()">
				<p>Enter username and password to continue.</p>
				<div class="input-group input-sm">
					<span class="input-group-addon"><i class="fa fa-user"></i></span><input class="form-control" type="text" id="username" name="username" placeholder="Username"/>
				</div>
				<br/>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" type="password" id="password" name="password" placeholder="Password"/>
				</div>
				<br/>
				<div class="form-actions clearfix">
					<!-- <div class="pull-right">
						<a href="#recoverform" class="flip-link to-recover blue">Lost password?</a>
					</div> -->

					<input type="submit" class="btn btn-block btn-primary btn-default" value="Login"/>
				</div>
			</form>

			<form id="recoverform" action="#" onsubmit="return loginReset()">
				<p>Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span><input class="form-control" type="text" placeholder="E-mail address" id="email"/>
				</div>
				<div class="form-actions clearfix">
					<div class="pull-left">
						<a href="#loginform" class="grey flip-link to-login">Click to login</a>
					</div>

					<input type="submit" class="btn btn-block btn-inverse" value="Recover"/>
				</div>
			</form>

			<!-- Admin does not have a Registration form-->
			<form id="registerform" action="#">
				<!-- <p>Enter information required to register:</p>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span><input class="form-control" type="text" placeholder="Enter Username"/>
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" type="password" placeholder="Choose Password"/>
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" type="password" placeholder="Confirm password"/>
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span><input class="form-control" type="text" placeholder="Enter E-mail address"/>
				</div>
				<div class="form-actions clearfix">
					<div class="pull-left">
						<a href="#loginform" class="grey flip-link to-login">Click to login</a>
					</div>
					<div class="pull-right">
						<a href="#recoverform" class="grey flip-link to-recover">Lost password?</a>
					</div>
					<input type="submit" class="btn btn-block btn-success" value="Register"/>
				</div> -->
			</form>

			@if($status == 1)
				<script type="text/javascript">
					sweetAlert("Oops...", "Username or Password is incorrect..!", "error");
				</script>
			@endif


		</div>
		 <div class="form-group">
	            <div id="error" name="error" class="alert-link" style="color:red" ></div>
	            <div id="load"></div>
	     </div>
	</div>

    <script src="{{ URL::asset('assets/adminPage_assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/adminPage_assets/jquery-ui.custom.min.js') }}"></script>
    <script src="{{ URL::asset('assets/adminPage_assets/js/unicorn.login.js') }}"></script>
    <!-- sweetalert JS -->
    <script src="{{ URL::asset('assets/adminPage_assets/js/sweetalert.min.js') }}"></script> 


    <script type="text/javascript">
    function loginValidateForm() {
        var un = document.getElementById('username').value;
        var pw = document.getElementById('password').value;
        if (un == null || un == "") {
            sweetAlert("Oops...", "Username Field is Required..!", "error");
            return false;
        }else if(pw == null || pw == "") {
        	sweetAlert("Oops...", "Password Field is Required..!", "error");
            return false;
        }else{
        	
    		document.getElementById("load").innerHTML = '<div class="block"> <div class="loading"><span class="ball1"></span><span class="ball2"></span> Loading....</div></div>';

        	return true;
        }
    }

    function loginReset() {
        var email = document.getElementById('email').value;
        var atpos = email.indexOf("@");
	    var dotpos = email.lastIndexOf(".");
	    

        if (email == null || email == "") {
            sweetAlert("Oops...", "Email Field is Required..!", "error");
            return false;
        }else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        	sweetAlert("Oops...", "Not a valid e-mail address..!", "error");
	        return false;
	    }else{
        	return true;
        }
    }



</script>

</body>


</html>
