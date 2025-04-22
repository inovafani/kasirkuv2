<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kasir Cafe Kasembon</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE3') ?>/plugins/fontawesome-free/css/all.min.css">
  
   <!-- DataTables -->
   <link rel="stylesheet" href="<?= base_url('AdminLTE3') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('AdminLTE3') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('AdminLTE3') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE3') ?>/dist/css/adminlte.min.css">

  <style>
    #example1_length {
  display: flex;
  align-items: center;
  gap: 10px; /* atur jarak antar elemen */
}

#example1_length .dt-buttons {
  margin-left: 10px; /* opsional tambahan jarak */
}
  </style>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('AdminLTE3') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Kasir Cafe</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('AdminLTE3') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('Admin'); ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Penjualan
              </p>
            </a>
          </li>
          <li class="nav-item  <?= $menu == 'masterdata' ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link  <?= $menu == 'masterdata' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Produk'); ?>" class="nav-link <?= $submenu == 'produk' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Kategori'); ?>" class="nav-link <?= $submenu == 'kategori' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Satuan'); ?>" class="nav-link <?= $submenu == 'satuan' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Satuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('User'); ?>" class="nav-link <?= $submenu == 'user' ? 'active' : '' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Admin/settings'); ?>" class="nav-link <?= $menu == 'settings' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-wrench"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $judul; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?= $judul; ?></a></li>
              <li class="breadcrumb-item active"><?= $subjudul; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

        <!-- Isi Konten -->


        <?php
            if($page){
                echo view($page);
            }
        ?>


        <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="<?= base_url('AdminLTE3') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('AdminLTE3') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('AdminLTE3') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('AdminLTE3') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('AdminLTE3') ?>/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('AdminLTE3') ?>/dist/js/adminlte.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": true, 
      "autoWidth": false,
      "paging": true,
      "info": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_length');
  });
</script>

<script>
          const ctx = document.getElementById('myChart');
          const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>


</body>
</html>
