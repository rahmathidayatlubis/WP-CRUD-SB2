<?php

require 'koneksi.php';

$id = $_GET['id'];
$aksi = $_GET['act'];

if($aksi == 'kuliner'){
    if( hapus($id) > 0){
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'list_kuliner.php';
        </script>
    ";
    } else {
        echo "
            <script>
                alert('data gagal dihapus!');
                document.location.href = 'list_kuliner.php';
            </script>
        ";
    }
} elseif ($aksi == 'kategori') {
    if( hapusKategori($id) > 0){
        echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href = 'list_kategori.php';
            </script>
        ";
        } else {
            echo "
                <script>
                    alert('data gagal dihapus!');
                    document.location.href = 'list_kategori.php';
                </script>
            ";
        }
} else{
    echo "
    <script>
        alert('gagal menghapus data');
        document.location.href = 'index.php';
    </script>";
}

?>