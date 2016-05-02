
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
                    <li>
                      <a href="events">Events</a>
                    </li>
                    <li class="active">
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

      <form action="points" method="post">
        
        <div class="row">
          <!-- <div class="span8"> -->
            <div class="span2"></div>
            
            <div class="span1">
              <h6>select category</h6>
            </div>
            <div class="span3">
              <select name = "points_type" id = "points_type">
                <option value="Video">Video</option>
                <option value="Audio">Audio</option>
                <option value="Story">Story</option>
                <option value="Exam">Exam</option>
              </select>

            </div>
            <div class="span2">
              <button type="submit"  class="submit">View Points</button>
            </div>

        </div>
      </form>

      <!-- bootstrap table view -->
          @if($loadPointsStatus)
              <div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th><th></th>
                        <th>Categery</th>
                        <th>Total Points</th>
                      </tr>
                    </thead>
                      <tbody>
                      <tr>
                        <td></td><td></td>
                        <td>Videos</td>
                        <td>{{$videoPoints}}</td>
                      </tr>
                      <tr>
                        <td></td><td></td>
                        <td>Audios</td>
                        <td>{{$audioPoints}}</td>
                      </tr>
                      <tr>
                        <td></td><td></td>
                        <td>Stories</td>
                        <td>{{$storyPoints}}</td>
                      </tr>
                      <tr>
                        <td></td><td></td>
                        <td>Quiz</td>
                        <td>{{$quizPoints}}</td>
                      </tr>
                       </tbody>
                 </table>

              </div>

            @endif 
            

            @if($viewPointsStatus) 
                <div>
                   <table class="table">
                    <thead>
                      <tr>
                        <th></th><th></th>
                        <th>Date</th>
                        <th>Points</th>
                      </tr>
                    </thead>
                      <tbody>
                      @foreach($points_array as $row)

                      <tr>
                        <td></td><td></td>
                        
                        <td>{{$row->date}}</td>
                        <td>{{$row->points}}</td>
                      </tr>

                      @endforeach
                      
                       </tbody>
                   </table>
              @endif

                </div>


      


      



    
      
 
































<!-- End -->

      <div id="content">
        <div class="container">
          <div class="row">
            <div class="span12"></div>
          </div>
        </div>
      </div>

       
@stop

