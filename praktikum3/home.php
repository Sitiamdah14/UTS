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
<body class="bg-info">
    <?php
    include_once 'atas.php';
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../praktikum3/nilai_siswa.php">Nilai Siswa</a></li>
              <li class="breadcrumb-item active">Template Dinamis</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<div class="p-3">
<div class="row">
<div class="col-8">
<h4>Pengertian PHP</h4>
<p style="text-align:justify;">PHP  (PHP: Hypertext Preprocessor) adalah sebuah bahasa pemrograman server side scripting yang
 bersifat open source. Sebagai sebuah scripting language, PHP menjalankan instruksi pemrograman 
 saat proses runtime. Hasil dari instruksi tentu akan berbeda tergantung data yang diproses.
 PHP merupakan bahasa pemrograman server-side, maka script dari PHP nantinya akan diproses 
 di server. Jenis server yang sering digunakan bersama dengan PHP antara lain Apache, Nginx, 
 dan LiteSpeed. Selain itu, PHP juga merupakan bahasa pemrograman yang bersifat open source. 
 Pengguna bebas memodifikasi dan mengembangkan sesuai dengan kebutuhan mereka. 
 Tentunya jika memiliki kemampuan coding yang baik, ya? </p>
 <h4>Fungsi PHP</h4>
 <p style="text-align:justify;">Fungsi PHP Secara umum, fungsi PHP adalah digunakan untuk pengembangan website. Baik website statis seperti 
situs berita yang tidak membutuhkan banyak fitur. Ataupun website dinamis seperti toko online 
dengan segudang fitur pendukung. Namun, penggunaan PHP tidak terbatas pada pengembangan website 
saja, lho. Karena fleksibilitasnya yang tinggi, PHP juga bisa digunakan untuk membuat aplikasi 
komputer sekalipun. Keren juga, ya?</p>
</div>

<div class="col-4">
<img src="../dist/img/php.jpg" alt="" width="95%"/>
<img src="../dist/img/php2.jpg" alt="" width="95%"/>
</div>
</div>
</div>
<?php
    require_once 'bawah.php';
?>

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
