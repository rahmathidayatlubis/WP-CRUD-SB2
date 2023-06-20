<?php

require 'koneksi.php';

$getKat = query("SELECT * FROM tabel_kategori");

$count = count($getKat);

if ($count > 0) {

if( isset( $_POST['submit'])){
   
   if (tambah($_POST) > 0 ) {
      echo "<script>
              alert('Berhasil Menambahkan ".$_POST['nama']." Ke Menu!');
              document.location.href = 'list_kuliner.php';
          </script>";
  } else {
      echo "<script>
          alert('Data gagal ditambahkan!');
          document.location.href = 'list_kuliner.php';
      </script>";
  }     
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah Kuliner - Admin Pages</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">

  <script src="js/main.js"></script>
  <script>
  function focusFunction() {
    document.getElementById("nama").focus();
  }

  window.onload = function() {
    focusFunction();
  };
  </script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>

        <!-- User Aktif -->
        <?php include './Component/UserAktif.php'; ?>

        <div class="sidebar-brand-text mx-3 text-truncate"><?= $user["username"] ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-utensils"></i>
          <span>Data Kuliner</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item bg-hoper" href="FormTambahKuliner.php">Tambah Kuliner</a>
            <a class="collapse-item" href="list_kuliner.php">List Kuliner</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-stream"></i>
          <span>Kategori</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="FormTambahKategori.php">Tambah Kategori</a>
            <a class="collapse-item" href="list_kategori.php">List Kategori</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true"
          aria-controls="collapseUser">
          <i class="fas fa-users-cog"></i>
          <span>Data User</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="FormTambahUser.php">Tambah User</a>
            <a class="collapse-item" href="list_User.php">List User</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfoWeb"
          aria-expanded="true" aria-controls="collapseInfoWeb">
          <i class="fas fa-comments"></i>
          <span>Data Info Web</span>
        </a>
        <div id="collapseInfoWeb" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="FormTambahInfo.php">Tambah Info Web</a>
            <a class="collapse-item" href="list_Info.php">List Info Web</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include './Component/Topbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Kuliner</h1>
          </div>

          <div class="row d-flex justify-content-center">
            <div class="col-7">
              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header text-center">
                  Data Kuliner
                </div>
                <div class="card-body">
                  <form id="myForm" action="" method="post">
                    <div class="mb-3">
                      <input type="text" name="nama" id="nama" placeholder="Masukkan nama kuliner . . . "
                        class="form-control" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                      <?php $kategoris = query("SELECT * FROM tabel_kategori"); ?>
                      <select name="kategori" id="kategori" class="form-control">
                        <option value="">-- Kategori --</option>
                        <?php foreach($kategoris AS $kate) : ?>
                        <option value="<?= $kate['id'] ?>"><?= $kate["kategori"] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="mb-4">
                      <input type="text" name="harga" id="harga" placeholder="Masukkan harga" class="form-control"
                        autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                      <button type="submit" id="submitData" name="submit"
                        class="btn btn-success btn-block rounded-0">Submit
                        Data</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include './Component/Footer.php'; ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include './Component/ModalLogout.php'; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

<?php
} else {
  // Jika tabel kosong, tampilkan pesan kesalahan atau arahkan pengguna ke halaman lain
  echo "<script>alert('Isi Jenis Kategori Terlebih Dahulu.');
  document.location.href = 'index.php';
  </script>";
}
?>