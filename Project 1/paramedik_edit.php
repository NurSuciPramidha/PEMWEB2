<?php
include_once('koneksi.php');
$kelurahan = $dbh->query('SELECT * FROM kelurahan');

$id = $_GET['id'];
$pasien = $dbh->query("SELECT * FROM pasien WHERE id =$id")->fetch();

include_once('top.php');
include_once('menu.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Dokter</h1>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="paramedik_store.php" method="post">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $paramedik['nama'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-4 col-form-label">Gender</label>
            <div class="col-8">
                <input id="gender" name="gender" type="text" class="form-control" required="required" value="<?= $paramedik['gender'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required" value="<?= $paramedik['tmp_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required" value="<?= $paramedik['tgl_lahir'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="dokter_id" class="col-4 col-form-label">Kategori</label>
            <div class="col-8">
                <select class="custom-select" required="required" value="<?= $paramedik['kategori'] ?>">
                    <option value="">-- Pilih Poli --</option>
                    <option value="poli umum">Poli Umum</option>
                    <option value="poli gigi">Poli Gigi</option>
                    <option value="poli anak">Poli Anak</option>
                    <option value="poli PD">Poli Penyakit Dalam</option>
                    <option value="poli BU">Poli Bedah Umum</option>
                    <option value="poli mata">Poli Mata</option>
                    <option value="poli syaraf">Poli Syaraf</option>
                    <option value="poli kandungan">Poli Kandungan</option>
                    <option value="poli jantung">Poli Jantung</option>
                    <option value="farmasi">Farmasi</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="telepon" class="col-4 col-form-label">Telpon</label>
            <div class="col-8">
                <textarea id="telepon" name="telepon" type="int" cols="40" rows="3" class="form-control" required="required" value="<?= $paramedik['telepon'] ?>"></textarea>
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