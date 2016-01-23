@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')

<div id="content">
  <div id="content-header" class="mini">
    <h1>View Users</h1>
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
            <a href="#" class="current">View Users</a>
          </div>
          <div class="container-fluid">
            <div class="section">
              <div class="container">
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
                        <td>{{ $row->uid }}</td>
                        <td>{{ $row->firstname }}</td>
                        <td>{{ $row->lastname }}</td>
                        <td>{{ $row->dateOfBirth }}</td>
                        <td>{{ $row->Age }}</td>
                        <td>{{ $row->utype }}</td>
                        <td>{{ $row->acc_createdOn }}</td>
                        <td>{{ $row->LastLoggedOn }}</td>
                        <td>{{ $row->status }}</td>                        
                      </tr>
                    @endforeach  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @stop            

