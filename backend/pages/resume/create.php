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
                <h5>Tambah data about</h5>
            </div>
            <div class="card-body text-capitalize">
                <form action="../../actions/resume/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="dateInput" class="form-label">Periode</label>
                        <input type="text" name="date" class="form-control" id="dateInput"
                            placeholder="Masukan Nama...." required>
                    </div>

                    <div class="mb-3">
                        <label for="jobInput" class="form-label">job</label>
                        <input type="text" name="job" class="form-control" id="jobInput"
                            placeholder="Masukan Nama...." required>
                    </div>

                    <div class="mb-3">
                        <label for="placeInput" class="form-label">Sekolah</label>
                        <input type="text" name="place" class="form-control" id="placeInput"
                            placeholder="Masukan Kode place..." required>
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Masukan description"
                            rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="iconInput" class="form-label">Icon</label>
                        <input type="text" name="icon" id="iconInput" class="form-control" placeholder="Masukkan icon social media..." required>
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