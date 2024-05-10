<?php
include_once('koneksi.php');

// tangkap data dari form
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

// buat query insert
$query = "UPDATE paramedik SET nama='$nama', gender='$gender', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', kategori='$ketegori', telepon='$telepon', alamat='$alamat' WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)){
    header('Location: pasien.php');
} else {
    echo "Gagal menyimpan data!!!";
}