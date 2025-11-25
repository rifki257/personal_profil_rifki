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
                    <h5 class="text-capitalize">Ubah Data resume</h5>
                </div>
                <div class="card-body text-capitalize">
                    <?php
                    include '../../actions/resume/show.php';
                    ?>
                    <form>
                        <div class="mb-3">
                            <label for="dateInput" class="form-label">periode</label>
                            <input type="text" class="form-control text-capitalize" id="dateInput" value="<?= $resume->date ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="jobInput" class="form-label">pekerjaan</label>
                            <input type="text" class="form-control text-capitalize" id="jobInput" value="<?= $resume->job ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="iconInput" class="form-label">icon</label>
                            <input type="text" class="form-control text-capitalize" id="iconInput" value="<?= $resume->icon ?>" disabled>
                        </div>
                        
                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label">description</label>
                            <textarea class="form-control text-capitalize" id="descriptionInput" rows="5" disabled><?= $resume->description ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="iconInput" class="form-label">ikon</label>
                            <input type="text" class="form-control text-capitalize" id="iconInput" value="<?= $resume->icon ?>" disabled>
                        </div>
                        <a href="./index.php" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
                <?php
                include '../../partials/footer.php';
                include '../../partials/script.php';
                ?>