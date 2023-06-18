<?php

require 'koneksi.php';

$ingfo = query("SELECT * FROM tabel_info_web ORDER BY id DESC");


if( isset($_POST['update']) ){
  if(updateInfo($_POST) > 0){
    echo "
          <script>
              alert('Data INFO WEB berhasil diubah!');
              document.location.href = 'list_info.php';
          </script>
      ";
  } else {
      echo "
      <script>
          alert('Data INFO WEB gagal diubah!');
          document.location.href = 'list_info.php';
      </script>
      ";
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

  <title>List Info Web - Admin Pages</title>

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
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="true" aria-controls="collapseTwo">
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

          <!-- Nav Item - Utilities Collapse Menu -->
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
          <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfoWeb"
              aria-expanded="true" aria-controls="collapseInfoWeb">
              <i class="fas fa-comments"></i>
              <span>Data Info Web</span>
            </a>
            <div id="collapseInfoWeb" class="collapse show" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="FormTambahInfo.php">Tambah Info Web</a>
                <a class="collapse-item bg-hoper" href="list_Info.php">List Info Web</a>
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
            <h1 class="h3 mb-0 text-gray-800">List Info Web</h1>
          </div>

          <div class="row">
            <?php foreach($ingfo AS $info) : ?>
            <div class="col-md-4 mt-3">
              <!-- Basic Card Example -->
              <div class="card position-relative">
                <div class="card-body">
                  <h5 class="card-title text-truncate"><?= $info['judul'] ?></h5>
                  <p class="card-text text-truncate"><?= $info['deskripsi_web'] ?></p>
                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editInfo<?= $info['id'] ?>">Edit
                    Info Web</a>
                </div>

                <!-- kode untuk menampilkan kapan info ditambah maupun di update -->
                <?php
                // Query untuk mengambil waktu kapan user mengupload postingan
                date_default_timezone_set('Asia/Jakarta');
                $diff_time = time() - strtotime($info['waktu']);

                if ($diff_time < 60) {
                  // Jika waktu posting masih kurang dari 1 menit yang lalu
                  $display_time = "$diff_time seconds ago";
                } else if ($diff_time < 3600) {
                    // Jika waktu posting sudah lebih dari 1 menit dan kurang dari 1 jam yang lalu
                    $min = floor($diff_time / 60);
                    $display_time = "$min minutes ago";
                } else if ($diff_time < 86400) {
                    // Jika waktu posting sudah lebih dari 1 jam dan kurang dari 1 hari yang lalu
                    $hour = floor($diff_time / 3600);
                    $min = floor(($diff_time % 3600) / 60);
                    $display_time = "$hour hours $min minutes ago";
                } else if ($diff_time < 604800) {
                    // Jika waktu posting sudah lebih dari 1 hari dan kurang dari 1 minggu yang lalu
                    $day = floor($diff_time / 86400);
                    $display_time = "$day days ago";
                } else {
                    // Jika waktu posting sudah lebih dari 1 minggu yang lalu
                    $week = floor($diff_time / 604800);
                    $display_time = "$week weeks ago";
                }
                ?>

                <div class="card-footer text-muted text-right py-2">
                  <p class="card-text"><small class="text-muted"><?= $display_time; ?></small></p>
                </div>
                <a href="delete_data.php?id=<?= $info['id'] ?>&act=info_web" class="position-absolute kanan-poll"
                  onclick="return confirm('Yakin Menghapus Informasi Ini ?');">
                  <i class="fas fa-2x fa-times-circle" style="color: #e74a3b;"></i>
                </a>

                <!-- Modal edit info web -->
                <div class="modal fade" id="editInfo<?= $info['id'] ?>" tabindex="-2" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <form id="editInfo" action="" method="post">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Info Web</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" name="id" value="<?= $info['id'] ?>">
                          <div class="mb-3">
                            <input type="text" name="judul" id="judul" placeholder="Masukkan judul" class="form-control"
                              value="<?= $info['judul'] ?>" autocomplete="off" required>
                          </div>
                          <div class="mb-4">
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"
                              required><?= $info['deskripsi_web'] ?></textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          <button type="submit" name="update" class="btn btn-success" href="#">Simpan Perubahan</button>
                        </div>
                      </div>
                    </form>
                  </div>
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