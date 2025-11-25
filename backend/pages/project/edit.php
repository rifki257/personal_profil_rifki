<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="text-capitalize">ubah data project</h5>
            </div>
            <div class="card-body text-capitalize">
                <?php
                include '../../actions/project/show.php';
                ?>
                <form action="../../actions/project/update.php?id=<?= $project->id ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <img class="w-25" src="../../../storages/project/<?= $project->image ?>">
                        <label for="imageInput" class="form-label"></label>
                        <input type="file" name="image" class="form-control" id="imageInput">
                    </div>
                    <div class="mb-3">
                        <label for="titleInput" class="form-label">title</label>
                        <input type="text" name="title" class="form-control" id="titleInput" placeholder="masukkan nama" required value="<?= $project->title ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jobInput" class="form-label">job</label>
                        <input type="text" name="job" class="form-control" id="jobInput" required value="<?= $project->job ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">category</label>
                        <select class="form-select" aria-label="Default select example" name="category" required value="<?= $project->category ?>">
                            <option disabled <?= empty($project->category) ? 'selected' : '' ?>> pilih kategori</option>
                            <option value="reallife" <?= ($project->category == 'reallife') ? 'selected' : '' ?>>reallife</option>
                            <option value="screen" <?= ($project->category == 'screen') ? 'selected' : '' ?>>screen</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Description</label>
                        <textarea name="description" id="descriptionInput" class="form-control" placeholder="masukkan alamat" rows="5"><?= $project->description ?></textarea>
                    </div>

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