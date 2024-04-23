<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $setting->nama_perusahaan }} | @yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="icon" href="{{ url($setting->path_logo) }}" type="image/img">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/AdminLTE3/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('AdminLTE3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE3/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('AdminLTE3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('AdminLTE3/plugins/daterangepicker/daterangepicker.css') }}">

  <!-- datatables -->
  <link rel="stylesheet" href="{{ asset('AdminLTE3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  @stack('css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('/public/img/logo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

  <!-- Navbar -->
@includeIf('layouts.header')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@includeIf('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              @yield('title')
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            @section('breadcrumb')
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            @show
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
      @yield('content')
      </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @includeIf('layouts.footer')


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE3/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('AdminLTE3/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('AdminLTE3/plugins/sparklines/sparkline.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('AdminLTE3/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('AdminLTE3/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('AdminLTE3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('AdminLTE3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>


<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE3/dist/js/adminlte.js') }}"></script>
<!-- Validator -->
<script src="{{ asset('js/validator.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('AdminLTE3/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('AdminLTE3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('AdminLTE3/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>


<script>
  function preview(selector, temporaryFile, width = 200) {
    $(selector).empty();
    $(selector).append(`<img src="${window.URL.createObjectURL(temporaryFile)}" width="${width}">`);
  }
</script>

@stack('scripts')
</body>
</html>
