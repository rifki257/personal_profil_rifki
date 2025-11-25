<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<div class="card-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-capitalize">detail data about</h5>
                </div>
                <div class="card-body text-capitalize">
                    <?php
                    include '../../actions/about/show.php';
                    ?>
                    <form>
                        <div class="mb-3 ">
                            <label for="nameInput" class="form-label ">Nama</label>
                            <input type="text" class="form-control text-capitalize" id="nameInput" value="<?= $about->name ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="bornInput" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="bornInput" value="<?= $about->born ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="zip_codeInput" class="form-label">Kode Pos</label>
                            <input type="number" class="form-control" id="zip_codeInput" value="<?= $about->zip_code ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailInput" value="<?= $about->email ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="phoneInput" class="form-label">No.Telfon</label>
                            <input type="text" class="form-control" id="phoneInput" value="<?= $about->phone ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="total_projectInput" class="form-label">Total Project</label>
                            <input type="number" class="form-control" id="total_projectInput" value="<?= $about->total_project ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="workInput" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control text-capitalize" id="workInput" value="<?= $about->work ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="addressInput" class="form-label">Alamat</label>
                            <textarea class="form-control text-capitalize" id="addressInput" rows="5" disabled><?= $about->address ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label ">description</label>
                            <textarea class="form-control " id="descriptionInput" rows="5" disabled><?= $about->description ?></textarea>
                        </div>
                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/about/<?= $about->image ?>" alt="Gambar Profil">
                        </div>
                        <a href="./index.php" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
                <?php
                include '../../partials/footer.php';
                include '../../partials/script.php';
                ?>