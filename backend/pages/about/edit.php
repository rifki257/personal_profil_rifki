<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="text-capitalize">Ubah Data About</h5>
            </div>
            <div class="card-body text-capitalize">
                <?php
                include '../../actions/about/show.php';
                ?>
                <form action="../../actions/about/update.php?id=<?= $about->id ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="nameInput" placeholder="masukkan nama" required value="<?= $about->name ?>">
                    </div>
                    <div class="mb-3">
                        <label for="imageInput" class="form-label d-block">Gambar</label>
                        <img class="w-25" src="../../../storages/about/<?= $about->image ?>">
                        <input type="file" name="image" class="form-control" id="imageInput">
                    </div>
                    <div class="mb-3">
                        <label for="bornInput" class="form-label">Tanggal lahir</label>
                        <input type="date" name="born" class="form-control" id="bornInput" required value="<?= $about->born ?>">
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">email</label>
                        <input type="email" name="email" class="form-control" id="emailInput" required value="<?= $about->email ?>">
                    </div>
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">phone</label>
                        <input type="number" name="phone" class="form-control" id="phoneInput" required value="<?= $about->phone ?>">
                    </div>
                    <div class="mb-3">
                        <label for="total_projectInput" class="form-label">total_project</label>
                        <input type="number" name="total_project" class="form-control" id="total_projectInput" required value="<?= $about->total_project ?>">
                    </div>
                    <div class="mb-3">
                        <label for="zip_codeInput" class="form-label">kode pos</label>
                        <input type="number" name="zip_code" class="form-control" id="zip_codeInput" required value="<?= $about->zip_code ?>">
                    </div>
                    <div class="mb-3">
                        <label for="workInput" class="form-label">Pekerjaan</label>
                        <input type="text" name="work" class="form-control" id="workInput" placeholder="masukkan pekerjaan" required value="<?= $about->work ?>">
                    </div>
                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Alamat</label>
                        <textarea name="address" id="addressInput" class="form-control" placeholder="masukkan alamat" rows="5"><?= $about->address ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">description</label>
                        <textarea name="description" id="descriptionInput" class="form-control" placeholder="masukkan alamat" rows="5"><?= $about->description ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="tombol">Ubah</button>
                    <a href="./index.php" class="btn btn-secondary">Kembali</a>
            </div>
            </form>
        </div>
    </div>
</div>
</div>


<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>