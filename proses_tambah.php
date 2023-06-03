<?php

    require 'koneksi.php';
    // $aksi = $_GET['act'];

    if( isset($_POST['update']) ){
        $id = $_POST['id'];
        $aksi = $_GET['act'];
        $nama = htmlspecialchars($_POST['nama']);
        $harga = htmlspecialchars($_POST['harga']);
        
        if( $aksi == 'updateMakanan' ){
            $query = "UPDATE tabel_makanan SET nama ='$nama', harga = '$harga' WHERE id = $id";
            mysqli_query($conn, $query);
            echo '<script>alert("data berhasil ditambahkan");</script>';
            header("location:list_kuliner.php");
        }
    }

?>