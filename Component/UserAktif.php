<?php

session_start();

// jika tidak ada session ( kondisi default )
if ( !isset($_SESSION['aktif_user']) ){
  $user = query("SELECT * FROM tabel_user WHERE nama_user LIKE '%rahmat%'")[0];
} else {
  // set uidDari session aktif
  $uid = $_SESSION['aktif_user'];
  $user = query("SELECT * FROM tabel_user WHERE id = '$uid'")[0];
}

?>