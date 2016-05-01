
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
                  <li class="active">
                 
                    <a href="profile">My Profile</a>
                  <li>
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
              <div class="clearfix" id="slider">
                <div class="container">
                  <div class="row">
                    <div class="span3">
                      <img src="{{ asset($child->img_path) }}" class="center-block img-responsive img-rounded" height="200" width="400">
                    </div>
                    <div class="span6">
                      <h3><span style = "color:red;">Name : </span> {{ $child->lastname }}</h3> 
                      <h3><span style = "color:red;">Age : </span> {{ $child->Age }}</h3>
                      <h3><span style = "color:red;">Date of birth : </span> {{ $child->dateOfBirth }}</h3>
                      <h3><span style = "color:red;">Parent Name : : </span> {{ $parent->lastname }}</h3>
                      
                    </div>
                    <div class="span3"></div>
                  </div>
                  <div class="row">
                    <div class="span3"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          
@stop