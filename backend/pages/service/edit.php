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
        <h5>Ubah Data Social Media</h5>
      </div>
      <div class="card-body">
        <?php
        include '../../actions/service/show.php';
        ?>
        <form action="../../actions/service/update.php?id=<?= $service->id ?>" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="iconInput" class="form-label">Icon</label>
            <input type="text" name="icon" id="iconInput" class="form-control" placeholder="Masukkan icon social media..." required value="<?= $service->icon ?>">
          </div>
          <div class="mb-3">
            <label for="jobInput" class="form-label">Job</label>
            <input type="text" name="job" id="jobInput" class="form-control" placeholder="Masukkan job social media..." required value="<?= $service->job ?>">
          </div>
          <div class="mb-3">
            <label for="descriptionInput" class="form-label">description</label>
            <textarea name="description" id="descriptionInput" class="form-control" placeholder="masukkan alamat" rows="5"><?= $service->description ?></textarea>
          </div>
          <div class="mb-3">
            <img class="w-25" src="../../../storages/service/<?= $service->image ?>">
            <label for="imageInput" class="form-label"></label>
            <input type="file" name="image" class="form-control" id="imageInput">
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