@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')
<div id="content">
  <div id="content-header">
    <h1>View User</h1>
    
  </div>
  <div id="breadcrumb">
    <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
    <a href="#" class="current">view</a>
  </div>
  <div class="row">
    <div class="col-xs-12">
      
      
      
      <div class="widget-box">
        <div class="widget-title">
          <span class="icon">
            <i class="fa fa-th"></i>
          </span>
          <h5>User Details</h5>
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
                              <td>
                                @if($row->user_type == 'admin') {{ "Admin" }}
                                  @elseif($row->user_type == 'parent'){{"Parent"}}
                                  @elseif($row->user_type == 'child'){{"Child"}}
                                @endif 
                              </td>
                              <td>{{ $row->acc_created }}</td>
                              
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