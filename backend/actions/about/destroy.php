<?php

include '../../app.php';
include './show.php';

$storages = '../../../storages/about/';

// hapus gambar
if (!empty($about->image) && file_exists($storages.$about->image)) {
    unlink($storages.$about->image);
}

// hapus data
$qDelete = "DELETE FROM abouts WHERE id = '$about->id'";
$result = mysqli_query($connect, $qDelete) or exit(mysqli_error($connect));

// cek apakah data berhasil di hapus
if ($result) {
    echo "
        <script>
        alert('data berhasil dihapus');
        window.location.href='../../pages/about/index.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('data gagal dihapus');
        window.location.href='../../pages/about/index.php';
        </script>";
}
