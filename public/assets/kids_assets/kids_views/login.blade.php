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
    <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css1/bootstrap.min.css') }}">    

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css1/metisMenu.min.css') }}">   

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css1/sb-admin-2.css') }}">   

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css1/font-awesome.min.css') }}">   

	<style>
		body {
			background: url({{asset('assets/kids_assets/image/img4.jpg')}});
			background-size: 1400px 900px;
			background-repeat: no-repeat;
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
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ URL::asset('assets/kids_assets/js1/jquery.min.js') }}"></script>  

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('assets/kids_assets/js1/bootstrap.min.js') }}"></script>  

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL::asset('assets/kids_assets/js1/metisMenu.min.js') }}"></script> 

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('assets/kids_assets/js1/sb-admin-2.js.js') }}"></script>
  
</body>

</html>


