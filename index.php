<?php

require 'koneksi.php';

$kategories = query("SELECT id AS id_kategori, kategori FROM tabel_kategori ORDER BY kategori ASC");

$users = query("SELECT * FROM tabel_user");
$infoweb = query("SELECT * FROM tabel_info_web");

$getKuliner = query("SELECT id FROM tabel_kuliner");
$jlh_kuliner = count($getKuliner);
$jlh_kategori = count($kategories);
$jlh_user = count($users);
$jlh_info = count($infoweb);


?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dasboard - Admin Pages</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
  .abs {
    bottom: 0px;
    right: 4px;
  }
  </style>
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

        <div class="sidebar-brand-text mx-3 text-truncate"><?= $user["nama_user"] ?></div>
      </a>

      <!-- Divider -->
      <hr class=" sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
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
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-utensils"></i>
          <span>Data Kuliner</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="FormTambahKuliner.php">Tambah Kuliner</a>
            <a class="collapse-item" href="list_kuliner.php">List Kuliner</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-stream"></i>
          <span>Data Kategori</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="FormTambahKategori.php">Tambah Kategori</a>
            <a class="collapse-item" href="list_kategori.php">List Kategori</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
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
      <hr class="sidebar-divider">

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
            <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
          </div>

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Kuliner</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jlh_kuliner ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-utensils fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Total Kategori</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jlh_kategori ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-stream fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Total User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jlh_user ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Jumlah Informasi Web</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jlh_info ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8">
              <?php $ingfo = query("SELECT deskripsi_web, waktu FROM tabel_info_web ORDER BY waktu DESC LIMIT 2"); ?>
              <!-- Default Card Example -->
              <div class="card mb-4 shadow">
                <div class="card-header font-weight-bold">
                  INFORMASI WEBSITE
                </div>
                <div class="card-body px-2 pt-2 pb-0">
                  <?php foreach($ingfo AS $infoWeb) : ?>
                  <div class="card mb-2">
                    <div class="card-body text-truncate">
                      <?= $infoWeb["deskripsi_web"] ?>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
                <a href="list_info.php" class="ml-auto mr-3 mb-1 font-weight-bold"> . . . Lihat Detail</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
                </div>
                <div class="card-body p-0">
                  <table cellpadding="5" width="100%">
                    <tr class="bg-primary text-white">
                      <th class="text-center">No</th>
                      <th>Jenis Kategori</th>
                    </tr>
                    <?php
                     $no = 1;
                     if($jlh_kategori == 0) : ?>
                    <tr>
                      <td colspan="5" class="text-center">Data Not Available</td>
                    </tr>
                    <?php else: ?>
                    <?php foreach( $kategories as $kategori): ?>
                    <tr>
                      <td class="text-center font-weight-bold"><?= $no ?></td>
                      <td style="padding: 6px 50px 6px 10px;"><?= $kategori["kategori"] ?></td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <?php foreach($kategories AS $kate) : ?>
            <?php
            $identifier = $kate['id_kategori'];
            $kuliners = query("SELECT kuliner.id AS id_kuliner, kuliner.id_kategori, kuliner.nama AS nama_kuliner, kuliner.harga AS harga_kuliner, kategori.kategori AS kategori FROM tabel_kuliner AS kuliner INNER JOIN tabel_kategori AS kategori ON kuliner.id_kategori = kategori.id WHERE kuliner.id_kategori = $identifier ORDER BY kuliner.nama ASC");
            ?>
            <div class="col-lg-6">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Daftar <?= $kate['kategori'] ?></h6>
                </div>
                <div class="card-body p-0">
                  <table cellpadding="5" width="100%">
                    <tr class="bg-primary text-white">
                      <th style="text-align: center;">No</th>
                      <th>Nama Kuliner</th>
                      <th style="padding: 0 25px 0 25px;">Harga</th>
                    </tr>
                    <?php
                    $no = 1;
                     
                    if(count($kuliners) == 0) : ?>
                    <tr>
                      <td colspan="3" class="text-center">Belum Tersedia</td>
                    </tr>
                    <?php else: ?>
                    <?php foreach( $kuliners as $kuliner): ?>
                    <tr>
                      <td class="text-center font-weight-bold"><?= $no ?></td>
                      <td style="padding: 6px 50px 6px 10px;"><?= $kuliner["nama_kuliner"] ?></td>
                      <td style="padding: 0 25px 0 25px;">Rp
                        <?= FormatRupiah($kuliner["harga_kuliner"]) ?></td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                  </table>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
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