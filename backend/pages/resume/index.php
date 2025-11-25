<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$resumes = "SELECT * FROM resumes";
$result = mysqli_query($connect, $resumes) or die(mysqli_error($connect));
?>

<!-- conntent -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Resume</h5>
                <a href="./create.php" class="btn btn-success">Tambah</a>
            </div>
            <div class="card-body text-capitalize">
                <div class="tabel-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Periode</th>
                                <th>Pekerjaan</th>
                                <th>Sekolah</th>
                                <th>keterangan</th>
                                <th>ikon</th>
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
                                    <td><?= $item->date ?></td>
                                    <td class="text-capitalize"><?= $item->job ?></td>
                                    <td class="text-capitalize"><?= $item->place ?></td>
                                    <td class="text-capitalize text-truncate" style="max-width: 200px;"><?= $item->description ?></td>
                                    <td class="text-center"><i class="<?= $item->icon ?>" style="font-size: 65px"></i></td>
                                    <td class="text-center align-middle" role="group">
                                        <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-primary">Ubah</a>
                                        <a href="./detail.php?id=<?= $item->id ?>" class="btn btn-secondary">detail</a>
                                        <a href="../../actions/resume/destroy.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Hapus</a>
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