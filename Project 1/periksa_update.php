<?php
include_once('koneksi.php');

// tangkap data dari form
$tanggal = $_POST['tanggal'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$tensi = $_POST['tensi'];

// buat query insert
$query = "UPDATE periksa SET tanggal='$tanggal', berat='$berat', tinggi='$tinggi', tensi='$tensi', keterangan='$keterangan' WHERE id='$id'";

// eksekusi query
if ($dbh->query($query)){
    header('Location: periksa.php');
} else {
    echo "Gagal menyimpan data!!!";
}