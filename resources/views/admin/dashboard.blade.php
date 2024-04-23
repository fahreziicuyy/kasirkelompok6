@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $kategori }}</h3>

            <p>Total Kategori</p>
          </div>
          <div class="icon">
            <i class="fa fa-cube"></i>
          </div>
          <a href="{{ route('kategori.index') }}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $produk }}</h3>

            <p>Total Produk</p>
          </div>
          <div class="icon">
            <i class="fa fa-cubes"></i>
          </div>
          <a href="{{ route('produk.index') }}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $supplier }}</h3>

            <p>Total Supplier</p>
          </div>
          <div class="icon">
            <i class="fa fa-truck"></i>
          </div>
          <a href="{{ route('supplier.index') }}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $member }}</h3>

            <p>Total Member</p>
          </div>
          <div class="icon">
            <i class="fa fa-address-card"></i>
          </div>
          <a href="{{ route('member.index') }}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <div class="col-lg-12">
          <div class="box">
              <div class="box-header with-border">
                  <h3 class="box-title">Grafik Pendapatan {{ tanggal_indonesia($tanggal_awal, false) }} s/d {{ tanggal_indonesia($tanggal_akhir, false) }}</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="chart">
                              <!-- Sales Chart Canvas -->
                              <canvas id="salesChart" style="height: 180px;"></canvas>
                          </div>
                          <!-- /.chart-responsive -->
                      </div>
                  </div>
                  <!-- /.row -->
              </div>
          </div>
          <!-- /.box -->
      </div>
      <!-- /.col -->
  </div>
@endsection

@push('scripts')
<!-- ChartJS -->
<script src="{{ asset('AdminLTE3/plugins/chart.js/Chart.min.js') }}"></script>
<script>
  $(function() {
    'use strict'
          // Get context with jQuery - using jQuery's .get() method.
        var salesChartCanvas = $('#salesChart').get(0).getContext('2d')

      var salesChartData = {
        labels: {{ json_encode($data_tanggal) }},
        datasets: [
          {
            label: 'Digital Goods',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgba(60,141,188,0.8)',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: {{ json_encode($data_pendapatan) }}
          },
        ]
      };

      var salesChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
  };

  var salesChart = new Chart(salesChartCanvas, {
    type: 'line',
    data: salesChartData,
    options: salesChartOptions
  });

  });
</script>
@endpush