<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <style>
        body {
            overflow-x: hidden;}
            table.static {
            position: relative;
            border: 1px solid #542535;
        }
    </style>
  <title> @yield("title") - {{ config('app.name') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('/assets/img/logostiper.ico') }}" />
  <link rel="icon" href="{{ URL::asset('/assets/img/logostiper.ico') }}" type="image/x-icon"/>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @livewireStyles
  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  {{-- <link rel="stylesheet" href="/assets/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
</head>

<body class="hold-transition layout-fixed overflow-x-hidden">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="/assets/img/logostiper.png" alt="StiperstaLogo" height="90" width="90">
    </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="{{ route('dashboard') }}" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li style="padding-left: 0px; padding-right:0px; padding-top: 2.5px;">
          @livewire('navigation-menu')
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <!-- <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                  <i class="fas fa-th-large"></i>
                </a>
              </li> -->
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary">
      <!-- Brand Logo -->
      <a href="{{ route('dashboard') }}" class="brand-link text-center">
        <span><img src="/assets/img/logostiper.png" alt="kejaksaan Logo" class="mt-2 ml-2 img-circle brand-image elevation-2" style="opacity: .8;width:40%;max-height:60%;"></span>
        <span class="font-weight-light">STA</span>
        <p class="pl-2 font-weight-light">JAYAPURA</p>

        <p class="font-weight-light mt-0 mb-0 pt-0">LIBRARY</p>
      </a>
      <!-- Sidebar -->
      <div class="sidebar" style="padding: 0 0 0 0; overflow-y: auto;">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            {{-- @can('manage-users') --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users"></i>
                  <p>
                    MANAJEMEN USER
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('staff.index')}}" class="nav-link">
                        <i class="fa fa-male nav-icon"></i>
                        <p>Staff</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('roles.index')}}" class="nav-link">
                          <i class="fa fa-address-card nav-icon"></i>
                          <p>Posisi Kerja</p>
                        </a>
                      </li>
                  </ul>
              </li>
            {{-- @endif --}}

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-university"></i>
                  <p>
                    MANAJEMEN MAHASISWA
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('mahasiswa.index')}}" class="nav-link">
                        <i class="fa fa-map nav-icon"></i>
                        <p>Data Mahasiswa</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('fakultas.index')}}" class="nav-link">
                          <i class="fa fa-map nav-icon"></i>
                          <p>Data Fakultas</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('prodi.index')}}" class="nav-link">
                          <i class="fa fa-map nav-icon"></i>
                          <p>Data Program Studi</p>
                        </a>
                      </li>
                                      </ul>

              </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-archive"></i>
                <p>
                  MANAJEMEN BUKU
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('buku.index')}}" class="nav-link">
                      <i class="fa fa-barcode nav-icon"></i>
                      <p>Buku</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('penerbit.index')}}" class="nav-link">
                      <i class="fa fa-barcode nav-icon"></i>
                      <p>Penerbit</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('rakbuku.index')}}" class="nav-link">
                      <i class="fa fa-barcode nav-icon"></i>
                      <p>Rak Buku</p>
                    </a>
                  </li>
                </ul>

            </li>

            <li class="nav-item">
                <a href="{{route('peminjaman.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-database"></i>
                  <p>
                    PEMINJAMAN
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('pengembalian.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-database"></i>
                  <p>
                    PENGEMBALIAN
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-file"></i>
                  <p>
                    LAPORAN
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('buku.cetaklapbuku')}}" class="nav-link">
                          <i class="fa fa-book nav-icon"></i>
                          <p>Laporan Data Buku</p>
                        </a>
                      </li>
                    <li class="nav-item">
                      <a href="{{route('peminjaman.cetakpeminjaman')}}" class="nav-link">
                        <i class="fa fa-book nav-icon"></i>
                        <p>Laporan Peminjaman</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('pengembalian.cetakpengembalian')}}" class="nav-link">
                        <i class="fa fa-book nav-icon"></i>
                        <p>Laporan Pengembalian</p>
                      </a>
                    </li>

                  </ul>

              </li>



          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <main>
        {{ $slot }}
      </main>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="https://www.instagram.com/samlekom_boejank/" target="_blank">SB</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  @stack('modals')
  <!-- jQuery -->
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="/assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="/assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="/assets/plugins/moment/moment.min.js"></script>
  <script src="/assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="/assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/assets/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/assets/dist/js/pages/dashboard.js"></script>
  <!-- JS, Popper.js, and jQuery -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  @livewireScripts
  @yield('footer-scripts')
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
  <script src="//cdn.datatables.net/plug-ins/1.10.25/dataRender/ellipsis.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
  <style>
      div.dataTables_length select {
width: 100px;
      }
</style>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.data').DataTable({

        dom: 'Blfrtip',
      "buttons":[
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
            ],

        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "Semua"]
        ],

        "language": {
          //"order": [[ 1, "desc" ]],
          "decimal": "",
          "emptyTable": "Tidak ada data pada tabel ini",
          "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
          "infoEmpty": "Menampilkan 0 hingga 0 dari 0 data",
          "infoFiltered": "( Disaring dari _MAX_ total data)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Tampilkan _MENU_ data",
          "loadingRecords": "Memuat...",
          "processing": "Memproses...",
          "search": "Cari:",
          "zeroRecords": "Tidak ada data yang ditemukan",
          "paginate": {
            "first": "Pertama",
            "last": "Terakhir",
            "next": "Selanjutnya",
            "previous": "Sebelumnya"
          },
          "aria": {
            "sortAscending": ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
          }
        }

      });
    });


  </script>
</body>

</html>
