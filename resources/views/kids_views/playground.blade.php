
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
            </div>
          </div>
        </div>
      </div>
      <div class="banners"></div>
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="span7">
              <h1 class="home">Welcome {{ $child->lastname }}</h1>
              
              <ul class="ul1">
                <li class="clearfix">
                  <div class="txt1">1</div>
                  <div class="txt2"><h3>You can watch wonderfull videos here</h3></div>
                </li>
                <li class="clearfix">
                  <div class="txt1">2</div>
                  <div class="txt2"><h3>You can listen your favourite songs here</h3></div>
                </li>
                <li class="clearfix">
                  <div class="txt1">3</div>
                  <div class="txt2"><h3>You can read stories here</h3></div>
                </li>
              </ul>
              <div class="text-right">
                <a href="#" class="button2">read more</a>
              </div>
            </div>
            <div class="span5">
              <div class="thumb1">
                <div class="thumbnail clearfix">
                  <figure class="">
                    <img src="{{asset('assets/kids_assets/images/home01.png')}}" alt="">
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@stop
      