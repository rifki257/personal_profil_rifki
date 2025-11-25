<?php
    include '../../partials/header.php';
    include '../../partials/sidebar.php';
    include '../../partials/navbar.php';

    $service = "SELECT * FROM services";
    $result = mysqli_query($connect, $service) or die(mysqli_error($connect));
?>

<!-- content -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-item-center justify-content-between">
                <h5>Table service</h5>
                <a href="./create.php" class="btn btn-success">Tambah</a>
            </div>
            <div class="card-body text-capitalize">
                <div class="tabel-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr >
                                <th>Nomor</th>
                                <th>Ikon</th>
                                <th>Pekerjaan</th>
                                <th>keterangan</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while($item = $result->fetch_object()):
                            ?>
                                <tr class="align-middle">
                                    <td><?= $no ?></td>
                                    <td class="text-center"><i class="<?= $item->icon ?>" style="font-size: 65px"></i></td>
                                    <td><?= $item->job ?></td>
                                    <td class="text-truncate" style="max-width: 200px;"><?= $item->description ?></td>
                                    <td>
                                        <img src="../../../storages/service/<?= $item->image?>" alt="Gambar" width="100" height="100">
                                    </td>
                                    <td class="d-flex  gap-1">
                                        <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-primary">Ubah</a>
                                        <a href="../../actions/service/destroy.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Hapus</a>
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
<?php
    include '../../partials/footer.php';
    include '../../partials/script.php';
?>