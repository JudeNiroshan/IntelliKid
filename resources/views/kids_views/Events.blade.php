
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
                  <div class="row">
                    <div class="span4 banner banner1">
                      <div class="banner_inner">
                        <div class="banner_title clearfix">
                          <img src="{{asset('assets/kids_assets/images/ic1.png')}}" alt="" class="ic">
                          <div class="txt1 ">Watch Videos</div>
                        </div>
                        <div class="banner_txt clearfix">
                          <img src="{{asset('assets/kids_assets/images/banner1.jpg')}}" alt="" class="img img-circle">
                          <div class="txt2"></div>
                            <div class="banner_link">
                              <a href="videos" class="button1">Go</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="span4 banner banner2">
                        <div class="banner_inner"></div>
                      </div>
                      <div class="span4 banner banner3">
                        <div class="banner_inner">
                          <div class="banner_title clearfix">
                            <img src="{{asset('assets/kids_assets/images/ic3.png')}}"" alt="" class="ic">
                            <div class="txt1">Listen Songs</div>
                          </div>
                          <div class="banner_txt clearfix">
                            <img src="{{asset('assets/kids_assets/images/banner3.jpg')}}" alt="" class="img">
                            <div class="txt2"></div>
                              <div class="banner_link">
                                <a href="audio" class="button1">Go</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="span12">
                  <div class="banners">
                    <div class="container">
                      <div class="row">
                        <div class="span4 banner banner1">
                          <div class="banner_inner">
                            <div class="banner_title clearfix">
                              <img src="{{asset('assets/kids_assets/images/ic1.png')}}"" alt="" class="ic">
                              <div class="txt1">Read Stories</div>
                            </div>
                            <div class="banner_txt clearfix">
                              <img src="{{asset('assets/kids_assets/images/banner1.jpg')}}"" alt="" class="img">
                              <div class="txt2"></div>
                                <div class="banner_link">
                                  <a href="story" class="button1">Go</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="span4 banner banner2">
                            <div class="banner_inner"></div>
                          </div>
                          <div class="span4 banner banner3">
                            <div class="banner_inner">
                              <div class="banner_title clearfix">
                                <img src="{{asset('assets/kids_assets/images/ic3.png')}}"" alt="" class="ic">
                                <div class="txt1">Quiz</div>
                              </div>
                              <div class="banner_txt clearfix">
                                <img src="{{asset('assets/kids_assets/images/banner3.jpg')}}"" alt="" class="img">
                                <div class="txt2"></div>
                                  <div class="banner_link">
                                    <a href="quiz_page" class="button1">Go</a>
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
            </div>
          </div>

          <div id="content"></div>
          
@stop