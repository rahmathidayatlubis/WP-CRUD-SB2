<?php

require 'koneksi.php';

$kuliners = query("SELECT kuliner.id AS id_kuliner, kuliner.id_kategori, kuliner.nama AS nama_kuliner, kuliner.harga AS harga_kuliner, kategori.kategori AS kategori FROM tabel_kuliner AS kuliner INNER JOIN tabel_kategori AS kategori ON kuliner.id_kategori = kategori.id ORDER BY kuliner.id DESC");
$kategories = query("SELECT * FROM tabel_kategori");
$users = query("SELECT * FROM tabel_user");

$jlh_kuliner = count($kuliners);

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>List Kuliner - Admin Pages</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>

        <!-- User Aktif -->
        <?php include './Component/UserAktif.php'; ?>

        <div class="sidebar-brand-text mx-3 text-truncate""><?= $user["nama_user"] ?></div>
            </a>

            <!-- Divider -->
            <hr class=" sidebar-divider my-0">

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
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-utensils"></i>
              <span>Data Kuliner</span>
            </a>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="FormTambahKuliner.php">Tambah Kuliner</a>
                <a class="collapse-item bg-hoper" href="list_kuliner.php">List Kuliner</a>
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
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="FormTambahKategori.php">Tambah Kategori</a>
                <a class="collapse-item" href="list_kategori.php">List Kategori</a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
              aria-expanded="true" aria-controls="collapseUser">
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
            <div id="collapseInfoWeb" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List Kuliner</h1>
          </div>

          <div class="row">
            <div class="col-lg-10">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Daftar Kuliner</h6>
                </div>
                <div class="card-body p-0">
                  <table cellpadding="5" width="100%">
                    <tr class="bg-primary text-white">
                      <th class="text-center">No</th>
                      <th>Nama Kuliner</th>
                      <th>Kategori</th>
                      <th style="padding: 0 25px 0 25px;">Harga</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                    <?php
                     $no = 1;
                     if($jlh_kuliner == 0) : ?>
                    <tr>
                      <td colspan="5" class="text-center">Data Not Available</td>
                    </tr>
                    <?php else: ?>
                    <?php foreach( $kuliners as $kuliner): ?>
                    <tr>
                      <td class="text-center font-weight-bold"><?= $no ?></td>
                      <td style="padding: 6px 50px 6px 10px;"><?= $kuliner["nama_kuliner"] ?></td>
                      <td style="padding: 6px 50px 6px 10px;"><?= $kuliner["kategori"] ?></td>
                      <td style="padding: 0 25px 0 25px;">Rp <?= FormatRupiah($kuliner["harga_kuliner"]) ?></td>
                      <td class="text-center">
                        <a href="FormUpdateKuliner.php?id=<?= $kuliner['id_kuliner'] ?>" class="btn btn-warning">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="delete_data.php?id=<?= $kuliner['id_kuliner'] ?>&act=kuliner" class="btn btn-danger"
                          onclick="return confirm('Yakin Menghapus <?= $kuliner['nama_kuliner']; ?> ?');">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                  </table>
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