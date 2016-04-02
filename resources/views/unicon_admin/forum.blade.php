@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')

<script src="//cdn.ckeditor.com/4.5.7/full/ckeditor.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/adminPage_assets/js/canvasjs.min.js') }}"></script>

<?php 
    $userID = $_SESSION['user_id']; 
    $path = URL::asset(''); 
                                     
?>


<div id="content">
  <div id="content-header" class="mini">
    <h1>Forum</h1>
    
          </div>
          <div id="breadcrumb">
            <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
            <a href="#" class="current">Forum</a>
          </div>
          <div class="container-fluid">
            
            <br>
            <div class="row">
              <div class="col-xs-12">
               <!--  <div class="alert alert-info">Welcome in the
                  <strong>Intellikid Admin page</strong>. You can manage Intellikid contents!
                  <a href="#" data-dismiss="alert" class="close">×</a>
                </div> -->
                <div class="widget-box">
                  <div class="widget-content">
                  <div class="row">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span><i class="fa fa-2x fa-plus"></i></span>&nbsp;&nbsp;&nbsp; 
                            Add New Post</a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="panel-body">
                              <div class="row">
                                <div class="col-xs-2 col-sm-2"></div>
                                <div class="col-xs-8 col-sm-8">

                                  <form method="post" action="add_post" onsubmit="return validatePostForm()">
                                    <h3 class="subtitle greydark">POST YOUR TOUGHTS</h3>
                                    <div class="nicdark_space20"></div>
                                    <div class="nicdark_divider left small">
                                      <span class="nicdark_bg_red nicdark_radius"></span>
                                    </div>
                                    <div class="nicdark_space20"></div>

                                    <input class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle"
                                    type="text" value="" placeholder="Title" name="title" id="title">

                                    <div class="nicdark_space20"></div>

                                    <textarea class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle"
                                    placeholder="COMMENTS" rows="9" name="textareaComment" id="textareaComment"></textarea>

                                    <div class="nicdark_space20"></div>

                                    <input type="hidden" id="userID" name="userID" value=<?php echo '"'.$userID.'"';?>>
                                    <input class="nicdark_btn btn-danger medium nicdark_shadow nicdark_radius white left"
                                    type="submit" value="POST">

                                  </form>    
                                </div>
                                <div class="col-xs-2 col-sm-2"></div>
                              </div>
                              
                          </div>
                        </div>
                      </div>
                  </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12">
                            <div class="widget-box">
                              <div class="widget-title">
                                <span class="icon">
                                  <i class="fa fa-file"></i>
                                </span>
                                <h5>Recent Posts</h5>
                              </div>
                              <div class="widget-content nopadding">
                                <ul class="recent-posts">
                                  
                                  <!-- Display Recent post -->
                                  @foreach($forumDetails as $row)
                                    <li>
                                      <div class="user-thumb">
                                        <img width="40" height="40" alt="User" <?php echo 'src="'.$path.''.$row->img_path.'"';?> >
                                      </div>
                                      <div class="article-post">
                                        <span class="user-info">By: {{$row->lastname}} on {{$row->posted_date}}, {{$row->posted_time}}</span>
                                        
                                        <p>
                                          <h5>{{$row->title}}</h5>
                                          <a href={{'forum1?id='.$row->fid.'&uid='.$userID}}>{{substr($row->description,0,65)}}...</a>
                                        </p>
                                        <a href={{'forum1?id='.$row->fid.'&uid='.$userID}} class="btn btn-primary btn-xs pull-right">View</a><br/><br/>
                                      </div>
                                    </li>
                                  @endforeach
                                  
                                </ul>
                              </div>
                            </div>
                      </div>
                    </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <script type="text/javascript">
          function validatePostForm() {
              var x = document.getElementById('title').value;
              var y = document.getElementById('textareaComment').value;
              if (x == null || x == "") {
                  sweetAlert("Oops...", "Title Field is Required..!", "error");
                  return false;
              }else if(y == null || y == ""){
                  sweetAlert("Oops...", "Comment Field is Required..!", "error");
                  return false;
              }
          }

      </script>
      

  
@stop            

