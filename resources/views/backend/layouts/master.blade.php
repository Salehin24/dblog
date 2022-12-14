<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
{{--   <title>{{ config('app.name', 'Laravel') }}</title> --}}
  <title>Laravel Project | Dashboard</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
{{--   <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"> --}}
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  {{-- <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"> --}}
  <!-- iCheck -->
{{--   <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"> --}}
  <!-- JQVMap -->
{{--   <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/jqvmap/jqvmap.min.css') }}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::to('public/backend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="{{ URL::to('public/backend/plugins/summernote/summernote-bs4.min.css') }}"> --}}
  <style type="text/css">
    .notifyjs-corner{
      z-index: 10000 !important;
    }
  </style>

  <!-- jQuery -->
  <script src="{{ URL::to('public/backend/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Notify Js -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <!-- Sweetalert -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ url('public/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Full Screen -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <span>{{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a class="dropdown-item dropdown-footer" href="{{ route('logout') }}" 
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
	        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	            @csrf
	        </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ url('public/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ (!empty(Auth::user()->image)) ? url('public/upload/user/'.Auth::user()->image) : url('public/upload/no_image.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('profile.view') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      @include('backend.layouts.sidebar')
  </aside>

  @yield('content')
  @if(session()->has('success'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{ session()->get('success') }}", { globalPosition: 'top right', className:'success' });
      });
    </script>
  @endif
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="#">Salehin</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Design & Developed by</b> Salehin
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.js"></script> --}}


<!-- jQuery UI 1.11.4 -->
{{-- <script src="{{ URL::to('public/backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script> --}}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  //$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ URL::to('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ URL::to('public/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
{{-- <script src="{{ URL::to('public/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script> --}}
<!-- Select2 -->
<script src="{{ URL::to('public/backend/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ URL::to('public/backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
{{-- <script src="{{ URL::to('public/backend/plugins/sparklines/sparkline.js') }}"></script> --}}
<!-- JQVMap -->
{{-- <script src="{{ URL::to('public/backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src="{{ URL::to('public/backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script> --}}
<!-- daterangepicker -->
<script src="{{ URL::to('public/backend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::to('public/backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src="{{ URL::to('public/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> --}}
<!-- Summernote -->
{{-- <script src="{{ URL::to('public/backend/plugins/summernote/summernote-bs4.min.js') }}"></script> --}}
<!-- overlayScrollbars -->
<script src="{{ URL::to('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::to('public/backend/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ URL::to('public/backend/dist/js/pages/dashboard.js') }}"></script> --}}

<script type="text/javascript">
  /*
$("#category_id").change(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    const CatId = $(this).val();

    $.ajax({
        type: "POST",
        url: "",
        data: {
            category_id: CatId,
        },
        success: function (result) {
            $("#subcategory_id").empty();
            $("#subcategory_id").append(
                '<option selected disabled value="">Select</option>'
            );

            if (result && result?.status === "success") {
                result?.data?.map((subcategory) => {
                    const subcategory = `<option value='${subcategory?.subcategory_id}'> ${subcategory?.subcategory_name} </option>`;
                    $("#subcategory_id").append(subcategory);
                });
            }
        },
        error: function (result) {
            console.log("error", result);
        },
    });
});
*/

</script>

<script type="text/javascript">
  $(function(){
    var table = $('#categorytbl').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('category.fetch') }}",
      columnDefs: [
        {"className": "dt-center", "targets": "_all"}
      ],
      columns: [
        {data: 'DT_RowIndex', name:'DT_RowIndex'},
        {data: 'category_id', name:'category_id'},
        {data: 'category_name', name:'category_name'},
        {
          data: 'action',
          name: 'action',
          orderable: true,
          searchable: true
        },

        ]
    });
  });
</script>



</body>
</html>