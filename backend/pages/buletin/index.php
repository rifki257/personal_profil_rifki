<?php
    include '../../partials/header.php';
    include '../../partials/sidebar.php';
    include '../../partials/navbar.php';

    $newsletters = "SELECT * FROM newsletters";
    $result = mysqli_query($connect, $newsletters) or die(mysqli_error($connect));
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
                            <tr class="text-capitalize text-center">
                                <th>no</th>
                                <th>email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no =1;
                            while($item =$result->fetch_object()):
                                ?>
                                <tr class="align-middle text-center">
                                    <td><?= $no?></td>
                                    <td><?= $item->email?></td>
                                  <td>
                                        <a href="../../actions/buletin/destroy.php?id=<?= $item->id?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Hapus</a>
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