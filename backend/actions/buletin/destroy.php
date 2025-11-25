<?php
include '../../app.php';

// ambil id dari URL
$id = $_GET['id'] ?? null;

if ($id) {
    $qDelete = "DELETE FROM newsletters WHERE id = '$id'";
    $result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

    if($result){
        echo "
        <script>
        alert('data berhasil dihapus');
        window.location.href='../../pages/buletin/index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal dihapus');
        window.location.href='../../pages/buletin/index.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('ID tidak ditemukan');
    window.location.href='../../pages/buletin/index.php';
    </script>
    ";
}
?>
