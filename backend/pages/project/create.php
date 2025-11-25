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
                <h5 class="text-capitalize">Tambah data project</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/project/store.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="imageInput" class="form-label">pilih gambar</label>
                        <input type="file" name="image" class="form-control" id="imageInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="titleInput" class="form-label">title</label>
                        <input name="title" id="title" class="form-control" placeholder="Masukan judul" required>
                        <div class="mb-3">
                            <label for="jobInput" class="form-label">job</label>
                            <input type="text" name="job" class="form-control" id="jobInput"
                                placeholder="apa pekerjaanmu...." required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">category</label>
                            <select class="form-select" aria-label="Default select example" name="category" required>
                                <option selected>Open this select menu</option>
                                <option value="reallife">reallife</option>
                                <option value="screen">screen</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Masukan Description"
                            rows="5"></textarea>
                        <button type="submit" class="btn btn-success" name="tombol">Tambah</button>
                        <a href="./index.php" class="btn btn-secondary">Kembali</a>
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