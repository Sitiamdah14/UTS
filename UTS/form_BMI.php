<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="../dist/img/logonf.png" alt="logo nf" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">STTT Nurul Fikri</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/amdah.jpeg" alt="amdah" class="brand-image img-circle elevation-3" style="opacity: .8">
        </div>
        <div class="info">
          <a href="#" class="d-block">Siti Amdah</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="../index.html" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../praktikum1/array_siswa.php" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>Praktikum 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../praktikum2/form_belanja.php" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>Praktikum 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Praktikum 3
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../praktikum3/home.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Template Dinamis</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../praktikum3/nilai_siswa.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Nilai Siswa</p>
                    </a>
                  </li>
                  </ul>
                </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Praktikum4
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../praktikum4/data_persegiPanjang.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Persegi Panjang</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../praktikum4/data_lingkaran.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Lingkaran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../praktikum4/nilai_mahasiswa.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Nilai Mahasiswa</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="../praktikum5/index.php" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>Praktikum 5</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UTS/form_BMI.php" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>UTS</p>
                </a>
              </li>
            </ul>
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
            <h1>Menghitung BMI</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../praktikum5/index.php">Praktikum 5</a></li>
              <li class="breadcrumb-item active">UTS</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col border-top border-dark pt-4">
        
            <form class="form-horizontal" method="POST" action="form_BMI.php">
            <div class="form-group row">
                <label for="tgl" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
                <div class="col-8">
                <input id="tgl" name="tgl" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
           
            <div class="form-group row">
                <label class="col-4">Gender</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="P"> 
                    <label for="gender_0" class="custom-control-label">Perempuan</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="L"> 
                    <label for="gender_1" class="custom-control-label">Laki-laki</label>
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
                <div class="col-8">
                <input id="bb" name="bb" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
                <div class="col-8">
                <input id="tb" name="tb" type="number" class="form-control">
                </div>
            </div> 
           
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <br/>
        </form>
        <?php
            include_once "class_BMIpasien.php";
            
            $tgl = $_POST['tgl'];
            $nama = $_POST['nama'];
            $gender = $_POST['gender'];
            $bb = $_POST['bb'];
            $tb = $_POST['tb'];
        ?>
        <table class="table table-striped"> 
            <thead>
                <tr class="text-center">
                    <th>No</th><th>Tanggal Periksa</th><th>Kode Pasien</th>
                    <th>Nama Pasien</th><th>Gender</th><th>Berat (kg)</th><th>Tinggi (cm)</th>
                    <th>Nilai BMI</th><th>Status BMI</th>
                  </tr>
            </thead>
            <tbody>
            <?php    
                $pasien1 = new BMIpasien ('2001-03-14','Pipin','P', 47, 160);
                $pasien2 = new BMIpasien ('1999-05-22','Tyas','P', 61.5, 155);
                $pasien3 = new BMIpasien ('1987-08-17','Rizal', 'L', 80.7, 200);
            
                $ar_pasien = [$pasien1,$pasien2,$pasien3];

                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                  if(empty($_POST["submit"])){
                    $new = new BMIpasien ($tgl,$nama,$gender,$bb,$tb);
                    array_push($ar_pasien, $new);
                  }
                }
                $nomor=1;
                foreach($ar_pasien as $obj){
                  echo'<tr class="text-center"><td>'.$nomor.'</td>';
                  echo '<td>'.$obj->tgl.'</td>';
                  echo '<td>'."B00".$nomor.'</td>';
                  echo '<td>'.$obj->nama.'</td>';
                  echo '<td>'.$obj->gender.'</td>';
                  echo '<td>'.$obj->bb.'</td>';
                  echo '<td>'.$obj->tb.'</td>';
                  echo '<td>'.$obj->nilai().'</td>';
                  echo '<td>'.$obj->status().'</td>';
                  echo '</tr>';
                  $nomor++;  

                } 
            ?>
            </tbody>
        </table>

</div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
