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
        <form action="../../actions/socmed/store.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="iconInput" class="form-label">Icon</label>
            <input type="text" name="icon" id="iconInput" class="form-control" placeholder="Masukkan icon social media..."required>
          </div>
          <div class="mb-3">
            <label for="linkInput" class="form-label">Link</label>
            <input type="text" name="link" id="linkInput" class="form-control" placeholder="Masukkan link social media..." required>
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