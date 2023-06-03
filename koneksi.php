<?php
$databaseName = "uts_rahmat";
$conn = mysqli_connect("localhost", "root", "", $databaseName);

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

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

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tabel_kuliner WHERE id = $id");

    return mysqli_affected_rows($conn);
}

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

function tambahKategori($data){
    global $conn;
    $kategori = htmlspecialchars($_POST['kategori']);
    $kategori = ucwords($kategori);

    $query = "INSERT INTO tabel_kategori VALUES ('', '$kategori')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function ubahKategori($data){
    global $conn;

    $id = $data['id'];
    $kategori = htmlspecialchars($_POST['kategori']);
    $kategori = ucwords($kategori);

    $query = "UPDATE tabel_kategori SET kategori = '$kategori' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusKategori($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tabel_kategori WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>