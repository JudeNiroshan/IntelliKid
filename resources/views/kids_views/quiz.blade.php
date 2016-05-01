
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
              
          <!--   <!DOCTYPE html>
          <html>
          <head>
            <title>Dynamic Quiz Project</title>
            <link type='text/css' rel='stylesheet' href='stylesheet.css'/>
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans"/>
          </head>
          <body> -->
            <div id='container'>
              <div class="row">
               <div class="span3"></div>
                <div class="span6">
                

                <div class="accordion" id="accordion1">
                  <div class="accordion-group">

                  <h1>Quiz</h1>  
                  @if(isset($quizCategory))
                      @foreach($quizCategory as $row )
                        @if($row->dueTime >= $date_now)
                         
                          <div class="accordion-heading">
                              <a class="accordion-toggle"  href={{'kids_quiz?id='.$row->eid.'&sid='.$row->schedule_id}} >
                                {{$row->ename}}
                              </a>
                          </div>
                          <br/>
                        @endif
                      @endforeach 
                  @else
                    <div class="accordion-heading">
                        <h1>No Qiuz Today</h1>
                    </div>
                  @endif   
                      
                  </div>
              </div>
             </div> 

            <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
            <script type="text/javascript" src='questions.json'></script>
            <script type='text/javascript' src='jsquiz.js'></script>
         <!--  </body> -->
             
      </div>
     </div>    

          
@stop