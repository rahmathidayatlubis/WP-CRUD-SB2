<?php
$databaseName = "db_project_akhir";
$conn = mysqli_connect("localhost", "root", "", $databaseName);

// Fungsi query SELECT
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi FormatRupiah
function FormatRupiah($data){
    return number_format($data, 0, ',', '.');
}

// Fungsi tambah kuliner
function tambah($data){
    global $conn;
    $nama = htmlspecialchars($_POST['nama']);
    $nama = ucwords($nama);
    $kategori = htmlspecialchars($_POST['kategori']);
    $harga = htmlspecialchars($_POST['harga']);

    $query = "INSERT INTO tabel_kuliner VALUES ('', '$kategori','$nama', '$harga')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

// Fungsi hapus kuliner
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tabel_kuliner WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// Fungsi ubah/ edit kuliner
function ubah($data){
    global $conn;
    
    $id = $data["id"];
    $nama = htmlspecialchars($_POST['nama']);
    $nama = ucwords($nama);
    $kategori = htmlspecialchars($_POST['kategori']);
    $harga = htmlspecialchars($_POST['harga']);

    $query = "UPDATE tabel_kuliner SET nama = '$nama', id_kategori = '$kategori', harga = '$harga' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Fungsi tambah kategori
function tambahKategori($data){
    global $conn;
    $kategori = htmlspecialchars($_POST['kategori']);
    $kategori = ucwords($kategori);

    $query = "INSERT INTO tabel_kategori VALUES ('', '$kategori')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

// Fungsi ubah/ edit kategori
function ubahKategori($data){
    global $conn;

    $id = $data['id'];
    $kategori = htmlspecialchars($_POST['kategori']);
    $kategori = ucwords($kategori);

    $query = "UPDATE tabel_kategori SET kategori = '$kategori' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Fungsi hapus kategori
function hapusKategori($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tabel_kategori WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// Fungsi tambah user
function tambahUser($data){
    global $conn;

    $nama = htmlspecialchars($_POST['nama']);
    $password = htmlspecialchars($_POST['password']);
    $username = htmlspecialchars(trim(explode(" ", $nama)[0]));
    $username .= substr(uniqid(), 0, 4);
    $username = strtolower($username);

    $query = "INSERT INTO tabel_user VALUES ('', '$nama', '$username', '$password')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

// Fungsi update user
function updateUser($data){
    global $conn;
    $id = $data['id'];
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $query = "UPDATE tabel_user SET nama_user = '$nama', username = '$username', password = '$password' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Fungsi hapus user
function hapusUser($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tabel_user WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// Fungsi tambah info web
function tambahInfo($data){
    global $conn;

    $judul = htmlspecialchars($_POST['judul']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    $query = "INSERT INTO tabel_info_web VALUES ('', '$judul', '$deskripsi', NOW() )";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}
// Fungsi update info web
function updateInfo($data){
    global $conn;
    $id = $data['id'];
    $judul = htmlspecialchars($_POST['judul']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);

    $query = "UPDATE tabel_info_web SET judul = '$judul', deskripsi_web = '$deskripsi', waktu = NOW() WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// Fungsi hapus info web
function hapusInfo($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tabel_info_web WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>