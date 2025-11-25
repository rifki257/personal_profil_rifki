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
                    <h5 class="text-capitalize">ubah data skill</h5>
                </div>
                <div class="card-body text-capitalize">
                    <?php
                    include '../../actions/skill/show.php';
                    ?>
                    <form>
                        <div class="mb-3">
                            <label for="skillInput" class="form-label">Kemampuan</label>
                            <input type="text" class="form-control" id="skillInput" value="<?= $skill->skill ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="percentInput" class="form-label">Persen</label>
                            <input type="number" class="form-control" id="percentInput" value="<?= $skill->percent ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <h6>Gambar</h6>
                            <img class="w-25" src="../../../storages/skill/<?= $skill->image ?>" alt="Gambar Profil">
                        </div>
                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label">description</label>
                            <textarea class="form-control " id="descriptionInput" rows="5" disabled><?= $skill->description ?></textarea>
                        </div>
                        <a href="./index.php" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
                <?php
                include '../../partials/footer.php';
                include '../../partials/script.php';
                ?>