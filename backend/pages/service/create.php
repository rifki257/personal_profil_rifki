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
        <h5>Tambah Social Media</h5>
      </div>
      <div class="card-body">
        <form action="../../actions/service/store.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="iconInput" class="form-label">Ikon</label>
            <input type="text" name="icon" id="iconInput" class="form-control" placeholder="Masukkan icon social media..." required>
          </div>
          <div class="mb-3">
            <label for="jobInput" class="form-label">Pekerjaan</label>
            <input type="text" name="job" id="jobInput" class="form-control" placeholder="Masukkan job social media..." required>
          </div>
          <div class="mb-3">
            <label for="descriptionInput" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" placeholder="Masukan keterangan"
              rows="5"></textarea>
          </div>
          <div class="mb-3">
            <label for="imageInput" class="form-label">Pilih gambar</label>
            <input type="file" name="image" class="form-control" id="imageInput" required>
          </div>

          <button type="submit" class="btn btn-primary" name="tombol">Simpan</button>
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