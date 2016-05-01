
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
                  <li>
                    <a href="events">Events</a>
                  </li>
                  <li>
                    <a href="achievment">Achievments</a>
                  </li>
                  <li class="active">
                    <a href="todoList">To Do List</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="row">
          <div class="span12">
            <div class="hl1">
              <img src="{{asset('assets/kids_assets/images/hl1.png')}}" alt="">
            </div>
          </div>
        </div>
    </div>


<div class="container">  
<div id="content">
        <div class="container">
          <div class="row">
            <div class="span7">
              <h1 class="home">To Do List</h1>
              <div class="row">
              <form id="ajax-contact-form" class="form-horizontal" onsubmit="return validateForm()" action="addTodoList" method="post" >
                <div class="row">
                  <div class="span4">
                    <div class="control-group ">
                      <label class="control-label" for="inputMessage">Create To Do:</label>
                      <div class="controls">
                        <textarea class="span6" id="inputMessage" name="textArea_content" placeholder="Add new To Do...!!!"></textarea>
                      </div>
                    </div>
                    
                   </div>
                  </div>

                 <div class="bootstrap-iso">
                   <div class="container-fluid">
                    <div class="row">
                     <div class="col-md-7 col-sm-2 col-xs-12">
                      
                       <div class="form-group ">
                        
                        </label>
                        <div class="span4">
                         <div class="input-group">
                          <div class="input-group-addon">
                           <i class="fa fa-calendar">
                           </i>
                          </div>
                          <input class="form-control" id="date" name="date" placeholder="Chose Date" type="text"/>
                         </div>
                        </div>
                       </div>
                     </div>
                    </div>
                   </div>
                  </div>

                  <br><br><br>

                  <div class="span2">
                      <div class="controls">
                        <button type="submit"  class="submit">Add</button>

                        @if($todo_create_status == true)
                          <script type="text/javascript">
                              swal("Good job!", "Todo created succesfully!", "success");
                          </script>
                        @endif

                     </div>
                    </div>

                    <br><br><br>

              </form>
            </div>
              
              <ul class="ul1" id="ulist">
                
                @foreach($todoLists as $row)
                
                <li class="clearfix">
                  <div class="txt1"></div>
                  <div class="txt2">
                    <h4>{{$row->content}}</h4>
                    <h5><a href={{'deleteTodoList?id='.$row->id}} class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-trash"></span>  Delete</a>
                    <h6>{{$row->todo_date}}</h6>
                  </div>
                </li>


                @endforeach

                @if($todo_detete_status == true)
                  <script type="text/javascript">
                      swal("Good job!", "Todo deleted succesfully!", "success");
                  </script>
                @endif
                

              </ul>
              
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
    </div> 

       <script type="text/javascript">

          function validateForm(){

            var textArea = document.getElementById("inputMessage").value;
            var date_string = document.getElementById("date").value;

            if(textArea == "")
            {
              sweetAlert("Oops...", "Todo list cannot be empty!", "error");
              return false;

            }else if(date_string == "")
            {
              sweetAlert("Oops...", "Date cannot be empty!", "error");
              return false;

            }else if(d > current_date)
            {
              sweetAlert("Oops...", "wrong date", "error");
              return false;

            }else
            {
                return true;

            } 

        }

       </script>


       <script type="text/javascript">

       function func(){

        alert("func called");
       }

       </script>

       <?php
       function f(){
       echo "php called";}
       ?>



       


@stop