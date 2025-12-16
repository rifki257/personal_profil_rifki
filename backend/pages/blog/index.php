<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$blogs = "SELECT * FROM blogs";
$result = mysqli_query($connect, $blogs) or die(mysqli_error($connect));
?>

<!-- conntent -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="text-capitalize">Blog</h5>
                <a href="./create.php" class="btn btn-success">Tambah</a>
            </div>
            <div class="card" style="width: max-content;">
                <div class="card-body">
                    <div class="tabel-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-capitalize text-center">
                                    <th>no</th>
                                    <th>Gambar</th>
                                    <th>pengarang</th>
                                    <th>tanggal</th>
                                    <th>keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($item = $result->fetch_object()):
                                ?>
                                    <tr class="align-middle text-center">
                                        <td><?= $no ?></td>
                                        <td>
                                            <img src="../../../storages/blog/<?= $item->image ?>" alt="Gambar" width="100" height="100">
                                        </td>
                                        <td><?= $item->author ?></td>
                                        <td><?= $item->date ?></td>
                                        <td class="text-capitalize text-truncate" style="max-width: 200px;"><?= $item->description ?></td>
                                        <td class="text-center align-middle" role="group">
                                            <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-primary">Ubah</a>
                                            <a href="./detail.php?id=<?= $item->id ?>" class="btn btn-secondary">Detil</a>
                                            <a href="../../actions/blog/destroy.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Hapus</a>
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