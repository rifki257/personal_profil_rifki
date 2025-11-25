<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$socmed = "SELECT * FROM socmeds";
$result = mysqli_query($connect, $socmed) or die(mysqli_error($connect));
?>

<!-- content -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-item-center justify-content-between">
                <h5>Table Socmed</h5>
                <a href="./create.php" class="btn btn-success">Tambah</a>
            </div>
            <div class="card">
                <div class="card-body text-capitalize">
                    <div class="tabel-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Ikon</th>
                                    <th>link</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($item = $result->fetch_object()):
                                ?>
                                    <tr class="align-middle">
                                        <td><?= $no ?></td>
                                        <td class="text-center"><i class="<?= $item->icon ?>" style="font-size: 65px"></i></td>
                                        <td class="text-truncate" style="max-width: 200px;"><?= $item->link ?></td>
                                        
                                        <td class="text-center align-middle">
                                            <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-primary">Ubah</a>
                                            <a href="../../actions/socmed/destroy.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Hapus</a>
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