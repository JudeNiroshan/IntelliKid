<?php
include_once "../app/Classes/mp3Time/MP3File.php";
?>

@extends('parent_master')


@section('title')



@endsection



@section('content')
 
 <link rel="stylesheet" href="{{ URL::asset('assets/parent/profile/css/bootstrap.min.css')}}">
 <link rel="stylesheet" href="assets/parent/js/jPlayer/jplayer.flat.css" type="text/css" />
 <link rel="stylesheet" href="assets/parent/css/simple-line-icons.css" type="text/css" />

   <link rel="stylesheet" href="assets/parent/css/app.css" type="text/css" />
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
          <form action="search_cat_audios" method="get">
		<input class="nicdark_bg_grey2 nicdark_radius nicdark_shadow grey small subtitle" id="search" name="search" value="{{$search}}" type="text"  placeholder="SEARCH"  >
		<input type="text" value="{{$cat}}" id="cat" name="cat" hidden>
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
                   



<input type="text" value="{{$c}}"  id="filter" hidden >





@if(!empty($data))

 <section >
 
    <section>
      <section class="hbox stretch">
     
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder-lg w-f-md" id="bjax-target">
                  <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin" ></a>
                  <h2 class="font-thin m-b"><a id="header" calss="btn btn-info" role="button" >Songs</a> <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px">
                    <span class="bar1 a1 bg-primary lter"></span>
                    <span class="bar2 a2 bg-info lt"></span>
                    <span class="bar3 a3 bg-success"></span>
                    <span class="bar4 a4 bg-warning dk"></span>
                    <span class="bar5 a5 bg-danger dker"></span>
                  </span></h2>
                  <div class="row row-sm">


                  
@foreach($data as $d)


 <?php
$newstring = str_replace("\\", "/", $d->path);
$mp3file = new MP3File($newstring);
$duration1 = $mp3file->getDurationEstimate();
$duration2 = $mp3file->getDuration();

$time =  MP3File::formatTime($duration2);
?>




                    <div class="clearfix visible-xs"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                        <div class="bottom">
                            <span class="badge bg-info m-l-sm m-b-sm">{{$time}}</span>
                          </div>
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted "></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                             <a data-toggle="class"  onclick="addlist({{$d->id}})">
                              <i id="plus{{$d->id}}" class="glyphicon glyphicon-plus i-2x text"></i>
                            <!--   <i id="p123" class="glyphicon glyphicon-minus i-2x text-active" ></i> -->
                                  </a>


                            </div>
                            <div class="bottom padder m-b-sm">
                                                          
                            </div>
                          </div>
                          <a href="#"><img src="{{$d->img_path}}" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a  class="text-ellipsis">{{$d->name}}</a>
                          <p id="add{{$d->id}}" style="color:green" hidden>Added</p>
                       
                        </div>
                      </div>
                    </div>



@endforeach
                    
                  </div>
                </section>
                <footer class="footer bg-dark" style="position:fixed;height:10%">
                  <div id="jp_container_N">
                    <div class="jp-type-playlist">
                      <div id="jplayer_N" class="jp-jplayer hide"></div>
                      <div class="jp-gui">
                        <div class="jp-video-play hide">
                          <a class="jp-video-play-icon">play</a>
                        </div>
                        <div class="jp-interface">
                          <div class="jp-controls">
                            <div><a class="jp-previous"><i class="glyphicon glyphicon-backward i-lg"></i></a></div>
                            <div>
                              <a class="jp-play" id="playb" onclick="play()" ><i class="glyphicon glyphicon-play i-2x"></i></a>
                              <a class="jp-pause hid"><i class="glyphicon glyphicon-pause i-2x"></i></a>
                            </div>
                            <div><a class="jp-next"><i class="glyphicon glyphicon-forward i-lg"></i></a></div>
                            <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                            <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="  glyphicon glyphicon-list"></i></a></div>
                            <div class="jp-progress hidden-xs">
                              <div class="jp-seek-bar dk">
                                <div class="jp-play-bar bg-info">
                                </div>
                                <div class="jp-title text-lt">
                                  <ul>
                                    <li></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm">
                              <a class="jp-mute" title="mute"><i class="glyphicon glyphicon-volume-up"></i></a>
                              <a class="jp-unmute hid" title="unmute"><i class="glyphicon glyphicon-volume-off"></i></a>
                            </div>
                            <div class="hidden-xs hidden-sm jp-volume">
                              <div class="jp-volume-bar dk">
                                <div class="jp-volume-bar-value lter"></div>
                              </div>
                            </div>
                            <div>
                              <a class="jp-shuffle" title="shuffle"><i class="glyphicon glyphicon-random text-muted"></i></a>
                              <a class="jp-shuffle-off hid" title="shuffle off"><i class="glyphicon glyphicon-random text-lt"></i></a>
                            </div>
                            <div>
                              <a class="jp-repeat" title="repeat"><i class="glyphicon glyphicon-retweet  text-muted"></i></a>
                              <a class="jp-repeat-off hid" title="repeat off"><i class="glyphicon glyphicon-retweet text-lt"></i></a>
                            </div>
                            <div class="hide">
                              <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                              <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="jp-playlist dropup" id="playlist">
                        <ul class="dropdown-menu aside-xl dker">
                          <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                          <li class="list-group-item"></li>
                        </ul>
                      </div>
                      <div class="jp-no-solution hide">
                      
                     
                      </div>
                    </div>
                  </div>
                </footer>
              </section>
            </section>



          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>    
  </section>




<br><br>

@else






<br><br><br><br>  
	
<start section
<section class="nicdark_section">

    
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space10"></div>

        <div class="grid grid_12 nicdark_bg_grey nicdark_shadow nicdark_radius" style="padding-left:25%">     
            <div class="nicdark_margin10">
           

                <div class="grid grid_0 percentage">
                    <div class="nicdark_margin12 nicdark_relative">
                        <a href="#" class="nicdark_btn_icon nicdark_bg_orange extrabig nicdark_shadow nicdark_radius_circle white nicdark_absolute nicdark_displaynone_ipadpotr"><i class="icon-download-outline"></i></a>
                        
                        <div class="nicdark_activity nicdark_marginleft100 nicdark_disable_marginleft_ipadpotr">
                            <h4>NO MACHING SEARCH RESULTS FOUND</h4>                        
                            <div class="nicdark_space20"></div>
                            <p>Content not avilable</p>
                        </div>    
                    </div>
                </div>


            </div>
        </div>

    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    
</section>
@endif

 
                  


 
@endsection

  <script src="assets/parent/js/jquery.min.js"></script>
      <script src="assets/parent/js/jPlayer/bootstrap.js"></script>
  <script type="text/javascript" src="assets/parent/js/jPlayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="assets/parent/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="assets/parent/js/jPlayer/demo.js"></script>
  <script type="text/javascript">
	

window.onload = time;
</script>
<script type="text/javascript">


 $(document).ready(function() {

 });




function addlist(id){


   var cat = document.getElementById("cat").value;
   
   
    $.ajax({
            type: "GET",
            url: "add_or_remove_from_que",
            data: { id:id },
            success: function(data){

              if(data == 200){

                document.getElementById("plus"+id).setAttribute("class", "glyphicon glyphicon-share i-2x text");
                $("#add"+id).show();

              }
              else{
                document.getElementById("plus"+id).setAttribute("class", "glyphicon glyphicon-plus i-2x text");
                $("#add"+id).hide();
              }
             
            }
        });


}

$("input#search").live("keyup", function(e) {

    // Set Search String
    var search_string = $(this).val();

    // Do Search
    if(search_string !== ''){
        $.ajax({
            type: "GET",
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

 

