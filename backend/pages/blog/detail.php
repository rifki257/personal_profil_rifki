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
                    <h5 class="text-capitalize">ubah data blog</h5>
                </div>
                <div class="card-body text-capitalize">
                    <?php
                    include '../../actions/blog/show.php';
                    ?>
                    <form>
                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/blog/<?= $blog->image ?>" alt="Gambar Profil">
                        </div>
                        <div class="mb-3">
                            <label for="dateInput" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="dateInput" value="<?= $blog->date ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="authorInput" class="form-label">Pengarang</label>
                            <input type="text" class="form-control" id="authorInput" value="<?= $blog->author ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="tittleInput" class="form-label">judul</label>
                            <input type="text" class="form-control" id="tittleInput" value="<?= $blog->tittle ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label">description</label>
                            <textarea class="form-control " id="descriptionInput" rows="5" disabled><?= $blog->description ?></textarea>
                        </div>
                        <a href="./index.php" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
                <?php
                include '../../partials/footer.php';
                include '../../partials/script.php';
                ?>