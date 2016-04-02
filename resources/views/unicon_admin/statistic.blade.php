@extends('Layouts.admin_layout_page')
@section('body_of_unicon_admin')

<script type="text/javascript">
window.onload = function () {
    var d = new Date(<?=$year ?>, <?=$month ?>, <?=$day ?>);
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Child Proformance"
    },
    axisX:{
        title: "Timeline",
        gridThickness: 2
    },
    axisY: {
        title: "Points"
    },
    data: [
    {        
        type: "area",
        dataPoints: [//array
        <?php for($i=0;$i<29;$i++){?>
          { x: new Date(<?=$year?>,<?=$month?>-1,<?=$day?>-<?=$i?>), y: <?=$pointsArray[$i]?>},
        <?php } ?>
          { x: new Date(<?=$year?>,<?=$month?>-1,<?=$day?>-29), y: <?=$pointsArray[29]?>}

        ]
    }
    ]
});

    chart.render();
}
</script>
<script type="text/javascript" src="{{ URL::asset('assets/adminPage_assets/js/canvasjs.min.js') }}"></script>

<div id="content">
  <div id="content-header" class="mini">
    <h1>Statistic</h1>
    
          </div>
          <div id="breadcrumb">
            <a href="#" title="Go to Home" class="tip-bottom"><i class="fa fa-home"></i> Home</a>
            <a href="#" class="current">Statistic</a>
          </div>
          <div class="container-fluid">
            
            <br>
            <div class="row">
              <div class="col-xs-12">
                <!-- <div class="alert alert-info">Welcome in the
                  <strong>Intellikid Admin page</strong>. You can manage Intellikid contents!
                  <a href="#" data-dismiss="alert" class="close">×</a>
                </div> -->
                <div class="widget-box">
                  <div class="widget-title">
                    <span class="icon">
                      <i class="fa fa-signal"></i>
                    </span>
                    <h5>Site Statistics</h5>
                    <!-- <div class="buttons">
                      <a href="#" class="btn"><i class="fa fa-refresh"></i> <span class="text">Update stats</span></a>
                    </div> -->
                  </div>
                  <div class="widget-content">
                    <div class="row">
                      
                      <div class="col-xs-12 col-sm-9">
                        <!-- Login cart will display here -->
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart for Child Proformance
                          <div class="pull-right">
                            <!-- <div class="btn-group">
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
                            </div> -->
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
                                                          <a href={{'statistics?id='.$result->id}}> >> </a>
                                                      </td>
                                                </tr>
                                             <?php $i++; ?>
                                            @endforeach 
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            
                            <!-- /.col-lg-4 (nested) -->
                            
                            <div class="col-lg-8">
                              
                              <div id="chartContainer" style="height: 300px; width: 100%;"></div>

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
      

      <script type="text/javascript">
      /*
     * Play with this code and it'll update in the panel opposite.
     *
     * Why not try some of the options above?
       */


       /*var d = new Date(2012, 01, 11);
    d.setDate(d.getDate() - 1);*/

        var d = new Date({{$year}}, {{$month}}, {{$day}} );

      Morris.Area({
      element: 'area-chart',
      data: [
        { y: d.setDate(d.getDate() - 1), a: 100 },
        { y: d.setDate(d.getDate() - 2), a: 75 },
        { y: d.setDate(d.getDate() - 3), a: 50 },
        { y: d.setDate(d.getDate() - 4), a: 75 },
        { y: d.setDate(d.getDate() - 5), a: 50 },
        { y: d.setDate(d.getDate() - 1), a: 75 },
        { y: d.setDate(d.getDate() - 1), a: 100 }
      ],
      xkey: 'y',
      ykeys: ['a'],
      labels: ['Points']
    });
  </script>

   

  
@stop            

