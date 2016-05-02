
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
                    <li class="active">
                      <a href="playground">Home</a>
                    </li>
                    <li>
                      <a href="child_profile">My Profile</a>
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
        
        @foreach($story_details as $row)
                  <div class="row">
                    
                      <div class="span6">
                      <div class="span2"></div>
                        <?php echo '<img src="'.$path_asset.$row->path.'" width="240px" height="120px"';?>
                        <br><br><br><br><br><br><br>
                        <div class="span2"></div>
                      </div>
                      <div class="span6">
                        
                        <h3><span style = "color:red;">Story Name : </span>{{$row->name}}</h3>
                        
                        <h4>{{$row->likes}} Kids Liked</h4>
                        <h4>{{$row->totalviews}} Kids Red</h4>
                          <div class="span3">
                        <a href={{'readStory?story_id='.$row->story_id}} class="button1">Read</a>
                          </div>
                      </div>
                    </div>


        @endforeach

<!-- End -->

      <div id="content">
        <div class="container">
          <div class="row">
            <div class="span12"></div>
          </div>
        </div>
      </div>

       
@stop

