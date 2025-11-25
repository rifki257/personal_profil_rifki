<?php

include '../../app.php';
include './show.php'; // patch//

if (isset($_POST['tombol'])) {
    $name = escapeString($_POST['name']);
    $imageNew = $about->image;
    $storages = '../../../storages/about/';
    $born = escapeString($_POST['born']);
    $zip_code = escapeString($_POST['zip_code']);
    $email = escapeString($_POST['email']);
    $phone = escapeString($_POST['phone']);
    $total_project = escapeString($_POST['total_project']);
    $work = escapeString($_POST['work']);
    $address = escapeString($_POST['address']);
    $description = escapeString($_POST['description']);



    // buat cek apakah user mengupload gambar baru//
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time().' .png';

        // hapus gambar
        if (!empty($about->image) && file_exists($storages.$about->image)) {
            unlink($storages.$about->image);
        }
        // simpan gambar baru
        move_uploaded_file($imageOld, $storages.$imageNew);
    }
    // update sesuai id
    $qUpdate = "UPDATE abouts SET name='$name', image='$imageNew', born='$born', zip_code='$zip_code', email='$email', phone='$phone', total_project='$total_project', work='$work', address='$address', description='$description' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or exit(mysqli_error($connect));
    if ($result) {
        echo "
        <script>
            alert('data berhasil diubah')
            window.location.href='../../pages/about/index.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('data gagal diubah');
        window.location.href='../../pages/about/edit.php';
        </script>
        ";
    }
}
