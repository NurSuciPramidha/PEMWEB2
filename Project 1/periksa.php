<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM periksa";
$periksa = $dbh->query($query);
?>

<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3>Periksa</h3>
        <a href="periksa_create.php" class="btn btn-primary ms-auto">+ Pasien</a>
    </div>
    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Tanggal Kunjungan</th>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th>Tensi</th>
            <th>Keterangan</th>
            <th>Id Pasien</th>
            <th>Id Dokter</th>
        </tr>

        <?php
        $no = 0;
        foreach ($periksa as $periksa) : ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $periksa['tanggal'] ?></td>
                <td><?= $periksa['berat'] ?></td>
                <td><?= $periksa['tinggi']?></td>
                <td><?= $periksa['tensi'] ?></td>
                <td><?= $periksa['keterangan'] ?></td>
                <td><?= $periksa['pasien_id'] ?></td>
                <td><?= $periksa['dokter_id'] ?></td>

                <td>
                    <a href="periksa_edit.php?id=<?= $periksa['id'] ?>" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="periksa_delete.php?id=<?= $periksa['id'] ?>" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>

        <?php endforeach ?>
    </table>

</div>

<?php
include_once('bottom.php');
?>