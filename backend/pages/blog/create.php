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
                <h5 class="text-capitalize">Tambah data blog</h5>
            </div>
            <div class="card-body">
                <form action="../../actions/blog/store.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label for="imageInput" class="form-label">Pilih gambar</label>
                        <input type="file" name="image" class="form-control" id="imageInput" required>
                    </div>

                    <div class="mb-3">
                        <label for="dateInput" class="form-label">Tanggal</label>
                        <input type="date" name="date" class="form-control" id="dateInput" required>
                    </div>

                    <div class="mb-3">
                        <label for="authorInput" class="form-label">Pengarang</label>
                        <input type="text" name="author" class="form-control" id="authorInput" placeholder="Nama pengarang..."  required>
                    </div>

                    <div class="mb-3">
                        <label for="tittleInput" class="form-label">Judul</label>
                        <input type="text" name="tittle" class="form-control" id="tittleInput"
                            placeholder="Masukan judul..." required>
                    </div>

                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">Deskripsi</label>
                        <input type="text" name="description" class="form-control" id="descriptionInput"
                            placeholder="Masukan description..." required>
                    </div>
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