@extends('layout.app')
@section('title','Dashboard')


@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>5</h3>

              <p>Customer Register</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>45.000.000<sup style="font-size: 20px"></sup></h3>

        <p>Keberangkatan Haji per bulan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>45</h3>
        
              <p>Keberangkatan Umroh per bulan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>20.000.000</h3>
        
        <p>Pemasukan per bulan</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

          <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Monthly Recap Report</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <!-- <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong> -->
                    </p>

                    <div class="chart" id="chart1">
                        <canvas id="barchart"></canvas>
                    </div>

                    <div class="body">
          
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Goal Completion</strong>
                    </p>

                    <div class="progress-group">
                      <span class="progress-text">Pending Purchase</span>
                      <span class="progress-number"><b>2</b>/31</span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-aqua" style="width: 6.4516129032258%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Complete Purchase</span>
                      <span class="progress-number"><b>8</b></b>/31</span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-red" style="width: 25.806451612903%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Muasasa Pending</span>
                      <span class="progress-number"><b>0</b>/2</span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-green" style="width: 0%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Muasasa Approved</span>
                      <span class="progress-number"><b>2</b>/2</span>

                      <div class="progress sm">
                        <div class="progress-bar progress-bar-yellow" style="width: 100%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./box-body -->

              <!-- /.box-footer -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
          </div>

    </div>
    <script src="http://103.56.149.2/MYIHRAM/assets/js/jquery.js"></script>
    <script src="http://103.56.149.2/MYIHRAM/assets/js/highcharts.js"></script>
    <!-- ChartJs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script  type="text/javascript">
  var ctx = document.getElementById("barchart").getContext("2d");
  var data = {
            labels: ["Jul 2020",],
            datasets: [
            {
              label: "Jamaah Perbulan",
              data: ["1",],
              backgroundColor: [
                '#29B0D0',
                '#2A516E',
                '#F07124',
                '#ff3333',
                '#979193',
                '#ff3333',
                '#db4dff',
                '#4dff4d',
                '#ff8000'
              ]
            }
            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
            legend: {
              display: true
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
        </script>
  
@endsection