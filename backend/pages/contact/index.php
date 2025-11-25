<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$contacts = "SELECT * FROM contacts";
$result = mysqli_query($connect, $contacts) or die(mysqli_error($connect));
?>

<!-- conntent -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="text-capitalize">Contact</h5>
            </div>
            <div class="card-body">
                <div class="tabel-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-capitalize">
                                <th>nomor</th>
                                <th>Nama</th>
                                <th>email</th>
                                <th>No. Telpon</th>
                                <th>Subjek</th>
                                <th>Pesan</th>
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
                                    <td class="text-capitalize"><?= $item->name ?></td>
                                    <td><?= $item->email ?></td>
                                    <td><?= $item->phone ?></td>
                                    <td class="text-capitalize"><?= $item->subject ?></td>
                                    <td class="text-capitalize"><?= $item->massage ?></td>

                                    <td>
                                        <a href="../../actions/contact/destroy.php?id=<?= $item->id ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Hapus</a>
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