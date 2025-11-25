<?php

include '../../app.php';
include './show.php';

// hapus data
$qDelete = "DELETE FROM skills WHERE id = '$skill->id'";
$result = mysqli_query($connect, $qDelete) or exit(mysqli_error($connect));

// cek apakah data berhasil di hapus
if ($result) {
    echo "
        <script>
        alert('data berhasil dihapus');
        window.location.href='../../pages/skill/index.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('data gagal dihapus');
        window.location.href='../../pages/skill/index.php';
        </script>";
}
