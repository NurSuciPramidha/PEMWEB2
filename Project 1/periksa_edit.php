<?php
include_once('koneksi.php');

$id = $_GET['id'];
$periksa = $dbh->query("SELECT * FROM periksa WHERE id =$id")->fetch();

include_once('top.php');
include_once('menu.php');
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Pasien</h1>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="periksa_update.php" method="post">
        <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label">Tanggal Kunjungan</label>
            <div class="col-8">
                <input id="tanggal" name="tanggal" type="date" class="form-control" required="required" value="<?= $periksa['tanggal'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="berat" class="col-4 col-form-label">Berat Badan</label>

            <div class="col-8">
                <input id="berat" name="berat" type="double" class="form-control" required="required" value="<?= $periksa['berat'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label>
            <div class="col-8">
                <input id="tinggi" name="tinggi" type="double" class="form-control" required="required" value="<?= $periksa['tinggi'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tensi" class="col-4 col-form-label">Tensi</label>
            <div class="col-8">
                <input id="tensi" name="tensi" type="int" class="form-control" required="required" value="<?= $periksa['tensi'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once('bottom.php');
?>