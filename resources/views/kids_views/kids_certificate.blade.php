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
                    <a href="achievments">Achievments</a>
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
              <div class="span12">
                <div class="banners">
                  <div class="container">
                    <div class="row">

                    <div class="span2 banner banner2">
                        <div class="banner_inner"></div>
                    </div> 

                      <div class="span8 banner banner1">
                        <div class="banner_inner">
                          <div class="banner_title clearfix">
                            <img src="{{asset('assets/kids_assets/images/ic1.png')}}"  alt="" class="ic">
                            <div class="txt1">Cerificate </div>
                          </div>
                          <div class="banner_txt clearfix">
                               <div><h4>Congratulations!!. You recived an certificate</h4></div>
                              <div><hr/></div>
                            <div class="container">
                              <br/>
                              <div class="span5 txt2 ">
                                @if($result[0]->madal == "1st")
                                    <h5><span style="color:red;" >Summery : </span> congratulations!!, you did this quiz well.</h5>
                                @elseif($result[0]->madal == "2nd")  
                                    <h5><span style="color:red;" >Summery : </span> You did this quiz well, Next time do it well.</h5>
                                @elseif($result[0]->madal == "3rd")  
                                    <h5><span style="color:red;" >Summery : </span> You have not done this quiz well. </h5>  
                                @elseif($result[0]->madal == "")  
                                    <h5><span style="color:red;" >Summery : </span> You have to work hard.</h5> 
                                @endif         

                                <h5><span style="color:red;" >Name : </span> {{$child_result[0]->lastname}}</h5> 
                                <h5><span style="color:red;" >Category : </span> {{$result[0]->category}}</h5>
                                <h5><span style="color:red;" >Results : </span> You got {{$result[0]->num_correct_ans}} right
                                out of {{$result[0]->num_question}} questions</h5> 
                                 
                              </div>
                              <div class="span3 txt2 ">
                                
                                <?php 
                                    $path = asset(''); 
                                    
                                ?>
                                @if($result[0]->madal != "")
                                 <img src=<?php echo '"'.$path.'assets/kids_assets/images/'.$result[0]->madal.'.png"';?>  width="100" height="200" alt="" class="ic">
                                @endif
                              </div>
                              
                            </div>
                            <div><hr/></div>
                            
                            <div class="banner_link">
                              <a href="playground" class="button1">Home</a>
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
      </div>
          
@stop