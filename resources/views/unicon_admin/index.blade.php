@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')
    <div id="content">
          <div id="content-header" class="mini">
            <h1>Dashboard</h1>
            <ul class="mini-stats box-3">
              <li>
                <div class="left sparkline_bar_good">
                  <span>2,4,9,7,12,10,12</span>+10%</div>
                  <div class="right">
                    <strong>36094</strong>Total Users</div>
                  </li>
                  <li>
                    <div class="left sparkline_bar_neutral">
                      <span>20,15,18,14,10,9,9,9</span>0%</div>
                      <div class="right">
                        <strong>13</strong>Last Day Users</div>
                      </li>
                    </ul>
                  </div>
                  <div id="breadcrumb">
                    <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
                    <a href="#" class="current">Dashboard</a>
                  </div>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-xs-12 center" style="text-align: center;">
                        <ul class="quick-actions">
                          <li>
                            <a href="#">
                              <i class="fa fa-2x icon-database -text-o fa-puzzle-piece"></i>
                              Manage Events
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-2x icon-database fa-file-text-o"></i>
                              Reports
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-2x icon-database fa-users"></i>
                              Manage Users
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fa fa-2x fa-bar-chart-o icon-piechart"></i>
                              Statistics
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="alert alert-info">Welcome in the
                          <strong>Intellikid Admin page</strong>. You can manage Intellikid contents!
                          <a href="#" data-dismiss="alert" class="close">×</a>
                        </div>
                        <div class="widget-box">
                          <div class="widget-title">
                            <span class="icon">
                              <i class="fa fa-signal"></i>
                            </span>
                            <h5>Site Statistics</h5>
                            <div class="buttons">
                              <a href="#" class="btn"><i class="fa fa-refresh"></i> <span class="text">Update stats</span></a>
                            </div>
                          </div>
                          <div class="widget-content">
                            <div class="row">
                              <div class="col-xs-12 col-sm-4">
                                <ul class="site-stats">
                                  <li>
                                    <div class="cc">
                                      <i class="fa fa-user"></i>
                                      <strong>{{ $totalusers }}</strong>
                                      <small>Total Users</small>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="cc">
                                      <i class="fa -plus fa-star-half-empty"></i>
                                      <strong>16</strong>
                                      <small>New Users (this week)</small>
                                    </div>
                                  </li>
                                  <li class="divider"></li>
                                  <li>
                                    <div class="cc">
                                      <i class="fa -times fa-thumbs-o-down"></i>
                                      <strong>{{$freezedUsers}}</strong>
                                      <small>Freezed Accounts</small>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="cc">
                                      <i class="fa -times fa-times-circle"></i>
                                      <strong>{{$removedUsers}}</strong>
                                      <small>Removed Accounts</small>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class="col-xs-12 col-sm-8">
                                <div class="chart"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="widget-box">
                          <div class="widget-title">
                            <span class="icon">
                              <i class="fa fa-bar-chart-o"></i>
                            </span>
                            <h5>Logged in users (per week)</h5>
                          </div>
                          <div class="widget-content">
                            <div class="bars"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                        <div class="widget-box">
                          <div class="widget-title">
                            <span class="icon">
                              <i class="fa fa-bar-chart-o"></i>
                            </span>
                            <h5>Pie chart</h5>
                          </div>
                          <div class="widget-content">
                            <div class="pie"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
@stop            

        