<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>ubah data skill</h5>
            </div>
            <div class="card-body">
                <?php
                include '../../actions/skill/show.php';
                ?>
                <form action="../../actions/skill/update.php?id=<?= $skill->id ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="skillInput" class="form-label">Skill</label>
                        <input type="text" name="skill" class="form-control" id="skillInput" placeholder=" apa keahlianmu" required value="<?= $skill->skill ?>">
                    </div>
                    <div class="mb-3">
                        <label for="percentInput" class="form-label">Persen</label>
                        <input type="number" name="percent" class="form-control" id="percentInput" placeholder="paste link disini" required value="<?= $skill->percent ?>">
                    </div>
                    <div class="mb-3">
                        <label for="imageInput" class="form-label d-block">Gambar</label>
                        <img class="w-25" src="../../../storages/skill/<?=$skill->image?>">
                        <input type="file" name="image" class="form-control" id="imageInput">
                    </div>
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">description</label>
                        <textarea name="description" id="descriptionInput"  class="form-control" placeholder="masukkan description" rows="5"><?=$skill->description?></textarea>
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