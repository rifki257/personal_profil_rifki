<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="text-capitalize">ubah data blog</h5>
            </div>
            <div class="card-body text-capitalize">
                <?php
                include '../../actions/blog/show.php';
                ?>
                <form action="../../actions/blog/update.php?id=<?= $blog->id ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="imageInput" class="form-label d-block">Gambar</label>
                        <img class="w-25" src="../../../storages/blog/<?= $blog->image ?>">
                        <input type="file" name="image" class="form-control" id="imageInput">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal</label>
                        <input type="date" name="date" class="form-control" id="dateInput" required value="<?= $blog->date ?>">
                    </div>
                    <div class="mb-3">
                        <label for="authorInput" class="form-label">Pengarang</label>
                        <input type="text" name="author" class="form-control" id="authorInput" placeholder="pengarang" required value="<?= $blog->author ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tittleInput" class="form-label">Judul</label>
                        <input type="text" name="tittle" class="form-control" id="tittleInput" placeholder="masukkan judul" required value="<?= $blog->tittle ?>">
                    </div>
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <textarea name="description" id="descriptionInput" class="form-control" placeholder="masukkan deskripsi" rows="5"><?= $blog->description ?></textarea>
                        <button type="submit" class="btn btn-success" name="tombol">Ubah</button>
                        <a href="./index.php" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>