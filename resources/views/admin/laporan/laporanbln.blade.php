@extends('layout.admin_template')

@section('title', 'Laporan')
@section('page_title', 'Laporan Penjualan')
@section('content')
    <div class="row">@section('title', 'Laporan Penjualan')
@section('page_title', 'Laporan Penjualan')
@section('content')
         <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Filter Penjualan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row margin">
                <div class="col-sm-6">
                  <label>Select Bulan Penjualan</label>
                </div>
              </div>
              <div class="row margin">
                <div class="col-sm-6">
                   <div class="form-group">
                 <div class="col-sm-4">
                  <select class="form-control">
                    <option>Bulan Januari</option>
                    <option>Bulan Februari</option>
                    <option>Bulan Maret</option>
                    <option>Bulan April</option>
                    <option>Bulan Mei</option>
                    <option>Bulan Juni</option>
                    <option>Bulan Juli</option>
                    <option>Bulan Agustus</option>
                    <option>Bulan September</option>
                    <option>Bulan Oktober</option>
                    <option>Bulan November</option>
                    <option>Bulan Desember</option>
                      
                  </select>
                 </div>
                 <div class="col-sm-3">
                  <select class="form-control">
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                  </select>
                </div>
                    <button class="btn btn-primary">Tampilkan</button>
                    <button class="btn btn-primary">Cetak</button>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="box-header with-border">
                  <h3 class="box-title">Donut Chart</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <canvas id="pieChart" style="height:250px"></canvas>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Laporan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tgl Transaksi</th>
                  <th>No Transaksi</th>
                  <th>Nama Customer</th>
                  <th>Nama Produk</th>
                  <th>Nama Toko</th>
                  <th>QTY</th>
                  <th>Harga</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>21-10-2009</td>
                  <td>9090892378</td>
                  <td>Beni</td>
                  <td>Patata-Coklat</td>
                  <td>Patata</td>
                  <td>20</td>
                  <td>65000</td>
                </tr>
                <tr>
                  <td>21-10-2009</td>
                  <td>9090892378</td>
                  <td>Beni</td>
                  <td>Patata-Coklat</td>
                  <td>Patata</td>
                  <td>20</td>
                  <td>65000</td>
                </tr>
                </tbody>
                  <th class="push col-ms-6"><bold>Total</bold></th>
                <tfoot>
                <tr>
                  <th>Tgl Transaksi</th>
                  <th>No Transaksi</th>
                  <th>Nama Customer</th>
                  <th>Nama Produk</th>
                  <th>Nama Toko</th>
                  <th>QTY</th>
                  <th>Harga</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('custom_js')
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
@endsection 
        
@section('custom_js')
<script>
  $(function () {
    
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: 700,
        color: "#f56954",
        highlight: "#f56954",
        label: "Chrome"
      },
      {
        value: 500,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "IE"
      },
      {
        value: 400,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "FireFox"
      },
      {
        value: 600,
        color: "#00c0ef",
        highlight: "#00c0ef",
        label: "Safari"
      },
      {
        value: 300,
        color: "#3c8dbc",
        highlight: "#3c8dbc",
        label: "Opera"
      },
      {
        value: 100,
        color: "#d2d6de",
        highlight: "#d2d6de",
        label: "Navigator"
      }
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    pieChart.Doughnut(PieData, pieOptions);
  });
</script> 
@endsection



        
