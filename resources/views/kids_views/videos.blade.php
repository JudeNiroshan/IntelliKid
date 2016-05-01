
@extends('Layouts.kids_master_page')
@section('body')




<div class="container">
      <div class="row">
        <div class="span12">
          <div class="navbar navbar_">
            <div class="navbar-inner navbar-inner_">
              <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <div class="nav-collapse nav-collapse_ collapse">
                <ul class="nav sf-menu clearfix">
                  <li>
                    <a href="playground">Home</a>
                  </li>
                  <li>
                    <a href="profile">My Profile</a>
                  <li class="active">
                    <a href="events">Events</a>
                  </li>
                  <li>
                    <a href="achievment">Achievments</a>
                  </li>
                  <li>
                    <a href="todoList">To Do List</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="hl1">
            <img src="{{asset('assets/kids_assets/images/hl1.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div id="slider_wrapper">
      <div class="clearfix" id="slider">
        <div class="container">
          <div class="row">
            <div class="span">
              <div class="banners">
                <div class="container">
                  
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="span12">
                  <div class="banners">
                    <div class="container">
                      <div class="row">
                        <div class="span6 banner banner1">

                          <?php

                            $path_asset = asset('');

                        ?>

                          @foreach($video_list as $row)

                            <div class="section">
                            <div class="container">
                              <div class="row">
                                
                                 
                                <div class="span6">
                                <?php echo '<video width="540" hieght="360" controls="controls" onplay="onPlayFunction('.$row->id.')" onended="onEndFunction('.$row->id.')">' ;?>
                                    <source src="{{ asset($row->path) }}">
                                </video>

                                      <br><br><br><br><br>
                                </div>
                               
                                

                                <div class="span">
                                  <h3><span style = "color:red;">Name : </span>{{$row->name}}</h3>
                                  
                                  <h4>{{$row->likes}} Kids Liked</h4>
                                  <h4>{{$row->totalviews}} Kids viewed</h4>   

                                  <?php echo '<p id="'.$row->id.'">Like this <a href="" onclick="return onclickFunction('.$row->id.')"><img src="'.$path_asset.'assets/kids_assets/images/like.png" width="40px" height="40px"> </a></p> ';?> 


                                </div>

                                
                              <br><br><br><br><br>
                               </div>
                            </div>
                          </div>
                          

                          @endforeach



                          </div>
                        
                         
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="content"></div>

          <script>
              function onPlayFunction(vId) {


                  $.ajax({

                    type: "get",
                    url: "play_btn_update_db_onPlay",
                    data: { 
                        vId:vId  
                },
                success: function (data)
                {
                   
                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                }
            });

      return false;
      
              }  


              function onEndFunction(vId) {
                  $.ajax({

                    type: "get",
                    url: "play_btn_update_db_onEnd",
                    data: { 
                        vId:vId  
                },
                success: function (data)
                {
                  swal("Good job!", "You earned 4 points!", "success");  
                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                  
                }
            });

      
      return false;
      
              }


              function onclickFunction(vId){
              $.ajax({

                  type: "get",
                  url: "like_video",
                  data: {
                    vId:vId
                  },
                success: function (data)
                {
                  document.getElementById(data.vId).innerHTML = '<p><h5><span style = "color:blue;">Liked</h5></p>';
                   

                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                  
                }
            });

      
                    return false;
      
              }
  
         </script>

                                


          
          
@stop

