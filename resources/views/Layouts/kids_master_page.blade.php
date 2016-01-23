<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kids | Playground</title>


    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin_assets/css/bootstrap.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin_assets/css/sb-admin.css') }}">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin_assets/css/plugins/morris.css') }}">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin_assets/font-awesome/css/font-awesome.min.css') }}">


    <!-- kids styles -->
    <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/kids_assets/css/style.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand|Arvo:400,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

@yield('body')

<!-- jQuery -->
	<script src="{{ URL::asset('assets/admin_assets/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('assets/admin_assets/js/bootstrap.min.js') }}"></script>
    

    <!-- Morris Charts JavaScript -->
    <script src="{{ URL::asset('assets/admin_assets/js/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin_assets/js/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin_assets/js/plugins/morris/morris-data.js') }}"></script>


    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="{{ URL::asset('assets/admin_assets/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('assets/admin_assets/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/admin_assets/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ URL::asset('assets/admin_assets/js/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('assets/admin_assets/js/plugins/flot/flot-data.js') }}"></script>
    <script src="{{ URL::asset('assets/admin_assets/js/plugins/morris/morris-data.js') }}"></script>

    <!-- kids JavaScript -->
    <script src="{{ URL::asset('assets/kids_assets/js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ URL::asset('assets/kids_assets/js/jquery.placeholder.js') }}"></script>
    <script src="{{ URL::asset('assets/kids_assets/js/main.js') }}"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>



    

</body>
</html>