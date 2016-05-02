@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')

<script src="//cdn.ckeditor.com/4.5.7/full/ckeditor.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/adminPage_assets/js/canvasjs.min.js') }}"></script>
<script type="text/javascript">
        function addComment(){
                var comments_str = document.getElementById("comment_textArea").value;
                var fid = <?=$forumDetails[0]->fid?> ;

                  $.ajax({
                      type: "get",
                      url: "addComment",
                      data: { 
                          comments_str:comments_str,
                          fid:fid
                      },
                      success: function (data)
                      {
                        alert(data.forum_comments[0].comment_date);
                        /*$("#forumUL").append('
                              <li class="nicdark_border_grey">
                                <!--comment-->
                                <div class="nicdark_archive1 nicdark_relative">
                                  <div class="nicdark_margin100 nicdark_relative">
                                    
                                    <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                                      <div class="nicdark_space20"></div>
                                      <h4 class="subtitle greydark"> fazeel SAYS: '+data.forum_comments[0].comment_date+' AT '+data.forum_comments[0].comment_time+'</h4>
                                      <div class="nicdark_space20"></div>
                                    </div>
                                  </div>
                                  <p>'+data.forum_comments.comment_date+'</p>
                                  <div class="nicdark_space20"></div>
                                  <div class="nicdark_space20"></div>
                                </div>
                                <!--comment-->
                              </li>
                          ');*/

                      },
                      error: function (xhr, ajaxOptions, thrownError) 
                      {
                      
                      }
                  });
          
            return false;
            
            }
  </script>

<div id="content">
  <div id="content-header" class="mini">
    <h1>Forum</h1>
    
          </div>
          <div id="breadcrumb">
            <a href="unicon_admin_index" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
            <a href="forum" class="current">Forum</a>
            <a href="#" class="current">Forum Details</a>
          </div>
          <div class="container-fluid">
          <?php $path=URL::asset(''); ?> 
            <br>
            <div class="row">
              <div class="col-xs-12">
                <!-- <div class="alert alert-info">Welcome in the
                  <strong>Intellikid Admin page</strong>. You can manage Intellikid contents!
                  <a href="#" data-dismiss="alert" class="close">×</a>
                </div> -->
                <div class="widget-box">
                  <div class="widget-content">
                    <div class="row">
                      <div class="panel panel-default">
              
              <!-- .panel-heading -->
              <div class="panel-body">
                <div class="panel-group" id="accordion">
                  
                  <div class="panel panel-info">
                    
                    <div class="panel-body">
                        <div class="col-xs-2 col-sm-2"></div>
                            <div class="col-xs-8 col-sm-8">
                                    
                                    <div class="nicdark_space20"></div>
                                    <div class="nicdark_textevidence nicdark_bg_orange nicdark_radius nicdark_shadow">
                                      <div class="nicdark_size_big">
                                        <p class="white">
                                          <i class="icon-calendar-1 nicdark_marginright10 "></i>{{$forumDetails[0]->posted_date}} &nbsp; {{$forumDetails[0]->posted_time}}
                                          <span class="nicdark_margin010">·</span>
                                          <i class="icon-user-1 nicdark_marginright10"></i>{{$forumDetails[0]->lastname}}
                                          <span class="nicdark_margin010">·</span>
                                          <i class="icon-chat nicdark_marginright10"></i>@if(@countOfComments > 1 ) {{$countOfComments}} COMMENT @else {{$countOfComments}} COMMENTS @endif </p>
                                      </div>
                                      <i class="icon-info-outline nicdark_iconbg right medium orange"></i>
                                    </div>
                                    
                                    <div class="nicdark_space20"></div>
                                    <!--author-->
                                    <div class="nicdark_archive1 nicdark_bg_yellow nicdark_radius nicdark_shadow">
                                      <div class="nicdark_margin20 nicdark_relative">
                                        <img alt="" class="nicdark_displaynone_ipadpotr nicdark_radius_circle nicdark_absolute"
                                        style="width:100px;"  <?php echo 'src="'.$path.''.$forumDetails[0]->img_path.'"';?>>
                                        <div class="nicdark_activity nicdark_marginleft120 nicdark_disable_marginleft_ipadpotr">
                                          <h4 class="white">{{$forumDetails[0]->firstname}} {{$forumDetails[0]->lastname}}</h4>
                                          <div class="nicdark_space20"></div>
                                          <div class="nicdark_divider left small">
                                            <span class="nicdark_bg_white nicdark_radius"></span>
                                          </div>
                                          <div class="nicdark_space20"></div>
                                          <h3 class="subtitle greydark">{{$forumDetails[0]->title}}</h3>
                                          <p class="white"> {{$forumDetails[0]->description}}</p>
                                          <div class="nicdark_space20"></div>
                                          <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                                          <div class="nicdark_space20"></div>
                                          <p class="white">
                                          <?php $userID=$_SESSION['user_id']; ?>
                                          <!-- check user has been liked when the page loading 1st time -->
                                          @if($forum_result[0]->islike==true)
                                            <a href="#" onclick=<?php echo '"isLike('.$userID.','.$forumDetails[0]->fid.')"';?> id="islikeID">
                                              <i class="icon-thumbs-up nicdark_zoom red" ></i>
                                            </a>
                                            <span id="islikecount">{{$likes}}</span>
                                          <!-- check user has not beed leked yet when the page loading 1st time -->
                                          @elseif($forum_result[0]->islike==false || !isset($forum_result[0]))
                                            <a href="#" onclick=<?php echo '"isLike('.$userID.','.$forumDetails[0]->fid.')"';?> id="islikeID">
                                              <i class="icon-thumbs-up small nicdark_zoom" ></i>
                                            </a>
                                            <span id="islikecount">{{$likes}}</span>
                                          @endif  

                                          <span class="nicdark_margin010">·</span>

                                          @if($forum_result[0]->isdislike==true)
                                            <a href="#" onclick=<?php echo '"isDisLike('.$userID.','.$forumDetails[0]->fid.')"';?> id="isdislikeID">
                                                <i class="icon-thumbs-down nicdark_marginright10 red" ></i>
                                                </a>
                                            <span id="isdislikecount">{{$disLikes}}</span>
                                          @elseif($forum_result[0]->isdislike==false || !isset($forum_result[0]))
                                            <a href="#" onclick=<?php echo '"isDisLike('.$userID.','.$forumDetails[0]->fid.')"';?> id="isdislikeID">
                                                <i class="icon-thumbs-down small nicdark_marginright10" ></i>
                                                </a>
                                            <span id="isdislikecount">{{$disLikes}}</span>
                                          @endif 


                                          <span class="nicdark_margin010">·</span>
                                          <a href=""><i class="icon-eye-outline small nicdark_marginright10"></i></a>{{$totalViews}}
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                    <!--author-->
                                    <div class="nicdark_space50"></div>
                                    <h3 class="subtitle greydark">@if(@countOfComments > 1 ) {{$countOfComments}} COMMENT @else {{$countOfComments}} COMMENTS @endif</h3>
                                    <div class="nicdark_space20"></div>
                                    <div class="nicdark_divider left small">
                                      <span class="nicdark_bg_orange nicdark_radius"></span>
                                    </div>
                                    <div class="nicdark_space20"></div>
                                    <ul class="nicdark_list border" id="forumUL">
                                      @foreach($forum_comments as $row)
                                          <li class="nicdark_border_grey">
                                            <!--comment-->
                                            <div class="nicdark_archive1 nicdark_relative">
                                              <div class="nicdark_margin100 nicdark_relative">
                                                <img alt="" class="nicdark_displaynone_ipadpotr nicdark_radius_circle nicdark_absolute"
                                                style="width:50px;" <?php echo 'src="'.$path.''.$row->img_path.'"';?> >
                                                <div class="nicdark_activity nicdark_marginleft70 nicdark_disable_marginleft_ipadpotr">
                                                  <div class="nicdark_space20"></div>
                                                  <h4 class="subtitle greydark">{{strtoupper($row->lastname)}} SAYS: {{$row->comment_date}} AT {{$row->comment_time}}</h4>
                                                  <div class="nicdark_space20"></div>
                                                </div>
                                              </div>
                                              <p>{{$row->comments}}</p>
                                              <div class="nicdark_space20"></div>
                                              <div class="nicdark_space20"></div>
                                            </div>
                                            <!--comment-->
                                          </li>
                                      @endforeach
                                    </ul>
                                    <form method="post" action="add_comment" onsubmit="return validateCommentForm()">
                                      <div class="nicdark_space50"></div>
                                      <h3 class="subtitle greydark">LEAVE A REPLY</h3>
                                      <div class="nicdark_space20"></div>
                                      <div class="nicdark_divider left small">
                                        <span class="nicdark_bg_red nicdark_radius"></span>
                                      </div>
                                      <div class="nicdark_space20"></div>
                                      <textarea class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle"
                                      placeholder="COMMENTS" rows="9" id="comment_textArea" name="comment_textArea"></textarea>
                                      <div class="nicdark_space20"></div>
                                      <input type="hidden" id="fid" name="fid" <?php echo 'value="'.$forumDetails[0]->fid.'"';?>>
                                      <input type="hidden" id="userID" name="userID" <?php echo 'value="'.$userID.'"';?>>
                                      <input class="nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white left"
                                      type="submit" value="POST COMMENT"  id="postBtn" onclick="sweetCallFunc()">
                                    </form>
                           
                            </div>
                            <div class="col-xs-2 col-sm-2"></div>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
              <!-- .panel-body -->
            </div>
                    </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>


      
<script type="text/javascript">
    function validateCommentForm() {
        var x = document.getElementById('comment_textArea').value;
        if (x == null || x == "") {
            sweetAlert("Oops...", "Comment Field is Required..!", "error");
            return false;
        }
    }

</script>

<script>
      
      function isLike(admin_id,forum_id){
        

            $.ajax({
                type: "get",
                url: "isAdminLikePost",
                data: { 
                    admin_id:admin_id,
                    forum_id:forum_id 
                },
                success: function (data)
                {
                  
                  if(data.likeStatus){
                    document.getElementById("islikeID").innerHTML ='<i class="icon-thumbs-up nicdark_zoom red " ></i>';
                    document.getElementById("islikecount").innerHTML = data.totalLikes;
                  }
                    

                  if(!data.dislikeStatus){
                    document.getElementById("isdislikeID").innerHTML ='<i class="icon-thumbs-down small nicdark_marginright10"></i>';  
                    document.getElementById("isdislikecount").innerHTML = data.totalDisLikes;
                  }

                     

                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                
                }
            });
      
      return false;
      
      
      }
  </script>

  <script>
      
      function isDisLike(admin_id,forum_id){
        

            $.ajax({
                type: "get",
                url: "isAdminDisLikePost",
                data: { 
                    admin_id:admin_id,
                    forum_id:forum_id 
                },
                success: function (data)
                {
                  
                  
                  if(!data.likeStatus){
                    document.getElementById("islikeID").innerHTML ='<i class="icon-thumbs-up small nicdark_zoom" ></i>';
                    document.getElementById("islikecount").innerHTML = data.totalLikes;
                  }
                    

                  if(data.dislikeStatus){
                    document.getElementById("isdislikeID").innerHTML ='<i class="icon-thumbs-down nicdark_marginright10 red"></i>';   
                    document.getElementById("isdislikecount").innerHTML = data.totalDisLikes;
                  }

                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                
                }
            });
      
      return false;
      
      
      }
  </script>

      

  
@stop            

