@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')
<div id="content">
  <div id="content-header" class="mini">
    <h1>Dashboard</h1>
    <!-- <ul class="mini-stats box-3">
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
            </ul> -->
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
                    <a href="#" data-toggle="modal" data-target="#managePoints">
                      <i class="fa fa-2x icon-database-text-o fa-puzzle-piece"></i>
                      Points Plan
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
                     
                      <div class="col-xs-12 col-sm-9">
                        <!-- Login cart will display here -->
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart | Daily loggedin time
                          <div class="pull-right">
                            <div class="btn-group">
                              <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Action</a>
                                </li>
                                <li><a href="#">Another action</a>
                                </li>
                                <li><a href="#">Something else here</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <div class="row">
                             <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>  </th>

                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; ?>
                                              @foreach($loginResult as $result)
                                                <tr>
                                                      <td>{{$result->id}}</td>
                                                      <td>{{$result->firstname}}</td>
                                                      <td>
                                                          <a href={{'unicon_admin_index?id='.$result->id}}> >> </a>
                                                      </td>
                                                </tr>
                                                <!--
                                                <script type="text/javascript">
                                                    function showChart(){

                                                        var hidden_userID = document.getElementById("idvalue1").value;
                                                        alert(hidden_userID);
                                                        
                                                          $.ajax({
                                                              type: "get",
                                                              url: "unicon_admin_index",
                                                              data: { 
                                                                  h_userID:hidden_userID
                                                                 

                                                                   
                                                              },
                                                              success: function (data)
                                                              {
                                                                
                                                                  //alert(data);

                                                              },
                                                              error: function (xhr, ajaxOptions, thrownError) 
                                                              {

                                                                 
                                                              
                                                              }
                                                          });
                                                  
                                                        
                                                    
                                                    
                                                    return false;
                                                    
                                                    
                                                    }
                                                </script>
                                                -->
                                               
                                                <?php $i++; ?>
                                              @endforeach  
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            
                            <!-- /.col-lg-4 (nested) -->
                            <div class="col-lg-8">
                              
                                <div id="bar-example"></div>
                                <div>
                                  y-axis = Logged in Time <br/>
                                  x-axis = From Previous 7 day to Current day. 
                                </div>
                              
                            </div>
                            <!-- /.col-lg-8 (nested) -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                      </div>
                      <!-- /.panel -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="managePoints" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Manage Points</h4>
            </div>
            <div class="modal-body">
               <div class="widget-content nopadding">
                  <form action="#" method="get" class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 col-md-4 col-lg-4 control-label">Video</label>
                      <div class="col-sm-8 col-md-8 col-lg-8">
                        <select id="mySelectVideo"> 
                          @for ($i = 0; $i < 10; $i++)
                            <option <?php if ($points->video == $i ) echo 'selected' ; ?> >{{$i}}</option>
                          @endfor
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 col-md-4 col-lg-4 control-label">Audio</label>
                      <div class="col-sm-8 col-md-8 col-lg-8">
                        <select id="mySelectAudio">
                          @for ($i = 0; $i < 10; $i++)
                            <option <?php if ($points->audio == $i ) echo 'selected' ; ?> >{{$i}}</option>
                          @endfor
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 col-md-4 col-lg-4 control-label">Story</label>
                      <div class="col-sm-8 col-md-8 col-lg-8">
                        <select id="mySelectStory">
                          @for ($i = 0; $i < 10; $i++)
                            <option <?php if ($points->story == $i ) echo 'selected' ; ?> >{{$i}}</option>
                          @endfor
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 col-md-4 col-lg-4 control-label">Question</label>
                      <div class="col-sm-8 col-md-8 col-lg-8">
                        <select id="mySelectQuestion">
                          @for ($i = 0; $i < 10; $i++)
                            <option <?php if ($points->quesion == $i ) echo 'selected' ; ?> >{{$i}}</option>
                          @endfor
                        </select>
                      </div>
                    </div>
                  </form>
                </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" onclick="updatePoints()" data-dismiss="modal">Update</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- End Modal -->
      

      <script type="text/javascript">
    /*
     * Play with this code and it'll update in the panel opposite.
     *
     * Why not try some of the options above?
     */


      Morris.Bar({
        element: 'bar-example',
        data: [
          { y: <?=substr($sixDayBack,8,2)?>, a: <?=(int)$sixDayBackInTimeLength ?>},
          { y: <?=substr($fiveDayBack,8,2)?>, a: <?=(int)$fiveDayBackInTimeLength?>},
          { y: <?=substr($fourDayBack,8,2)?>, a: <?=(int)$fourDayBackInTimeLength?>},
          { y: <?=substr($threeDayBack,8,2)?>, a: <?=(int)$threeDayBackTimeLength?>},
          { y: <?=substr($twoDayBack,8,2)?>, a: <?=(int)$twoDayBackTimeLength?>},
          { y: <?=substr($oneDayBack,8,2)?>, a: <?=(int)$oneDayBackTimeLength?>},
          { y: <?=substr($today,8,2)?>, a:<?=(int)$todayInTimeLength?>}
        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['LoggedIn Hours'],
        
      });
  </script>
  <script type="text/javascript">
        
        function updatePoints(){

                var videoPoints = document.getElementById("mySelectVideo").value;
                var audioPoints = document.getElementById("mySelectAudio").value;
                var storyPoints = document.getElementById("mySelectStory").value;
                var questionPoints = document.getElementById("mySelectQuestion").value;

                  $.ajax({
                      type: "get",
                      url: "updatePoints",
                      data: { 
                          videoPoints:videoPoints,
                          storyPoints:storyPoints,
                          questionPoints:questionPoints,
                          audioPoints:audioPoints  
                      },
                      success: function (data)
                      {
                        
                          swal("Good job!", "Updated uccessfully", "success")
                           

                      },
                      error: function (xhr, ajaxOptions, thrownError) 
                      {

                      
                      }
                  });
                
            
            return false;
            
            
            }

            
  </script>
   

  
@stop            

