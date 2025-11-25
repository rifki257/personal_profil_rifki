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
                    <h5 class="text-capitalize">Ubah Data project</h5>
                </div>
                <div class="card-body text-capitalize">
                    <?php
                    include '../../actions/project/show.php';
                    ?>
                    <form>
                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/project/<?= $project->image ?>" alt="Gambar Profil">
                        </div>
                        <div class="mb-3">
                            <label for="titleInput" class="form-label">judul</label>
                            <input type="text" class="form-control text-capitalize" id="titleInput" value="<?= $project->title ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="jobInput" class="form-label">pekerjaan</label>
                            <input type="text" class="form-control text-capitalize" id="jobInput" value="<?= $project->job ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="categoryInput" class="form-label">category</label>
                            <input type="category" class="form-control text-capitalize" id="categoryInput" value="<?= $project->category ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label">description</label>
                            <textarea class="form-control text-capitalize" id="descriptionInput" rows="5" disabled><?= $project->description ?></textarea>
                        </div>
                        <a href="./index.php" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
                <?php
                include '../../partials/footer.php';
                include '../../partials/script.php';
                ?>