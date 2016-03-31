<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/adminPage_assets/css/normalize.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/adminPage_assets/css/demo.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/adminPage_assets/css/book.css') }}" />
<script src="{{ URL::asset('assets/adminPage_assets/js/modernizr.custom.js') }}"></script>


<div class="container">
            
            <div class="component">

                <form method="get" action="upload_videos">
                    <input type="text" name="fname"/>
                    <input name="file[]" type="file">
                    <input type="submit" value="login"/> 
                </form>
            </div>
        </div><!-- /container -->



</body>
</html>



