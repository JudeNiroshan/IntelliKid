@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')
<div id="content">
  <div id="content-header">
    <h1>Tables</h1>
    <div class="btn-group">
      <a class="btn btn-large" title="Manage Files"><i class="fa fa-file"></i></a>
      <a class="btn btn-large" title="Manage Users"><i class="fa fa-user"></i></a>
      <a class="btn btn-large" title="Manage Comments"><i class="fa fa-comment"></i><span class="label label-danger">5</span></a>
      <a class="btn btn-large" title="Manage Orders"><i class="fa fa-shopping-cart"></i></a>
    </div>
  </div>
  <div id="breadcrumb">
    <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
    <a href="#" class="current">Tables</a>
  </div>
  <div class="row">
    <div class="col-xs-12">
      
      
      
      <div class="widget-box">
        <div class="widget-title">
          <span class="icon">
            <i class="fa fa-th"></i>
          </span>
          <h5>Dynamic table</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered table-striped table-hover data-table">
            <thead>
                          <tr>
                            <th>UID</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>DateOfBirth</th>
                            <th>Age</th>
                            <th>UserType</th>
                            <th>A/C created on</th>
                            <th>Last Login</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $row)
                            <tr class="gradeX">
                              <td>{{ $row->id }}</td>
                              <td>{{ $row->firstname }}</td>
                              <td>{{ $row->lastname }}</td>
                              <td>{{ $row->dateOfBirth }}</td>
                              <td>{{ $row->Age }}</td>
                              <td>{{ $row->user_type }}</td>
                              <td>{{ $row->acc_created }}</td>
                              <td>{{ $row->LastLogged }}</td>
                              <td>
                                @if($row->status==0) {{ "In Progress" }}
                                  @elseif($row->status==1){{"Freezed"}}
                                  @elseif($row->status==2){{"Removed"}}
                                  @endif 
                              </td>                        
                            </tr>
                          @endforeach
                        </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  @stop