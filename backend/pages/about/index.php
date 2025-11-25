<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$abouts = "SELECT * FROM abouts ";
$result = mysqli_query($connect, $abouts) or die(mysqli_error($connect));
?>

<!-- conntent -->
<div class="row">
    <div class="col-12">
        <div class="card" style="width: max-content;">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="text-capitalize">Tabel Tentang saya</h5>
                <a href="./create.php" class="btn btn-success">Tambah</a>
            </div>
            <div class="card" style="width: max-content;">
                <div class="card-body">
                    <div class="tabel-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-capitalize">
                                    <th>Nomor</th>
                                    <th>nama</th>
                                    <th>Gambar</th>
                                    <th>tanggal lahir</th>
                                    <th>keterangan</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($item = $result->fetch_object()):
                                ?>
                                    <tr class="align-middle">
                                        <td><?= $no ?></td>
                                        <td class="text-capitalize"><?= $item->name ?></td>
                                        <td>
                                            <img src="../../../storages/about/<?= $item->image ?>" alt="Gambar" width="100" height="100">
                                        </td>
                                        <td><?= $item->born ?></td>
                                        <td class="text-truncate" style="max-width: 200px;"><?= $item->description ?></td>
                                        <td  class="text-center align-middle " role="group">
                                            <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-primary">Ubah</a>
                                            <a href="./detail.php?id=<?= $item->id ?>" class="btn btn-secondary">Detil</a>
                                            <a href="../../actions/about/destroy.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>