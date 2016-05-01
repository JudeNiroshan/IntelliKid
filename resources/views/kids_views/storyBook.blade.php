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
                    </li>
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
      <div id="slider_wrapper"></div>
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="hl1">
              <img src="{{asset('assets/kids_assets/images/hl1.png')}}" alt="">      
            </div>
          </div>
        </div>
      </div>

       <!-- start --> 

       
       <?php

          $path_asset = asset('');

        ?>


        <div class="row">
          <!-- <div class="span2"></div> -->
           <div class="span3"></div>
              <div class="span8">
                
                <?php

                  $file = asset('').$story_path;
                  $document = file_get_contents($file);

                  echo '<center><h2>'.$story_name.'</h2></center>';
                  
                  echo '<center><h4><b>'.$document.'</b></h4></center>';

                ?>
              </div>

              <div class="span2"></div>
         
          
        </div> 

        <div class="row">
          <div class="span5"></div>
            <div class="span7">
              <?php echo '<p>Like this <a href="" onclick="onclickFunction('.$story_id.')"><img src="'.$path_asset.'assets/kids_assets/images/like.png" width="40px" height="40px"> </a></p> ';?>
              <a href="story"><h4><span style = "color:red">Go back to Story page</span></h4></a>
            </div>
        </div>




       <!-- end -->

       <div id="content">
        <div class="container">
          <div class="row">
            <div class="span12"></div>
          </div>
        </div>
      </div>



      <script>

      function onclickFunction(sId){
              $.ajax({

                  type: "get",
                  url: "like_story",
                  data: {
                    sId:sId
                  },
                success: function (data)
                {
                  //  document.getElementById(data.sId).innerHTML = '<p>Liked</p>';

                    document.getElementById(data.sId).innerHTML = '<p><h5><span style = "color:blue;">Liked</h5></span></p>';
                },
                error: function (xhr, ajaxOptions, thrownError) 
                {


                }
            });

                    return false;
      
              }

      </script>

       
@stop
