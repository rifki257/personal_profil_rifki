<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>


<!-- content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah data skill</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/skill/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="skillInput" class="form-label">Skill</label>
                        <input type="text" name="skill" class="form-control" id="skillInput" placeholder="Skillmu apa..." required>
                    </div>

                    <div class="mb-3">
                        <label for="percentInput" class="form-label">Persen</label>
                        <input type="number" name="percent" class="form-control" id="percentInput"
                            placeholder="0-100..." required>
                    </div>
                    <div class="mb-3">
                        <label for="imageInput" class="form-label">Pilih Gambar</label>
                        <input type="file" name="image" class="form-control" id="imageInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">description</label>
                        <textarea name="description"  class="form-control" id="descriptionInput" placeholder="Masukan description"
                            rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="tombol">Tambah</button>
                    <a href="./index.php" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>