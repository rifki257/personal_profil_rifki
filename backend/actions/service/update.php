<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $icon = escapeString($_POST['icon']);
    $job = escapeString($_POST['job']);
    $description = escapeString($_POST['description']);
    $imageNew = $service->image;
    $storages = '../../../storages/service/';
}

    // buat cek apakah user mengupload gambar baru//
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time().' .png';

        // hapus gambar
        if (!empty($service->image) && file_exists($storages.$service->image)) {
            unlink($storages.$service->image);
        }
        // simpan gambar baru
        move_uploaded_file($imageOld, $storages.$imageNew);
    }
//update sesuai id
$qUpdate = "UPDATE services SET icon='$icon', job='$job', description='$description', image='$imageNew' WHERE id='$id'";

$result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
if ($result) {
    echo "
        <script>
            alert('data berhasil diubah')
            window.location.href='../../pages/service/index.php';
            </script>
            ";
} else {
    echo "
        <script>
        alert('data gagal diubah');
        window.location.href='../../pages/service/edit.php';
        </script>
        ";
}
