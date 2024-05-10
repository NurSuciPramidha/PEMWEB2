<?php
include_once('koneksi.php');

// tangkap data dari form
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

// buat query insert
$query = "INSERT INTO paramedik (nama, gender, tmp_lahir, tgl_lahir, telepon, alamat) VALUES ('$nama', '$gender', '$tmp_lahir', '$tgl_lahir', '$kategori', '$telepon', '$alamat')";

// eksekusi query
if ($dbh->query($query)){
    header('Location: pasien.php');
} else {
    echo "Gagal menyimpan data!!!";
}