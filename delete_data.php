<?php

require 'koneksi.php';

$id = $_GET['id'];
$aksi = $_GET['act'];

if($aksi == 'kuliner'){
    if( hapus($id) > 0){
    echo "
        <script>
            alert('Data KULINER berhasil dihapus!');
            document.location.href = 'list_kuliner.php';
        </script>
    ";
    } else {
        echo "
            <script>
                alert('Data KULINER gagal dihapus!');
                document.location.href = 'list_kuliner.php';
            </script>
        ";
    }
} elseif ($aksi == 'kategori') {
    if( hapusKategori($id) > 0){
        echo "
            <script>
                alert('Data KATEGORI berhasil dihapus!');
                document.location.href = 'list_kategori.php';
            </script>
        ";
        } else {
            echo "
                <script>
                    alert('Data KATEGORI gagal dihapus!');
                    document.location.href = 'list_kategori.php';
                </script>
            ";
        }
} elseif ($aksi == 'user') {
    if( hapusUser($id) > 0){
        echo "
            <script>
                alert('Data USER berhasil dihapus!');
                document.location.href = 'list_info.php';
            </script>
        ";
        } else {
            echo "
                <script>
                    alert('Data USER gagal dihapus!');
                    document.location.href = 'list_user.php';
                </script>
            ";
        }
} elseif ($aksi == 'info_web') {
    if( hapusInfo($id) > 0){
        echo "
            <script>
                alert('Data INFO WEB berhasil dihapus!');
                document.location.href = 'list_info.php';
            </script>
        ";
        } else {
            echo "
                <script>
                    alert('Data INFO WEB gagal dihapus!');
                    document.location.href = 'list_info.php';
                </script>
            ";
        }
}else {
    echo "
    <script>
        alert('gagal menghapus Data');
        document.location.href = 'index.php';
    </script>";
}

?>