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
                <h5 class="text-capitalize">tambah data about</h5>
            </div>
            <div class="card-body text-capitalize">
                <form action="../../actions/about/store.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="nameInput"
                            placeholder="Masukan Nama...." required>
                    </div>
                    <div class="mb-3">
                        <label for="imageInput" class="form-label">Pilih Gambar</label>
                        <input type="file" name="image" class="form-control" id="imageInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="bornInput" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="born" class="form-control" id="bornInput" required>
                    </div>
                    <div class="mb-3">
                        <label for="zip_codeInput" class="form-label">zip_code</label>
                        <input type="number" name="zip_code" class="form-control" id="zip_codeInput" placeholder="kode pos..." required>
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">email</label>
                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="@gmail.com..." required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">phone</label>
                        <input type="text" name="phone" class="form-control" id="phoneInput" placeholder="123456789101112..." required>
                    </div>
                    <div class="mb-3">
                        <label for="total_projectInput" class="form-label">total_project</label>
                        <input type="number" name="total_project" class="form-control" id="total_projectInput" placeholder="total project..." required>
                    </div>
                    <div class="mb-3">
                        <label for="workInput" class="form-label">Pekerjaan</label>
                        <input type="text" name="work" class="form-control" id="workInput"
                            placeholder="Masukan pekerjaan..." required>
                    </div>
                    <div class="mb-3">
                        <label for="addressInput" class="form-label">Alamat</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Masukan alamat"
                            rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="descriptionInput" class="form-label">description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Masukan keterangan"
                            rows="5"></textarea>
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