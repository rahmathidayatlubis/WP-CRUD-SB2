<?php

session_start();
$uid = $_GET['uid'];

// set session sesuai user yang dipilih
$_SESSION['aktif_user'] = $uid;

// kode untuk kembali kehalaman dimana uid dikirimkan ( halaman sebelumnya )
if (isset($_SERVER['HTTP_REFERER'])) {
  header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
  header("Location: index.php");
}


?>