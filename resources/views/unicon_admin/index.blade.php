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
                      <i class="fa fa-bar-chart-o"></i>
                      Points Plan
                    </a>
                  </li>
                  <li>
                    <a href="unicon_admin_view_users">
                      <i class="fa -list fa-eye"></i>
                      View users
                    </a>
                  </li>
                  <li>
                    <a href="article">
                      <i class="fa fa-file-text-o"></i>
                      Articles
                    </a>

                  </li>
                  <li>
                    <a href="forum">
                      <i class="fa -text-o fa-comments-o"></i>
                      Forum
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
      
      <br/><br/><br/>
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

