@extends('parent_master')


@section('title')

@endsection



@section('content')
 
 <link rel="stylesheet" href="{{ URL::asset('assets/parent/profile/css/bootstrap.min.css')}}">
    <script src="assets/parent/js/typeahead.min.js"></script>
<style>
		

		ul.Vall {
			list-style: none;
			width: 1170px;
			margin: 10px auto;
		}

		li.all {
			width: 220px;
			height: 225px;
			float: left;
			
			margin: 0 40px 40px 0;
			
			padding: 10px;
			border: 5px solid #ECECEC;
			
			-webkit-transition: .3s;
			-moz-transition: .3s;
			-ms-transition: .3s;
			-o-transition: .3s;
			transition: .3s;
		}
		li.all h1 {
			font-size: 16px;
			margin: 0 0 10px 0;
			color: #A2CBE7;
		}
		li.all p {
			color: #fff;
		}

		ul.Vall li:hover {
			border: 5px solid white;
			
			-webkit-box-shadow: 0 0 10px rgba(0,0,0,.3);
			-moz-box-shadow: 0 0 10px rgba(0,0,0,.3);
			box-shadow: 0 0 10px rgba(0,0,0,.3);
			
			opacity: 1;
			filter: alpha(opacity=100);
		}
		ul.Vall:hover li:not(:hover) {
			opacity: .3;
			filter: alpha(opacity=30);
			
			-webkit-transform: scale(.9);
			-moz-transform: scale(.9);
			-ms-transform: scale(.9);
			-o-transform: scale(.9);
			transform: scale(.9);
		}
		</style>


		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	

	<div class="grid grid_8" style="padding-left:26%">
          <form action="search" method="get">
		<input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" id="search" name="search"  type="text"  placeholder="SEARCH"  >
            <div style="padding-left:100%;padding-top:-10%;margin-bottom:20%">
              	<button type="submit" class="btn btn-info">SEARCH</button>
</div>
</form>

              </div> 
                  
                    </div>
                    <br>
                    <br>
                    <br>
                     <br>
                    <br>
                    <br>
      
                  <br>
                   
 @if(!empty($videos))  
<div class="container">

  <div class="panel panel-default" >
	
<ul class="Vall">

@foreach($videos as $data)
		<a href="view_videos?id={{$data->id}}&cat={{$data->cat}}"><li class="all">
			<h1>{{$data->title}}</h1>
			<video width="160"  height="130" controls style="padding-left:5%;" id="myVideo" name="myVideo" />
  <source src="{{$data->path}}" type="video/mp4" >
  <source src="assets/parent/videos/" type="video/ogg">

</video>

		</li>
		</a>
		
@endforeach
	</ul>
	</div>
	</div>


	@else
	<div class="container" style="margin-left:20%">

  <div class="panel panel-default" style="width:50%;padding-left:17%;">


  <h3>NOT AVAILABLE</h3>
	</div>
	</div>

	@endif
 
                    <br>
                    <br>
                      <br>
                    <br>
                      <br>
                    <br>
                      <br>
                    <br>
                    <br>


 
@endsection
<script type="text/javascript">
	

window.onload = time;
</script>
<script type="text/javascript">

$("input#search").live("keyup", function(e) {

    // Set Search String
    var search_string = $(this).val();

    // Do Search
    if(search_string !== ''){
        $.ajax({
            type: "POST",
            url: "search",
            data: { key: search_string },
            cache: false,
            success: function(html){
            	alert(html);
                $("#here").html(html);
            }
        });
    }return false;
});


</script>

 

