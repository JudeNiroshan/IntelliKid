@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')

<script src="//cdn.ckeditor.com/4.5.7/full/ckeditor.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/adminPage_assets/js/canvasjs.min.js') }}"></script>

<div id="content">
  <div id="content-header" class="mini">
    <h1>Article</h1>
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
            <a href="#" class="current">Article</a>
          </div>
          <div class="container-fluid">
            
            <br>
            <div class="row">
              <div class="col-xs-8">
                <div class="alert alert-info">Welcome in the
                  <strong>Intellikid Admin page</strong>. You can manage Intellikid contents!
                  <a href="#" data-dismiss="alert" class="close">×</a>
                </div>
                <div class="widget-box">
                  <div class="widget-title">
                    <span class="icon">
                      <i class="fa fa-signal"></i>
                    </span>
                    <h5>Add Article</h5>
                    <div class="buttons">
                      <a href="#" class="btn"><i class="fa fa-refresh"></i> <span class="text">Update stats</span></a>
                    </div>
                  </div>
                  <div class="widget-content">
                    <div class="row">


                      <div class="col-xs-12 col-sm-12">
                        <!-- onsubmit="return validateArticleForm()" --> 
   
                        <form  action="upload_article" method="post"  enctype="multipart/form-data" onsubmit="return validateArticleForm()">
                          <div class="form-group">
                            <label class="control-label" for="exampleInputEmail1">Article Title</label>
                            <input class="form-control" name="title" id="title"
                            placeholder="Enter Title" type="text">
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" name="disc" id="disc"
                            placeholder="Type some thing about Article"></textarea>
                          </div>
                          <br/><br/>
                          <div class="form-group">
                            <label class="control-label">File upload input</label>
                            <div class="form-control">
                              <input type="file" name="file" id="file">
                            </div>
                          </div>

                          <br/><br/>
                          <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        
                      </div>
                      
                    </div>
              </div>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4">
            <div class="widget-box">
              <div class="widget-title">
                <span class="icon">
                  <i class="fa fa-comment"></i>
                </span>
                <h5>Recent Articles</h5>
              </div>
              <div class="widget-content nopadding">
                <ul class="recent-comments" id="article_id">

                <?php
                    $article_count = 1;
                ?>   
                @foreach($article_details as $row) 
                  <li>
                    <div class="comments">
                       <span class="user-info">Published on: {{$row->date_published}}, {{$row->time_publish}}</span>
                      <p>
                        <h5 class="subtitle greydark">{{$article_count.". "}}<a href="#"   
                            onclick=<?php echo '"articleOnclick1('.$row->id.')"';?>   style="text-decoration: none;">{{$row->title}}</a></h5>
                      </p>
                      
                    </div>
                    <div class="pull-right">
                    <a href={{'deleteArticle?did='.$row->id}}> Delete</a>
                    </div>
                    <br>
                  </li>
                        <?php $article_count++;?>
                @endforeach
                </ul>
              </div>
          </div>
          
        </div>
      </div>


      <!-- PDF Modal -->
<div id="pdfModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="reLoadFunction()" data-dismiss="modal">&times;</button>

        <h4 class="modal-title" ><div id="modal-title-name"></div></h4>
      </div>
      <div class="modal-body">
        
        <div id="desc"></div>
        <br/>
        <div id = "modal-body-pdf"></div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="reLoadFunction()" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

      <script>
      
      function articleOnclick1(article_id){
       
            $.ajax({
                type: "get",
                url: "getArticle1",
                data: { 
                    article_id:article_id

                },
                success: function (data)
                {
                    
                  
                 // alert(data.pdf_path);
                //document.getElementById("modal-body-pdf").innerHTML = '<embed  src="{{ URL::asset('+data.pdf_path+') }}" width="100%" height="500px">';
                 //jQuery.noConflict();                                   
                 $('#pdfModal1').modal('show');
                 $('#pdfModal1').on('shown.bs.modal', function() {
                    $('#pdfModal1').find('#modal-title-name').append(data.title);
                    $('#pdfModal1').find('#desc').append(data.description);
                    $('#pdfModal1').find('#modal-body-pdf').append(data.embedPath);
                
                 });

                 $(document).ready(function() {
                    $(".modal").on("hidden.bs.modal", function() {
                      $("#modal-title-name").html("");
                      $("#desc").html("");
                      $("#modal-body-pdf").html("");
                    });
                  });


                    

                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                
                }
            });

            
      
      return false;
      
      
      }
  </script>
   <script>
    function reLoadFunction() {
        location.reload();
    }
  </script>   

  <script type="text/javascript">
      
      function validateArticleForm() {
          var title = document.getElementById('title').value;
          var disc = document.getElementById('disc').value;
          var file = document.getElementById('file').value;

          if (title == null || title == "") {
              sweetAlert("Oops...", "Article Title field is Required..!", "error");
              return false;
          }
          if (disc == null || disc == "") {
              sweetAlert("Oops...", "Discription Field is Required..!", "error");
              return false;
          }
          if (file == "") {
              sweetAlert("Oops...", "Please choose a pdf file..!", "error");
              return false;
          }

          var file_ext = file.split(/[.]+/).pop();
          
          if (file_ext != "pdf") {
              sweetAlert("Oops...", "You can't choose "+file_ext+" file, Please choose a pdf file..!", "error");
              return false;
          }

          return true;
      }
  </script>
 <!-- <script>
      
      function deleteArticle(article_id){
       
            $.ajax({
                type: "get",
                url: "deleteArticle",
                data: { 
                    article_id:article_id

                },
                success: function (data)
                {
                    
                  $('#article_id').append("Fazeel");

                },
                error: function (xhr, ajaxOptions, thrownError) 
                {

                
                }
            });

            
      
      return false;
      
      
      }
  </script>-->

  
@stop            

