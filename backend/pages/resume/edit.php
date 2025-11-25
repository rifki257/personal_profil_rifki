<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>ubah data resume</h5>
            </div>
            <div class="card-body text-capitalize">
                <?php
                include '../../actions/resume/show.php';
                ?>
                <form action="../../actions/resume/update.php?id=<?= $resume->id ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="date" class="form-label">Periode</label>
                        <input type="text" name="date" class="form-control" id="dateInput" required value="<?= $resume->date ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jobInput" class="form-label">job</label>
                        <input type="text" name="job" class="form-control" id="jobInput" required value="<?= $resume->job ?>">
                    </div>
                    <div class="mb-3">
                        <label for="placeInput" class="form-label">Sekolah</label>
                        <input type="text" name="place" class="form-control" id="placeInput" placeholder="masukkan code pos" required value="<?= $resume->place ?>">
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">description</label>
                        <textarea name="description" id="descriptionInput" class="form-control" placeholder="masukkan alamat" rows="5"><?= $resume->description ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="iconInput" class="form-label">Icon</label>
                        <input type="text" name="icon" id="iconInput" class="form-control" placeholder="Masukkan icon social media..." required value="<?= $resume->icon ?>">
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